import socket
import base64
import hashlib
import struct
import threading
clients=[]
server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.bind(('0.0.0.0',5005))
server.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)    # 断开连接口立即可用端口号
server.listen(15)
print("server is running...")
# 报文解码
# data是字节 s.recv(1024)那个
def decode(data):
    if not len(data):
        return False
    length = data[1] & 127
    if length == 126:
        mask = data[4:8]
        raw = data[8:]
    elif length == 127:
        mask = data[10:14]
        raw = data[14:]
    else:
        mask = data[2:6]
        raw = data[6:]
    ret = ''
    for cnt, d in enumerate(raw):
        ret += chr(d ^ mask[cnt%4])
    ret = base64.b64decode(ret) # base64 解码部分
    ret = str(ret,'utf-8')      # base64 解码部分
    return ret

# 报文编码
def encode(data):  
    data = base64.b64encode(data.encode('utf-8'))   # base64 编码部分
    data = str(data,'utf-8')                        # base64 编码部分
    data=str.encode(data)
    head = b'\x81'

    if len(data) < 126:
        head += struct.pack('B', len(data))
    elif len(data) <= 0xFFFF:
        head += struct.pack('!BH', 126, len(data))
    else:
        head += struct.pack('!BQ', 127, len(data))
    return head+data

# 等待对应客户的数据
def waitData(clientSocket,addressInfo):
    while True:
        print(len(clients))
        data = decode(clientSocket.recv(1024))
        print('recv:'+ data)
        data = 'server hi:'+data
        # clientSocket.sendall(encode(data))
        for thisclient in clients:
            try:
                thisclient.send(encode(data))
            except Exception as e:
                clients.remove(thisclient)

while True:
    clientSocket, addressInfo = server.accept()
    print("new client getting...")
    receivedData = str(clientSocket.recv(2048))

    entities = receivedData.split("\\r\\n")

    Sec_WebSocket_Key = None
    for i in entities:
        if i[:19] == 'Sec-WebSocket-Key: ':
            Sec_WebSocket_Key = i[19:]+ '258EAFA5-E914-47DA-95CA-C5AB0DC85B11'

    if Sec_WebSocket_Key != None:
        clients.append(clientSocket)
        print("key:", Sec_WebSocket_Key)
        response_key = base64.b64encode(hashlib.sha1(bytes(Sec_WebSocket_Key, encoding="utf8")).digest())
        response_key_str = str(response_key)
        response_key_str = response_key_str[2:30]
        response_key_entity = "Sec-WebSocket-Accept: " + response_key_str +"\r\n"
        clientSocket.send(bytes("HTTP/1.1 101 Web Socket Protocol Handshake\r\n", encoding="utf8"))
        clientSocket.send(bytes("Upgrade: websocket\r\n", encoding="utf8"))
        clientSocket.send(bytes(response_key_entity, encoding="utf8"))
        clientSocket.send(bytes("Connection: Upgrade\r\n\r\n", encoding="utf8"))
        print("send shake data...")
        #create new thread to oprate this client
        t = threading.Thread(target=waitData,args=(clientSocket,addressInfo))
        t.start()
