<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Content area -->
	<div class="content">

		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Data Kategori Artikel</h4>
						<div class="heading-elements">
							<a href="kategori_tambah.php" class="btn btn-sm btn-primary"><i class="icon-plus22"></i> TAMBAH</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th width="1%">No</th>
										<th width="15%">NAMA</th>
										<th width="2%">OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1; 
									$data = mysqli_query($koneksi,"select * from kategori");		
									while($d=mysqli_fetch_array($data)){
										?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $d['kategori'] ?></td>		
											<td>				
												<?php if($d['kategori_id'] != 1){ ?>					
													<a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="kategori_edit.php?id=<?php echo $d['kategori_id'];?>"><i class="icon-wrench3"></i></a>
													<a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="kategori_hapus.php?id=<?php echo $d['kategori_id'];?>"><i class="icon-trash-alt"></i></a>
												<?php } ?>
											</td>
										</tr>
										<?php
									}
									?>
								</tbody>
							</table>
						</div>					
					</div>					
				</div>	


			</div>

		</div>		

		<div class="footer text-muted">
			
		</div>

	</div>
</div>

<?php include 'footer.php'; ?>