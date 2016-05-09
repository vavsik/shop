<?php
$db_host = 'localhost';
$db_user = 'vavsik';
$db_pass = 'vavson55334';
$db_datebase = 'db_shop';

$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_datebase,$link) or die ("Нет соединения с БД".mysql_error());
mysql_set_charset('utf8');
?>