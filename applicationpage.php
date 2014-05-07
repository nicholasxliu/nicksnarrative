<?php
$grantname = $_GET["name"];


$existingappquery = mysql_query("SELECT * FROM applicationinfo WHERE (grantname like '$grantname') AND (username like '$username')");
$existingapp = mysql_fetch_assoc($existingappquery);

?>

<html>

<link href="css/bootstrap.min.css" rel="stylesheet">


<body>

<div class="container-fluid">
<div class="row">

<?php include('toolbar.inc') ?>

<div class="col-xs-9">
<div class="page-header">
  <h1>Grant Application</h1>
</div>

<h3><?php echo($grantname); ?> Application</h3>

<?php
if (mysql_num_rows($existingappquery)==0){
  echo "Please start your new application.";
  $newappquery = "INSERT INTO applicationinfo(username, grantname, field1, field2, field3) VALUES ('$username','$grantname','','','')";
  mysql_query($newappquery);
  include('applicationpageexisting.inc');
}
elseif ($existingapp['submissionstatus']==0){
  echo "Please continue your existing application.";
  include('applicationpageexisting.inc');
}
else{
  echo "Application already submitted.";
}
?>

</div>
</body>
</html>