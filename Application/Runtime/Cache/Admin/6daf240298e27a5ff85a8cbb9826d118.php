<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>GAMENOLL后台管理系统</title>
		<meta name="keywords" content="gamenoll" />
		<meta name="description" content="gamenoll" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/15combo/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/15combo/Public/admin/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/15combo/Public/admin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

	
		<!-- ace styles -->

		<link rel="stylesheet" href="/15combo/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/15combo/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/15combo/Public/admin/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/15combo/Public/admin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/15combo/Public/admin/js/ace-extra.min.js"></script>
		<script src="/15combo/Public/admin/js/jquery.js"></script> 


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/15combo/Public/admin/js/html5shiv.js"></script>
		<script src="/15combo/Public/admin/js/respond.min.js"></script>
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
					<a href="/15combo/admin.php/Index" class="navbar-brand">
						<small>
							<i class="icon-home"></i>
							三生三世十里桃花
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
								<img class="nav-user-photo" src="/15combo/Public/<?php echo ($_SESSION['master']['avatar']); ?>" alt="<?php echo ($_SESSION['master']['username']); ?>'s Photo" />
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
							<button onclick="javascript:window.open('/15combo/Index');" class="btn btn-success"  title="访问网站首页">
								<i class="icon-home"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button onclick="location.href='/15combo/admin.php/Website'" class="btn btn-danger" title="网站管理">
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
							<a href="/15combo/admin.php/Index/index.html">
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
									<a href="/15combo/admin.php/User/add.html">
										<i class="icon-double-angle-right"></i>
										添加用户
									</a>
								</li>

								<li>
									<a href="/15combo/admin.php/User/index.html">
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
									<a href="/15combo/admin.php/Manage/add.html">
										<i class="icon-double-angle-right"></i>
										添加管理员
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Manage/index.html">
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
									<a href="/15combo/admin.php/Rule/add.html">
										<i class="icon-double-angle-right"></i>
										添加规则
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Rule/index.html">
										<i class="icon-double-angle-right"></i>
										规则列表
									</a>
								</li>

								<li>
									<a href="/15combo/admin.php/Group/add.html">
										<i class="icon-double-angle-right"></i>
										添加组管理
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Group/index.html">
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
									<a href="/15combo/admin.php/News/add.html">
										<i class="icon-double-angle-right"></i>
										添加新闻
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/News/index.html">
										<i class="icon-double-angle-right"></i>
										新闻列表
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-credit-card"></i>
								<span class="menu-text">资料管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/15combo/admin.php/profession/index.html">
										<i class="icon-double-angle-right"></i>
									    职业管理
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/strategy/index.html">
										<i class="icon-double-angle-right"></i>
									    攻略管理
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/talent/index.html">
										<i class="icon-double-angle-right"></i>
									    天赋管理
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Assistant/index.html">
										<i class="icon-double-angle-right"></i>
									    副职业管理
									</a>
								</li>				
							</ul>
						</li>		
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-comments"></i>
								<span class="menu-text"> 影音管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/15combo/admin.php/View/add.html">
										<i class="icon-double-angle-right"></i>
										上传视频
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Faq/index.html">
										<i class="icon-double-angle-right"></i>
										职业视频
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Faq/index.html">
										<i class="icon-double-angle-right"></i>
										攻略视频
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Faq/index.html">
										<i class="icon-double-angle-right"></i>
										天赋视频
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Faq/index.html">
										<i class="icon-double-angle-right"></i>
										副职业视频
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
									<a href="/15combo/admin.php/question/index.html">
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
									<a href="/15combo/admin.php/Playpic/add.html">
										<i class="icon-double-angle-right"></i>
										添加轮播图
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Playpic/index.html">
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
									<a href="/15combo/admin.php/Games/add.html">
										<i class="icon-double-angle-right"></i>
										添加游戏
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Games/index.html">
										<i class="icon-double-angle-right"></i>
										游戏列表
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Games/server_add.html">
										<i class="icon-double-angle-right"></i>
										添加游戏服务器
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Games/server.html">
										<i class="icon-double-angle-right"></i>
										游戏服务器列表
									</a>
								</li>	
								<li>
									<a href="/15combo/admin.php/Raiders/raiders_add.html">
										<i class="icon-double-angle-right"></i>
										添加游戏介绍
									</a>
								</li>
								<li>
									<a href="/15combo/admin.php/Raiders/raiders.html">
										<i class="icon-double-angle-right"></i>
										游戏介绍列表
									</a>
								</li>	
								<li>
									<a href="/15combo/admin.php/Games/role_all.html">
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
								<a href="#">FAQ管理</a>
							</li>
							<li class="active">FAQ列表</li> -->
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
								FAQ管理
								<small>
									<i class="icon-double-angle-right"></i>
									FAQ列表
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<!-- <th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th> -->
														<th>ID</th>
														<th>标题</th>
														<th>内容</th>
														<th>操作</th>
													</tr>
												</thead>

												<tbody>
												<?php if(is_array($data)): foreach($data as $key=>$faq): ?><tr>
														<!-- <td class="center">
															<label>
																<input type="checkbox" name="ids[]" class="ace" />
																<span class="lbl"></span>
															</label>
														</td> -->

														<td><?php echo ($faq["id"]); ?></td>
														<td><?php echo ($faq["title"]); ?></td>
														<td style="width:600px;"><?php echo ($faq["content"]); ?></td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<!-- <a class="blue" href="#">
																	<i class="icon-zoom-in bigger-130"></i>
																</a> -->

																<a class="green" href="/15combo/admin.php/Faq/mod/id/<?php echo ($faq["id"]); ?>.html">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red" href="/15combo/admin.php/Faq/del/id/<?php echo ($faq["id"]); ?>.html">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">

																		<li>
																			<a href="/15combo/admin.php/Faq/mod/id/<?php echo ($faq["id"]); ?>.html" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="/15combo/admin.php/Faq/del/id/<?php echo ($faq["id"]); ?>.html" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr><?php endforeach; endif; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div style="float:right;margin-right:20px;" class="pagelist"><?php echo ($page); ?></div>
								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>

															<th>
																<i class="icon-time bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="icon-remove"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="icon-double-angle-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="icon-double-angle-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">


					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="/15combo/Public/admin/assets/js/jquery-2.0.3.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.10.2.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/15combo/Public/admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/15combo/Public/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/15combo/Public/admin/assets/js/bootstrap.min.js"></script>
		<script src="/15combo/Public/admin/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

