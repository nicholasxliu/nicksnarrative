<form action="applicationpageaction.php" method="post">
<table>

<tr>
  <td>
  Grant Name:
  </td>
  <td>
  <input name="grantname" input type="text" id="$grantname" value="<?php echo($grantname) ?>">
  </td>
</tr>
<tr>
  <td>
  First Name:
  </td>
  <td>
  <input name="firstname" input type="text" id="$firstname" value="<?php echo($row['firstname']) ?>">
  </td>
</tr>
<tr>
  <td>
  Last Name:
  </td>
  <td>
  <input name="lastname" input type="text" id="$lastname" value="<?php echo($row['lastname']) ?>">
  </td>
</tr>
<tr>
  <td>
  Email:
  </td>
  <td>
  <input name="email" input type="text" id="$email" value="<?php echo($row['email']) ?>">
  </td>
</tr>
<tr>
  <td>
  Phone:
  </td>
  <td>
  <input name="phone" input type="phone" id="$phone" value="<?php echo($row['phone']) ?>">
  </td>
</tr>
  <td>
  Field 1:
  </td>
  <td>
  <input name="field1" input type="text" id="$field1" value="<?php echo($existingapp['field1']) ?>">
  </td>
<tr>
  <td>
  Field 2:
  </td>
  <td>
  <input name="field2" input type="text" id="$field2" value="<?php echo($existingapp['field2']) ?>">
  </td>
</tr>
<tr>
  <td>
  Field 3:
  </td>
  <td>
  <input name="field3" input type="text" id="$field3" value="<?php echo($existingapp['field3']) ?>">
  </td>
</tr>
</table>

<input name="save" type="submit" value="Save">
<input name="submit" type="submit" value="Submit">
</form>
