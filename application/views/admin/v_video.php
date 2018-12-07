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

		<div  id="content" class="content">
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
								<a href="#modal-alert" data-toggle="modal" data-target=".bd-example-modal-lg"  ><button style="width: 20%;" class="btn  btn-primary " type="submit">Insert</button></a>
								<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-alert">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Tambah Video (+)</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											</div>
									
											<div class="modal-body">
												<form method="post" action="<?php echo base_url('Admin/Video/simpanvideo') ?>">
												<div class="alert alert-danger m-b-0">
													<h5><i class="fa fa-info-circle"></i> </h5>
													<input type="text" class="form-control m-b-5" name="jdlGalery" placeholder="Masukan Judul" required="" />
													<br>
													<!-- <input type="text" class="form-control m-b-5" name="lnkGalery" placeholder="Masukan Link Video" required="" /> -->
													<br>
													<textarea class="summernote" name="lnkGalery"></textarea>
												</div>
												<div class="modal-footer">
													<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
													<a href="" ><button type="submit"  class="btn btn-danger" name="btnSimpan" >Action</button></a>
												</div>
												</form>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Video Controler <small>Manage your file here ...!</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-2 -->
				
				<!-- end col-2 -->
				<!-- begin col-10 -->
				<div class="col-lg-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<!-- <div class="alert alert-warning fade show">
							<button type="button" class="close" data-dismiss="alert">
							<span aria-hidden="true">&times;</span>
							</button>
							The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
						</div> -->
					<div class="panel-body">
							<table id="data-table-buttons" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th width="1%"></th>
										<th class="text-nowrap">Judul</th>
										<th width="1%" data-orderable="false">Video</th>
										<th class="text-nowrap">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($galery as $video ) {?>
									<tr class="odd gradeX">
										<td width="1%" class="f-s-600 text-inverse"><?php echo  $no++ ?></td>
										<td><?php echo $video->jdlGalery; ?></td>
										<td> <center><?php echo $video->link; ?></center></td>
										<td align="center">
											<a class="btn btn-default btn-icon btn-circle btn-lg" style="color: red;" title="hapus" href="<?php echo base_url('Admin/Video/delete/'.$video -> idGalery) ?>"><i class="fa fa-trash"></i></a>
											<a class="btn btn-default btn-icon btn-circle btn-lg" style="color: orange;" title="edit" href="#modal-alert<?php echo $video->idGalery ?>" data-toggle="modal"><i class="fa fa-brush"></i></a>
										</td>
										<div class="modal fade" id="modal-alert<?php echo $video->idGalery ?>">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Edit Video</h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													</div>
													<div class="modal-body">
														<form method="post" action="<?php echo base_url('Admin/Video/editvideo') ?>" enctype="multipart/form-data">
															<div class="alert alert-danger m-b-0">
																<h5><i class="fa fa-info-circle"></i> </h5>
																<input type="text" name="idGambar" hidden="" value="<?php echo $video->idGalery ?>">
																<span>Judul Gambar</span>
																<input type="text" class="form-control m-b-5" name="jdlGalery" placeholder="Masukan Judul" required="" value="<?php echo $video->jdlGalery ?>" />
																<!-- <span>Site Url</span>
																<input type="text" class="form-control m-b-5" name="link" placeholder="Masukan Judul" required="" value="<?php echo $video->link ?>" /> -->
																<input type="text" class="form-control m-b-5" name="idVideo" placeholder="Masukan Judul" required="" value="<?php echo $video->idGalery ?>" hidden />
															</div>
															<br>
															<div>
																<h3>Input Video</h3>
																<textarea class="summernote" name="link"><?php echo $video->link ?></textarea>
															</div>
															<div class="modal-footer">
																<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
																<a href="" ><button type="submit" name="btnSimpan"  class="btn btn-danger" >Action</button></a>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>

									</tr>
								<?php } ?>
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
			FormSummernote.init();
		});
	</script>
	
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
