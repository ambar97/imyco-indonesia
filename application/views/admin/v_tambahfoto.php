<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v4.2/admin/html/table_manage_buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 03:37:38 GMT -->
<?php $this->load->view('admin/part/head');?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<?php $this->load->view('admin/part/header') ?>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<?php $this->load->view('admin/part/sidebar') ?>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		

		<!-- COntent -->
		

		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
<?php $this->load->view('admin/part/codejs') ?>
	<script>
		$(document).ready(function() {
			App.init();
			TableManageButtons.init();
		});
	</script>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','<?php echo base_url()?>/master/admin/<?php echo base_url()?>/master/admin/<?php echo base_url()?>/master/admin/<?php echo base_url()?>/master/admin/www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v4.2/admin/html/table_manage_buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 03:37:43 GMT -->
</html>
