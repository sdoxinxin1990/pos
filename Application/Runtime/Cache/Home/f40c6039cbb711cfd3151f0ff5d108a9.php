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

<script src='/POS/assets/javascripts/demo/demo.js' type='text/javascript'></script> <style>
	label {
		margin-bottom: 0;
		line-height: 25px;
	}
	
	.date {
		font-size: 120%!important;
		margin-bottom: 10px;
	}
</style>

<div class='container-fluid'>

	<div class='row-fluid' id='content-wrapper'>

		<div class='span12'>

			<div class='page-header'>

				<h1 class='pull-left'><i class='icon-list-alt'></i>&nbsp;&nbsp;<span>待办事项</span></h1>

			</div>

		</div>

	</div>

	<div class='row-fluid'>

		<div class='span12 box'>

			<div class='row-fluid todo-list'>

				<div class='span12 box box-nomargin'>

					<div class='box-content box-no-padding'>

						<div class='sortable-container'>

							<div class='date text-contrast'>2016/6/7</div>

							<ul class='unstyled sortable' data-sortable-axis='y' data-sortable-connect='.sortable'>

								<li class='important item'>

									<label class='check pull-left todo'>待办事项1</label>

									<div class='actions pull-right'>

										<a data-target="11" class='btn btn-link text-success btn-confirm' data-placement='top' href='#' title='标记完成'>

											<i class='icon-ok'></i>

										</a>

									</div>

								</li>
								
								<li class='important item'>

									<label class='check pull-left todo'>待办事项2</label>

									<div class='actions pull-right'>

										<a data-target="22" class='btn btn-link text-success btn-confirm' data-placement='top' href='#' title='标记完成'>

											<i class='icon-ok'></i>

										</a>

									</div>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<script>
	$(function(){
		$('.btn-confirm').click(function(){
			alert($(this).attr("data-target")); 
			$(this).parent().parent().remove();
		});
	});
</script>
	</body>

</html>