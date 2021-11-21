<?php
$koneksi = new mysqli("localhost","root","","obat");
$query1 = $koneksi->query("select * from users");
$query2 = $koneksi->query("select * from gudang");
$query3 = $koneksi->query("select * from jenis_obat");
$query4 = $koneksi->query("select * from tb_supplier");
$sql = $koneksi->query("select * from users where id='$user'");
$data = $sql->fetch_assoc();
$jml_user = mysqli_num_rows($query1);
$jml_obat = mysqli_num_rows($query2);
$jml_jenis = mysqli_num_rows($query3);
$jml_suplier = mysqli_num_rows($query4);
?>

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-gray-800" style="margin-bottom: 5rem;">Dashboard</h1>

                    <div class="row" style="margin-top: 1rem;">
                    <!-- Card User -->
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($jml_user,0,",",".")?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Card Obat -->
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Obat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($jml_obat,0,",",".")?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-plus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Jenis oBat -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jenis Obat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($jml_jenis,0,",",".")?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-prescription-bottle-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <!-- Suplier -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Suplier</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($jml_suplier,0,",",".")?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-building fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    

                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="img/dashboard.png" alt="...">
                            </div>
                            <p>Selamat datang <span><?= $data['nama'];?></span> di DurgLife, disini anda login menggunakan akun yang memiliki level superadmin, admin memiliki segala wewenang yang ada di web ini maka dari itu manfaatkan kepercayaan kami kepada anda, jangan sia sia kan kepercayaan kami kepada anda, Terimakasih... :)</p>
                        </div>
                    </div>

                     <!-- Project Card Example -->
                     <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Keuntungan Yang Biasa Didapatkan / Bulan</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Obat Makanan <span
                                            class="float-right">50%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Obat Cair <span
                                            class="float-right">70%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Obat Serbuk <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Obat Kapsul <span
                                            class="float-right">90%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 90%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Obat Minuman <span
                                            class="float-right">70%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Obat Salep <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         