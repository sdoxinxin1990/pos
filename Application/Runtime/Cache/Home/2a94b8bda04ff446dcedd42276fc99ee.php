<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<title>中汇支付辅助系统</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />

<!--[if lt IE 9]>

    <script src='/POS/assets/javascripts/html5shiv.js' type='text/javascript'></script>

    <![endif]-->

<link rel="stylesheet" type="text/css" href="/POS/Public/default.css" />

<link href='/POS/assets/stylesheets/bootstrap/bootstrap.css' media='all' rel='stylesheet' type='text/css' />

<link href='/POS/assets/stylesheets/bootstrap/bootstrap-responsive.css' media='all' rel='stylesheet' type='text/css' />

<!-- / jquery ui -->

<link href='/POS/assets/stylesheets/jquery_ui/jquery-ui-1.10.0.custom.css' media='all' rel='stylesheet' type='text/css' />

<link href='/POS/assets/stylesheets/jquery_ui/jquery.ui.1.10.0.ie.css' media='all' rel='stylesheet' type='text/css' />

<!-- / switch buttons -->

<link href='/POS/assets/stylesheets/plugins/bootstrap_switch/bootstrap-switch.css' media='all' rel='stylesheet' type='text/css' />

<!-- / xeditable -->

<link href='/POS/assets/stylesheets/plugins/xeditable/bootstrap-editable.css' media='all' rel='stylesheet' type='text/css' />

<link href='/POS/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css' media='all' rel='stylesheet' type='text/css' />

<!-- / wysihtml5 (wysywig) -->

<link href='/POS/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css' media='all' rel='stylesheet' type='text/css' />

<!-- / jquery file upload -->

<link href='/POS/assets/stylesheets/plugins/jquery_fileupload/jquery.fileupload-ui.css' media='all' rel='stylesheet' type='text/css' />

<!-- / full calendar -->

<link href='/POS/assets/stylesheets/plugins/fullcalendar/fullcalendar.css' media='all' rel='stylesheet' type='text/css' />

<!-- / select2 -->

<link href='/POS/assets/stylesheets/plugins/select2/select2.css' media='all' rel='stylesheet' type='text/css' />

<!-- / mention -->

<link href='/POS/assets/stylesheets/plugins/mention/mention.css' media='all' rel='stylesheet' type='text/css' />

<!-- / tabdrop (responsive tabs) -->

<link href='/POS/assets/stylesheets/plugins/tabdrop/tabdrop.css' media='all' rel='stylesheet' type='text/css' />

<!-- / jgrowl notifications -->

<link href='/POS/assets/stylesheets/plugins/jgrowl/jquery.jgrowl.min.css' media='all' rel='stylesheet' type='text/css' />

<!-- / datatables -->

<link href='/POS/assets/stylesheets/plugins/datatables/bootstrap-datatable.css' media='all' rel='stylesheet' type='text/css' />

<link href='/POS/assets/stylesheets/plugins/datatables/bootstrap-table.min.css' media='all' rel='stylesheet' type='text/css' />

<!-- / dynatrees (file trees) -->

<link href='/POS/assets/stylesheets/plugins/dynatree/ui.dynatree.css' media='all' rel='stylesheet' type='text/css' />

<!-- / color picker -->

<link href='/POS/assets/stylesheets/plugins/bootstrap_colorpicker/bootstrap-colorpicker.css' media='all' rel='stylesheet' type='text/css' />

<!-- / datetime picker -->

<link href='/POS/assets/stylesheets/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css' media='all' rel='stylesheet' type='text/css' />

<!-- / daterange picker) -->

<link href='/POS/assets/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css' media='all' rel='stylesheet' type='text/css' />

<!-- / flags (country flags) -->

<link href='/POS/assets/stylesheets/plugins/flags/flags.css' media='all' rel='stylesheet' type='text/css' />

<!-- / slider nav (address book) -->

<link href='/POS/assets/stylesheets/plugins/slider_nav/slidernav.css' media='all' rel='stylesheet' type='text/css' />

<!-- / fuelux (wizard) -->

<link href='/POS/assets/stylesheets/plugins/fuelux/wizard.css' media='all' rel='stylesheet' type='text/css' />

<!-- / flatty theme -->

<link href='/POS/assets/stylesheets/light-theme.css' id='color-settings-body-color' media='all' rel='stylesheet' type='text/css' />

<!-- / demo -->

