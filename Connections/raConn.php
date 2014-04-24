<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_raConn = "213.171.218.167";
$database_raConn = "RuthAngusDB";
$username_raConn = "ruthangus";
$password_raConn = "PlanetHunt3r*";
$raConn = mysql_pconnect($hostname_raConn, $username_raConn, $password_raConn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>