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
						<h4 class="panel-title">Ganti Password</h4>
						<div class="heading-elements">
							<a href="index.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<form action="gantipassword_act.php" method="post">
								<table class="table">
									<tr>
										<th width="40%">Masukkan Password Baru</th>
										<td><input type="password" class="form-control" name="pass"></td>
									</tr>									
									<tr>
										<th></th>
										<td><input type="submit" value="SIMPAN" class="btn btn-primary btn-sm"></td>
									</tr>		
								</table>
							</form>
						</div>					
					</div>					
				</div>	


			</div>

		</div>		
	
		

	</div>
</div>

<?php include 'footer.php'; ?>