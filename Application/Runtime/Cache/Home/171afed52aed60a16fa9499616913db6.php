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
	.form-actions {
		background: none;
	}
	
	.box .box-content.box-double-padding {
		padding: 20px 20px 0 20px;
	}
	
	.control-label {
		font-weight: bold;
	}
	
	.form-control {
		margin-bottom: 2px!important;
	}
</style>
<div class='container-fluid'>

	<div class='row-fluid' id='content-wrapper'>

		<div class='span12'>

			<div class='page-header'>

				<h1 class='pull-left'><i class='icon-truck'></i>&nbsp;&nbsp;<span>商户信息录入</span></h1>

				<div class="pull-right">

					<!--<div class="btn-group">

						<a href="#" class="btn btn-white">录入企业商户</a>

						<a href="/POS/index.php/home/merchant/detail" class="btn btn-white">录入个体商户</a>

					</div>-->

				</div>

			</div>

		</div>

		<div class="row-fluid" style="border: none;font-weight: bold;">

			<div class="span2 box-quick-link green-background">

				<a href="/POS/index.php/home/merchant/showAdd?type=企业">

					<div class="header">

						<div class="icon-group"></div>

					</div>

					<div class="content">录入企业商户</div>

				</a>

			</div>

			<div class="span2 box-quick-link orange-background">

				<a href="/POS/index.php/home/merchant/showAdd?type=个体">

					<div class="header">

						<div class="icon-user"></div>

					</div>

					<div class="content">录入个体商户</div>

				</a>

			</div>

		</div>

		<div class="row-fluid hidden" style="margin-top: 30px;">

			<div class="span12 box bordered-box blue-border box-collapsed">

				<div class="box-header blue-background">

					<div class="title">

						<i class="icon-search"></i>&nbsp;&nbsp;查询

					</div>

					<div class="actions">

						<a href="#" class="btn box-remove btn-mini btn-link hidden"><i class="icon-remove"></i></a>

						<a href="#" class="btn box-collapse btn-mini btn-link"><i></i></a>

					</div>

				</div>

				<div class="box-content box-double-padding">

					<form class="form" style="margin-bottom: 0;">
						<fieldset>
							<div class='span3'>
								<div class='control-group'>
									<label class='control-label'>商户类别：</label>
									<div class='controls'>
										<select class='span12' name="">
											<option value="">-全部-</option>
											<option value="">A类商户</option>
											<option value="">T类商户</option>
										</select>
										<p class='help-block' />
									</div>
								</div>
							</div>
							<div class='span3'>
								<div class='control-group'>
									<label class='control-label'>审核状态：</label>
									<div class='controls'>
										<select class='span12' name="">
											<option value="">未提交</option>
										</select>
										<p class='help-block' />
									</div>
								</div>
							</div>
							<div class='span6'>
								<div class='control-group'>
									<label class='control-label'>结算周期：</label>
									<div class='controls'>
										<select class='span6' name="">
											<option value="">-不限-</option>
											<option value="">工作日（T）</option>
											<option value="">自然日（D）</option>
										</select>
										<i class="icon-plus"></i>
										<input class='span3' id='full-name' type='number' /> 个工作日
										<p class='help-block' />
									</div>
								</div>
							</div>

							<div class='span6' style="margin-left: 0;">
								<div class='control-group'>
									<label class='control-label'>提交日期：</label>
									<div class='controls'>
										<div class="datepicker input-append span5" id="datepicker" style="margin-top: -8px;">
											<input class="input-medium" data-format="yyyy-MM-dd" placeholder="起始时间" type="text">
											<span class="add-on"><i data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar"></i></span>
										</div>
										<div class="datepicker input-append span5" id="datepicker" style="margin-top: -8px;">
											<input class="input-medium" data-format="yyyy-MM-dd" placeholder="截止时间" type="text">
											<span class="add-on"><i data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar"></i></span>
										</div>
										<p class='help-block' />
									</div>
								</div>
							</div>
							<div class='span3'>
								<div class='control-group'>
									<label class='control-label'>账户类别：</label>
									<div class='controls'>
										<select class='span12' name="">
											<option value="">-不限-</option>
											<option value="">对公</option>
											<option value="">对私</option>
										</select>
										<p class='help-block' />
									</div>
								</div>
							</div>

							<div class='span12' style="margin-left: 0;">
								<div class='control-group'>
									<label class='control-label'>关键字：</label>
									<div class='controls'>
										<select class='span3' name="">
											<option value="">-不限-</option>
											<option value="">序号</option>
											<option value="">商户名称</option>
											<option value="">注册名称</option>
										</select>
										<input class='span6' id='full-name' type='text' />
										<p class='help-block' />
									</div>
								</div>
							</div>
						</fieldset>

						<div class="form-actions" style="margin-bottom: 0;">

							<div class="text-right">

								<div class="btn btn-white">

									<i class="icon-search"></i>&nbsp;&nbsp;查询

								</div>

							</div>

						</div>

					</form>

				</div>

			</div>

		</div>

		<div class="row-fluid">
			<table id="table" class="datatable" data-striped="true" data-toggle="table" data-url="/POS/index.php/home/merchant/getList?all=all" data-show-columns="true" data-search="true" data-show-refresh="true" data-show-toggle="true" data-pagination="true" data-show-export="true">
				<thead>
					<tr>
						<th data-align="center" data-field="serial_number" data-formatter="noFormatter">序号</th>
						<th data-field="basic_contract_channel">签约渠道</th>
						<th data-field="sign_contract_clerk">签约业务员</th>
						<th data-field="basic_busi_name">商户名称</th>
						<th data-field="basic_manag_nature">经营性质</th>
						<th data-field="create_datetime">更新时间</th>
						<th data-field="settlement_period_type_all">结算类型</th>
						<th data-field="settlement_account_type">账户类别</th>
						<th data-field="basic_busi_type">商户类别</th>
						<th data-field="state">审核状态</th>
						<th data-align="center" data-field="col10" data-formatter="operateFormatter">操作</th>
					</tr>
				</thead>
			</table>
		</div>

	</div>

