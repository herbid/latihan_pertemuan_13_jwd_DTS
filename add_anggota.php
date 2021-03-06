<?php
include 'koneksi.php';
// $tgl=$date('Y-m-d');
session_start();
if (isset($_SESSION['sesi'])) {
    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    </head>
    <body class="sb-nav-fixed">
    <?php require ('navbar.php');?>
        <div id="layoutSidenav">


                <?php require ('sidebare.php');?>
                <div id="layoutSidenav_content">
                <div class="container-fluid px-4">
                <h1 class="mt-4">Tambah Anggota</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Anggota</li>
                        </ol>
                     
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tambah Anggota
                                
                            </div>
                            
                            <div class="card-body">
                            <!-- index.php?p= -->
                            <div class="alert alert-none" role="alert">
                            <form action="proses_add_anggota.php" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                
                                <div class="form-group col-md-6">
                                <label for="id_anggota">ID Anggota </label>
                                <input type="text" class="form-control" id="id_anggota" name="id_anggota" placeholder="Masukan Id Anggota Anda" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="umur">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                
                                <div class="form-group col-md-6">
                                <label>Gender</label>
                                    <select  name='jenis_kelamin' class="form-control select2bs4" required>
                                        <option value="">Pilih</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                        </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" placeholder="Masukan Gambar Anda" required>
                                
                            </div>
                                    </div>
                            <div class="form-row">          
                            <div class="form-group col-md-6">
                                <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required> </textarea>
                            </div>
                            
                            </div>
                            <button type="submit" name="add" value="cek" class="btn btn-success">Daftar</button>
                            <a href="anggota.php" type="button" class="btn btn-warning">Kembali</a>
                        </form>
                    </div>

                                
                            </div>
                        </div>

                </div>
                </div>

            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>


<?php
}
else{
    echo "<script>
            alert('Anda Harus Login Terlebih Dahulu');
            </script>";
            header('location:login.php'); 
}
?>        
 <!--
                    $pages_dir = 'pages';
                    if(!empty($_GET['p'])){
                        $pages = scandir($pages_dir, 0);
                        unset($pages[0], $pages[1]);

                        $p = $_GET['p'];
                        if(in_array($p.'.php', $pages)){
                        include($pages_dir.'/'.$p.'.php');
                        } else {
                        echo 'Halaman tidak ditemukan! :(';
                        }
                    } else {
                         include($pages_dir.'/home.php');
                    
                ?> -->