<link href='/POS/assets/stylesheets/demo.css' media='all' rel='stylesheet' type='text/css' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<!-- / jquery -->

<script src='/POS/assets/javascripts/jquery/jquery.min.js' type='text/javascript'></script>

<!-- / jquery mobile events (for touch and slide) -->

<script src='/POS/assets/javascripts/plugins/mobile_events/jquery.mobile-events.min.js' type='text/javascript'></script>

<!-- / jquery migrate (for compatibility with new jquery) -->

<script src='/POS/assets/javascripts/jquery/jquery-migrate.min.js' type='text/javascript'></script>

<!-- / jquery ui -->

<script src='/POS/assets/javascripts/jquery_ui/jquery-ui.min.js' type='text/javascript'></script>

<!-- / bootstrap -->

<script src='/POS/assets/javascripts/bootstrap/bootstrap.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/flot/excanvas.js' type='text/javascript'></script>

<!-- / sparklines -->

<script src='/POS/assets/javascripts/plugins/sparklines/jquery.sparkline.min.js' type='text/javascript'></script>

<!-- / flot charts -->

<script src='/POS/assets/javascripts/plugins/flot/flot.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/flot/flot.resize.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/flot/flot.pie.js' type='text/javascript'></script>

<!-- / bootstrap switch -->

<script src='/POS/assets/javascripts/plugins/bootstrap_switch/bootstrapSwitch.min.js' type='text/javascript'></script>

<!-- / fullcalendar -->

<script src='/POS/assets/javascripts/plugins/fullcalendar/fullcalendar.min.js' type='text/javascript'></script>

<!-- / datatables -->

<script src='/POS/assets/javascripts/plugins/datatables/jquery.dataTables.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/datatables/bootstrap-table.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/datatables/bootstrap-table-zh-CN.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/datatables/tableExport.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/datatables/bootstrap-table-export.js' type='text/javascript'></script>

<!-- / wysihtml5 -->

<script src='/POS/assets/javascripts/plugins/common/wysihtml5.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/common/bootstrap-wysihtml5.js' type='text/javascript'></script>

<!-- / select2 -->

<script src='/POS/assets/javascripts/plugins/select2/select2.js' type='text/javascript'></script>

<!-- / color picker -->

<script src='/POS/assets/javascripts/plugins/bootstrap_colorpicker/bootstrap-colorpicker.min.js' type='text/javascript'></script>

<!-- / mention -->

<script src='/POS/assets/javascripts/plugins/mention/mention.min.js' type='text/javascript'></script>

<!-- / input mask -->

<script src='/POS/assets/javascripts/plugins/input_mask/bootstrap-inputmask.min.js' type='text/javascript'></script>

<!-- / fileinput -->

<script src='/POS/assets/javascripts/plugins/fileinput/bootstrap-fileinput.js' type='text/javascript'></script>

<!-- / modernizr -->

<script src='/POS/assets/javascripts/plugins/modernizr/modernizr.min.js' type='text/javascript'></script>

<!-- / retina -->

<script src='/POS/assets/javascripts/plugins/retina/retina.js' type='text/javascript'></script>

<!-- / fileupload -->

<script src='/POS/assets/javascripts/plugins/fileupload/tmpl.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/fileupload/load-image.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/fileupload/canvas-to-blob.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/fileupload/jquery.iframe-transport.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/fileupload/jquery.fileupload.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/fileupload/jquery.fileupload-fp.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/fileupload/jquery.fileupload-ui.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/fileupload/jquery.fileupload-init.js' type='text/javascript'></script>

<!-- / timeago -->

<script src='/POS/assets/javascripts/plugins/timeago/jquery.timeago.js' type='text/javascript'></script>

<!-- / slimscroll -->

<script src='/POS/assets/javascripts/plugins/slimscroll/jquery.slimscroll.min.js' type='text/javascript'></script>

<!-- / autosize (for textareas) -->

<script src='/POS/assets/javascripts/plugins/autosize/jquery.autosize-min.js' type='text/javascript'></script>

<!-- / charCount -->

<script src='/POS/assets/javascripts/plugins/charCount/charCount.js' type='text/javascript'></script>

<!-- / validate -->

<script src='/POS/assets/javascripts/plugins/validate/jquery.validate.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/validate/additional-methods.js' type='text/javascript'></script>

<!-- / naked password -->

<script src='/POS/assets/javascripts/plugins/naked_password/naked_password-0.2.4.min.js' type='text/javascript'></script>

<!-- / nestable -->

