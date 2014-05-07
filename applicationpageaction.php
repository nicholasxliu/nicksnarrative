<?php

$queryuserinfo = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', phone='$phone' WHERE username='$username'";
mysql_query($queryuserinfo);

$queryappinfo = "UPDATE applicationinfo SET field1='$field1', field2 = '$field2', field3 = '$field3' WHERE (username='$username') AND (grantname='$grantname')";
mysql_query($queryappinfo);

if (isset($_POST['submit'])){
  $querysubmit = "UPDATE applicationinfo SET submissionstatus='1' WHERE (username='$username') AND (grantname='$grantname')";
mysql_query($querysubmit);
}

mysql_close();

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=applicationpage.php?name=' . $grantname . '">'; 
?>