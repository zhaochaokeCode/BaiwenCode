<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>GAMENOLL后台管理系统</title>
		<meta name="keywords" content="gamenoll" />
		<meta name="description" content="gamenoll" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/admin/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/admin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

	
		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/admin/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/admin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/admin/js/ace-extra.min.js"></script>
		<script src="/Public/admin/js/jquery.js"></script> 


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/admin/js/html5shiv.js"></script>
		<script src="/Public/admin/js/respond.min.js"></script>
		<![endif]-->
        <style type="text/css">
		.pagelist{ text-align:center; padding:7px 0;}
		.pagelist a{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; background:#fff; color:#6185a2;}
		.pagelist span{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; color:#6185a2; color:#fff; background:#6185a2;}
        </style>

	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="/admin.php/Index" class="navbar-brand">
						<small>
							<i class="icon-home"></i>
							GAMENOLL后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class=" icon-desktop "></i>
								<span><?php echo ($_SERVER['REMOTE_ADDR']); ?></span>
							</a>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/<?php echo ($_SESSION['master']['avatar']); ?>" alt="<?php echo ($_SESSION['master']['username']); ?>'s Photo" />
								<span class="user-info">
									<small>你好,</small>
									<?php echo ($_SESSION['master']['username']); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<!-- <li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li> -->

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Login/logout',"'id'=$id");?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button onclick="javascript:window.open('/Index');" class="btn btn-success"  title="访问网站首页">
								<i class="icon-home"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button onclick="location.href='/admin.php/Website'" class="btn btn-danger" title="网站管理">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li>
							<a href="/admin.php/Index/index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 管理控制台 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/User/add.html">
										<i class="icon-double-angle-right"></i>
										添加用户
									</a>
								</li>

								<li>
									<a href="/admin.php/User/index.html">
										<i class="icon-double-angle-right"></i>
										用户列表
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-group"></i>
								<span class="menu-text"> 管理员组 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Manage/add.html">
										<i class="icon-double-angle-right"></i>
										添加管理员
									</a>
								</li>
								<li>
									<a href="/admin.php/Manage/index.html">
										<i class="icon-double-angle-right"></i>
										管理员列表
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-lock"></i>
								<span class="menu-text"> 权限管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Rule/add.html">
										<i class="icon-double-angle-right"></i>
										添加规则
									</a>
								</li>
								<li>
									<a href="/admin.php/Rule/index.html">
										<i class="icon-double-angle-right"></i>
										规则列表
									</a>
								</li>

								<li>
									<a href="/admin.php/Group/add.html">
										<i class="icon-double-angle-right"></i>
										添加组管理
									</a>
								</li>
								<li>
									<a href="/admin.php/Group/index.html">
										<i class="icon-double-angle-right"></i>
										组列表
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class=" icon-bullhorn "></i>
								<span class="menu-text"> 新闻管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
                                <li>
									<a href="/admin.php/News/add.html">
										<i class="icon-double-angle-right"></i>
										添加新闻
									</a>
								</li>
								<li>
									<a href="/admin.php/News/index.html">
										<i class="icon-double-angle-right"></i>
										新闻列表
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-credit-card"></i>
								<span class="menu-text"> 充值管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Pay/index.html">
										<i class="icon-double-angle-right"></i>
									    充值列表
									</a>
								</li>

								
							</ul>
						</li>

						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-comments"></i>
								<span class="menu-text"> FAQ管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/Faq/add.html">
										<i class="icon-double-angle-right"></i>
										添加FAQ
									</a>
								</li>
								<li>
									<a href="/admin.php/Faq/index.html">
										<i class="icon-double-angle-right"></i>
										FAQ列表
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-comments-alt"></i>
								<span class="menu-text"> 客服管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/admin.php/question/index.html">
										<i class="icon-double-angle-right"></i>
										问题列表
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-cog"></i>
								<span class="menu-text"> 轮播图管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/Playpic/add.html">
										<i class="icon-double-angle-right"></i>
										添加轮播图
									</a>
								</li>
								<li>
									<a href="/admin.php/Playpic/index.html">
										<i class="icon-double-angle-right"></i>
										轮播图列表
									</a>
								</li>										
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-cog"></i>
								<span class="menu-text"> 游戏管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/admin.php/Games/add.html">
										<i class="icon-double-angle-right"></i>
										添加游戏
									</a>
								</li>
								<li>
									<a href="/admin.php/Games/index.html">
										<i class="icon-double-angle-right"></i>
										游戏列表
									</a>
								</li>
								<li>
									<a href="/admin.php/Games/server_add.html">
										<i class="icon-double-angle-right"></i>
										添加游戏服务器
									</a>
								</li>
								<li>
									<a href="/admin.php/Games/server.html">
										<i class="icon-double-angle-right"></i>
										游戏服务器列表
									</a>
								</li>	
								<li>
									<a href="/admin.php/Raiders/raiders_add.html">
										<i class="icon-double-angle-right"></i>
										添加游戏介绍
									</a>
								</li>
								<li>
									<a href="/admin.php/Raiders/raiders.html">
										<i class="icon-double-angle-right"></i>
										游戏介绍列表
									</a>
								</li>	
								<li>
									<a href="/admin.php/Games/role_all.html">
										<i class="icon-double-angle-right"></i>
										游戏角色列表
									</a>
								</li>									
							</ul>
						</li>

					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				
	<div class="main-content">
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>

			<ul class="breadcrumb">
				<li>
					<i class="icon-home home-icon"></i>
					<a href="#">首页</a>
				</li>

				<!-- <li>
					<a href="#">新闻管理</a>
				</li>
				<li class="active">添加新闻</li> -->
			</ul><!-- .breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="搜索 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="icon-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- #nav-search -->
		</div>

		<div class="page-content">
			<div class="page-header">
				<h1>
					游戏管理
					<small>
						<i class="icon-double-angle-right"></i>
						添加游戏介绍
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->

					<form action="/admin.php/Raiders/raiders_add" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > 标题 </label>

							<div class="col-sm-9">
								<input type="text" name="title" id="form-field-1" placeholder="标题" class="col-xs-10 col-sm-5" style="margin-top: 0px; margin-bottom: 0px; width:350px;" required />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > 类别 </label>

							<div class="col-sm-5">
								<!-- <select name="type" class="form-control" id="form-field-select-1" style="width:350px;">
									<option value="通知">通知</option>
									<option value="活动">活动</option>
									<option value="维护">维护</option>
									<option value="升级">升级</option>
								</select> -->
								<input type="radio" name="type" value="ゲーム紹介" style="width:40px;" required/>ゲーム紹介
								<input type="radio" name="type" value=">初心者ガイド" style="width:40px;" required/>初心者ガイド
								<input type="radio" name="type" value="ゲームガイド" style="width:40px;" required/>ゲームガイド
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > 所属游戏 </label>

							<div class="col-sm-5">
								<!-- <select name="type" class="form-control" id="form-field-select-1" style="width:350px;">
									<option value="通知">通知</option>
									<option value="活动">活动</option>
									<option value="维护">维护</option>
									<option value="升级">升级</option>
								</select> -->
								<?php if(is_array($games)): foreach($games as $key=>$games): ?><input type="radio" name="belong" value="<?php echo ($games["g_id"]); ?>" style="width:40px;" required/><?php echo ($games["g_name"]); endforeach; endif; ?>
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 新闻内容 </label>
							<div class="col-sm-9">
							<textarea name="content" class="form-control" id="form-field-8" placeholder="新闻内容......" style="margin-top: 0px; margin-bottom: 0px; height: 150px; width:350px;"></textarea>
							</div>
						</div> -->
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 游戏介绍 </label>
							<div class="col-sm-9">

								<div class="form-group" style="width:700px; padding-left:9px;">
							    <!-- 加载编辑器的容器 -->
							    <script id="container" name="content" type="text/plain" style="height:300px;">
							        游戏介绍......
							    </script>
							    <!-- 配置文件 -->
							    <script type="text/javascript" src="/Public/admin/ue/ueditor.config.js"></script>
							    <!-- 编辑器源码文件 -->
							    <script type="text/javascript" src="/Public/admin/ue/ueditor.all.js"></script>
							    <!-- 实例化编辑器 -->
							    <script type="text/javascript">
							        var ue = UE.getEditor('container');
							    </script><br>
							    	<!-- <input type="radio" name="display[]" value="0">显示 &nbsp;
									<input type="radio" name="display[]" value="1">不显示 -->	
								</div>

							</div>
						</div>
						<div class="space-4"></div>
						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<input class="btn btn-info" type="submit" name="submit" value="添加">
									<!-- <i class="icon-ok bigger-110"></i>
									添加 -->
								</input>

								&nbsp; &nbsp; &nbsp;
								<button class="btn" type="reset" name="reset">
									<!-- <i class="icon-undo bigger-110"></i> -->
									重置
								</button>
							</div>
						</div>
					</form>
					<!-- <div class="hr hr-24"></div> -->
						
					</div><!-- PAGE CONTENT ENDS -->
				</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div><!-- /.main-content -->

				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!--<script src="/Public/admin/js/jquery-2.0.3.min.js"></script>-->
		<script src="/Public/admin/js/jquery-2.0.3.min.js"></script>
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/Public/admin/js/jquery-1.10.2.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/Public/admin/js/bootstrap.min.js"></script>
		<script src="/Public/admin/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/Public/admin/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/Public/admin/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/admin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/admin/js/jquery.slimscroll.min.js"></script>
		<script src="/Public/admin/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/Public/admin/js/jquery.sparkline.min.js"></script>
		<script src="/Public/admin/js/flot/jquery.flot.min.js"></script>
		<script src="/Public/admin/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/Public/admin/js/flot/jquery.flot.resize.min.js"></script>
		

		<!-- ace scripts -->

		<script src="/Public/admin/js/ace-elements.min.js"></script>
		<script src="/Public/admin/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			
			
			
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
			
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) 
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				
			
			})
		</script>
		<script src="/Public/js/birthday.js"></script>
		<script>  
			$(function () {
				$.ms_DatePicker({
			            YearSelector: ".sel_year",
			            MonthSelector: ".sel_month",
			            DaySelector: ".sel_day"
			    });
				$.ms_DatePicker();
			}); 
		</script> 
		<script>
		    var MenuFocus = function () {

		    var sidebarActive = function (sidebar, pathname) {
		        var current = sidebar.find('li a[href*="' + pathname + '"]');

		        if (current.length) {
		            current = current.eq(0);
		            var parents = current.eq(0).parents('li');
		            var breadcrumb_first = $('.breadcrumbs > ul.breadcrumb > li:eq(0)');
		            parents.each(function() {
		                var active_a = $(this).children('a')
		                var href = active_a.attr('href');
		                var text = active_a.text();
		                var element = $('<li>' + text + '>')
		                breadcrumb_first.after(element);
		            });
		            // alert(parents.length);
		            current.parents('li').addClass('active open');
		            current.parent('li').removeClass('open');

		        }else {
		            var paramArr = pathname.split('/');
		            paramArr.pop();
		            sidebarActive(sidebar, paramArr.join('/'));
		        }
		    };

		    var navTabActive = function (nav_tab, pathname) {
		        var current = nav_tab.find('li a[href*="' + pathname + '"]');

		        if (current.length) {
		            current = current.eq(0);
		            current.attr('href', 'javascript:;')
		            var focus = current.parents('li');
		            focus.addClass('active');
		            focus.removeClass('hidden');

		            var breadcrumb = $('.breadcrumbs > ul.breadcrumb');
		            var active = $(focus.prop('outerHTML'));
		            active.html(active.text());
		            breadcrumb.append(active);
		        }else {
		            var paramArr = pathname.split('/');
		            paramArr.pop();
		            navTabActive(nav_tab, paramArr.join('/'));
		        }
		    };

		    var subNavTabActive = function (sub_nav_tab, pathname) {
		        var current = sub_nav_tab.find('li a[href*="' + pathname + '"]');

		        if (current.length) {
		            current = current.eq(0);
		            current.attr('href', 'javascript:;')
		            var focus = current.parents('li');
		            focus.addClass('active');
		            focus.removeClass('hidden');

		            var breadcrumb = $('.breadcrumbs > ul.breadcrumb');
		            var active = $(focus.prop('outerHTML'));
		            active.html(active.text());
		            breadcrumb.append(active);
		        }else {
		            var paramArr = pathname.split('/');
		            paramArr.pop();
		            subNavTabActive(sub_nav_tab, paramArr.join('/'));
		        }
		    };

		    return {

		        init: function () {
		            var pathname = window.location.pathname;

		            var sidebar = $('#sidebar > ul.nav');
		            if (sidebar.length) {
		                sidebarActive(sidebar, pathname);
		            }

		            var nav_tab = $('.tabbable > ul.nav');
		            if (nav_tab.length) {
		                navTabActive(nav_tab, pathname);
		            }

		            var sub_nav_tab = $('.sub-tabbable > ul.nav');
		            if (sub_nav_tab.length) {
		                subNavTabActive(sub_nav_tab, pathname);
		            }
		        },

		    };

		}();

		jQuery(document).ready(function() {
		    MenuFocus.init();
		});

		</script>
	</body>
</html>