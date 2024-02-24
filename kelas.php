
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
      <div class="container">
        <h2>
          form kelas
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
    $id_kelas = $_POST["id_kelas"];
    $nama_kelas = $_POST["nama_kelas"];
    $kompetensi_keahlian = $_POST["kompetensi_keahlian"];
    $input = mysqli_query($koneksi, "insert into kelas values ('$id_kelas','$nama_kelas','$kompetensi_keahlian')");
    echo "<div class='alert alert-succes'>Sukses tambah data kelas!</div>";


  }
?>

            <div class="row justify-content-center">
    <div class="col-5">
    <form action="" method="post">
  <div class="row justify-content-center" >
    <div class="col-5" >
      <form class="mt-4" >
        <div class="form-group" >
          <label>ID Kelas</label>
          <input type="text" class="form-control" name="id_kelas" >
        </div>
        
        <div class="form-group" >
          <label>Nama Kelas</label>
          <input type="text" class="form-control" name="nama_kelas" >

         </div>
      <div class="form-group" >
          <label>Kompetensi Keahlian</label>
          <input type="text" class="form-control" name= "kompetensi_keahlian" >
        </div>
      
        <br>
        <button type="submit" class="btn btn-primary" name="ok" >Submit</button><br>
        <a href="tabelkelas.php" class="btn btn-link">Data Kelas Lainnya</a>
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