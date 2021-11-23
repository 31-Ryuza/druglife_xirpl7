<?php 



$koneksi = new mysqli("localhost","root","","obat");
$no = mysqli_query($koneksi, "select kode_obat from gudang order by kode_obat desc");
$kdobat = mysqli_fetch_array($no);
$kode = $kdobat['kode_obat'];


$urut = substr($kode, 8, 3);
$tambah = (int) $urut + 1;
$bulan = date("m");
$tahun = date("y");

if(strlen($tambah) == 1){
	$format = "OBT-".$bulan.$tahun."00".$tambah;
} else if(strlen($tambah) == 2){
	$format = "OBT-".$bulan.$tahun."0".$tambah;
	
} else{
	$format = "OBT-".$bulan.$tahun.$tambah;

}



$jumlah = 0;

?>
							




 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Tambah Stok Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                  <input type="text" name="kode_obat" class="form-control" id="kode_obat" value="<?php echo $format; ?>" readonly />	 
							</div>
                            </div>
							
						
							
							<label for="">Nama Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_obat" class="form-control" />	 
							</div>
                            </div>
							
						<label for="">Jenis Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="jenis_obat" class="form-control" />
								<option value="">-- Pilih Jenis Obat  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from jenis_obat order by id");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id].$data[jenis_obat]'>$data[jenis_obat]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
							
                            <label for="">Jumlah</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jumlah" class="form-control" id="jumlah" />
                                     
									 
							</div>
                            </div>
                                     
						
							
						
                          
                              
				
							<label for="">Satuan Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="satuan" class="form-control" />
								<option value="">-- Pilih Satuan Obat --</option>
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
								
								$jumlah= $_POST['jumlah'];
								
								
								
								$satuan= $_POST['satuan'];
								$pecah_satuan = explode(".", $satuan);
							
								$id = $pecah_satuan[0];
								$satuan = $pecah_satuan[1];
								
								
								
								
								
						
								
								$sql = $koneksi->query("insert into gudang (kode_obat, nama_obat, jenis_obat, jumlah, satuan) values('$kode_obat','$nama_obat','$jenis_obat','$jumlah','$satuan')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=gudang";
										</script>
										
										<?php
								}
								}
							
							
							?>
										
										
										
								
								
								
								
								
