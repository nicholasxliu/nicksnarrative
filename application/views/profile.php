<div class="container-fluid-sidebar">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="row">
        <div class="page-header">
          <h1>Your Profile</h1>
        </div>
        <h3>Personal Information</h3>
          <form enctype="multipart/form-data" action="profileaction" method="post" name="profile">
          <table id="searchtable">
          
          <tr>
            <td style="font-size:14px; width:200px;">
            First Name:
            </td>
            <td style="font-size:14px; width:200px;">
            <input name="firstname" input type="text" id="$firstname" value=<?php echo Session::get('user_firstname'); ?>>
            </td>
          </tr>

          <tr>
            <td style="font-size:14px; width:200px;">
            Last Name:
            </td>
            <td style="font-size:14px; width:200px;">
            <input name="lastname" input type="text" id="$lastname" value=<?php echo Session::get('user_lastname'); ?>>
            </td>
          </tr>

          <tr>
            <td style="font-size:14px; width:200px;">
            Email:
            </td>
            <td style="font-size:14px; width:200px;">
            <input name="email" input type="text" id="$email" value=<?php echo Session::get('user_email'); ?>>
            </td>
          </tr>

          <tr>
            <td style="font-size:14px; width:200px;">
            Phone:
            </td>
            <td style="font-size:14px; width:200px;">
            <input name="phone" input type="int" id="$phone" value=<?php echo Session::get('user_phone'); ?>>
            </td>
          </tr>

          <tr>
            <td style="font-size:14px; width:200px;">
            Upload Profile Picture:
            </td>
            <td style="font-size:14px; width:200px;">
              <input name="profilepicture" input type="file")>
            </td>
          </tr>
          </table>

          <input name="submit" type="submit" value="Save">
          </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
