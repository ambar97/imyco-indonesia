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
								<a href="#modal-alert" data-toggle="modal" ><button style="width: 20%;" class="btn  btn-primary " type="submit">Insert</button></a>
								<div class="modal fade" id="modal-alert">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Alert Header</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											</div>

											<div class="modal-body">
												<form method="post" action="<?php echo base_url('Admin/Galeri/simpanfoto') ?>" enctype="multipart/form-data">
													<div class="alert alert-danger m-b-0">
														<h5><i class="fa fa-info-circle"></i> </h5>
														<input type="text" class="form-control m-b-5" name="jdlGalery" placeholder="Masukan Judul" required="" />
														<span>Masukan Gambar</span>
														<br>
														<input type="file" id="input-file-now" name="link" required="" />
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

							</div>
						</div>
					</div>
				</div>
			</div> 
			<h1 class="page-header">Photo Controler <small>Manage your file here ...!</small></h1>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-inverse">
						<div class="panel-body">
							<table id="data-table-buttons" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th width="1%"></th>
										<th class="text-nowrap">Judul</th>
										<th width="1%" data-orderable="false">Gambar</th>
										<th class="text-nowrap">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($galery as $foto ) {?>
										<tr class="odd gradeX">
											<td width="1%" class="f-s-600 text-inverse"><?php echo  $no++ ?></td>
											<td><?php echo $foto->jdlGalery; ?></td>
											<td width="1%" class="with-img"><img src="<?php echo base_url().$foto->link ?>" class="img-rounded height-30" /></td>
											<td >
												<div align="center">
													<!-- btn delete -->
													<a class="btn btn-default btn-icon btn-circle btn-lg" style="color: red;" title="hapus" href=""><i class="fa fa-trash"></i></a>

													<!-- btn edit -->

													<a class="btn btn-default btn-icon btn-circle btn-lg" style="color: orange;" title="edit" href="#modal-alert<?php echo $foto->idGalery ?>" data-toggle="modal"><i class="fa fa-brush"></i></a>	
												</div>
												
												<div class="modal fade" id="modal-alert<?php echo $foto->idGalery ?>">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Alert Header</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															</div>

															<div class="modal-body">
																<form method="post" action="<?php echo base_url('Admin/Galeri/simpanfoto') ?>" enctype="multipart/form-data">
																	<div class="alert alert-danger m-b-0">
																		<h5><i class="fa fa-info-circle"></i> </h5>
																		<input type="text" name="idGambar" hidden="" value="<?php echo $foto->idGalery ?>">
																		<input type="text" class="form-control m-b-5" name="jdlGalery" placeholder="Masukan Judul" required="" value="<?php echo $foto->jdlGalery ?>" />
																		<span>Masukan Gambar</span>
																		<br>
																		<input type="file" id="input-file-now" name="link" required=""/>
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

											</td>
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
