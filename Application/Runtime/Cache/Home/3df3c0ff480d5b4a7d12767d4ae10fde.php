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
		width: 88%;
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
		margin-bottom: 8px!important;
	}
	
	.right-border {
		border-right: 1px lightgray solid;
	}
	
	.left-border {
		border-left: 1px lightgray solid;
	}
	
	.span1 {
		margin-left: 0!important;
		min-width: 72px;
	}
	
	.content {
		line-height: 21px;
		font-weight: bold;
	}
	
	.checkbox.inline {
		padding-top: 0;
		padding-right: 20px;
		font-weight: bold;
		line-height: 40px;
	}
	
	input[type="checkbox"] {
		margin: 14px 0 0;
	}
</style>

<div class='container-fluid'>

	<div class='row-fluid'>
		<div class='span12 green-background' style="color: white;">
			&nbsp;&nbsp;<i class='icon-pencil'></i>&nbsp;&nbsp;商户信息变更申请
		</div>
	</div>

	<div class='row-fluid <?php echo ($hidden); ?>'>
		<div class='span2'>
			&nbsp;&nbsp;&nbsp;&nbsp;商户号或名称：
		</div>
		<div class='span10'>

			<div class="input-prepend input-append" style="margin-bottom: 0;">

				<input id="keyword" class="text-right" id="appendedPrependedInput" type="text" style="margin-top: 4px;min-width: 360px;">

				<button onclick="search()" class="add-on btn btn-primary" style="margin-top: 4px;height: auto;text-shadow: none;">&nbsp;&nbsp;查询&nbsp;&nbsp;</button>

			</div>

		</div>
	</div>

	<form id="mform" action="/POS/index.php/home/merchant/saveChangeReport" method="post" class='form form-horizontal validate-form' enctype="multipart/form-data">

		<!--
        	作者：sdoxinxin1990@qq.com
        	时间：2016-05-27
        	描述：隐藏域
        -->
		<div class="hidden">
			<input id="res" name="res" type="reset" />
			<input type="text" name="uuid" value="" />
			<input type="text" name="basic_busi_no" value="" />
			<input type="text" name="basic_busi_type" value="" />
			<input type="text" name="basic_busi_name" value="" />
		</div>

		<div class='row-fluid' style="margin-top: 20px;border-top: 1px lightgray solid;">
			<div class='span12'>
				&nbsp;&nbsp;法人信息
			</div>
		</div>

		<div class='row-fluid <?php echo ($hidden); ?>'>
			<div class='span2 text-right'>
				法人信息：
			</div>
			<div class='span2 right-border'>
				<input readonly="readonly" name="corporate_name" type="text" id="" value="<?php echo ($data["corporate_name"]); ?>" style="width: 60%;" data-rule-required='true' />
				<!-- 童将兴 -->
			</div>
			<div class='span2 text-right'>
				证件：
			</div>
			<div class='span6'>
				<!-- 身份证 12022519810612323x -->
				<input readonly="readonly" name="corporate_certificates" type="text" id="" value="<?php echo ($data["corporate_certificates"]); ?>" data-rule-required='true' />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="corporate_cellphone_new" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>手机：
			</div>
			<div class='span2 right-border'>
				<!-- 13662129329 -->
				<input readonly="readonly" name="corporate_cellphone" type="text" id="" value="<?php echo ($data["corporate_cellphone"]); ?>" style="width: 60%;" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="corporate_phone_new" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>固定电话：
			</div>
			<div class='span6'>
				<!-- 13662129329 -->
				<input readonly="readonly" name="corporate_phone" type="text" id="" value="<?php echo ($data["corporate_phone"]); ?>" />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span2 text-right'>
				新手机：
			</div>
			<div class='span2 right-border'>
				<input readonly="readonly" name="corporate_cellphone_new" type="text" id="" value="<?php echo ($data["corporate_cellphone_new"]); ?>" />
			</div>
			<div class='span2 text-right'>
				新固定电话：
			</div>
			<div class='span2'>
				<input readonly="readonly" name="corporate_phone_new" type="text" id="" value="<?php echo ($data["corporate_phone_new"]); ?>" />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;费率及结算
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="new_settlement_period_type_all" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>结算周期：
			</div>
			<div class='span2'>
				<!--<br />-->
				<!-- 工作日(T) + 1 天 -->
				<input readonly="readonly" name="settlement_period_type_all" type="text" id="" value="<?php echo ($data["settlement_period_type_all"]); ?>" style="" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="new_settlement_basic_rate_all" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>基本费率：
			</div>
			<div class='span2 right-border'>
				<!-- 单笔计费-封顶： 0.5%， 20元封顶 -->

				<input readonly="readonly" name="settlement_basic_rate_all" type="text" id="" value="<?php echo ($data["settlement_basic_rate_all"]); ?>" style="" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>费率变更说明：
			</div>
			<div class='span2'>
				<input type="file" name="settlement_basic_rate_explain" id="" value="" data-val="<?php echo ($data["settlement_basic_rate_explain"]); ?>" />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span2 text-right'>
				新结算周期：
			</div>
			<div class='span2 right-border has-tooltip' data-placement="top" data-original-title="重要提示，请按照参考格式填写，用中文逗号分隔！格式：工作日（T）/自然日（D），1 天"  >
				<input readonly="readonly" name="new_settlement_period_type_all" type="text" name="" id="" value="<?php echo ($data["new_settlement_period_type_all"]); ?>" />
			</div>
			<div class='span2 text-right'>
				新基本费率：
			</div>
			<div class='span6 has-tooltip' data-placement="top" data-original-title="重要提示，请按照参考格式填写，用中文逗号分隔！格式：单笔计费-封顶/单笔计费-按比例， 0.5%， 20元封顶">
				<input readonly="readonly" name="new_settlement_basic_rate_all" type="text" name="" id="" value="<?php echo ($data["new_settlement_basic_rate_all"]); ?>" />
			</div>

		</div>

		<div class='row-fluid'>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="new_settlement_account_type" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>账户类别：
			</div>
			<div class='span2 right-border'>
				<!-- 对私 -->
				<input readonly="readonly" name="settlement_account_type" type="text" id="" value="<?php echo ($data["settlement_account_type"]); ?>" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="new_settlement_account_name" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>账户名称：
			</div>
			<div class='span2 right-border'>
				<!-- 翟平丽 -->
				<input readonly="readonly" name="settlement_account_name" type="text" id="" value="<?php echo ($data["settlement_account_name"]); ?>" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="new_settlement_account_idcard" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>身份证号：
			</div>
			<div class='span2'>
				<!-- 120101196311091533 -->
				<input readonly="readonly" name="settlement_account_idcard" type="text" id="" value="<?php echo ($data["settlement_account_idcard"]); ?>" />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span2 text-right'>
				新账户类别：
			</div>
			<div class='span2 right-border'>
				<select name="new_settlement_account_type" style="width: 120px;" data-val="<?php echo ($data["new_settlement_account_type"]); ?>">
				<option value="对公">对公</option>
				<option value="对私">对私</option>
			</select>
			</div>
			<div class='span2 text-right'>
				新账户名称：
			</div>
			<div class='span2 right-border'>
				<input readonly="readonly" name="new_settlement_account_name" type="text" name="" id="" value="<?php echo ($data["new_settlement_account_name"]); ?>" />
			</div>
			<div class='span2 text-right'>
				新身份证号：
			</div>
			<div class='span2 right-border'>
				<input readonly="readonly" name="new_settlement_account_idcard" type="text" name="" id="" value="<?php echo ($data["new_settlement_account_idcard"]); ?>" />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="new_settlement_account_number" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>账户号：
			</div>
			<div class='span2'>
				<!--<br />-->
				<!-- 6214680100219060 -->
				<input readonly="readonly" name="settlement_account_number" type="text" id="" value="<?php echo ($data["settlement_account_number"]); ?>" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				<label class="checkbox inline text-red">

				<input data-for="new_settlement_bank_account" id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>开户行：
			</div>
			<div class='span2 right-border'>
				<!-- 北京银行股份有限公司天津北辰支行 -->
				<input readonly="readonly" name="settlement_bank_account" type="text" id="" value="<?php echo ($data["settlement_bank_account"]); ?>" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				联行号：
			</div>
			<div class='span2'>
				<!-- 313110010158 -->
				<input readonly="readonly" name="settlement_bank_line" type="text" id="" value="<?php echo ($data["settlement_bank_line"]); ?>" data-rule-required='true' />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span2 text-right'>
				新账户号：
			</div>
			<div class='span2 right-border'>
				<input readonly="readonly" name="new_settlement_account_number" type="text" id="" value="<?php echo ($data["new_settlement_account_number"]); ?>" placeholder="不支持存折账号！" />
			</div>
			<div class='span2 text-right'>
				新开户行：
			</div>
			<div class='span2 right-border'>
				<input readonly="readonly" name="new_settlement_bank_account" type="text" id="" value="<?php echo ($data["new_settlement_bank_account"]); ?>" />
			</div>
			<div class='span2 text-right'>
				新联行号：
			</div>
			<div class='span2 right-border'>
				<input type="text" name="new_settlement_bank_line" id="" value="<?php echo ($data["new_settlement_bank_line"]); ?>" />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;证件照片
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span3 text-right'>
				<label class="checkbox inline text-red">

				<input id="inlineCheckbox1" type="checkbox" value="option1">变更

			</label>结算账户变更资料：
			</div>
			<div class='span9'>
				<input type="file" name="settlement_change_explain" id="" value="" data-val="<?php echo ($data["settlement_change_explain"]); ?>" />
			</div>
			<div class='span9 offset2'>
				结算账户变更需上传持卡人身份证、银行卡复印件、开户许可证/开户证明、登记表一、登记表二、结算授权书、以rar或zip格式打包上传，最大为3M
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span12 text-red'>
				&nbsp;&nbsp;变更原因（内容请少于500字）
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span1'>
			</div>
			<div class='span10'>
				<textarea name="merchant_change_explain" rows="3" cols=""><?php echo ($data["merchant_change_explain"]); ?></textarea>
			</div>
		</div>

		<hr />

		<div class="btn-group <?php echo ($hidden); ?>">

			<button class="btn btn-large btn-success " onclick="submitForm()"><i class="icon-save"></i>&nbsp;&nbsp;提交申请&nbsp;&nbsp;</button>

			<button class="btn btn-large" onclick="javascript:window.history.go(-1)"><i class="icon-reply"></i>&nbsp;&nbsp;取消&nbsp;&nbsp;</button>

		</div>

	</form>

