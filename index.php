<!DOCTYPE HTML>

<html>
	<head>
		<?php include "headerPage.php" ?>
		<!-- <META HTTP-EQUIV="refresh" CONTENT="seconds;URL=the-other-url">		 -->	
		<style type="text/css">
		.bgimg {
		    background-image: url('<?php echo $generalPath?>Web-background.png');
		}
		</style>	
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
						<div class="bgimg" s>
							<!-- Header -->
							<?php include "header.php";?>
							<!-- Data Page -->
							<br /> 
							<div align="center" tyle="opacity: 1;">
							
							<br>
							<img height="45%" width="45%" 
								src="<?php echo $generalPath?>Web-programing.png">
							<img height="45%" width="45%"
								src="<?php echo $generalPath?>Web-example.png">
							<br>
							
							<img height="55%" width="55%" 
								src="<?php echo $generalPath?>Web-cycle.png">
							</div>							
							<!-- End Data Page -->
						</div>
						</div>
					</div>
				<!-- End Main -->
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<?php include "menu.php" ?>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>