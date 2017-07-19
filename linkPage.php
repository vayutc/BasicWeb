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
							<h3>คำสั่งเชื่อมโยง</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<h5>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="ชื่อไฟล์ หรือ url"&gt; ข้อความที่ต้องการแสดง &lt;/a&gt;
							</h5>
							<br />

							<h4>Attribute ของคำสั่งเชื่อมโยง</h4>
							<p>target คือ การกำหนดรูปแบบการเปิดหน้าที่เชื่อมโยง โดยสามารถกำหนดได้ดังนี้</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;_blank   = เปิดหน้าเอกสารใหม่โดยที่หน้าเดิมยังคงอยู่</p>
							<p>
								&nbsp;&nbsp;&nbsp;&nbsp;_self      = เปิดหน้าใหม่โดยที่หน้าเดิมเปลี่ยนไปบางส่วน หากว่าใช้กับ เฟรม 
							</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;_parent = เปิดหน้าใหม่โดยที่หน้าเดิมเปลี่ยนไป </p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;_top      = เปิด file ที่หน้าเดิมโดยจะไปด้านบนสุดของหน้าเว็บเพจ</p>

							<br />
							<h4>ตัวอย่างการเชื่อมโยงภายใน</h4>
							<p>&lt;a href="index.html"&gt;กลับไปหน้าแรก&lt;/a&gt;</p>

							<br />
							<h4>ตัวอย่างการเชื่อมโยงเว็บภายนอก</h4>
							<p>&lt;a href="www.google.co.th"&gt;ค้นหาโดย Google&lt;/a&gt;</p>

							<br />
							<h4>ตัวอย่างการใช้รูปภาพเชื่อมโยงแทนข้อความ</h4>
							<p>&lt;a href="index.html"&gt;</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="home.jpg"&gt;&lt;/img&gt;</p>
							<p>&lt;/a&gt;</p>
							<br />
							<a href="document_knowless/การเชื่อมโยง.pdf" download="การเชื่อมโยง.pdf">
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