<script src='/POS/assets/javascripts/plugins/nestable/jquery.nestable.js' type='text/javascript'></script>

<!-- / tabdrop -->

<script src='/POS/assets/javascripts/plugins/tabdrop/bootstrap-tabdrop.js' type='text/javascript'></script>

<!-- / jgrowl -->

<script src='/POS/assets/javascripts/plugins/jgrowl/jquery.jgrowl.min.js' type='text/javascript'></script>

<!-- / bootbox -->

<script src='/POS/assets/javascripts/plugins/bootbox/bootbox.min.js' type='text/javascript'></script>

<!-- / inplace editing -->

<script src='/POS/assets/javascripts/plugins/xeditable/bootstrap-editable.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/xeditable/wysihtml5.js' type='text/javascript'></script>

<!-- / ckeditor -->

<script src='/POS/assets/javascripts/plugins/ckeditor/ckeditor.js' type='text/javascript'></script>

<!-- / filetrees -->

<script src='/POS/assets/javascripts/plugins/dynatree/jquery.dynatree.min.js' type='text/javascript'></script>

<!-- / datetime picker -->

<script src='/POS/assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js' type='text/javascript'></script>

<!-- / daterange picker -->

<script src='/POS/assets/javascripts/plugins/bootstrap_daterangepicker/moment.min.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js' type='text/javascript'></script>

<!-- / max length -->

<script src='/POS/assets/javascripts/plugins/bootstrap_maxlength/bootstrap-maxlength.min.js' type='text/javascript'></script>

<!-- / dropdown hover -->

<script src='/POS/assets/javascripts/plugins/bootstrap_hover_dropdown/twitter-bootstrap-hover-dropdown.min.js' type='text/javascript'></script>

<!-- / slider nav (address book) -->

<script src='/POS/assets/javascripts/plugins/slider_nav/slidernav-min.js' type='text/javascript'></script>

<!-- / fuelux -->

<script src='/POS/assets/javascripts/plugins/fuelux/wizard.js' type='text/javascript'></script>

<!-- / flatty theme -->

<script src='/POS/assets/javascripts/nav.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/tables.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/theme.js' type='text/javascript'></script>

<!-- / demo -->

<script src='/POS/assets/javascripts/demo/jquery.mockjax.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/demo/inplace_editing.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/demo/charts.js' type='text/javascript'></script>

