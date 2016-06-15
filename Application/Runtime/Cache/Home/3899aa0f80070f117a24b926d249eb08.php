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

<script src='/POS/assets/javascripts/demo/demo.js' type='text/javascript'></script> <style type="text/css">
	.row-fluid {
		line-height: 40px;
		font-size: 60%;
		border-bottom: 1px lightgray solid;
		border-left: 1px lightgray solid;
		border-right: 1px lightgray solid;
	}
	
	.row-fluid:first-of-type {
		margin-top: 20px;
		border-top: 1px lightgray solid;
	}
	
	.row-fluid:last-of-type {
		margin-bottom: 20px;
	}
	
	input {
		margin-bottom: 0!important;
		width: 40%;
	}
	
	select {
		margin-bottom: 0!important;
	}
	
	.row-fluid .span12 {
		background-color: #F0F0F0;
		font-weight: bold;
	}
	
	textarea {
		width: 96%;
		margin-top: 8px;
	}
	
	.right-border {
		border-right: 1px lightgray solid;
	}
</style>

<div class='container-fluid'>

	<form id="mform" action="/POS/index.php/home/p_o_s/<?php echo ($saveMethod); ?>" method="post" class='form validate-form' enctype="multipart/form-data">

		<div class="hidden">
			<input id="res" name="res" type="reset" />
			<input type="text" name="pos_uuid" value="<?php echo ($data["pos_uuid"]); ?>" />
			<input type="text" name="merchant_uuid" value="<?php echo ($data["merchant_uuid"]); ?>" />
		</div>

		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;<i class='icon-file'></i>&nbsp;&nbsp;<?php echo ($opName); ?>
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span2 text-right text-error'>
				&nbsp;&nbsp;SN号：
			</div>
			<div class='span10'>
				<div class="input-prepend input-append" style="margin-bottom: 0;">
					<input name="sn_number" type="text" id="" value="<?php echo ($data["sn_number"]); ?>" class="text-right" type="text" style="margin-top: 4px;min-width: 344px;" />
					<button type="button" onclick="checkSN()" class="add-on btn btn-primary" style="margin-top: 4px;height: auto;text-shadow: none;">&nbsp;&nbsp;检查&nbsp;&nbsp;</button>
				</div>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-error'>
				&nbsp;&nbsp;SIM卡号：
			</div>
			<div class='span10'>
				<div class="input-prepend input-append" style="margin-bottom: 0;">
					<input name="sim_number" value="<?php echo ($data["sim_number"]); ?>" class="text-right" type="text" style="margin-top: 4px;min-width: 344px;">
					<button type="button" onclick="checkSIM()" class="add-on btn btn-primary" style="margin-top: 4px;height: auto;text-shadow: none;">&nbsp;&nbsp;检查&nbsp;&nbsp;</button>
				</div>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-error'>
				&nbsp;&nbsp;终端号：
			</div>
			<div class='span10'>
				<input name="terminal_number" type="text" id="" value="<?php echo ($data["terminal_number"]); ?>" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-error'>
				&nbsp;&nbsp;终端类型：
			</div>
			<div class='span10'>
				<!--<input type="text" id="" value=""/>-->
				<select name="terminal_type" class="<?php echo ($data["terminal_type_hidden"]); ?>" data-val="<?php echo ($data["terminal_type"]); ?>">
					<option value="无线POS">无线POS</option>
					<option value="有线POS">有线POS</option>
				</select> &nbsp;&nbsp;<?php echo ($data["terminal_type"]); ?>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;终端型号：
			</div>
			<div class='span10'>
				<input name="terminal_model" type="text" id="" value="<?php echo ($data["terminal_model"]); ?>" />
			</div>
		</div>

		<hr />

	</form>

	<div class="btn-group">

		<button class="btn btn-large btn-success " onclick="submitForm()"><i class="icon-save"></i>&nbsp;&nbsp;保存&nbsp;&nbsp;</button>

		<button class="btn btn-large" onclick="javascript:window.history.go(-1)"><i class="icon-reply"></i>&nbsp;&nbsp;取消&nbsp;&nbsp;</button>

	</div>

</div>

<script>
	function checkSN() {
		//		bootbox.alert("建设中……");
		$.ajax({
			url: "/POS/index.php/home/SN/Check?kw=" + $("[name='sn_number']").val(),
			success: function(r) {
				r = eval("(" + r + ")");
				bootbox.alert(r.msg);
				$("[name='terminal_model']").val(r.data);
			}
		});
	};

	function checkSIM() {
		//		bootbox.alert("建设中……");
		$.ajax({
			url: "/POS/index.php/home/SIM/Check?kw=" + $("[name='sim_number']").val(),
			success: function(r) {
				r = eval("(" + r + ")");
				bootbox.alert(r.msg);
			}
		});
	};
	$(function() {
		setSelet();
	});

	function setSelet() {
		$("select").each(function() {
			var val = $(this).attr("data-val");
			// alert($(this).attr("data-val"));
			$(this).find("option").each(function() {
				if ($(this).val() == val) {
					$(this).attr("selected", true);
				}
			});
		});
	};

	function submitForm() {
		$("#mform").submit();
	};
</script>
	</body>

</html>