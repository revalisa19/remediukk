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
            INPUT KELAS
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
    <div class="row justify-content-center">
    <div class="col-9">
        <table class="table bg-light">
    <tr>
    <th>No</th>
    <th>ID Kelas</th>
    <th>Nama Kelas</th>
    <th>Kompetensi Keahlian</th>
    <th>Aksi</th>
  </tr>
  <form action="" style="color: #000000" method="post" class="mb-2">

    <from method="POST">
      <input type="text" name="textcari" placeholder="Cari "/>
      <input type="submit" name="cari" value="cari"/>
      <a style="color: white" href="tabelkelas.php" class="btn btn-secondary">tampilkan semua</a>
      <a style="color: white" href="kelas.php" class="btn btn-primary">tambah data</a>
    </from>

    <?php
      include 'koneksi.php';
      $input = mysqli_query($koneksi, "SELECT * from kelas");
      if (isset($_POST['cari'])) {
        $nama=$_POST["textcari"];
        $input = mysqli_query($koneksi, "SELECT * from kelas WHERE id_kelas LIKE '%$nama%' OR nama_kelas LIKE '%$nama%' OR kompetensi_keahlian LIKE '%$nama%' ");
      }else{
        $input=mysqli_query($koneksi, "SELECT * from kelas");
      }
      $no = 1;
      foreach ($input as $row){
        echo "<tr>
          <td>$no</td>
          <td>" . $row['id_kelas'] . "</td>
          <td>" . $row['nama_kelas'] . "</td>
          <td>" . $row['kompetensi_keahlian'] . "</td>
          <td><a href='updatekelas.php?id_kelas=$row[id_kelas]'>Ubah</a>
            <a href='hapuskelas.php?id_kelas=$row[id_kelas]'>Hapus</a>
          </td></tr>";

          $no++;
      }
      
    ?>



       </table>
    <body>
        
    </body>
</table>

</div>
</div>
</div>
</div>
      </div>
    </div>
  </section>

 

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