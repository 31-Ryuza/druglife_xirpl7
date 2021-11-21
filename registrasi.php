<?php 
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$koneksi = new mysqli("localhost","root","","obat");
if( isset($_POST['register'])) {
    if( registrasi($_POST) > 0){
        echo '<script>alert("Data berhasil ditambahkan");window.location="login.php"</script>';
    } else{
        echo mysqli_error($koneksi);
    }
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

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
     .form-control{
		border-radius: 15px;
	}
	.btn{
		margin-top: 5px;
		border-radius: 10px;
	}
    </style>

</head>

<body class="bg-ijo">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-12 col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7 d-none d-lg-block bg-register" >
                        <img src="img/register.png" alt="register" width="700">
                    </div>
                    <div class="col-lg-5 form-register">
                        <div class="p-5">
                            <div class="text-center foto">
                              <img src="img/logo1.png" alt="" width="160">
                            </div>
                            <form class="user" method="post" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nik" name="nik"
                                        placeholder="Nik">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="telepon" name="telepon"
                                        placeholder="Telepon">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Username">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control"
                                            id="password1" name="password1" placeholder="Password">    
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control"
                                            id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" name="register" class="btn btn-success btn-block">
                                    Registrasi
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small text-success" href="login.php">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<style>
    .bg-ijo{
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
</style>

</html>
<?php 
$koneksi = mysqli_connect("localhost", "root", "", "obat");


function registrasi($data){
    global $koneksi;

    $nik = strtolower(stripslashes($data["nik"]));
    $nama = strtolower(stripslashes($data["nama"]));
    $telepon = strtolower(stripslashes($data["telepon"]));
    $username = strtolower(stripslashes($data["username"]));
    $password1 = mysqli_real_escape_string($koneksi, $data["password1"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    $result = mysqli_query($koneksi, "select nama from users where nama = '$nama'");

    if( mysqli_fetch_assoc($result)){
        echo "<script>alert('Maaf nama anda sudah pernah didaftarkan, mohon hubungin admin untuk menyelesaikannya!!')</script>";
        return false;
    }

    if( $password1 !== $password2){
        echo "<script>alert('Maaf password 1 dan 2 harus sama!!')</script>";
        return false;
    }

    $password1 = md5($password1);
    mysqli_query($koneksi, "insert into users (nik, nama, telepon, username, password, level, foto) values('$nik','$nama','$telepon','$username','$password1','apoteker','default.jpg')");

    return mysqli_affected_rows($koneksi);
}


?>