<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<title>বাংলাতে সময় ও তারিখ</title>
</head>
<body>
	<?php
	require_once("BanglaDateTime.php");
	date_default_timezone_set('Asia/Dhaka');
	$BanglaDate=new ShowBanglaDateTime();
	
	echo $BanglaDate->bangla_date_time('2012-09-03 09:06:05');
	echo "<br />";
	echo $BanglaDate->bangla_date_time(date('d M Y h:i A'));
	?>
</body>
</html>
