
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Edgecut</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="petugas.php">
          <span>
           PEMBAYARAN SPP
          </span>
        </a>
        </a>
        
      </nav>
    </header>
    <!-- end header section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="r">
        <h2>
          form Pembayaran SPP
        </h2>
        <p>
          Bayar SPP
        </p>
      </div>
      <div class="container">
         <div class="container">

<?php
  include 'koneksi.php';
  if (isset($_POST["ok"])){
    $id_pembayaran = $_POST["id_pembayaran"];
    $id_petugas = $_POST["id_petugas"];
    $NIS = $_POST["NIS"];
    $tgl_bayar = $_POST["tgl_bayar"];
    $jumlah_bayar = $_POST["jumlah_bayar"];
    $input = mysqli_query($koneksi, "insert into pembayaran values ('$id_pembayaran','$id_petugas','$NIS','$tgl_bayar','$jumlah_bayar')");
    echo "<div class='alert alert-succes'>Sukses Membayar SPP!</div>";


  }
?>

            <div class="row justify-content-center">
    <div class="col-5">
    <form action="" method="post">
  <div class="row justify-content-center" >
    <div class="col-5" >
      <form class="mt-4" >
        <div class="form-group" >
          <label>ID Pembayaran</label>
          <input type="number" class="form-control" name="id_pembayaran" >
        </div>
        
        <div class="form-group" >
          <label>ID Petugas</label>
          <input type="text" class="form-control" name="id_petugas" >

         </div>
      <div class="form-group" >
          <label>NIS</label>
          <input type="text" class="form-control" name= "NIS" >
        </div>
       
      <div class="form-group" >
          <label>Tgl Bayar</label>
          <input type="date" class="form-control" name= "tgl_bayar" >
        </div>
<div class="form-group" >
          <label>Jumlah Bayar</label>
          <input type="number" class="form-control" name= "jumlah_bayar" >
        </div>

        <br>
        <button type="submit" class="btn btn-primary" name="ok" >Submit</button><br>
        <a href="tabelpembayaran.php" class="btn btn-link">Data Pembayaran Lainnya</a>
      </form>
      </div>
    </div>
  </div>

      </div>
    </div>
  </section>

 
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>