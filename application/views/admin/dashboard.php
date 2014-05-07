<div class="container-fluid-sidebar">
	<div class="container-fluid">
		<div class="col-sm-12">
			<div class="row">
				<div class="page-header">
			  		<h1>Welcome Back <?php echo Session::get('user_firstname'); ?>!</h1>
			  		<p>You are logged in as an administrator for <?php echo Session::get('user_university'); ?></p>
				</div>

				<div class="alert alert-danger">You have (1) new messages!</div>

				<h3>Grant Applications</h3>

			<?php

			    $calendar_json = JSON_decode($dashboard_json, true);
			    $numItems = count($calendar_json);

					   for($i = 0; $i < ($numItems); $i++){ ?>

		      <div class="row timeline-movement">

		          <div class="col-sm-6  timeline-item" style="width: 90%;">
		              <div class="row">
		                  <div class="col-sm-11">
		                      <div class="timeline-panel credits">
		                            <h5><span class="importo"><?php echo $calendar_json[$i]['grantOrganization'];?></span></h5>
		                            <div class="progress">
								  		<div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $calendar_json[$i]['completion']."%";?>;">
								  			<?php echo $calendar_json[$i]['completion']."%";?>
								  		</div>
									</div>
		                      </div>

		                  </div>
		              </div>
		          </div>
		      </div>
		    <?php
		      }
		    ?>


			<h3>News</h3>

			<script type="text/javascript" src="http://output40.rssinclude.com/output?type=js&amp;id=861964&amp;hash=ccfb2999304414ead685afc6eb1626b4"></script>	


			<br>
			<br>
			</div>
		</div>
	</div>
</div>

</body>
</html>
