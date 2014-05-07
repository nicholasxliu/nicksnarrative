<html>
<link href="css/bootstrap.min.css" rel="stylesheet">

<head>
<title>GrantYou</title>
</head>

<body>
<div class="container-fluid">
<div class="row">

<div class="col-xs-9">
<div class="page-header">

<h1>Application Submission</h1>
  <form action="applicationsubmissionaction.php" method="post" name="register">
  <table width="200" border="0">
  <tr>
  <tr>
    <td>Grant Name:</td>
    <td><input name="grantname" type="text" size="50" maxlength="200"></td>
  </tr>
  <tr>
    <td>User Name:</td>
    <td><input name="username" type="text" size="50" maxlength="200"></td>
  </tr>
  <tr>
    <td>Field 1:</td>
    <td> <input name="field1" type="text" size="50" maxlength="50"></td>
  </tr>
  <tr>
    <td>Field 2:</td>
    <td> <input name="field2" type="text" size="50" maxlength="50"></td>
  </tr>
  <tr>
    <td>Field 3:</td>
    <td> <input name="field3" type="text" size="50" maxlength="50"></td>
  </tr>


</table>

<input name="submit" type="submit" value="Submit">


</form>

</div>
</div>
</div>
</body>
</html>