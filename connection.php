<?php
session_start();
  $DB = "test";
  $myCon = mysql_connect(
    'localhost',
    '', 
    ''
  );
  if ($myCon == false) die("Connection failed.");
  if (!mysql_select_db($DB, $myCon)) die("Selection failed.");
  mysql_set_charset ( "utf8", $myCon );
?>
