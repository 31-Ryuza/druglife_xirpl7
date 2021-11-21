

<?php
 $id = $_GET['id'];
 $sql2 = $koneksi->query("select * from jenis_obat where id = '$id'");
 $tampil = $sql2->fetch_assoc();
 
 $level = $tampil['level'];

 
 
 
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Ubah Jenis Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">ID Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                  <input type="text" name="id" class="form-control" id="id" value="<?php echo $tampil['id']; ?>" readonly />	 
							</div>
                            </div>
							
								
							<label for="">Jenis Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jenis_obat" value="<?php echo $tampil['jenis_obat']; ?>" class="form-control" /> 	 
							</div>
                            </div>		
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
							
							</form>
							
							
							
							<?php
							
								if (isset($_POST['simpan'])) {
		
								$id= $_POST['id'];
								$jenis_obat= $_POST['jenis_obat'];
								

								$sql = $koneksi->query("update jenis_obat set jenis_obat='$jenis_obat' where id='$id'"); 
								
								if ($sql2) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=jenisobat";
										</script>
										
										<?php
								}
							}
							?>
										
										
										
										
								
								
								
								
								
