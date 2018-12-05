<?php $this->load->view('admin/part/head') ?>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(<?php echo base_url() ?>master/admin/assets/img/login-bg/login-bg-11.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>IMyCo</b> Admin App</h4>
					<p>
						
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>IMyCo</b> Admin
						<!-- <small>responsive bootstrap 3 admin template</small> -->
					</div>
					<div class="icon">
						<i class="fa fa-sign-in"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form action="<?php echo base_url('Login/melbu') ?>" method="post" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<input type="text" class="form-control form-control-lg" placeholder="Email Address" required name="username" />
						</div>
						<div class="form-group m-b-15">
							<input name="psw" type="password" class="form-control form-control-lg" placeholder="Password" required />
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" value="" />
							<label for="remember_me_checkbox">
							Remember Me
							</label>
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn btn-success btn-block btn-lg">Sign In</button>
						</div>
						<!-- <div class="m-t-20 m-b-40 p-b-40 text-inverse">
							Not a member yet? Click <a href="register_v3.html" class="text-success">here</a> to register.
						</div> -->
						<hr />
						<p class="text-center text-grey-darker">
							&copy; Jemberkita All Right Reserved 2018
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url() ?>master/admin/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url() ?>master/admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url() ?>master/admin/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url() ?>master/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url() ?>master/admin/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?php echo base_url() ?>master/admin/assets/js/theme/default.min.js"></script>
	<script src="<?php echo base_url() ?>master/admin/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','<?php echo base_url() ?>master/admin/www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<?php $this->load->view('admin/part/codejs') ?>
</body>