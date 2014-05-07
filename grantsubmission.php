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

<h1>Grant Submission</h1>
  <form action="grantsubmissionaction.php" method="post" name="register">
  <table width="200" border="0">
  <tr>
  <tr>
    <td>Grant Name:</td>
    <td><input name="grantname" type="text" size="50" maxlength="200"></td>
  </tr>
  <tr>
    <td>Organization Name:</td>
    <td><input name="orgname" type="text" size="50" maxlength="200"></td>
  </tr>
  <tr>
    <td>Public/Private:</td>
  </tr>
  <tr>
    <td><input name="publicprivate" type="radio" value="public">Public</td>
    <td><input name="publicprivate" type="radio" value="private">Private</td>
  </tr>
  <tr>
    <td>Keyword 1:</td>
    <td> <input name="keyword1" type="text" size="50" maxlength="50"></td>
  </tr>
  <tr>
    <td>Keyword 2:</td>
    <td> <input name="keyword2" type="text" size="50" maxlength="50"></td>
  </tr>
  <tr>
    <td>Keyword 3:</td>
    <td> <input name="keyword3" type="text" size="50" maxlength="50"></td>
  </tr>


</table>

<input name="submit" type="submit" value="Submit">


</form>

</div>
</div>
</div>
</body>
</html>