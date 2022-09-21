<?php
	require "../../system/fungsi_indotgl.php";
    require "../../system/fungsi_rupiah.php";
    require "../../system/fungsi_telp.php";
    require "../../system/SetWebsite.php";
?>

<!DOCTYPE html>
<html lang="id, in">
<head>
	<title><?= $nama_web ?></title>

	<link rel="icon" type="image/x-icon" href="<?= $url_images ?>/<?= $icon ?>" />

    <!-- Fonts and icons -->
    <link href="<?= $base_url ?>/assets/plugins/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid">
		<div class="container px-0 px-lg-2 pt-4 bg-light">
			<?php require "../../inc/header-v3.php"; ?>
			<?php require "content.php"; ?>
			<?php require "../../inc/footer-v3.php"; ?>
		</div>
	</div>

	<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>

	<!-- Asset -->
    <script src="<?= $base_url ?>/assets/js/jquery-3.6.0.min.js"></script>
	<script src="<?= $base_url ?>/assets/js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript">
		// ===== Scroll to Top ==== 
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
			    $('#return-to-top').fadeIn(200);    // Fade in the arrow
			} else {
				$('#return-to-top').fadeOut(200);   // Else fade out the arrow
			}
		});
		$('#return-to-top').click(function() {      // When arrow is clicked
			$('body,html').animate({
				scrollTop : 0                       // Scroll to top of body
			}, 500);
		});
		// ===== Scroll to Top ==== 
	</script>
	<!-- Asset -->

</body>
</html>