</div>

<script>
	$(function() {
		var justShow = "<?php echo ($justShow); ?>";
		if (justShow == "justShow") {
			initJustShow();
		} else {
			setCheckBox();
		}
	});

	function initJustShow() {
		$(":checkbox").hide();
		$("label.checkbox").hide();
		$(".file-input-wrapper").hide();
		$("input").each(function() {
			var name = $(this).attr("name");
			if (name != undefined && name.indexOf("new") > -1 && $(this).val().length > 0) {
				$(this).css("backgroundColor", "lightgoldenrodyellow");
			}
		});
		setFile();
		setSelet();
	}

	function setFile() {
		$(":file").each(function() {
			var val = $(this).attr("data-val");
			var node = ['<a class="text-red" target="_Blank" href="/POS/Uploads/',
				val,
				'">',
				'&nbsp;&nbsp;&nbsp;&nbsp;查看下载&nbsp;&nbsp;&nbsp;&nbsp;',
				'</a>'
			].join('');
			if (val.length > 0) {
				$(this).parent().after(node);
			}
		});
	};

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

	function setCheckBox() {
		$(":checkbox").change(function() {
			//			alert($(this).attr("checked"));
			var checked = $(this).attr("checked");
			var inputName = $(this).attr("data-for");
			if (checked == "checked") {
				//				alert(1);
				$("[name='" + inputName + "']").removeAttr("readonly");
				$("[name='" + inputName + "']").css("backgroundColor", "lightgoldenrodyellow");
				$("[name='" + inputName + "']").focus();
			} else {
				$("[name='" + inputName + "']").attr("readonly", "readonly");
				$("[name='" + inputName + "']").css("backgroundColor", "white");
				$("[name='" + inputName + "']").val("");
			}
		});
	}

	function submitForm() {
		$("#mform").submit();
	};

	function search() {
		$("input[name='res']").click();
		var keyword = $("#keyword").val();
		if (keyword.length > 0) {
			$.ajax({
				type: "post",
				dataType: "json",
				url: "/POS/index.php/home/merchant/applyChangeSearch?keyword=" + keyword,
				async: true,
				success: function(r) {
					//					bootbox.alert(JSON.stringify(r));
					if (r.success) {
						$('form').setform(r.data);
					} else {
						bootbox.alert(r.msg);
					}
				},
				error: function() {
					bootbox.alert('查询失败，请稍后再试……');
				}
			});
		}
	}
	(function($) {
		$.fn.setform = function(jsonValue) {
			var obj = this;
			$.each(jsonValue, function(id, ival) {
				obj.find("[name='" + id + "']").val(ival);
			})
		}
	})(jQuery);
</script>
	</body>

</html>