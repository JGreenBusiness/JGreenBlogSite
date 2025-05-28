<?php
$title = $_POST['title'];
$content = $_POST['content'];
date_default_timezone_set("Australia/Sydney");
$date = date("d-m-Y_Hi");
$filename = "posts/{$date}.txt";

file_put_contents($filename, $title . "\n" . $content);
header("location: index.php");
exit();
