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
  <h2>Login Form</h2>
  <form method="POST" action="<?php echo URL; ?>login/login" class="form-horizontal">
    <fieldset>

      <h3><p>New user? Click <a href="<?php echo URL; ?>login/register">here</a> to register!</p></h3>

      <div class="form-group">
        <label class="col-md-1 control-label" for="username"></label>  
        <div class="col-md-12">
          <input id="username" name="user_name" type="text" placeholder="Username" class="form-control input-md">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="password"></label>
        <div class="col-md-12">
          <input id="password" name="user_password" type="password" placeholder="Password" class="form-control input-md">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="login"></label>
      <div class="col-md-5">
        <button id="login" name="login" class="btn btn-block btn-success">Login</button>
      </div>
      <div class="col-md-5">
        <button id="forpass" name="forpass" class="btn btn-block btn-warning">I forgot my password</button></div>  
      </div>
    </fieldset>
  </form>
  <hr class="featurette-divider">	
</div> 
</div> 
