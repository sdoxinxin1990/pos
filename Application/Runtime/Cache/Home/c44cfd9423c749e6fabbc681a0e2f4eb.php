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
		width: 80%;
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
	
	.span1 {
		margin-left: 0!important;
		min-width: 72px;
	}
	
	.content {
		line-height: 21px;
		font-weight: bold;
	}
</style>

<div class='container-fluid'>

	<form action="" method="post">
		<div class='row-fluid'>
			<div class='span12'>
				&nbsp;&nbsp;<i class='icon-user'></i>&nbsp;&nbsp;商户信息
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span1'>
				&nbsp;&nbsp;商户名称：
			</div>
			<div class='span2 right-border'>
				<input type="text" id="" value="<?php echo ($data["basic_busi_name"]); ?>" readonly="readonly" />
			</div>
			<div class='span1'>
				&nbsp;&nbsp;商户号：
			</div>
			<div class='span2 right-border'>
				<input type="text" id="" value="<?php echo ($data["basic_busi_no"]); ?>" readonly="readonly" />
			</div>
			<div class='span1'>
				&nbsp;&nbsp;注册名称：
			</div>
			<div class='span2 right-border'>
				<input type="text" id="" value="<?php echo ($data["basic_registered_name"]); ?>" readonly="readonly" />
			</div>
			<div class='span1'>
				&nbsp;&nbsp;业务员：
			</div>
			<div class='span2'>
				<input type="text" id="" value="<?php echo ($data["real_name"]); ?>" readonly="readonly" />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span1'>
				&nbsp;&nbsp;终端数量：
			</div>
			<div class='span2 right-border'>
				<input type="text" id="" value="<?php echo ($data["pos_num"]); ?>" readonly="readonly" />
			</div>
			<div class='span1'>
				&nbsp;&nbsp;无线台数：
			</div>
			<div class='span2 right-border'>
				<input type="text" id="" value="<?php echo ($data["wireless_pos_num"]); ?>" readonly="readonly" />
			</div>
			<div class='span1'>
				&nbsp;&nbsp;有线台数：
			</div>
			<div class='span2'>
				<input type="text" id="" value="<?php echo ($data["wire_pos_num"]); ?>" readonly="readonly" />
			</div>
		</div>

		<div class='row-fluid'>
			<div class='span1'>
				&nbsp;&nbsp;已绑终端：
			</div>
			<div class='span2 right-border'>
				<input type="text" id="" value="<?php echo ($data["binding_pos_num"]); ?>" readonly="readonly" />
			</div>
			<div class='span1'>
				&nbsp;&nbsp;已绑无线：
			</div>
			<div class='span2 right-border'>
				<input type="text" id="" value="<?php echo ($data["binding_wireless_pos_num"]); ?>" readonly="readonly" />
			</div>
			<div class='span1'>
				&nbsp;&nbsp;已绑有线：
			</div>
			<div class='span2'>
				<input type="text" id="" value="<?php echo ($data["binding_wire_pos_num"]); ?>" readonly="readonly" />
			</div>
		</div>

	</form>

	<!--<div class="span12 box box-transparent" style="margin-left: 0;border: none;">-->

	<div id="op_area" class="row-fluid" style="border: none;">

		<div class="span2 box-quick-link blue-background op">

			<a href="#">

				<div class="header">

					<div class="icon-wrench"></div>

				</div>

				<div class="content">装机</div>

			</a>

		</div>

		<div class="span2 box-quick-link green-background op">

			<a href="#">

				<div class="header">

					<div class="icon-plus-sign"></div>

				</div>

				<div class="content">增机</div>

			</a>

		</div>

		<div class="span2 box-quick-link orange-background op">

			<a href="#">

				<div class="header">

					<div class="icon-minus-sign"></div>

				</div>

				<div class="content">撤机</div>

			</a>

		</div>

		<!--<div class="span2 box-quick-link purple-background op">

			<a href="#">

				<div class="header">

					<div class="icon-refresh"></div>

				</div>

				<div class="content">类型换机</div>

			</a>

		</div>-->

		<div class="span2 box-quick-link purple-background op">

			<a href="#">

				<div class="header">

					<div class="icon-reply"></div>

				</div>

				<div class="content">还机</div>

			</a>

		</div>

		<div class="span2 box-quick-link red-background op">

			<a href="#">

				<div class="header">

					<div class="icon-remove-sign"></div>

				</div>

				<div class="content">故障解绑</div>

			</a>

		</div>

		<div class="span2 box-quick-link muted-background boss op">

			<a href="#">

				<div class="header">

					<div class="icon-cog"></div>

				</div>

				<div class="content">变更</div>

			</a>

		</div>

	</div>

	<hr />

	<!--</div>-->

	<div class="row-fluid" style="border: none;">
		<table id="table" class="datatable" data-striped="false" data-toggle="table" data-url="/POS/index.php/home/p_o_s/getPosListByMerchantUUID?merchantUUID=<?php echo ($data["uuid"]); ?>" data-show-columns="false" data-search="false" data-show-refresh="false" data-show-toggle="false" data-pagination="false"
			data-click-to-select="true" data-single-select="true" data-show-export="false">
			<thead>
				<tr>
					<th data-checkbox="true" data-field="ck"></th>
					<th data-align="center" data-field="no" data-formatter="noFormatter">序号</th>
					<th data-field="sn_number">SN号</th>
					<th data-field="sim_number">SIM卡号</th>
					<th data-field="terminal_number">终端号</th>
					<th data-field="terminal_type">终端类型</th>
					<th data-field="terminal_model">终端型号</th>
					<th data-field="available_type">可用状态</th>
					<th data-field="binding_state">绑定状态</th>
					<th data-field="binding_time">绑定时间</th>
					<th data-field="installed_state">装机状态</th>

					<th data-field="old_sn_number">待归还机具SN号</th>
					<th data-field="old_sim_number">待归还机具SIM卡号</th>

				</tr>
			</thead>
		</table>
	</div>

