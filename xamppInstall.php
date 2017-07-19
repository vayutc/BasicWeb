<!DOCTYPE HTML>

<html>
	<head>
		<?php include "headerPage.php" ?>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
							<?php include "header.php";?>
							<!-- Data Page -->
							<br />
							<h3>XAMPP</h3>
							<p>
								&nbsp;&nbsp;&nbsp;&nbsp;Xampp คือโปรแกรมสำหรับจำลองเครื่องคอมพิวเตอร์ส่วนบุคคลของเรา ให้ทำงานในลักษณะของ WebServer นั่นคือเครื่องคอมพิวเตอร์ของเราจะเป็นทั้งเครื่องแม่ และเครื่องลูกในเครื่องเดียวกัน ทำให้ไม่ต้องเชื่อมต่อกับ Internet ก็สามารถทดสอบเว็บไซต์ที่สร้างขึ้น ได้
							</p>	
							<p>
								&nbsp;&nbsp;&nbsp;&nbsp;XAMPP ประกอบด้วย Apache, PHP, MySQL, PHP MyAdmin, Perl ซึ่งเป็นโปรแกรมพื้นฐานที่รองรับการทำงาน CMS ซึ่งเป็นชุดโปรแกรม สำหรับออกแบบเว็บไซต์
							</p>
							<br />
							<h3>วิธีการติดตั้ง XAMPP</h3>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_01.png">
							</div>
							<p align="center">เปิดไฟล์ xampp-win32</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_02.png">
							</div>
							<p align="center">กด Next</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_03.png">
							</div>
							<p align="center">เลือกโปรแกรมที่ต้องการติดตั้ง แล้วกด Next</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_04.png">
							</div>
							<p align="center">เลือกที่อยู่ที่จะทำการติดตั้ง แล้วกด Next</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_05.png">
							</div>
							<p align="center">กด Next</p> 
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_06.png">
							</div>
							<p align="center">กด Next</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_07.png">
							</div>
							<p align="center">รอให้โปรแกรมทำการติดตั้งจนเสร็จ</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_08.png">
							</div>
							<p align="center">ติดตั้งเสร็จสมบูรณ์ กด Finish</p> 
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_09.png">
							</div>
							<p align="center">เลือกภาษา กด Save</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_10.png">
							</div>
							<p align="center">โปรแกรมจะแสดงหน้า Control</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_11.png">
							</div>
							<p align="center">กด Start Apache และ MySQL</p> 
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_12.png">
							</div>
							<p align="center">Start ได้สำเร็จ</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_13.png" width="700">
							</div>
							<p align="center">
								พิมพ์ localhost ที่ช่อง Address bar แล้วกด Enter จะขึ้นหน้า Welcome to XAMPP
							</p>
							<br />
							<div class="centerImage">
								<img  src="picture/xamppInstall/install_14.png" width="700">
							</div>
							<p align="center">
								พิมพ์ localhost/phpmyadmin ที่ช่อง Address bar แล้วกด Enter จะขึ้นหน้า phpMyAdmin
							</p>
							<br />
							<p align="center">
								<b>เสร็จสิ้นสมบูรณ์ !!!</b>
							</p>
							<br />
							<a href="document_knowless/วิธีการติดตั้ง XAMPP.pdf" download="วิธีการติดตั้ง XAMPP.pdf">
								Download เอกสารประกอบ
								<img src="picture/logo/downloadicon.png" height="30" width="30" />
							</a>							
							<!-- End Data Page -->
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