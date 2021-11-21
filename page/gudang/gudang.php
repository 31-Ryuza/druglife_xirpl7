




 <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-0 text-gray-800" style="margin-bottom: 3rem;">Data Master / Stok Obat</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4" style="margin-top: 1rem;">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Stok Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Kode Barang</th>
											<th>Nama Barang</th>											
											<th>Jenis Barang</th>
											
											<th>Jumlah Barang</th>
											<th>Satuan</th>
											<th>Pengaturan</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from gudang");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_obat'] ?></td>
											<td><?php echo $data['nama_obat'] ?></td>
											<td><?php echo $data['jenis_obat'] ?></td>
											
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
								

											<td>
											<a href="?page=gudang&aksi=ubahgudang&kode_obat=<?php echo $data['kode_obat'] ?>" class="btn btn-success" ><i class="fas fa-fw fa-edit"></i></a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=gudang&aksi=hapusgudang&kode_obat=<?php echo $data['kode_obat'] ?>" class="btn btn-danger" ><i class="fas fa-fw fa-trash-alt"></i></a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=gudang&aksi=tambahgudang" class="btn btn-success" >Tambah Data Obat</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












