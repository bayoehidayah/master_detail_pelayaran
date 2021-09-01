<?php
	$uri_1 = $this->uri->segment(1);
	$uri_2 = $this->uri->segment(2);
	$uri_3 = $this->uri->segment(3);
?>
<!DOCTYPE html>
<html>

<head>
	<title>EMKL</title>
	<!-- <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/style.css"> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/')?>menu/menustyle.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/')?>css/custom.css">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.8.0/css/ui.jqgrid.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/')?>css/jquery-ui-1.10.4.custom.min.css">
	<link rel="stylesheet" type="text/css" media="screen"
		href="<?= base_url('assets/')?>css/cupertino/jquery-ui-1.10.4.custom.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

	<script src="<?= base_url('assets/')?>js/jquery.min.js" type="text/ecmascript"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="<?= base_url('assets/')?>js/i18n/grid.locale-en.js" type="text/ecmascript"></script>
	<script src="<?= base_url('assets/')?>js/530/js/trirand/jquery.jqGrid.min.js" type="text/ecmascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	<script src="<?php echo base_url('assets/') ?>js/jquery.inputmask.bundle.js"></script>
	<link rel="stylesheet" type="text/css" media="screen"
		href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/')?>css/style.css">
	<style>
		.ui-tabs-anchor {
			font-size: 13.5px;
		}

		.judul {
			display: block;
			font-size: 1.5em;
			margin-block-start: 0.83em;
			margin-block-end: 0.83em;
			margin-inline-start: 0px;
			margin-inline-end: 0px;
			font-weight: bold;
		}

		.ui-jqgrid-btable.ui-common-table {
			font-size: 13px;
			text-transform: uppercase;
			/*font-style: italic;*/
		}

		tr {
			font-size: 12px;
		}

		#gs_nama_pelayaran {
			height: 26px;
			font-size: 12px;
			width: 95%;
			border-radius: 0;
			/*font-weight: unset;*/
			font-style: unset;
		}

		#gs_kode_pelayaran {
			height: 26px;
			font-size: 12px;
			width: 95%;
			border-radius: 0;
			font-style: none;
		}

		#gs_status {
			height: 26px;
			font-size: 12px;
			width: 95%;
			border-radius: 0;
			font-style: none;
		}

		#gs_thnberdiri {
			height: 26px;
			font-size: 12px;
			width: 95%;
			border-radius: 0;
			font-style: none;
		}

		#gs_modified_on {
			height: 26px;
			font-size: 12px;
			width: 95%;
			border-radius: 0;
			font-weight: unset;
		}

		table.ui-pg-table.navtable.ui-common-table {
			margin-right: 480px;
		}

		.ui-tabs-anchor {
			font-size: 13.5px;
		}

		span.ui-button-icon-primary.ui-icon.ui-icon-closethick {
			margin-top: 10px;
		}

		.ui-button-icon-space #text {
			display: none;
		}

		button .ui-button .ui-corner-all .ui-widget .ui-button-icon-only .ui-dialog-titlebar-close {
			text-decoration: none;
			display: none;
			margin-left: 10px;
		}

		#resetdatafilter.active {
			background-color: #d44d24;
			color: #080808;
		}

		#resetdatafilter:hover {
			background-color: #34d4f7;
			color: #ffffff;
			border: 1px solid #000000;
		}

		td.ui-search-clear {
			width: 25px;
		}

		td.ui-pg-button.ui-corner-all:hover {
			border-radius: 0;
		}

		#tabs {
			border-radius: 0;
		}

		.ui-jqgrid.ui-widget.ui-widget-content.ui-corner-all {
			border-radius: 0;
		}

		#plist48 {
			border-radius: 0;
		}

		.ui-tabs-nav.ui-corner-all.ui-helper-reset.ui-helper-clearfix.ui-widget-header {
			border-radius: 0;
		}

		@-moz-document url-prefix() {
			#gs_nama_pelayaran {
				font-weight: unset;
			}

			#gs_kode_pelayaran {
				font-weight: unset;
			}

			#gs_status {
				font-weight: unset;
			}

			#gs_thnberdiri {
				font-weight: unset;
			}

			#gs_modified_on {
				font-weight: unset;
			}

			.ui-jqgrid tr.jqgrow td {
				height: 25px;
			}
		}

	</style>

</head>

<header>
	<p></p>
	<h2 class="judul">EMKL | PELAYARAN</h2>
	<p></p>
	<div class="mynav">
		<ul>
			<li class="dropdown icon-home">
				<a href="javascript:void(0)">
					MASTER
				</a>
			</li>
		</ul>
	</div>
	<div style="margin:10px 0;"></div>
</header>

<body>
	<?php echo $content; ?>

	<!-- begin::Costum Script -->
	<script>
		function formatCurrency(amount, decimalCount = 2, decimal = ",", thousands = ".") {
			try {
				decimalCount = Math.abs(decimalCount);
				decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

				const negativeSign = amount < 0 ? "-" : "";

				let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
				let j = (i.length > 3) ? i.length % 3 : 0;

				return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" +
					thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
			} catch (e) {
				console.log(e)
			}
		}

	</script>
	<?php include($js); ?>
</body>

</html>
