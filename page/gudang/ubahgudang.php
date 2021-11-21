

<?php
 $kode_obat = $_GET['kode_obat'];
 $sql2 = $koneksi->query("select * from gudang where kode_obat = '$kode_obat'");
 $tampil = $sql2->fetch_assoc();
 
 $level = $tampil['level'];

 
 
 
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Ubah Data</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Barang</label>
                            <div class="form-group">
                               <div class="form-line">
                                  <input type="text" name="kode_obat" class="form-control" id="kode_obat" value="<?php echo $tampil['kode_obat']; ?>" readonly />	 
							</div>
                            </div>
							
								
							<label for="">Nama Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_obat" value="<?php echo $tampil['nama_obat']; ?>" class="form-control" /> 	 
							</div>
                            </div>
				
							
							
						<label for="">Jenis Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="jenis_obat" value="<?php echo $tampil['jenis_obat'];?>" class="form-control" />
								
								<?php
								
								$sql = $koneksi -> query("select * from jenis_obat order by id");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id].$data[jenis_obat]'>$data[jenis_obat]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
							
                          
                                     
			
							<label for="">Satuan Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="satuan" value="<?php echo $tampil['satuan'];?>" class="form-control" />
								
								<?php
								
								$sql = $koneksi -> query("select * from satuan order by id");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id].$data[satuan]'>$data[satuan]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
						
							
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
							
							</form>
							
							
							
							<?php
							
								if (isset($_POST['simpan'])) {
		
								$kode_obat= $_POST['kode_obat'];
								$nama_obat= $_POST['nama_obat'];
								
								
								$jenis_obat= $_POST['jenis_obat'];
								$pecah_jenis = explode(".", $jenis_obat);
							
								$id = $pecah_jenis[0];
								$jenis_obat = $pecah_jenis[1];
								
							
								$satuan= $_POST['satuan'];
								$pecah_satuan = explode(".", $satuan);
							
								$id = $pecah_satuan[0];
								$satuan = $pecah_satuan[1];
								

								$sql = $koneksi->query("update gudang set kode_obat='$kode_obat', nama_obat='$nama_obat', jenis_obat='$jenis_obat', satuan='$satuan' where kode_obat='$kode_obat'"); 
								
								if ($sql2) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=gudang";
										</script>
										
										<?php
								}
							}
							?>
										
										
										
										
								
								
								
								
								
