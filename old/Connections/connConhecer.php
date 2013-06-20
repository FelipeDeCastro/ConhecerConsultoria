<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connConhecer = "localhost";
$database_connConhecer = "conhecer_forms";
$username_connConhecer = "conhecer_admin";
$password_connConhecer = "s4d92x8d";
$connConhecer = mysql_pconnect($hostname_connConhecer, $username_connConhecer, $password_connConhecer) or trigger_error(mysql_error(),E_USER_ERROR); 
?>