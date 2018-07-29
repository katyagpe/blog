<?php
//datos para la conexion
define('DB_SERVER','mysql.hostinger.com.ar');
define('DB_NAME','u937498075_blog');
define('DB_USER','u937498075_katya');
define('DB_PASS','agosto1993');

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);

?>