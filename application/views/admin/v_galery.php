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
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Managed Tables</a></li>
				<li class="breadcrumb-item active">Buttons</li>
			</ol>

			<h1 class="page-header">Insert Data<small></small></h1>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-inverse">	
						<div class="panel-body">
							<div >
								<a href="#" ><button style="width: 20%;" class="btn  btn-primary " type="submit">Insert</button></a>
							</div>
						</div>
					</div>
				</div>
			</div> 
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Photo Controler <small>Manage your file here ...!</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-2 -->
				
				<!-- end col-2 -->
				<!-- begin col-10 -->
				<div class="col-lg-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<!-- begin panel-heading -->
						
						<!-- end panel-heading -->
						<!-- begin alert -->
						<div class="alert alert-warning fade show">
							<button type="button" class="close" data-dismiss="alert">
							<span aria-hidden="true">&times;</span>
							</button>
							The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
						</div>
						<!-- end alert -->
						<!-- begin panel-body -->
						<div class="panel-body">
							<table id="data-table-buttons" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th width="1%"></th>
										<th width="1%" data-orderable="false"></th>
										<th class="text-nowrap">Judul</th>
										<th class="text-nowrap">Kategori</th>
										<th class="text-nowrap">Gambar</th>
										<th class="text-nowrap">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td width="1%" class="f-s-600 text-inverse">1</td>
										<td width="1%" class="with-img"><img src="<?php echo base_url()?>/master/admin/assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
										<td>Trident</td>
										<td>Internet Explorer 4.0</td>
										<td>Win 95+</td>
										<td align="center">
											<a class="btn btn-default btn-icon btn-circle btn-lg" style="color: red;" title="hapus" href=""><i class="fa fa-trash"></i></a>
											<a class="btn btn-default btn-icon btn-circle btn-lg" style="color: orange;" title="edit" href=""><i class="fa fa-brush"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- end panel-body -->
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
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
