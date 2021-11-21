

<?php
 $id = $_GET['id'];
 $sql2 = $koneksi->query("select * from satuan where id = '$id'");
 $tampil = $sql2->fetch_assoc();
 
 $level = $tampil['level'];

 
 
 
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Ubah Satuan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">ID</label>
                            <div class="form-group">
                               <div class="form-line">
                                  <input type="text" name="id" class="form-control" id="id" value="<?php echo $tampil['id']; ?>" readonly />	 
							</div>
                            </div>
							
								
							<label for="">Satuan</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="satuan" value="<?php echo $tampil['satuan']; ?>" class="form-control" /> 	 
							</div>
                            </div>		
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
							
							</form>
							
							
							
							<?php
							
								if (isset($_POST['simpan'])) {
		
								$id= $_POST['id'];
								$satuan= $_POST['satuan'];
								

								$sql = $koneksi->query("update satuan set satuan='$satuan' where id='$id'"); 
								
								if ($sql2) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=satuanobat";
										</script>
										
										<?php
								}
							}
							?>
										
										
										
										
								
								
								
								
								
