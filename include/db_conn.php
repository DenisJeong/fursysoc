<?php
/*$dbhost = 'localhost';
$dbuser = 'fursysoc';
$dbpass = 'fursysoc34';
$dbname = 'fursysoc';
*/
//phpmyadmin url : uws64-126.cafe24.com/WebMysql

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'fursysoc';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$mysqli->set_charset("utf8");