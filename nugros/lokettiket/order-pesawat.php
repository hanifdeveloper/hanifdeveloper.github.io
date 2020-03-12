<?php 
  $title = 'Order Tiket Pesawat';
  $image = 'thumb_pesawat.jpg';
  $description = 'Laporan progress order tiket pesawat, dimulai dari pencarian jadwal penerbangan sampai dengan proses pembayaran';
  $update = array(
	  'Intergrasi dengan xml api voltras (pesawat)',
	  'Intergrasi dengan payment gateway (midtrans)',
	  'Notifikasi pembayaran dengan metode bank transfer (BCA, BNI, Mandiri dan Permata)',
	  'Status perubahan Booking tiket pesawat masih manual (belum menggunakan api ticketed, menunggu UAT)',
	  'Allow http request',
	  'Modul Error Log Developer',
	  'Update SDK Midtrans',
  )
?>
<!DOCTYPE html> 
<html> 
  <head>
  <title><?= $title; ?></title>
    <meta name="author" content="Hanif Muhammad (AH Softdev)" />
    <meta name="keywords" content="Nugros, Voltras, Midtrans" />
    <meta property="og:image" content="<?= $image; ?>" />
    <meta property="og:title" content="Order Tiket Pesawat" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="<?= $description; ?>" />
    <meta property="og:type" content="video" />
    <meta property="og:image:secure_url" content="thumb_pesawat.jpg" />
    <meta property="og:image:type" content="video/mp4" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<body> 
	<br>
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4"><?= $title; ?></h1>
			<p class="lead"><?= $description; ?></p>
			<hr class="my-4">
			<a class="btn btn-primary btn-lg" href="apk/app-sandbox-release-3.apk" role="button">Download APK</a>
		</div>
		<div class="my-3 p-3 bg-white rounded shadow-sm">
			<h6 class="border-bottom border-gray pb-2 mb-0">Update</h6>
			<br>
			<ul>
				<?php foreach ($update as $item): ?>
				<li><?= $item; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<br>
		<div style="text-align: center">
			<h1 class="display-4">Preview</h1>
			<video width="auto" height="auto" controls>
			<source src="https://drive.google.com/uc?export=download&id=1A-S0Lg3PPaNxHrwW2WnlzhUVURpKsdwU" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
		</div>
	</div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body> 
</html>