<?php

// Include database connection settings
include('config.inc');

// Check for existing user with the new id
$sql = "SELECT COUNT(*) FROM grantinfo WHERE grantname = '$_POST[grantname]'";
$result = mysql_query($sql);

if (!$result) {
error('A database error occurred in processing your '.
'submission.\\nIf this error persists, please '.
'contact john@example.com.');
}

if (@mysql_result($result,0,0)>0) {
error('A grant exists with your chosen Grant Name.\\n'.
'Please try another.');
}

$grantname=$_POST['grantname'];
$orgname=$_POST['orgname'];
if ($_POST['publicprivate']=="public"){
  $publicgrant=1;
}
else {
  $publicgrant=0;
}
$keyword1=$_POST['keyword1'];
$keyword2=$_POST['keyword2'];
$keyword3=$_POST['keyword3'];
$keywords[]={$keyword1, $keyword2, $keyword3};

$query = "INSERT INTO grantinfo(grantname, orgname, publicgrant, keyword1, keyword2, keyword3) VALUES ('$grantname','$orgname','$publicgrant','$keyword1','$keyword2','$keyword3')";
mysql_query($query);

mysql_close();
?>

<html>
<head>
<title> Info Submitted </title>
</head>
<body>
<p><strong>Information Submitted</strong></p>

<p>To return to submission page, click <a href="grantsubmission.php">here</a>.</p>
</body>
</html>