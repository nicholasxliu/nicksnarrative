<?php


$grantname=$_POST['grantname'];
$orgname=$_POST['orgname'];
if ($_POST['publicprivate']=="public"){
  $publicgrant=1;
}
elseif ($_POST['publicprivate']=="private") {
  $publicgrant=0;
}
else {
  $publicgrant='%';
}
$keyword1=$_POST['keyword1'];
$keyword2=$_POST['keyword2'];
$keyword3=$_POST['keyword3'];


if ($grantname != ''){
	if (!mysql_fetch_assoc(mysql_query("SELECT * FROM grantinfo WHERE (grantname = '$grantname')"))){
		error('No grant with that name was found.');
	}
}
else{
	$grantname = '%';
}


if ($orgname != ''){
	if (!mysql_fetch_assoc(mysql_query("SELECT * FROM grantinfo WHERE (orgname = '$orgname')"))){
		error('No funding organization with that name was found.');
	}
}
else{
	$orgname = '%';
}


if (!mysql_fetch_assoc(mysql_query("SELECT * FROM grantinfo WHERE (keyword1 = '$keyword1')"))){
	$keyword1 = '%';
}

if (!mysql_fetch_assoc(mysql_query("SELECT * FROM grantinfo WHERE (keyword2 = '$keyword2')"))){
	$keyword2 = '%';
}

if (!mysql_fetch_assoc(mysql_query("SELECT * FROM grantinfo WHERE (keyword3 = '$keyword3')"))){
	$keyword3 = '%';
}

$searchresultsquery = mysql_query("SELECT * FROM grantinfo WHERE (grantname like '$grantname') AND (orgname like '$orgname') AND (publicgrant like '$publicgrant')");

if (mysql_num_rows($searchresultsquery) ==0){
  echo "No results found.";
}

while ($searchresults = mysql_fetch_assoc($searchresultsquery)){
  $grantnameresult[]=$searchresults["grantname"];
  $orgnameresult[]=$searchresults["orgname"];
}

?>

<html>
<link href="css/bootstrap.min.css" rel="stylesheet">


<body>

<div class="container-fluid">
<div class="row">

<?php include('toolbar.inc') ?>

<div class="col-xs-9">
<div class="page-header">
  <h1>Browse Grants</h1>
</div>

<h3>Search Results</h3>

<table>

<?php for($i = 0; $i<count($grantnameresult); $i++){ ?>

<tr>
  <td>
  Grant Name:
  </td>
  <td>
  Funding Organization Name:
  </td>
</tr>
<tr>
  <td>
  <a href="applicationpage.php?name=<?php echo $grantnameresult[$i]; ?>"><?php echo $grantnameresult[$i]; ?></a>
  </td>
  <td>
  <?php echo $orgnameresult[$i]; ?>
  </td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>
