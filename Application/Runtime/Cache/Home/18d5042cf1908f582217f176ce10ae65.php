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

				<h1 class='pull-left'><i class='icon-briefcase'></i>&nbsp;&nbsp;<span>商户信息变更申请</span></h1>

				<div class="pull-right">

					<div class="btn-group">

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="row-fluid" style="border: none;font-weight: bold;">

		<div class="span2 box-quick-link green-background">

			<a href="/POS/index.php/home/merchant/applyChange">

				<div class="header">

					<div class="icon-pencil"></div>

				</div>

				<div class="content">申请变更</div>

			</a>

		</div>

	</div>

	<div class="row-fluid">
		<table id="table" class="datatable" data-striped="true" data-toggle="table" data-url="/POS/index.php/home/merchant/getChangeReportList" data-show-columns="true" data-search="true" data-show-refresh="true" data-show-toggle="true" data-pagination="true" data-click-to-select="true"
			data-single-select="true" data-show-export="false">
			<thead>
				<tr>
					<th data-align="center" data-field="change_serial_num" data-formatter="noFormatter">工单编号</th>
					<th data-field="basic_busi_no">商户号</th>
					<th data-field="basic_busi_name">商户名称</th>
					<!--<th data-field="col2">维护业务员</th>-->
					<th data-field="basic_busi_type">商户类别</th>
					<th data-field="insertdate">申请时间</th>
					<th data-field="merchant_change_datetime">审核时间</th>
					<th data-field="merchant_change_state">审核状态</th>
					<th data-align="center" data-field="op" data-formatter="operateFormatter">操作</th>
				</tr>
			</thead>
		</table>
	</div>

	<!--<hr />-->

</div>

<div class='modal hide fade' id='modal-example' role='dialog' tabindex='-1'>

	<div class='modal-header'>

		<button class='close' data-dismiss='modal' type='button'>&times;</button>

		<h3>询问</h3>

	</div>

	<div class='modal-body'>

		<p>确认删除该条变更申请？</p>

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

		<p>确认审核通过？</p>

	</div>

	<div class='modal-footer'>

		<button class='btn' data-dismiss='modal'>取消</button>

		<button class='btn btn-success' onclick="btnConfirmedApprove()">确认</button>

	</div>

</div>

<script type="text/javascript">
	var rowIndexLastSeleted;
	var mbRole = "<?php echo ($mbRole); ?>";
	var mbID = "<?php echo ($mbID); ?>";
	$(function() {
		if (mbRole == "外勤" || mbRole == "内勤") {
			$("#table").bootstrapTable('hideColumn', 'op');
		}
	});

	function operateFormatter(value, row, index) {
		var hidden = "";
		var approveHidden = "";
		var removeHidden = "";
		var confirmHidden = "";
		var changeHidden = "";
		if (row.merchant_change_state == "待审核") {
			confirmHidden = " hidden ";
			changeHidden = " hidden ";
		} else if (row.merchant_change_state == "审核通过") {
			approveHidden = " hidden ";
			changeHidden = " hidden ";
		} else if (row.merchant_change_state == "经理同意") {
			approveHidden = " hidden ";
			confirmHidden = " hidden ";
		} else if (row.merchant_change_state == "完成变更") {
			hidden = " hidden ";
		}
		if (mbRole != "经理") {
			confirmHidden = " hidden ";
		}
		return [
			' <div class="btn-group">',
			'<a style="min-width:60px" data-toggle="modal" href="#modal-example" class="' + removeHidden + 'btn btn-danger ' + hidden + '" onclick="btnAsk4remove(' + index + ')">',
			'<i class="icon-remove"></i>',
			'&nbsp;&nbsp;删除',
			'</a>',
			'<a style="min-width:60px" data-toggle="modal" href="#modal-example2" class="' + approveHidden + 'btn btn-success ' + hidden + '" onclick="btnAsk4approve(' + index + ')">',
			'<i class="icon-ok"></i>',
			'&nbsp;&nbsp;审批',
			'</a>',
			'<a style="min-width:60px" class="' + confirmHidden + 'btn btn-warning ' + hidden + '" onclick="btnAsk4confirm(' + index + ')">',
			'<i class="icon-ok"></i>',
			'&nbsp;&nbsp;同意',
			'</a>',
			'<a style="min-width:60px" class="' + changeHidden + 'btn btn-info ' + hidden + '" onclick="btnAsk4change(' + index + ')">',
			'<i class="icon-ok"></i>',
			'&nbsp;&nbsp;变更',
			'</a>',
			'</div>'
		].join('');
	};

	function noFormatter(value, row, index) {
		return [
			'<a class="text-red" href="/POS/index.php/home/merchant/showChangeDetail?serialNumber=',
			value,
			'">',
			value,
			'</a>'
		].join('');
	};

	function btnAsk4remove(index) {
		//		alert(index);
		rowIndexLastSeleted = index;
	};

	function btnConfirmedRemove() {
		var row = $("#table").bootstrapTable('getData')[rowIndexLastSeleted];
		console.log(row);
		window.location = "/POS/index.php/home/merchant/deleteChangeReport?serialNumber=" + row['change_serial_num'];
	};

	function btnAsk4approve(index) {
		//		alert(index);
		rowIndexLastSeleted = index;
	};

	function btnConfirmedApprove() {
		var row = $("#table").bootstrapTable('getData')[rowIndexLastSeleted];
		console.log(row);
		window.location = "/POS/index.php/home/merchant/saveApproveChange?serialNumber=" + row['change_serial_num'];
	}

	function btnAsk4confirm(index) {
		var row = $("#table").bootstrapTable('getData')[index];
		bootbox.confirm("同意变更？",
			'取消',
			'确认',
			function(r) {
				if (r == true) {
					window.location = "/POS/index.php/home/merchant/saveConfirmChange?serialNumber=" + row['change_serial_num'];
				}
			});
	}
	
	function btnAsk4change(index) {
		var row = $("#table").bootstrapTable('getData')[index];
		bootbox.confirm("确认变更？",
			'取消',
			'确认',
			function(r) {
				if (r == true) {
					window.location = "/POS/index.php/home/merchant/change?serialNumber=" + row['change_serial_num'];
				}
			});
	}
</script>
	</body>

</html>