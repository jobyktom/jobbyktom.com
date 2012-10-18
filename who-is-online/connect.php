<?php

/* Database config */

$db_host = 'localhost';
$db_user = 'jobbyktom_com';
$db_pass = 'housepony200';
$db_name = 'jobbyktom_com';

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('U');

mysql_set_charset('utf8');
mysql_select_db($db_name,$link);

?>