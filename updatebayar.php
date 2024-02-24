<?php
  include 'koneksi.php';
  if (isset($_POST["ok"])){
    $id_pembayaran = $_POST['id_pembayaran'];
    $id_petugas = $_POST['id_petugas'];
    $NIS = $_POST['NIS'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $jumlah_bayar = $_POST['jumlah_bayar'];
    $insert = mysqli_query($koneksi, "UPDATE pembayaran SET id_petugas='$id_petugas', NIS='$NIS', tgl_bayar='$tgl_bayar', jumlah_bayar='$jumlah_bayar' WHERE id_pembayaran=$id_pembayaran");

   if($insert) {
        echo '<script>alert("Berhasil edit pembayaran"); window.location.href = "tabelpembayaran.php";</script>';
    }else{
        echo '<script>alert("gagal edit pembayaran");</script>';
    }
    }
  

?>

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
        <a class="navbar-brand" href="index.html">
          <span>
            Pembayaran SPP
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
          Pembayaran SPP
        </h2>
        <p>
          Bayar SPP
        </p>
      </div>
      <?php
                include 'koneksi.php';
                $id_pembayaran = $_GET['id_pembayaran'];
                $update = mysqli_query($koneksi, "SELECT * from pembayaran WHERE id_pembayaran='$id_pembayaran'");
                foreach ($update as $row) {

                ?>
      <div class="container">
         <div class="container">
         
  <div class="row justify-content-center">
    <div class="col-5">
    <form action="" method="post">
  <div class="row justify-content-center" >
    <div class="col-5" >
      <form class="mt-4" >
        <div class="form-group" >
          <label>ID Pembayaran</label>
          <input type="number" class="form-control" name="id_pembayaran" value="<?php echo $row['id_pembayaran'];?>" readonly>
        </div>
        <div class="form-group" >
          <label>ID Petugas</label>
          <input type="text" class="form-control" name="id_petugas" value="<?php echo $row['id_petugas'];?>" readonly>
        </div>
        <div class="form-group" >
          <label>NIS</label>
          <input type="text" class="form-control" name="NIS" value="<?php echo $row['NIS'];?>" >
        </div>
        <div class="form-group" >
          <label>Tgl Bayar</label>
          <input type="date" class="form-control" name= "tgl_bayar" value="<?php echo $row['tgl_bayar'];?>" >
        </div>

         <div class="form-group" >
          <label>Jumlah Bayar</label>
          <input type="number" class="form-control" name= "jumlah_bayar" value="<?php echo $row['jumlah_bayar'];?>" >
        </div>
          
       
        <br>
        <button type="submit" class="btn btn-primary" name="ok" >Submit</button><br>
        <a href="tabelpembayaran.php" class="btn btn-link">Data pembayaran lainnya </a>

      </form>
      <?php
                }
                    ?>
      </div>
    </div>
  </div>
  

      </div>
    </div>
  </section>

  <!-- end furniture section -->

  <!-- info section -->
  
  <!-- end info_section -->


  <!-- footer section -->
  
  <!-- footer section -->


  <!-- jQery -->
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