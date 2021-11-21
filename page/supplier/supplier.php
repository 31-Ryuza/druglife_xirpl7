




 <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-0 text-gray-800" style="margin-bottom: 3rem;">Data Master / Data Suppiler</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4" style="margin-top: 1rem;">
            <div class="card-header py-3">
            <a href="?page=supplier&aksi=tambahsupplier" class="btn btn-success" >Tambah Data Supplier</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Kode Supplier</th>
											<th>Nama Supplier</th>
											<th>Alamat</th>
											<th>Telepon</th>
											<th>Pengaturan</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tb_supplier");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_supplier'] ?></td>
											<td><?php echo $data['nama_supplier'] ?></td>
											<td><?php echo $data['alamat'] ?></td>
											<td><?php echo $data['telepon'] ?></td>
                                         

											<td>
											<a href="?page=supplier&aksi=ubahsupplier&kode_supplier=<?php echo $data['kode_supplier'] ?>" class="btn btn-success" ><i class="fas fa-fw fa-edit"></i></a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=supplier&aksi=hapussupplier&id=<?php echo $data['kode_supplier'] ?>" class="btn btn-danger" ><i class="fas fa-fw fa-trash-alt"></i></a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












