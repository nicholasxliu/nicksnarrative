<div class="container-fluid-sidebar">
	<div class="container-fluid">
		<div class="col-sm-12">
			<div class="row">
				<div class="page-header">
			  		<h1>Welcome Back <?php echo Session::get('user_name'); ?>!</h1>
				</div>

				<div class="alert alert-danger">GRANT ORG DASHBOARD</div>

					<h3>Grant Applications</h3>
					<h5>NIH</h5>
				<div class="progress">
			  		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
			    	60%
			  		</div>
				</div>

					<h5>Grants.gov</h5>
				<div class="progress">
			  		<div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
			    60%
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>