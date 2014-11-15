<?php
/*
ini_set("display_errors", "on");
ini_set("short_open_tag", "off");

ini_set("output_buffering", "off");

ini_set("error_reporting", -1);

*/
$__mysql_username__ = "root";
$__mysql_password__ = "";
$__mysql_server__ = "localhost";
$__mysql_database__ = "sportsmanagement";

$db = new PDO('mysql:host=localhost;dbname=sportsmanagement;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
