  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Tambah Jenis Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							

							<label for="">Jenis Obat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jenis_obat" class="form-control" />	 
							</div>
                            </div>
					
							
						
								<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
							
							</form>
						
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								$jenis_obat= $_POST['jenis_obat'];
								
								
					
			
								
								$sql = $koneksi->query("insert into jenis_obat (jenis_obat) values('$jenis_obat')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=jenisobat";
										</script>
										
										<?php
								}
								}
							
							
							?>
										
										
										
								
								
								
								
								