<!-- 		<script src="/15combo/Public/admin/assets/js/jquery.dataTables.min.js"></script>
		<script src="/15combo/Public/admin/assets/js/jquery.dataTables.bootstrap.js"></script> -->

		<!-- ace scripts -->

		<!-- <script src="/15combo/Public/admin/assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script> -->

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>

				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!--<script src="/15combo/Public/admin/js/jquery-2.0.3.min.js"></script>-->
		<script src="/15combo/Public/admin/js/jquery-2.0.3.min.js"></script>
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/15combo/Public/admin/js/jquery-1.10.2.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/15combo/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/15combo/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/15combo/Public/admin/js/bootstrap.min.js"></script>
		<script src="/15combo/Public/admin/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/15combo/Public/admin/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/15combo/Public/admin/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/15combo/Public/admin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/15combo/Public/admin/js/jquery.slimscroll.min.js"></script>
		<script src="/15combo/Public/admin/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/15combo/Public/admin/js/jquery.sparkline.min.js"></script>
		<script src="/15combo/Public/admin/js/flot/jquery.flot.min.js"></script>
		<script src="/15combo/Public/admin/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/15combo/Public/admin/js/flot/jquery.flot.resize.min.js"></script>
		

		<!-- ace scripts -->

		<script src="/15combo/Public/admin/js/ace-elements.min.js"></script>
		<script src="/15combo/Public/admin/js/ace.min.js"></script>

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
		<script src="/15combo/Public/js/birthday.js"></script>
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