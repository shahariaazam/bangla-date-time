<?php
require_once("BanglaDateTime.php");
$BanglaDate=new ShowBanglaDateTime();
echo $BanglaDate->bangla_date_time(date(H));
?>