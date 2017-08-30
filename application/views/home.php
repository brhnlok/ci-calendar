<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Calendar</title>
	<style type="text/css">
		table.calendarTable{
			margin: 0 auto;
			width: 500px;
		}
		.headingRow th{
			background: #186632;
			color: #fff;
			padding: 5px 0;
			text-align: center;
		}
		.headingRow a{
			color: #fff;
		}
		table.calendarTable tbody td{
			vertical-align: middle;
			text-align: center;
			padding: 20px;
			background: rgba(119, 244, 161,.7);
			border: 1px solid #000;
		}
		.weekdays td{
			background: #186632;
			color: #fff;
			padding: 5px 0;
			text-align: center;
			border-top: 1px solid #fff;
		}

	</style>
</head>
<body>
<?php
	echo $cal;
?>
</body>
</html>