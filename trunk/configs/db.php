<?php

//----------------------------------------------------------------------------------------------------------------------------------//
// CONNECT TO THE DATABASE
//----------------------------------------------------------------------------------------------------------------------------------//
$link = mysql_connect('localhost', 'root', '') or die('Could not connect to mysql server.' );
mysql_select_db('attendance', $link) or die('Could not select database.');

?>