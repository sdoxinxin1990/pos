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
		width: 90%;
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
</style>
<div class='container-fluid'>

	<form id="mform" action="/POS/index.php/home/merchant/save" method="post" class='form form-horizontal validate-form' enctype="multipart/form-data">

		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;<i class='icon-file'></i>&nbsp;&nbsp;录入特约商户信息 (红色字体必填。为提高上传图片成功率，请注意上传图片、文件大小。)
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span12 text-red'>
				&nbsp;&nbsp;注意：编辑请重新上传图片，压缩包等附件！！
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;签约信息
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;推荐人：
			</div>
			<div class='span2 right-border'>
				<!--<input type="text" id="" value="<?php echo ($data[""]); ?>" />-->
				<select name="reference_uuid" style="width: 144px;" data-val="<?php echo ($data["reference_uuid"]); ?>">
					<!--<option value="0">-请选择-</option>-->
					<?php echo W('Reference/options');?> 
				</select>
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;签约业务员：
			</div>
			<div class='span2 right-border'>
				<input name="sign_contract_clerk" type="text" id="" value="<?php echo ($data["sign_contract_clerk"]); ?>" />
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;签约日期：
			</div>
			<div class='span2'>
				<!--<input type="text" id="" value="<?php echo ($data[""]); ?>" />-->
				<div class="datepicker input-append span5" id="datepicker" style="margin-top: 0;height: 40px;margin-bottom: 0;">
					<input name="sign_date" class="input-medium" data-format="yyyy-MM-dd" placeholder="" type="text" style="width: 100px;vertical-align: top;" data-rule-required='true' value="<?php echo ($data["sign_date"]); ?>">
					<span class="add-on"><i data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar"></i></span>
				</div>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;维护人员：
			</div>
			<div class='span2 right-border'>
				<!--<input type="text" id="" value="<?php echo ($data[""]); ?>" />-->
				<select name="maintenance_member_uuid" style="width: 144px;" data-val="<?php echo ($data["maintenance_member_uuid"]); ?>">
					<!--<option value="0">-请选择-</option>-->
					<?php echo W('Member/optionsOutdoor');?> 
				</select>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;基本信息
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;营业执照号：
			</div>
			<div class='span2 right-border'>
				<input name="basic_busi_license_no" type="text" id="" value="<?php echo ($data["basic_busi_license_no"]); ?>" data-rule-required='true' />
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;营业执照有效期：
			</div>
			<div class='span2 right-border'>
				<!--<input type="text" id="" value="<?php echo ($data[""]); ?>" />-->
				<div class="datepicker input-append span5" id="datepicker" style="margin-top: 0;height: 40px;margin-bottom: 0;">
					<input name="basic_busi_license_validity" class="input-medium" data-format="yyyy-MM-dd" placeholder="" type="text" style="width: 100px;vertical-align: top;" data-rule-required='true' value="<?php echo ($data["basic_busi_license_validity"]); ?>">
					<span class="add-on"><i data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar"></i></span>
				</div>
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;优惠协议：
			</div>
			<div class='span2'>
				<select name="basic_preferential_agreement" style="width: 144px;">
					<option value="无优惠协议">无优惠协议</option>
					<option value="县乡优惠">县乡优惠</option>
				</select>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;注册名称：
			</div>
			<div class='span2 right-border'>
				<input data-rule-required='true' name="basic_registered_name" type="text" id="" value="<?php echo ($data["basic_registered_name"]); ?>" />
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;行业大类：
			</div>
			<div class='span2'>
				<!--<input type="text" id="" value="<?php echo ($data[""]); ?>" />-->
				<select name="basic_industry_categories" style="width: 144px;" data-val="<?php echo ($data["basic_industry_categories"]); ?>">
					<!--<option value="0">-请选择-</option>-->
					<option value="餐饮类">餐饮类</option>
					<option value="一般类">一般类</option>
					<option value="民生类">民生类</option>
					<option value="房产汽车类">房产汽车类</option>
					<option value="批发类">批发类</option>
					<option value="公益类">公益类</option>
				</select>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;经营名称：
			</div>
			<div class='span2 right-border'>
				<input name="basic_busi_name" type="text" id="" value="<?php echo ($data["basic_busi_name"]); ?>" data-rule-required='true' />
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;主营业务：
			</div>
			<div class='span2'>
				<input name="basic_main_busi" type="text" id="" value="<?php echo ($data["basic_main_busi"]); ?>" data-rule-required='true' />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;税务登记证号：
			</div>
			<div class='span2 right-border'>
				<input name="basic_tax_registration_no" type="text" id="" value="<?php echo ($data["basic_tax_registration_no"]); ?>" />
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;经营性质：
			</div>
			<div class='span2'>
				<input name="basic_manag_nature" type="text" id="" value="<?php echo ($type); echo ($data["basic_manag_nature"]); ?>" readonly="readonly" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;组织机构代码：
			</div>
			<div class='span2 right-border'>
				<input name="basic_organization_code" type="text" id="" value="<?php echo ($data["basic_organization_code"]); ?>" />
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;签约渠道：
			</div>
			<div class='span2'>
				<input name="basic_contract_channel" type="text" id="" value="天津市因尼维尔科技有限公司" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;注册资金：
			</div>
			<div class='span2 right-border'>
				<input name="basic_registered_capital" type="number" id="" value="<?php echo ($data["basic_registered_capital"]); ?>" style="width: 60%;" /> 万元
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;传真：
			</div>
			<div class='span2 right-border'>
				<input name="basic_fax" type="text" id="" value="<?php echo ($data["basic_fax"]); ?>" />
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;邮编：
			</div>
			<div class='span2'>
				<input name="basic_post_code" type="text" id="" value="<?php echo ($data["basic_post_code"]); ?>" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;注册地址：
			</div>
			<div class='span10'>
				<input name="basic_registered_address" type="text" id="" value="<?php echo ($data["basic_registered_address"]); ?>" data-rule-required='true' />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;经营地址：
			</div>
			<div class='span10'>
				<input name="basic_busi_address" type="text" id="" value="<?php echo ($data["basic_busi_address"]); ?>" data-rule-required='true' />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;法人信息
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;姓名：
			</div>
			<div class='span2 right-border'>
				<input name="corporate_name" type="text" id="" value="<?php echo ($data["corporate_name"]); ?>" style="width: 60%;" data-rule-required='true' />
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;证件：
			</div>
			<div class='span2'>
				<select name="certificates_type" style="width: 112%;">
					<option value="身份证">身份证</option>
					<option value="护照">护照</option>
				</select>
			</div>
			<div class='span4'>
				<input name="corporate_certificates" type="text" id="" value="<?php echo ($data["corporate_certificates"]); ?>" data-rule-required='true' />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;手机：
			</div>
			<div class='span2 right-border'>
				<input name="corporate_cellphone" type="text" id="" value="<?php echo ($data["corporate_cellphone"]); ?>" style="width: 60%;" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;固话：
			</div>
			<div class='span6'>
				<input name="corporate_phone" type="text" id="" value="<?php echo ($data["corporate_phone"]); ?>" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;联系人
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;姓名：
			</div>
			<div class='span2 right-border'>
				<input name="contacts_name" type="text" id="" value="<?php echo ($data["contacts_name"]); ?>" style="width: 60%;" data-rule-required='true' />
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;手机：
			</div>
			<div class='span6'>
				<input name="contacts_cellphone" type="text" id="" value="<?php echo ($data["contacts_cellphone"]); ?>" data-rule-required='true' />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;E-mail：
			</div>
			<div class='span2 right-border'>
				<input name="contacts_email" type="text" id="" value="<?php echo ($data["contacts_email"]); ?>" style="width: 60%;" data-rule-required='true' />
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;固话：
			</div>
			<div class='span6'>
				<input name="contacts_phone" type="text" id="" value="<?php echo ($data["contacts_phone"]); ?>" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;费率及结算
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;结算周期：
			</div>
			<div class='span10'>
				<select name="settlement_period_type" data-val="<?php echo ($data["settlement_period_type"]); ?>">
					<option value="工作日（T）">工作日（T）</option>
					<option value="自然日（D）">自然日（D）</option>
				</select>
				<i class="icon-plus"></i>
				<input name="settlement_period" type="number" id="" value="<?php echo ($data["settlement_period"]); ?>" style="width: 20%;" data-rule-required='true' /> 工作日
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;基本费率：
			</div>
			<div class='span10'>
				<select name="settlement_basic_rate_type" data-val="<?php echo ($data["settlement_basic_rate_type"]); ?>">
					<option value="单笔计费-按比例">单笔计费-按比例</option>
					<option value="单笔计费-封顶">单笔计费-封顶</option>
				</select>
				<input name="settlement_basic_rate_percentage" type="text" id="" value="<?php echo ($data["settlement_basic_rate_percentage"]); ?>" style="width: 20%;" data-rule-required='true' />
				<span id="settlement_basic_rate_percentage">%</span>
				<input name="settlement_basic_rate_ceiling" type="number" id="" value="<?php echo ($data["settlement_basic_rate_ceiling"]); ?>" style="width: 20%;" data-rule-required='true' />
				<span id="settlement_basic_rate_ceiling">元/笔封顶</span>

			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;默认账户 账户类别：
			</div>
			<div class='span2 right-border'>
				<select name="settlement_account_type" style="width: 80%;" data-val="<?php echo ($data["settlement_account_type"]); ?>">
					<option value="对公">对公</option>
					<option value="对私">对私</option>
				</select>
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;账户名称：
			</div>
			<div class='span2 right-border'>
				<input name="settlement_account_name" type="text" id="" value="<?php echo ($data["settlement_account_name"]); ?>" data-rule-required='true' />
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;身份证号：
			</div>
			<div class='span2'>
				<input name="settlement_account_idcard" type="text" id="" value="<?php echo ($data["settlement_account_idcard"]); ?>" data-rule-required='true' />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;账户卡号：不支持存折！
			</div>
			<div class='span2 right-border'>
				<input name="settlement_account_number" type="text" id="" value="<?php echo ($data["settlement_account_number"]); ?>" data-rule-required='true' />

			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;开户行：
			</div>
			<div class='span2 right-border'>
				<input name="settlement_bank_account" type="text" id="" value="<?php echo ($data["settlement_bank_account"]); ?>" data-rule-required='true' />
			</div>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;联行号：
			</div>
			<div class='span2'>
				<input name="settlement_bank_line" type="text" id="" value="<?php echo ($data["settlement_bank_line"]); ?>" data-rule-required='true' />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;设备信息
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;有线POS数量（台）：
			</div>
			<div class='span2 right-border'>
				<input name="wire_pos_num" type="number" id="" value="<?php echo ($data["wire_pos_num"]); ?>" min="0" max="99" />

			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;无线POS数量（台）：
			</div>
			<div class='span2 right-border'>
				<input name="wireless_pos_num" type="number" id="" value="<?php echo ($data["wireless_pos_num"]); ?>" min="0" max="99" />
			</div>
			<div class='span2'>

			</div>
			<div class='span2'>

			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;证件照片（照片格式仅支持jpg或jpeg格式，300K以内。）
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;法人证件照片：
			</div>
			<div class='span10'>
				<input name="certifi_corporate_photos" type="file" id="" data-val="<?php echo ($data["certifi_corporate_photos"]); ?>" />
				<br />
				<b>如为身份证请提供正反面复印件并签字盖章</b>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;营业场所照片：
			</div>
			<div class='span4 right-border'>
				<input name="certifi_premises_photos" type="file" id="" data-val="<?php echo ($data["certifi_premises_photos"]); ?>" />
				<br />
				<b>请上传zip或rar压缩格式文件，3M大小以内。</b>
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;组织机构代码证图片：
			</div>
			<div class='span4'>
				<input name="certifi_organization_code_photos" type="file" id="" data-val="<?php echo ($data["certifi_organization_code_photos"]); ?>" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;营业场所门头照片：
			</div>
			<div class='span4 right-border'>
				<input name="certifi_premises_header_photos" type="file" id="" data-val="<?php echo ($data["certifi_premises_header_photos"]); ?>" />
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;银行开户许可证图片：
			</div>
			<div class='span4'>
				<input name="certifi_bank_account_permit_photos" type="file" id="" data-val="<?php echo ($data["certifi_bank_account_permit_photos"]); ?>" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;营业执照图片：
			</div>
			<div class='span4 right-border'>
				<input name="certifi_business_license_photos" type="file" id="" data-val="<?php echo ($data["certifi_business_license_photos"]); ?>" />
			</div>
			<div class='span2 text-right'>
				&nbsp;&nbsp;税务登记证图片：
			</div>
			<div class='span4'>
				<input name="certifi_tax_registration_photos" type="file" id="" data-val="<?php echo ($data["certifi_tax_registration_photos"]); ?>" />
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;商户基础资料表：
			</div>
			<div class='span10'>
				<input name="certifi_busi_basic_data_photos" type="file" id="" data-val="<?php echo ($data["certifi_busi_basic_data_photos"]); ?>" />
				<br />
				<b>1M大小以内，商户基础资料登记表（一、二）、结算授权书。</b>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;特殊信息
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;特殊行业资质照片：
			</div>
			<div class='span10'>
				<input name="special_industry_aptitude_photos" type="file" id="" data-val="<?php echo ($data["special_industry_aptitude_photos"]); ?>" />
				<br />
				<b>3M大小以内，成品油批发经营许可证、票代证、电信合作协议、保险代理业务许可证、快餐类房屋租赁协议、批发类厂房租赁或房屋租赁协议、家用电器品牌授权书（或加盟协议）。</b>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;特殊经营信息：
			</div>
			<div class='span10'>
				<textarea name="special_manag_info" rows="3" cols=""><?php echo ($data["special_manag_info"]); ?></textarea>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;协议
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right text-red'>
				&nbsp;&nbsp;协议：
			</div>
			<div class='span10'>
				<input name="agreement" type="file" id="" data-val="<?php echo ($data["agreement"]); ?>" />
				<br />
				<b>含扣率变更说明请上传zip或rar压缩格式文件，3M大小以内。</b>
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;备注（备注内容请少于500字）
			</div>
		</div>
		<div class='row-fluid'>
			<div class='span2 text-right'>
				&nbsp;&nbsp;备注：
			</div>
			<div class='span10'>
				<textarea name="remarks" rows="3" cols=""><?php echo ($data["remarks"]); ?></textarea>
			</div>
		</div>
		<hr />

		<div class="btn-group <?php echo ($hidden); ?>">

			<button class="btn btn-large btn-success" onclick="submitForm()"><i class="icon-save"></i>&nbsp;&nbsp;保存&nbsp;&nbsp;</button>

			<button class="btn btn-large" onclick="javascript:window.history.go(-1)"><i class="icon-reply"></i>&nbsp;&nbsp;取消&nbsp;&nbsp;</button>

		</div>
	</form>

</div>

<script type="text/javascript">
	$(function() {
		setSelet();
		setFile();
		if ($("[name='settlement_basic_rate_type']").val() == "单笔计费-按比例") {
			$("[name='settlement_basic_rate_percentage']").show();
			$("#settlement_basic_rate_percentage").show();
			$("[name='settlement_basic_rate_ceiling']").hide();
			$("#settlement_basic_rate_ceiling").hide();
		} else {
			$("[name='settlement_basic_rate_percentage']").hide();
			$("[name='settlement_basic_rate_ceiling']").show();
		}
		$("[name='settlement_basic_rate_type']").change(function() {
			if ($(this).val() == "单笔计费-按比例") {
				$("[name='settlement_basic_rate_percentage']").show();
				$("#settlement_basic_rate_percentage").show();
				$("[name='settlement_basic_rate_ceiling']").hide();
				$("#settlement_basic_rate_ceiling").hide();
			} else {
				$("[name='settlement_basic_rate_percentage']").hide();
				$("#settlement_basic_rate_percentage").hide();
				$("[name='settlement_basic_rate_ceiling']").show();
				$("#settlement_basic_rate_ceiling").show();
			}
		});
	});

	function submitForm() {
		$("#mform").submit();
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
</script>
	</body>

</html>