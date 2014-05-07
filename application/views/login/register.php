  <div class="hero">
      <div class="container">
          <div class="col-lg-12">
            <h2></h2>
          </div>
      </div>
    <div class="hero-tab-images">
      <div class="hero-image active">
        <img src="../images/banners/banner_small.jpg" style="width: 100%; height: 200px;">
        </div>
  </div>
</div>


<div class="container">

<!-- echo out the system feedback (error and success messages) -->
<?php $this->renderFeedbackMessages(); ?>

<div class="row">
  <h2>Registration Form</h2>
  <form method="POST" action="<?php echo URL; ?>login/register_action" class="form-horizontal" name="register">
    <fieldset>

      <h3><p>Returning user? Click <a href="login.php">here</a> to login!</p></h3>

      <div class="form-group">
        <label class="col-md-1 control-label" for="firstname"></label>  
        <div class="col-md-12">
          <input id="username" name="firstname" type="text" size="25" maxlength="25" placeholder="First Name" class="form-control input-md" >
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="lastname"></label>  
        <div class="col-md-12">
          <input id="lastname" name="lastname" type="text" size="25" maxlength="25" placeholder="Last Name" class="form-control input-md" >
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="email"></label>  
        <div class="col-md-12">
          <input id="email" name="user_email" type="email" size="25" maxlength="40" placeholder="Email" class="form-control input-md" >
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="username"></label>  
        <div class="col-md-12">
          <input id="username" name="user_name" type="text" size="25" maxlength="25" placeholder="Username" class="form-control input-md" >
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="password"></label>  
        <div class="col-md-12">
          <input id="password" name="user_password_new" type="password" size="25" maxlength="25" placeholder="Password" class="form-control input-md" >
        </div>
      </div>

      <div class="form-group">
         <label class="col-md-1 control-label" for="password_repeat"></label>
         <div class="col-md-12">
           <input id="password_repeat" name="user_password_repeat" type="password" size="25" maxlength="25" placeholder="Repeat Password" class="form-control input-md" >
         </div>
      </div>

      <div class="form-group">
         <label class="col-md-1 control-label" for="university"></label>
         <div class="col-md-12">
           <input id="university" name="user_university" type="text" size="25" maxlength=50" placeholder="University Affiliation" class="form-control input-md" >
         </div>
      </div>

      <div class="radio">
          <label>
              <input id="user_account_type" name="user_account_type" type="radio" value=1>Professor
          </label>
      </div>

      <div class="radio">
          <label>
            <input id="user_account_type" name="user_account_type" type="radio" value=2 >University Administrator
          </label>
      </div>

      <div class="radio">
          <label>
            <input id="user_account_type" name="user_account_type" type="radio" value=0 >Grant Organization
          </label>
      </div>

      <button id="submit" name="submit" class="btn btn-block btn-success">Register</button>

    </fieldset>
  </form>
  <hr class="featurette-divider">	
</div> 
</div> 