</div>

<div class='modal hide fade' id='modal-example' role='dialog' tabindex='-1'>

	<div class='modal-header'>

		<button class='close' data-dismiss='modal' type='button'>&times;</button>

		<h3>询问</h3>

	</div>

	<div class='modal-body'>

		<p>确认删除该条商户录入信息？</p>

	</div>

	<div class='modal-footer'>

		<button class='btn' data-dismiss='modal'>取消</button>

		<button class='btn btn-danger' onclick="btnConfirmedRemove()">确认</button>

	</div>

</div>

<div class='modal hide fade' id='modal-example2' role='dialog' tabindex='-1'>

	<div class='modal-header'>

		<button class='close' data-dismiss='modal' type='button'>&times;</button>

		<h3>审批</h3>

	</div>

	<div class='modal-body'>

		<form action="/POS/index.php/home/merchant/saveAddApprove" method="post" id="from_approve" class='form' style='margin-bottom: 0;' />

		<div class="hidden">
			<input id="res" name="res" type="reset" />
			<input type="text" name="uuid" value="" />
		</div>

		<div class='control-group'>

			<label class='control-label'>商户名称：</label>

			<div class='controls'>

				<input class='span12' id="input_busi_name" type='text' style="width: 300px;" readonly="readonly" />

				<p class='help-block' />

			</div>

		</div>

		<div class='control-group'>

			<label class='control-label'>商户号：</label>

			<div class='controls'>

				<input class='span12' name="basic_busi_no" type='text' style="width: 300px;" />

				<p class='help-block' />

			</div>

		</div>

		<div class='control-group'>

			<label class='control-label'>商户类别：</label>

			<div class='controls'>

				<select name="basic_busi_type">
					<option value="A类">A类</option>
					<option value="A类">T类</option>
				</select>

				<p class='help-block' />

			</div>

		</div>

		</form>

	</div>

	<div class='modal-footer'>

		<button class='btn' data-dismiss='modal'>&nbsp;&nbsp;取消&nbsp;&nbsp;</button>

		<button class='btn btn-success' onclick="btnConfirmedApprove()"><i class="icon-save"></i>&nbsp;&nbsp;保存&nbsp;&nbsp;</button>

	</div>

</div>

<script type="text/javascript">
	var rowIndexLastSeleted;
	var mbRole = "<?php echo ($mbRole); ?>";
	var mbID = "<?php echo ($mbID); ?>";

	function operateFormatter(value, row, index) {
		var hidden = "";
		var editHidden = "";
		var approveHidden = "";
		var removeHidden = "";
		if (mbRole == "外勤") {
			approveHidden = " hidden ";
			if (row['create_member_uuid'] != mbID) {
				editHidden = " hidden ";
				removeHidden = " hidden ";
			}
		}
		if (mbRole == "内勤") {
			approveHidden = " hidden ";
		}
		if (row.state != "待审核") {
			hidden = "hidden";
		}
		return [
			' <div class="btn-group-vertical">',
			'<a style="min-width:60px" class="' + editHidden + 'btn btn-primary ' + hidden + '" onclick="btnShowDetail(' + index + ')">',
			'<i class="icon-pencil"></i>',
			'&nbsp;&nbsp;编辑',
			'</a>',
			'<a style="min-width:60px" data-toggle="modal" href="#modal-example" class="' + removeHidden + 'btn btn-danger ' + hidden + '" onclick="btnAsk4remove(' + index + ')">',
			'<i class="icon-remove"></i>',
			'&nbsp;&nbsp;删除',
			'</a>',
			'<a style="min-width:60px" data-toggle="modal" href="#modal-example2" class="' + approveHidden + 'btn btn-success ' + hidden + '" onclick="btnAsk4approve(' + index + ')">',
			'<i class="icon-ok"></i>',
			'&nbsp;&nbsp;审批',
			'</a>',
			'</div>'
		].join('');
	};

	function noFormatter(value, row, index) {
		return [
			'<a class="text-red" href="/POS/index.php/home/merchant/showDetail?readonly=readonly&serialNumber=',
			value,
			'">',
			value,
			'</a>'
		].join('');
	};

	function btnShowDetail(index) {
		//		alert("Contacts:" + index);
		var row = $("#table").bootstrapTable('getData')[index];
		console.log(row);
		window.location = "/POS/index.php/home/merchant/showDetail?readonly=&serialNumber=" + row['serial_number'];
	};

	function btnAsk4remove(index) {
		//		alert(index);
		rowIndexLastSeleted = index;
	};

	function btnAsk4approve(index) {
		//		alert(index);
		var row = $("#table").bootstrapTable('getData')[index];
		$("#input_busi_name").val(row['basic_busi_name']);
		$("[name='uuid']").val(row['uuid']);
		rowIndexLastSeleted = index;
	};

	function btnConfirmedRemove() {
		var row = $("#table").bootstrapTable('getData')[rowIndexLastSeleted];
		console.log(row);
		window.location = "/POS/index.php/home/merchant/delete?serialNumber=" + row['serial_number'];
		//		alert(rowIndexLastSeleted);
	};

	function btnConfirmedApprove() {
		//		var data = $("#from_approve").serialize();
		//		bootbox.alert(data);
		$("#from_approve").submit();
	}
</script>
	</body>

</html>