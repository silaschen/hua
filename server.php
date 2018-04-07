<?php
$ws = new \swoole_websocket_server('0.0.0.0',8006);
//listen websocket connect
$ws->on('open',function($ws,$request){
		$GLOBALS['fd'][$request->fd]['id']=$request->fd;
		echo $request->fd."connecting";
});

$ws->on('message',function($ws,$frame){

	$data=$frame->data;
	// var_dump($data);
	$name=strstr($data,"#name#");
	$setname=str_replace("#name#",'',$name);

	if($name){
		$GLOBALS['fd'][$frame->fd]['name'] = $setname;
			echo 'setting name'.$setname.'\n';
	}else{
			$msg = $GLOBALS['fd'][$frame->fd]['name'].":{$frame->data}\n";
			var_dump($msg);
			echo "\n";
		foreach($ws->connections as $v){
			echo 'sending to'.$v.":--".$msg."\n";
			$ws->push($v,$msg);
		}
	}

});

$ws->on('close',function($ws,$fd){


		unset($ws->client[$fd-1]);

});
$ws->start();