<script src='/POS/assets/javascripts/demo/demo.js' type='text/javascript'></script> <header>

	<div class='navbar'>

		<div class='navbar-inner'>

			<div class='container-fluid'>

				<a class='brand' href='index.html' style="display: none;">

					<i class='icon-heart-empty'></i>

					<span class='hidden-phone'>Flatty</span>

				</a>

				<a class='toggle-nav btn pull-left' href='#'>

					<i class='icon-reorder'></i>

				</a>

				<ul class='nav pull-right'>

					<li class='dropdown light only-icon'>

						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>

							<i class='icon-adjust'></i>

						</a>

						<ul class='dropdown-menu color-settings'>

							<li class='color-settings-body-color'>

								<div class='color-title'>Body color</div>

								<a data-change-to='/POS/assets/stylesheets/light-theme.css' href='#'>

                                    Light

                                    <small>(default)</small>

                                </a>

							</li>

							<li class='divider'></li>

							<li class='color-settings-contrast-color'>

								<div class='color-title'>Contrast color</div>

								<a href="#" data-change-to="contrast-red"><i class='icon-adjust text-red'></i>

                                    Red

                                    <small>(default)</small>

                                </a>

								<a href="#" data-change-to="contrast-blue"><i class='icon-adjust text-blue'></i>

                                    Blue

                                </a>

								<a href="#" data-change-to="contrast-orange"><i class='icon-adjust text-orange'></i>

                                    Orange

                                </a>

								<a href="#" data-change-to="contrast-purple"><i class='icon-adjust text-purple'></i>

                                    Purple

                                </a>

								<a href="#" data-change-to="contrast-green"><i class='icon-adjust text-green'></i>

                                    Green

                                </a>

								<a href="#" data-change-to="contrast-muted"><i class='icon-adjust text-muted'></i>

                                    Muted

                                </a>

								<a href="#" data-change-to="contrast-fb"><i class='icon-adjust text-fb'></i>

                                    Facebook

                                </a>

								<a href="#" data-change-to="contrast-dark"><i class='icon-adjust text-dark'></i>

                                    Dark

                                </a>

								<a href="#" data-change-to="contrast-pink"><i class='icon-adjust text-pink'></i>

                                    Pink

                                </a>

								<a href="#" data-change-to="contrast-grass-green"><i class='icon-adjust text-grass-green'></i>

                                    Grass green

                                </a>

								<a href="#" data-change-to="contrast-sea-blue"><i class='icon-adjust text-sea-blue'></i>

                                    Sea blue

                                </a>

								<a href="#" data-change-to="contrast-banana"><i class='icon-adjust text-banana'></i>

                                    Banana

                                </a>

								<a href="#" data-change-to="contrast-dark-orange"><i class='icon-adjust text-dark-orange'></i>

                                    Dark orange

                                </a>

								<a href="#" data-change-to="contrast-brown"><i class='icon-adjust text-brown'></i>

                                    Brown

                                </a>

							</li>

						</ul>

					</li>

					<li class='dropdown medium only-icon widget' style="display: none;">

						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>

							<i class='icon-rss'></i>

							<div class='label'>5</div>

						</a>

						<ul class='dropdown-menu'>

							<li>

								<a href='#'>

									<div class='widget-body'>

										<div class='pull-left icon'>

											<i class='icon-user text-success'></i>

										</div>

										<div class='pull-left text'>

											John Doe signed up

											<small class='muted'>just now</small>

										</div>

									</div>

								</a>

							</li>

							<li class='divider'></li>

							<li>

								<a href='#'>

									<div class='widget-body'>

										<div class='pull-left icon'>

											<i class='icon-inbox text-error'></i>

										</div>

										<div class='pull-left text'>

											New Order #002

											<small class='muted'>3 minutes ago</small>

										</div>

									</div>

								</a>

							</li>

							<li class='divider'></li>

							<li>

								<a href='#'>

									<div class='widget-body'>

										<div class='pull-left icon'>

											<i class='icon-comment text-warning'></i>

										</div>

										<div class='pull-left text'>

											America Leannon commented Flatty with veeery long text.

											<small class='muted'>1 hour ago</small>

										</div>

									</div>

								</a>

							</li>

							<li class='divider'></li>

							<li>

								<a href='#'>

									<div class='widget-body'>

										<div class='pull-left icon'>

											<i class='icon-user text-success'></i>

										</div>

										<div class='pull-left text'>

											Jane Doe signed up

											<small class='muted'>last week</small>

										</div>

									</div>

								</a>

							</li>

							<li class='divider'></li>

							<li>

								<a href='#'>

									<div class='widget-body'>

										<div class='pull-left icon'>

											<i class='icon-inbox text-error'></i>

										</div>

										<div class='pull-left text'>

											New Order #001

											<small class='muted'>1 year ago</small>

										</div>

									</div>

								</a>

							</li>

							<li class='widget-footer'>

								<a href='#'>All notifications</a>

							</li>

						</ul>

					</li>

					<li class='dropdown dark user-menu'>

						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>

							<!--<img alt='Mila Kunis' height='23' src='/POS/assets/images/avatar.jpg' width='23' />-->

							<span class='user-name hidden-phone' style="line-height: 27px;">当前用户：【<?php echo ($role); ?>】<?php echo ($name); ?></span>

							<b class='caret'></b>

						</a>

						<ul class='dropdown-menu'>

							<li>

								<a data-toggle="modal" href="#modal-example2">

									<i class='icon-unlock-alt'></i> 修改密码

								</a>

							</li>

							<li class='divider'></li>

							<li>

								<a href='/POS/index.php/home/Login/logout'>

									<i class='icon-signout'></i> 退出登录

								</a>

							</li>

						</ul>

					</li>

				</ul>

				<form style="display: none;" accept-charset="UTF-8" action="search_results.html" class="navbar-search pull-right hidden-phone" method="get" />
				<div style="margin:0;padding:0;display:inline">
					<input name="utf8" type="hidden" value="&#x2713;" />
				</div>

				<button class="btn btn-link icon-search" name="button" type="submit"></button>

				<input autocomplete="off" class="search-query span2" id="q_header" name="q" placeholder="Search..." type="text" value="" />

				</form>

			</div>

		</div>

	</div>

</header>