</div>

<script>
	var mbRole = "<?php echo ($mbRole); ?>";
	var mbID = "<?php echo ($mbID); ?>";
	$(function() {
		initHidden();
		initOP();
	});

	function initHidden() {
		if (mbRole == "外勤") {
			$("#op_area").hide();
			$("#table").bootstrapTable('hideColumn', 'ck');
		} else if (mbRole == "内勤"||mbRole == "审批") {
			$(".boss").hide();
		} else {}
	};

	function noFormatter(value, row, index) {
		return index + 1;
	};

	function initOP() {
		$('.op').each(function(index) {
			$(this).click(function() {
				switch (index) {
					case 0:
						var rows = $("#table").bootstrapTable('getSelections');
						if (rows.length > 0) {
							if (rows[0]['installed_state'] == '待装机') {
								window.location = "/POS/index.php/home/p_o_s/showOP?op=" + index + "&posUUID=" + rows[0]['pos_uuid'];
							}
						}
						break;
					case 1:
						window.location = "/POS/index.php/home/p_o_s/showOP?op=" + index + "&posUUID=<?php echo ($data["uuid"]); ?>";
						break;
					case 2:
						var rows = $("#table").bootstrapTable('getSelections');
						if (rows.length > 0) {
							if (rows[0]['installed_state'] == '已装机') {
								bootbox.confirm("确认撤机？",
									'取消',
									'确认',
									function(r) {
										if (r == true) {
											window.location = "/POS/index.php/home/p_o_s/saveRemove?merchantUUID=<?php echo ($data["uuid"]); ?>&posUUID=" + rows[0]['pos_uuid'];
										}
									});
							}
						}
						break;
					case 3:
						//hmx20160610还机
						var rows = $("#table").bootstrapTable('getSelections');
						if (rows.length > 0) {
							//							if (rows[0]['installed_state'] == '已装机') {
							//							window.location = "/POS/index.php/home/p_o_s/showOP?op=" + index + "&posUUID=" + rows[0]['pos_uuid'];
							//							}
							bootbox.confirm("确认还机？",
									'取消',
									'确认',
									function(r) {
										if (r == true) {
											window.location = "/POS/index.php/home/p_o_s/saveReturn?merchantUUID=<?php echo ($data["uuid"]); ?>&posUUID=" + rows[0]['pos_uuid'];
										}
									});
						}
						break;
					case 4:
						var rows = $("#table").bootstrapTable('getSelections');
						if (rows.length > 0) {
							if (rows[0]['installed_state'] == '已装机') {
								bootbox.confirm("确认解绑？",
									'取消',
									'确认',
									function(r) {
										if (r == true) {
											window.location = "/POS/index.php/home/p_o_s/saveUnbind?merchantUUID=<?php echo ($data["uuid"]); ?>&posUUID=" + rows[0]['pos_uuid'];
										}
									});
							}
						}
						break;
					case 5:
						var rows = $("#table").bootstrapTable('getSelections');
						if (rows.length > 0) {
							window.location = "/POS/index.php/home/p_o_s/showOP?op=" + index + "&posUUID=" + rows[0]['pos_uuid'];
						}
						break;
					default:
						break;
				}
			})
		})
	}
</script>
	</body>

</html>