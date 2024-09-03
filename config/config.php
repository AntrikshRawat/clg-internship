<?php
session_start();

$siteurl = "http://" . $_SERVER['HTTP_HOST'] . '/playverse';

$title = "Webpage using php";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "my-db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("database connection error");
}