<div id='wrapper'>

	<div id='main-nav-bg'></div>

	<nav class='' id='main-nav'>

		<div class='navigation'>

			<div class='search'>

				<form accept-charset="UTF-8" action="search_results.html" method="get" />
				<div style="margin:0;padding:0;display:inline">
					<input name="utf8" type="hidden" value="&#x2713;" />
				</div>

				<div class='search-wrapper'>

					<input autocomplete="off" class="search-query" id="q" name="q" placeholder="Search..." type="text" value="" />

					<button class="btn btn-link icon-search" name="button" type="submit"></button>

				</div>

				</form>

			</div>

			<ul class='nav nav-stacked'>

				<li class='active'>

					<a href='/POS/index.php/home/BaseInfo' target="m-iframe">

						<i class='icon-dashboard'></i>

						<span>基本信息</span>

					</a>

				</li>
				
				<li class=''>

					<a href='/POS/index.php/home/Todo' target="m-iframe">

						<i class='icon-list-alt'></i>

						<span>代办事项</span>

					</a>

				</li>

				<li class=''>

					<a class='dropdown-collapse' href='#'>

						<i class='icon-truck'></i>

						<span>进件管理</span>

						<i class='icon-angle-down angle-down'></i>

					</a>

					<ul class='nav nav-stacked'>

						<li class=''>

							<a href='/POS/index.php/home/Merchant' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>商户信息录入</span>

							</a>

						</li>

						<li class=''>

							<a href='/POS/index.php/home/Merchant/result' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>审核结果查询</span>

							</a>

						</li>

						<!--<li class=''>

							<a href='#'>

								<i class='icon-caret-right'></i>

								<span>整改商户列表</span>

							</a>

						</li>-->

					</ul>

				</li>

				<li class=''>

					<a class='dropdown-collapse' href='#'>

						<i class='icon-briefcase'></i>

						<span>商户管理</span>

						<i class='icon-angle-down angle-down'></i>

					</a>

					<ul class='nav nav-stacked'>

						<li class=''>

							<a href='/POS/index.php/home/Merchant/index2' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>商户查询</span>

							</a>

						</li>

						<li class=''>

							<a href='/POS/index.php/home/Merchant/apply' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>商户信息变更申请</span>

							</a>

						</li>
						
						<li class=''>

							<a href='/POS/index.php/home/POS/repair' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>商户机具报修申请</span>

							</a>

						</li>

					</ul>

				</li>

				<li class=''>

					<a class='dropdown-collapse' href='#'>

						<i class='icon-inbox'></i>

						<span>机具管理</span>

						<i class='icon-angle-down angle-down'></i>

					</a>

					<ul class='nav nav-stacked'>

						<li class=''>

							<a href='/POS/index.php/home/POS' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>装机查询</span>

							</a>

						</li>

						<li class=''>

							<a href='/POS/index.php/home/POS/apply' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>终端操作申请</span>

							</a>

						</li>

						<li class=''>

							<a href='/POS/index.php/home/SIM' target="m-iframe" >

								<i class='icon-caret-right'></i>

								<span>SIM查询</span>

							</a>

						</li>
						
						<li class=''>

							<a href='/POS/index.php/home/SN' target="m-iframe" >

								<i class='icon-caret-right'></i>

								<span>SN查询</span>

							</a>

						</li>

					</ul>

				</li>

				<li class=''>

					<a href='/POS/index.php/home/Trade' target="m-iframe">

						<i class='icon-envelope-alt'></i>

						<span>交易查询</span>

						<!--<i class='icon-angle-down angle-down'></i>-->

					</a>

					<!--<ul class='nav nav-stacked'>

						<li class=''>

							<a href='javascript:bootbox.alert("建设中……")'>

								<i class='icon-caret-right'></i>

								<span>商户汇总查询</span>

							</a>

						</li>

						<li class=''>

							<a href='javascript:bootbox.alert("建设中……")'>

								<i class='icon-caret-right'></i>

								<span>推荐人汇总</span>

							</a>

						</li>

						<li class=''>

							<a href='#'>

								<i class='icon-caret-right'></i>

								<span>服务商汇总</span>

							</a>

						</li>

					</ul>-->

				</li>

				<li class=''>

					<a href='/POS/index.php/home/Risk' target="m-iframe">

						<i class='icon-warning-sign'></i>

						<span>风险交易</span>

						<!--<i class='icon-angle-down angle-down'></i>-->

					</a>

					<!--<ul class='nav nav-stacked'>

						<li class=''>

							<a href='javascript:bootbox.alert("建设中……")'>

								<i class='icon-caret-right'></i>

								<span>风险协查</span>

							</a>

						</li>

						<li class=''>

							<a href='#'>

								<i class='icon-caret-right'></i>

								<span>差错交易</span>

							</a>

						</li>

						<li class=''>

							<a href='#'>

								<i class='icon-caret-right'></i>

								<span>拒付交易</span>

							</a>

						</li>

						<li class=''>

							<a href='#'>

								<i class='icon-caret-right'></i>

								<span>商户终端限额</span>

							</a>

						</li>

					</ul>-->

				</li>
				
				<li class=''>

					<a class='' href='/POS/index.php/home/Download' target="m-iframe">

						<i class='icon-download-alt'></i>

						<span>下载中心</span>

						<!--<i class='icon-angle-down angle-down'></i>-->

					</a>

				</li>
				
				
				<li class='<?php echo ($hidden); ?>'>

					<a class='dropdown-collapse' href='#'>

						<i class='icon-money'></i>

						<span>财务系统</span>

						<i class='icon-angle-down angle-down'></i>

					</a>

					<ul class='nav nav-stacked'>

						<li class=''>

							<a href='javascript:bootbox.alert("建设中……")' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>进账</span>

							</a>

						</li>

						<li class=''>

							<a href='javascript:bootbox.alert("建设中……")' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>出账</span>

							</a>

						</li>
						
						<li class=''>

							<a href='javascript:bootbox.alert("建设中……")' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>日结</span>

							</a>

						</li>

					</ul>

				</li>

				<li class='<?php echo ($hidden); ?>'>

					<a class='dropdown-collapse' href='#'>

						<i class='icon-cogs'></i>

						<span>系统设置</span>

						<i class='icon-angle-down angle-down'></i>

					</a>

					<ul class='nav nav-stacked'>

						<li class=''>

							<a href='/POS/index.php/home/Member' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>人员管理</span>

							</a>

						</li>

						<li class=''>

							<a href='/POS/index.php/home/Reference' target="m-iframe">

								<i class='icon-caret-right'></i>

								<span>推荐人管理</span>

							</a>

						</li>

					</ul>

				</li>
				
				

			</ul>

		</div>

	</nav>

	<section id='content'>
		<iframe id="m-iframe" name="m-iframe" src=""></iframe>
	</section>

