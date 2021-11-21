<?php

	session_start();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$koneksi = new mysqli("localhost","root","","obat");

	
	?>	

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

	<style>
	body{
        background-color: #E6FFDB;
    }
    .form-login{
        margin-top: 3rem;
        margin-bottom: 5rem;
    }
    .form-register{
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .bg-register{
        margin-top: 5rem;
    }
    .bg-login{
        margin-top: 3rem;
    }
    .foto{
        margin-bottom: 2rem;
    }
	.form-control{
		border-radius: 15px;
	}
	.btn{
		margin-top: 5px;
		border-radius: 10px;
	}
</style>

</head>
<body>
	
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-lg-12 col-md-12">
		<div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
				<div class="row">
                        <div class="col-lg-7 d-none d-lg-block bg-login" >
                            <img src="img/login.png" alt="login" width="700">
                        </div>
						<div class="col-lg-5 form-login">
                            <div class="p-5">
                                <div class="text-center foto">
                                   <img src="img/logo1.png" alt="" width="160">
                                </div>
				
				<form role="form" action="" method="post">
				<br>
					<div class="form-group">
					
					 
						<input type="text" name="username"  class="form-control" placeholder="Masukan Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Masukan Password" required autofocus />
					</div>
					<div class="form-group">
						<select name="level" class="form-control" required>
							<option value="">Pilih Level User</option>
							<option value="superadmin">Super Admin</option>
							<option value="apoteker">Apoteker</option>
						
						</select>
					</div>
					<br>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-success btn-block" value="Masuk" />
						
					</div>
                                <div class="text-center">
                                    <a class="small text-success" href="registrasi.php">Buat Akun!</a>
                                </div>
			
				</form>
				
			</div>
			</div>
			</div>
		
	</div>

	<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>

	<?php
	
					$username = $_POST['username'];
					$password = md5($_POST['password']);
					$login = $_POST['login'];
					$level = $_POST['level'];
					
					if ($login) {
						$sql = $koneksi->query("select * from users where username='$username' and password='$password'");
						$ketemu = $sql->num_rows;
						$data = $sql->fetch_assoc();
						
						if ($ketemu >=1) {
							session_start();
							
							if ($data['level'] == 'superadmin' && $level == 'superadmin') {
								$_SESSION['superadmin'] =$data['id'];
								
								header("location:index3.php");
							}
							else if ($data['level'] == 'apoteker' && $level == 'apoteker') {
								$_SESSION['apoteker'] =$data['id'];
								
								header("location:index.php");
							}
						}
						else {
							echo "<script>alert('Maaf data anda tidak ditemukan, silahkan hubungi admin!!')</script>";
						
						}
					}
					
				?>
			