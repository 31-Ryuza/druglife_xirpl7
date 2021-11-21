
<?php
mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	session_start();
	
	
	
	$koneksi = new mysqli("localhost","root","","obat");
	
	 if(empty($_SESSION['apoteker'])){
    
    header("location:login.php");
  }


	
	
	
	?>	



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DurgLife</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="img/logo1.png" alt="logo" width="120">
    </a>

	  <!-- Divider -->
      <hr class="sidebar-divider my-0">
	  

 <?php
   if ($_SESSION['apoteker']) {
	   $user = $_SESSION['apoteker'];
   }
   $sql =$koneksi->query("select * from users where id='$user'");
   $data = $sql->fetch_assoc();
   ?>

  

  <!--sidebar start-->

    <li class="d-flex align-items-center justify-content-center">
        <a class="nav-link">
		 <img src="img/<?php echo $data['foto']?>" class="img-circle img-thumbnail" width="80" alt="User"/></a>
		  <li class="d-flex align-items-center justify-content-center">
		  </li>
	  </li>
		 <li class="nav-item ">
        <a class="nav-link">
         	<div class="d-flex align-items-center justify-content-center" class="name"><span class="text-success fw-bold" ><?php echo  $data['nama'];?></span></div></font>
			<div class="d-flex align-items-center justify-content-center" class="email"><strong> <span class="fst-italic"><?php echo $data['level'];?></span></strong></div>
		 </a>
      </li>
	



      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="?page=home">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pilih Menu
      </div>
	 
      <!-- Nav Item - Pages Collapse Menu -->
	  
	  
	  
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Master</span>
        </a>
        <div id="collapseData" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="?page=gudang">Stok Obat</a>
            <a class="collapse-item" href="?page=jenisobat">Jenis Obat</a>
            <a class="collapse-item" href="?page=satuanobat">Satuan Obat</a>
			 <a class="collapse-item" href="?page=supplier">Data Supplier</a>
           
          </div>
        </div>
      </li>

	  
	  
	      <!-- Heading -->
   
	  
	  
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

		 <!-- Topbar -->
     <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">
    
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

 <!-- Topbar Search -->
 <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
    
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
    
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
    
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo  $data['nama'];?></span>
                        <img class="img-profile rounded-circle"
                            src="img/<?php echo $data['foto']?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="?page=pengguna&aksi=ubahpengguna2&id=<?php echo $data['id'] ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Edit Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a onclick="return confirm('Apakah anda yakin akan logout?')" class="dropdown-item" class="logout" href="logout.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Keluar
                        </a>
                    </div>
                </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
		
		 <section class="content">
	
	
		      <?php
			   $page = $_GET['page'];
			   $aksi = $_GET['aksi'];
			   
			   

         if ($page == "pengguna") {
           if ($aksi == "ubahpengguna2") {
            include "page/pengguna/ubahpengguna2.php";
          }
        }
			  
			   
			   
			   if ($page == "supplier") {
				   if ($aksi == "") {
					   include "page/supplier/supplier.php";
				   }
				    if ($aksi == "tambahsupplier") {
					   include "page//supplier/tambahsupplier.php";
				   }
				    if ($aksi == "ubahsupplier") {
					   include "page/supplier/ubahsupplier.php";
				   }
				   
				    if ($aksi == "hapussupplier") {
					   include "page/supplier/hapussupplier.php";
				   }
			   }
			   
			    
			   if ($page == "jenisobat") {
          if ($aksi == "") {
            include "page/jenisobat/jenisobat.php";
          }
           if ($aksi == "tambahjenis") {
            include "page//jenisobat/tambahjenis.php";
          }
           if ($aksi == "hapusjenisobat") {
            include "page//jenisobat/hapusjenisobat.php";
          }
          
           if ($aksi == "ubahjenisobat") {
            include "page//jenisobat/ubahjenisobat.php";
          }
        }
			   
         if ($page == "satuanobat") {
          if ($aksi == "") {
            include "page/satuanobat/satuan.php";
          }
           if ($aksi == "tambahsatuan") {
            include "page//satuanobat/tambahsatuan.php";
          }
           if ($aksi == "ubahsatuan") {
            include "page//satuanobat/ubahsatuan.php";
          }
          
           if ($aksi == "hapussatuan") {
            include "page//satuanobat/hapussatuan.php";
          }
        }
	
	
				if ($page == "gudang") {
				   if ($aksi == "") {
					   include "page/gudang/gudang.php";
				   }
				    if ($aksi == "tambahgudang") {
					   include "page/gudang/tambahgudang.php";
				   }
				    if ($aksi == "ubahgudang") {
					   include "page/gudang/ubahgudang.php";
				   }
				   
				    if ($aksi == "hapusgudang") {
					   include "page/gudang/hapusgudang.php";
				   }
				}
				
				
		
			   
			     
			   if ($page == "") {
				   include "home.php";
			   }
			   if ($page == "home") {
				   include "home.php";
			   }
			   ?>
    

    </section>

 
</div>
      <!-- End of Main Content -->
  
   <!-- Footer -->
   <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; DurgLife 2021</span>
        </div>
    </div>
</footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->

 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  
    <!--script for this page-->
  
 

  


  

</body>

</html>