</div>
<!--<div style="display:none">
			<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
		</div>-->

<div class='modal hide fade' id='modal-example2' role='dialog' tabindex='-1'>

	<div class='modal-header'>

		<button class='close' data-dismiss='modal' type='button'>&times;</button>

		<h3>修改密码</h3>

	</div>

	<div class='modal-body'>

		<form action="/POS/index.php/home/Login/saveChangePWD" method="post" id="mfrom" class='form validate-form' enctype="multipart/form-data" style='margin-bottom: 0;' />

		<div class="hidden">
			<input id="res" name="res" type="reset" />
			<input type="text" name="uuid" value="" />
		</div>

		<div class='control-group'>

			<label class='control-label'>原密码：</label>

			<div class='controls'>

				<input class='span12' name="old_pwd" type='password' style="width: 520px;" data-rule-required='true' />

				<p class='help-block' />

			</div>

		</div>

		<div class='control-group'>

			<label class='control-label'>新密码：</label>

			<div class='controls'>

				<input class='span12' id="new_pwd" name="new_pwd" type='password' style="width: 520px;" data-rule-required='true' />

				<p class='help-block' />

			</div>

		</div>

		<div class='control-group'>

			<label class='control-label'>重复密码：</label>

			<div class='controls'>

				<input class='span12' name="re_pwd" type='password' style="width: 520px;" data-rule-required='true' data-rule-equalto="#new_pwd"/>

				<p class='help-block' />

			</div>

		</div>

		</form>

	</div>

	<div class='modal-footer'>

		<button class='btn' data-dismiss='modal'>&nbsp;&nbsp;取消&nbsp;&nbsp;</button>

		<button class='btn btn-success' onclick="btnConfirmed()"><i class="icon-save"></i>&nbsp;&nbsp;保存&nbsp;&nbsp;</button>

	</div>

</div>

<script type="text/javascript">
	$(function() {
		$("#m-iframe").css("height", (Number($("#wrapper").css("height").replace("px", "")) - 5) + "px");
		//		callMethod("aa");
	});

	function callMethod(funcName) {
		//		alert(this);
		//		console.log(this);
		eval("this." + funcName + "()");
	}

	function aa() {
		alert("aa");
	}
	
	function btnConfirmed() {
		$("#mfrom").submit();
	}
</script>
	</body>

</html>