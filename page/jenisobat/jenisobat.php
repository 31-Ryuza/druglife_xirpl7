
 <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-0 text-gray-800" style="margin-bottom: 3rem;">Data Master / Jenis Obat</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4" style="margin-top: 1rem;">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Jenis Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Jenis Obat</th>
											
											<th>Pengaturan</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from jenis_obat");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['jenis_obat'] ?></td>
											
                                         

											<td>
                      <a href="?page=jenisobat&aksi=ubahjenisobat&id=<?php echo $data['id'] ?>" class="btn btn-success" ><i class="fas fa-fw fa-edit"></i></a>
                      <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=jenisobat&aksi=hapusjenisobat&id=<?php echo $data['id'] ?>" class="btn btn-danger" ><i class="fas fa-fw fa-trash-alt"></i></a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=jenisobat&aksi=tambahjenis" class="btn btn-success" >Tambah Jenis Obat</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












