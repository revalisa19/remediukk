<?php

@include 'koneksi.php' ;

session_start();
if(isset($_POST['submit'])){



$username = mysqli_real_escape_string($koneksi, $_POST['username']);
  $password = ($_POST['password']);

$select = " SELECT * FROM petugas WHERE username = '$username' && password = '$password' ";

$result = mysqli_query($koneksi, $select);

if(mysqli_num_rows($result) > 0){
	
	$row =mysqli_fetch_array($result);

	$_SESSION['nama_petugas'] = $row['id_petugas'];
	header('location:petugas.php');


}else{
	$error[] = 'incorrect username or password!';


}
};

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<link rel="icon" href="images/fevicon.png" type="image/gif" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />

<title>Edgecut</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesshet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/responsive.css" rel="stylesheet" />

<head>

<body class="sub_page">

<div class="hero_area">
<header class="header_section long_section px-0">
<nav class="navbar navbar-expand-lg custom_nav-container ">
<a class="navbar-brand" href="index.html">
<span>
	APLIKASI PEMBAYARAN SPP
</span>
</a>
</a>

</nav>
</header>
</div>

<section class="furniture_section layout_padding">
	<div class="container">
		<div class="heading_container">
			<h2>
				Login
				</h2>
				<p>
					Silahkan memasukkan username dan password Anda.
				</p>
			</div>
			<div class="container">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-5">
							<form action="" method="post">
								<?php
								if(isset($error)){
									foreach ($error as $error){
										echo '<span class="error-msg">'.$error.'</span>';

									};
								};
							?>
							<div class="form-group">
								<label> Username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label> Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div></section>

	<script scr="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js>key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

</body>

</html>