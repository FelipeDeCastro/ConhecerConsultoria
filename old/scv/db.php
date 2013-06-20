<?php
$db_server   	= "localhost";
$db_user     	= "conhecer_admin";
$db_pass     	= "s4d92x8d";
$db_database 	= "conhecer_scv";
$db_conn 		= mysql_connect($db_server, $db_user, $db_pass);
mysql_select_db($db_database, $db_conn);
?>