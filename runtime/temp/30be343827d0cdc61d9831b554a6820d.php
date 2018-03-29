<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:54:"/var/www/hua/application/index/view/admin/addblog.html";i:1522335065;s:51:"/var/www/hua/application/index/view/admin/base.html";i:1522329957;s:51:"/var/www/hua/application/index/view/admin/head.html";i:1522332036;s:51:"/var/www/hua/application/index/view/admin/left.html";i:1522331628;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="/public/static/com/AdminLTE/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="/public/static/com/AdminLTE/css/AdminLTE.css">
<link rel="stylesheet" href="/public/static/com/AdminLTE/css/skins/skin-red.css">
<!-- jQuery 2.1.4 -->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/public/static/com/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="/public/static/com/common.js"></script>
<style type="text/css">
/*loading*/
#mask{position: fixed;z-index: 999999;top: 0;bottom: 0;left: 0;right: 0;display: none;}
#mask .loading{padding: 10px 15px;background: #333;opacity: 0.75;text-align: center;color: #FFF;line-height: 23px;position: fixed;left:0;right: 0;bottom: 0;top: 0;width: 120px;height: 65px;z-index: 999999;margin: auto;border-radius: 4px;}
</style>
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="#" target='_blank' class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><i class='fa fa-television'></i></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><i class='fa fa-television'></i><?php echo \think\Config::get('SITE'); ?></span>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="public/static/res/admin.png" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">user</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="public/static/res/admin.png" class="img-circle" alt="User Image">
              <p>
                asd
                <small>上次登录：wqewq</small>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="" class="btn btn-default btn-flat">修改密码</a>
              </div>
              <div class="pull-right">
                <a href="" onclick="return confirm('确定退出登录？');" class="btn btn-default btn-flat">退出系统</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

  <!-- Left side column. contains the logo and sidebar -->
  <?php if(\think\Session::get('login_cinema_status') != 1): ?>
  <aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li><a href=""><i class="fa fa-bar-chart"></i> <span>管理概况</span></a></li>


        <li><a href="<?php echo url('Index/admin/flowerlist'); ?>">flower</a></li>
        <!-- <li><a href="<?php echo url('Index/admin/bloglist'); ?>">news管理</a></li>
        <li><a href="<?php echo url('Index/admin/noticelist'); ?>">公告管理</a></li>
        <li><a href="<?php echo url('Index/admin/userlist'); ?>">用户管理</a></li>
           <li><a href="<?php echo url('Index/admin/likelist'); ?>">点赞记录</a></li> -->



    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<if condition="$eq egt '0' OR $eq neq ''">
<script type="text/javascript">
if(!isNaN('<?php echo $eq; ?>')){
  $(".sidebar-menu > li").eq(<?php echo $eq; ?>).addClass('active');
}else{
  $(".sidebar-menu > li").each(function(){
    var txt = $.trim($(this).children('a').text());
    if(txt == '<?php echo $eq; ?>'){
      $(this).addClass('active');
      return;
    }
  });
}
</script>
</if>

  <?php endif; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
    
  <link rel="stylesheet" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/css/jquery.fileupload.css">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">添加/编辑花卉</h3><a href="<?php echo url('admin/flowerlist'); ?>" class='btn btn-default btn-xs pull-right'>返回列表</a>
    </div><!-- /.box-header -->
    <div class="box-body">
         <form method="POST" id='form'>
            <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
            <div class='form-group'>
              <label>花卉名称：</label>
              <input type='text' name='name' class='form-control' value="<?php echo $info['name']; ?>">
            </div>
<input type="number" name="type" value="1">
  <div classs="form-group">
		<label>类型</label>
		<select class="form-control" name="cate">
			<option value='1'>室内花卉</option>
			<option value='2'>室外花卉</option>
		</select>
	</div>

<br>
            <div class='form-group'>
              <label>花卉大图：</label>
                <a href="javascript:$('#cover').val('');$('.showcover').html('');" onclick="return confirm('确定清除封面？');" class='pull-right'>清除封面</a> <br>
                  <button type='button' class='btn btn-success btn-sm fileinput-button'><i class="glyphicon glyphicon-picture"></i> <small>推荐尺寸 400*300 点击上传</small><input  id="uploadcover" type="file" name="files" accept="image/*" ></button>
                    <div id="progress" class="progress">
                        <div class="progress-bar progress-bar-success"></div>
                    </div>
                    <div id="files" class="files">
                    </div>
                    <div class='showcover'>
                      <?php if($info['cover'] != ''): ?>
                          <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/<?php echo $info['cover']; ?>">
                      <?php endif; ?>
                    </div>
                <input class='hide' name='cover' id='cover' value="<?php echo $info['cover']; ?>">
            </div>


            <div class="form-group">
                <label>价格</label>
                <input type="number" name="price" class="form-control" value="<?php echo $info['price']; ?>">
            </div>


            <div class="form-group">
                <label>level</label>
                <input type="number" name="level" class="form-control" value="<?php echo $info['level']; ?>">
            </div>

            <div class="form-group">
                <label>stock</label>
                <input type="number" name="stock" class="form-control" value="<?php echo $info['stock']; ?>">
            </div>






         </form>
    </div><!-- /.box-body -->
    <div class="box-footer clearfix">
      <button type="button" onclick="saveart();" class="btn btn-success pull-right saveart">确定</button>
    </div>
  </div>

<script type="text/javascript">

function saveart(){
  if(vr('name') == ''){
    alert('请填写name!');
  }else{
    $(".saveart").addClass('disabled');
    $.post(location.href,$('#form').serialize(),function(data){

          alert(data.msg);
          if(data['code']==1){
            // location.href = "<?php echo url('Admin/essaylist'); ?>";
          }

    },'JSON');
  }
}
</script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/vendor/jquery.ui.widget.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/load-image.all.min.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/canvas-to-blob.min.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/jquery.iframe-transport.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload-process.js"></script>
<script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/com/jQuery-File-Upload-9.9.3/js/jquery.fileupload-image.js"></script>
<script type="text/javascript">
$(function(){
    $('#uploadcover').fileupload({
        url: "<?php echo url('Common/upload'); ?>",
        dataType: 'JSON',
        acceptFileTypes: 'jpg,png,gif,jpeg,bmp',
      maxFileSize: 8000000, // 800kb
      disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator && navigator.userAgent),
        imageMaxWidth: 400, //自动裁剪保持该宽度
        // imageMaxHeight: 300,
        // imageCrop: true,
        done: function (e, data) {
          console.log(data);
          if(data.result.ret == 1){

              $("input[name='cover']").val(data.result.file);
              $(".showcover").html("<img src='/"+data.result.file+"'>");
            }else{
              // alert(data.result.msg);
            }
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

});
</script>

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">值得信赖的移动互联网开发服务商!</div>
    <!-- Default to the left -->
    <a  target='_blank'>&copy; </a>
  </footer>
</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="/public/static/com/AdminLTE/js/app.min.js"></script>
<div id="mask"><div class='loading'></div></div>
</body>
</html>
