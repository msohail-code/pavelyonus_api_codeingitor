<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome Here!</h1>

	<div id="body">
		<ol>
			<li><a href="<?php echo base_url("getdata/current_time"); ?>">Current server time</a></li>
			<li><a href="<?php echo base_url("Api_apikeys/"); ?>">Api_Apikeys</a>
				<ol>
					<li><a href="<?php echo base_url("Api_apikeys/"); ?>">/</a> GET</li>
					<li><a href="">/insert</a> Post</li>
					<li><a href="">/update/id</a> POST</li>
					<li><a href="">/delete/id</a> GET</li>
				</ol>
			</li>
			<li><a href="<?php echo base_url("Stamd_flagbit_ref/"); ?>">Stamd_flagbit_ref</a>
			<ol>
					<li><a href="<?php echo base_url("Api_apikeys/"); ?>">/</a> GET</li>
					<li><a href="">/insert</a> Post</li>
					<li><a href="">/update/id</a> POST</li>
					<li><a href="">/delete/id</a> GET</li>
				</ol></li>
			<li><a href="<?php echo base_url("Stamd_nutzerdetails/"); ?>">Stamd_nutzerdetails</a>
				<ol>
					<li><a href="<?php echo base_url("Api_apikeys/"); ?>">/</a> GET</li>
					<li><a href="">/insert</a> Post</li>
					<li><a href="">/update/id</a> POST</li>
					<li><a href="">/delete/id</a> GET</li>
				</ol>
			</li>
			<li><a href="<?php echo base_url("Transaktion_transaktionen/"); ?>">Transaktion_transaktionen</a>
				<ol>
					<li><a href="<?php echo base_url("Api_apikeys/"); ?>">/</a> GET</li>
					<li><a href="">/insert</a> Post</li>
					<li><a href="">/update/id</a> POST</li>
					<li><a href="">/delete/id</a> GET</li>
				</ol>
			</li>
			<li><a href="<?php echo base_url("Vertragsverw_vertrag/"); ?>">Vertragsverw_vertrag</a>
				<ol>
					<li><a href="<?php echo base_url("Api_apikeys/"); ?>">/</a> GET</li>
					<li><a href="">/insert</a> Post</li>
					<li><a href="">/update/id</a> POST</li>
					<li><a href="">/delete/id</a> GET</li>
				</ol>
			</li>
			<li><a href="<?php echo base_url("Vorgaben_datensatz_typ/"); ?>">Vorgaben_datensatz_typ</a>
				<ol>
					<li><a href="<?php echo base_url("Api_apikeys/"); ?>">/</a> GET</li>
					<li><a href="">/insert</a> Post</li>
					<li><a href="">/update/id</a> POST</li>
					<li><a href="">/delete/id</a> GET</li>
				</ol>
			</li>
			<li><a href="<?php echo base_url("Vorgaben_flagbit/"); ?>">Vorgaben_flagbit</a>
				<ol>
					<li><a href="<?php echo base_url("Api_apikeys/"); ?>">/</a> GET</li>
					<li><a href="">/insert</a> Post</li>
					<li><a href="">/update/id</a> POST</li>
					<li><a href="">/delete/id</a> GET</li>
				</ol>
			</li>
			<li><a href="<?php echo base_url("Vorgaben_zeitraum/"); ?>">Vorgaben_zeitraum</a>
				<ol>
					<li><a href="<?php echo base_url("Api_apikeys/"); ?>">/</a> GET</li>
					<li><a href="">/insert</a> Post</li>
					<li><a href="">/update/id</a> POST</li>
					<li><a href="">/delete/id</a> GET</li>
				</ol>
			</li>
			
		</ol>
	</div>

	
</div>

</body>
</html>