<?php

// Include database connection settings
include('config.inc');

$grantname=$_POST['grantname'];
$username=$_POST['username'];
$field1=$_POST['field1'];
$field2=$_POST['field2'];
$field3=$_POST['field3'];

$query = "INSERT INTO applicationinfo(username, grantname, field1, field2, field3) VALUES ('$username','$grantname','$field1','$field2','$field3')";

mysql_query($query);

mysql_close();
?>

<html>
<head>
<title> Info Submitted </title>
</head>
<body>
<p><strong>