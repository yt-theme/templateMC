<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>图片外链工具_噬魂-网页模板</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="噬魂-网页模板MC网页配套模板平台-噬魂网络，为MC服主打造完美高逼格网页配套，带来不一样的体验，采用高防高速主机，为网站安全护航。噬魂网络创始于2015年，已有多年经验，" />
<meta name="keywords" content="我的世界,我的世界服务器,服务器,MC,噬魂网络,噬魂,minecraft,Minecraft" />
<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Flexslider -->
<link rel="stylesheet" href="css/flexslider.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
<link rel="stylesheet" id="theme-switch" href="css/style.css">
<!-- End demo purposes only -->
<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Loader -->
<div class="fh5co-loader"></div>
<!--Baidu display logo-->
<div class="dnone"><img width="121" src="images/nav-meiti.jpg" alt="logo" /></div>
<!--Baidu display logo END-->
<div id="fh5co-page">
  <section id="fh5co-header">
    <div class="container">
      <nav role="navigation">
        <ul class="pull-left left-menu">
              <li><a href="ydy.php" target="_blank">引导页模板</a></li> 
              <li><a href="gw.php" target="_blank">官网模板</a></li>
              <li><a href="pt.php" target="_blank">其他网页配套</a></li>
			  <li><a href="hd.php">平台活动区</a></li>
        </ul>
        <h1 id="fh5co-logo"><a href="./">噬魂网络<span>.</span></a></h1>
        <ul class="pull-right right-menu">
          <li><a href="zhuce.php">会员注册</a></li>
          <li class="fh5co-cta-btn"><a id="login" href="#" data-toggle="modal" data-target="#myModal">会员登录</a></li>
        </ul>
        <ul class="zhong dnone">
          <li><a href="./">返回首页</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- #fh5co-header -->
  <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(images/nav-meiti.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
      <div class="fh5co-intro no-js-fullheight">
        <div class="fh5co-intro-text">
          <div class="fh5co-center-position">
            <h2 class="animate-box">图片外链工具</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-learn-more animate-box"> <a href="#" class="scroll-btn"> <span class="text">上传图片</span> <span class="arrow"><i class="icon-chevron-down"></i></span> </a> </div>
  </section>
  <!-- END #fh5co-hero -->
  <section id="fh5co-projects">
    <div class="container">
    	
        <div class="col-md-12">
        <div class="form-group">
      <div id="msg" >
        <div id="loading_up" style=" display:none">
          <center>
            <img src="images/ajax-loader_1.gif" width="88" height="88" />
          </center>
          <center>
            正在上传，请稍后...
          </center>
        </div>
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
        <div id="success_up" class="dnone">
          <center>
            <!--<a href="" id="img-url" target="_blank" title="点此查看原图" rel="nofollow"><img src="" id="show_img" width="" height="" /></a>--> 
            <p><div class="alert alert-success">恭喜你，上传成功，URL地址为：</div></p>
			<p><input id="resurl" class="form-control" type="text"></p>
			<p><a href="" id="img-url" target="_blank" title="点此查看原图" rel="nofollow">点击预览图片</a></p>
			
          </center>
        </div>
      </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
      <div id="up">
        <form enctype="multipart/form-data" method="post" action="http://up.imgapi.com/" id="upform" style=" text-align:center">
          <input class="form-control" name="Token" id="token" value="40b96d087ebaf0bfce080287b306f4b8f39d7493:84hfN-W5sZvSLvOjCDAds45alF8=:eyJkZWFkbGluZSI6MTQ4Nzg5OTg3NSwiYWN0aW9uIjoiZ2V0IiwidWlkIjoiNTExOTE2IiwiYWlkIjoiMTI4MDUwMCIsImZyb20iOiJmaWxlIn0=" type="hidden">
          <p>
            <input class="form-control animate-box" type="file" name="file" id="file">
          </p>
          <input class="form-control" type="hidden" name="from" value="file">
          <input class="form-control" type="hidden" name="httptype" value="1">
          <input type="submit" id='btn' value="开始上传" class="btn btn-primary btn-block animate-box">
        </form>
      </div>
      </div>
	  
      <div class="col-md-12">
        <div class="form-group">
        	<p class="animate-box">&nbsp;使用方法：选择图片并点击开始上传后即可获得图片的外链地址，将获得的外链地址完整复制到模板生成页的输入框即可。</p>
            <p class="animate-box">&nbsp;注意：图片请选择模板适应的尺寸大小进行上传，图片尺寸偏大或过小都可能会使页面混乱，可制作多次测试。</p>
        </div>
        </div>
        </div>
    </div>
  </section>
  <!-- END #fh5co-projects -->
  <footer id="fh5co-footer">
    <div class="container">
      <div class="row row-bottom-padded-md">
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>模板分类</h3>
            <ul class="fh5co-links">
              <li><a href="ydy.php" target="_blank">引导页模板</a></li> 
              <li><a href="gw.php" target="_blank">官网模板</a></li>
              <li><a href="pt.php" target="_blank">其他网页配套</a></li>
			  <li><a href="hd.php" target="_blank">平台活动区</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>技术支持</h3>
            <ul class="fh5co-links">
              <li><a href="tupian.php" target="_blank">图片外链</a></li>
              <li><a href="yinyue.php" target="_blank">音乐外链</a></li>
              <li><a href="liuyan.php" target="_blank">留言反馈</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>关于我们</h3>
            <p>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=1103461896&site=qq&menu=yes" target="_blank" title="QQ号：1103461896">1103461896</a><br><br>
            E-mail：<a href="mailto:web@shihunwl.top">web@shihunwl.top</a>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-copyright animate-box">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="fh5co-left"><small>Copyright &copy; 2015-2018 <a href="./" target="_blank">噬魂-网页模板</a> All Rights Reserved.&nbsp;</small></p>
            <p class="fh5co-right"><small class="fh5co-right"><a>噬魂网络网页模板V1.2</a></small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END #fh5co-footer --> 
</div>
<!-- END #fh5co-page --> 
<!-- End demo purposes only --> 
<!-- VIP membership system --> 
<script src="js/vip.js"></script>
<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!-- tupian --> 
<script src="js/jquery.form.js"></script> 
<script src="js/embed.js"></script> 
<!-- jQuery Easing --> 
<script src="js/jquery.easing.1.3.js"></script> 
<!-- Bootstrap --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Waypoints --> 
<script src="js/jquery.waypoints.min.js"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js"></script> 
<!-- Magnific Popup --> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/magnific-popup-options.js"></script> 
<!-- For demo purposes only styleswitcher ( You may delete this anytime ) --> 
<script src="js/jquery.style.switcher.js"></script> 
<!-- Main JS (Do not remove) --> 
<script src="js/main.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script>
		$(function(){

			if ( $.cookie('layoutCookie') != '' ) {
				$('body').addClass($.cookie('layoutCookie'));
			}

			$('a[data-layout="boxed"]').click(function(event){
				event.preventDefault();
				$.cookie('layoutCookie', 'boxed', { expires: 7, path: '/'});
				$('body').addClass($.cookie('layoutCookie')); // the value is boxed.
			});

			$('a[data-layout="wide"]').click(function(event){
				event.preventDefault();
				$('body').removeClass($.cookie('layoutCookie')); // the value is boxed.
				$.removeCookie('layoutCookie', { path: '/' }); // remove the value of our cookie 'layoutCookie'
			});
		});
	</script>
<!-- 模态框（Modal） -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
   <div class="modal-dialog"> 
    <div class="modal-content logintc"> 
     <ul id="myTab" class="nav nav-tabs"> 
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
      <li class="active"> <a href="#gblogin" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>会员登录</a> </li> 
      <li><a href="#update" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>修改密码</a></li> 
     </ul> 
     <div id="myTabContent" class="tab-content"> 
      <div class="tab-pane fade in active" id="gblogin"> 
       <div class="modal-body"> 
        <div class="row"> 
         <form method="post" action="plugin/vip.php"> 
          <input type="hidden" name="login" value="1" /> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入登录账号" required /> 
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="password" name="password" type="password" class="form-control" placeholder="请输入登录密码" maxlength="30" required /> 
           </div> 
          </div> 
		  <div class="col-md-12"> 
           <div class="form-group"> 
			<label class="baoliu">
			<input type="checkbox" name="loginbl">登入保留一星期 
			</label>
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input type="button" class="btn btn-default" onclick="window.open('zhuce.php','_blank')" value="注册账户" /> 
            <input type="submit" class="btn btn-primary" value="立即登录" /> 
           </div> 
          </div> 
         </form> 
        </div> 
       </div> 
      </div> 
      <div class="tab-pane fade" id="update"> 
       <div class="modal-body"> 
        <div class="row"> 
         <form method="post" action="plugin/vip.php"> 
          <input type="hidden" name="update" value="1" /> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入账号" required /> 
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="password" name="password" type="password" class="form-control" placeholder="请输入旧密码" maxlength="30" required /> 
           </div> 
          </div> 
		  <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="newpassword" name="newpassword" type="password" class="form-control" placeholder="请输入新密码" maxlength="30" required /> 
			<span class="help-block text-center">（小提示：密码忘记将无法找回，请慎重设置。）</span>
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input type="submit" class="btn btn-primary" value="立即修改" /> 
           </div> 
          </div> 
         </form> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="modal-footer"> 
      <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button> 
     </div> 
    </div> 
   </div> 
  </div>
</body>
</html>
