<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
			<title>封禁管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="description" content="" />
		<meta name="author" content="Frostcast" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/core.css" />
		<link rel="stylesheet" type="text/css" href="css/theme.css" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    		<!--[if lt IE 9]>
      			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    		<![endif]-->
			</head>
<body>
	<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
		<div class="container">
		    <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-nav-collapse">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="glyphicon glyphicon-th-large"></span>
		    </button>
		    <a class="navbar-brand" href="index.php">封禁管理系统</a>
		  </div>
		  <div class="collapse navbar-collapse navbar-nav-collapse">
		    <ul class="nav navbar-nav">
								<li class="active"><a href="index.php">首页</a></li>
								<li ><a href="index.php?action=servers">数据统计</a></li>
						    </ul>
		    			  </div>
		</div>
	</nav>
<div id="container" class="container">
<div class="jumbotron">
	<div class="row">
		<div class="col-lg-6">
			<h1>用户状态</h1>
			<form action="index.php" method="get" class="form-horizontal" id="search">
		        <div class="input-group">
				    <div class="input-group-btn">
				        <button id="player" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">搜索玩家 <span class="caret"></span></button>
						<ul class="dropdown-menu">
						  <li id="ip"><a href="#">搜索IP</a></li>
						</ul>
					</div>
					<input type="text" name="player" class="form-control" placeholder="通过用户名搜索">
			    </div>
			<input type="hidden" value="0" name="server" />				<div class="form-actions">
									<input type="hidden" name="action" value="searchplayer" />
					<div class="btn-group">
						<button type="submit" class="btn btn-primary">搜索</button>
						<button type="button" class="btn btn-primary" id="viewall">显示全部</button>
					</div>
									</div>
		    </form>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-jumbotron">
				<div class="panel-body">
							<p>
						<span>

						<span class="glyphicon glyphicon-info-sign"></span> 						封禁管理系统
						</span><br />

						 
通过本系统，你可以方便地查看玩家被处罚的时间、原因。

					</p>
							<span>
						<span class="glyphicon glyphicon-globe"></span> 
						封禁记录					</span>
					<div class="list-group pastbans">
										</div>
						</div>
			</div>
		</div>
	</div>
</div>

		<h1></h1>
		<div class="row">
			<div class="col-lg-4">
				<h3>最新封禁玩家</h3>
				<ul class="nav nav-tabs nav-stacked"><li><span class="label label-info">无</span></li>
				</ul>
			</div>
			<div class="col-lg-4">
				<h3>最新禁言玩家</h3>
				<ul class="nav nav-tabs nav-stacked"><li><span class="label label-info">无</span></li>
				</ul>
			</div>
			<div class="col-lg-4">
				<h3>最新警告玩家</h3>
				<ul class="nav nav-tabs nav-stacked"><li><span class="label label-info">无</span></li>
				</ul>
			</div>
		</div>			<hr>
			<footer>
				<p class="pull-left">Copyright ©  2015 - 2018 噬魂网络 All Rights Reserved &mdash; <a href="index.php?action=admin" target="_blank" style="color:inherit;"><span class="glyphicon glyphicon-dashboard"></span></a></p>
				<!-- 请勿删除版权信息！否则你将违反软件发布许可证！ -->
				<p class="pull-right">Power By <a href="http://template.him.ink" target="_blank">
					噬魂网络
				</a></p>
			</footer>
		</div> <!-- /container -->
		<script src="//template.mc66.xyz/pt_jfpt/js/excanvas.js"></script>
		<script src="http://cdn.bootcss.com/jquery/1.8.3/jquery.min.js"></script>

		<!-- Add jQuery plugins below -->

		<script src="//template.mc66.xyz/pt_jfpt/js/bootstrap.min.js"></script>
		<script src="http://cdn.bootcss.com/jquery-validate/1.9.0/jquery.validate.min.js"></script>
		<script src="//template.mc66.xyz/pt_jfpt/js/heartcode-canvasloader-min.js"></script>
		<script src="//template.mc66.xyz/pt_jfpt/js/jquery.countdown.min.js"></script>
		<script src="//template.mc66.xyz/pt_jfpt/js/jquery.tablesorter.min.js"></script>
		<script src="//template.mc66.xyz/pt_jfpt/js/jquery.tablesorter.widgets.min.js"></script>
		<script src="//template.mc66.xyz/pt_jfpt/js/jquery.tablesorter.pager.min.js"></script>
				<script src="//template.mc66.xyz/pt_jfpt/js/core.js"></script>
		
					<script type="text/javascript">
						if (top.location != self.location) { top.location = self.location.href; }
					</script>		<script type="text/javascript">
			$(function() {
				$(".col-lg-4 button[rel='popover']").popover({trigger: 'hover', placement: 'left'});
				$("#search li").click(function(e) {
					var s = $(this);
					if(s.attr("id") == 'ip') {
						var player = $("#player");
						$("#ip").attr('id', 'player').find("a").text('用户名');
						player.attr('id', 'ip').html('IP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="caret"></span>');
						$("#search input[type=text]").attr('placeholder', '请输入IP地址');
						$("#search input[name=action]").attr('value', 'searchip');
					} else {
						var ip = $("#ip");
						$("#player").attr('id', 'ip').find("a").text('IP');
						ip.attr('id', 'player').html('用户名 <span class="caret"></span>');
						$("#search input[type=text]").attr('placeholder', '请输入玩家用户名');
						$("#search input[name=action]").attr('value', 'searchplayer');
					}
				});
				$("#viewall").click(function() {
					var server = $("#search input[name=server]:checked").val();
					
					 if(typeof server === 'undefined')
						server = 0;
					
					window.location.href = 'index.php?action='+$("#search input[name=action]").val()+'&server='+server+'&player=%25';
				});
			});
		</script>
	</body>
</html>