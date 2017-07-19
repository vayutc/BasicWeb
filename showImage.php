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
							<br>
							<h3>คำสั่งแสดงรูปภาพ</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="..(ชื่อรูปภาพ).." /&gt;</b>
							<br>
							<br>
							<br>
							<h4>Attribute</h4>
							<table >
								<tr >
									<th>Attribute</th>
									<th>ค่า</th>
									<th>คำอธิบาย</th>
								</tr>
								<tr>
									<td>src</td>
									<td>ชื่อรูปภาพ</td>
									<td>ระบุที่อยู่รูปภาพที่ต้องการแสดง</td>
								</tr>
								<tr>
									<td>alt</td>
									<td>ข้อความ</td>
									<td>ข้อความอธิบายรูปภาพ สั้น ๆ</td>
								</tr>
								<tr>
									<td>height</td>
									<td>ขนาดความสูงเป็น pixels</td>
									<td>ความสูง</td>
								</tr>
								<tr>
									<td>width</td>
									<td>ขนาดความกว้างเป็น pixels</td>
									<td>ความกว้าง</td>
								</tr>
								<tr>
									<td >border  <font color="red">(ไม่รองรับใน HTML5)</font></td>
									<td>ขนาดเส้นเป็น pixels</td>
									<td>เส้นขอบ</td>
								</tr>
								<tr>
									<td rowspan="5">align  <font color="red">(ไม่รองรับใน HTML5)</font></td>
									<td>top</td>
									<td>จัดชิดซ้าย</td>
								</tr>
								<tr>
									<td>right</td>
									<td>จัดชิดขวา</td>
								</tr>
								<tr>
									<td>top</td>
									<td>จัดชิดบน</td>
								</tr>
								<tr>
									<td>bottom</td>
									<td>จัดชิดล่าง</td>
								</tr>
								<tr>
									<td>middle</td>
									<td>จัดกึ่งกลางในแนวตั้ง</td>
								</tr>
							</table>
							<br>
							<h4>การรองรับ Browser</h4>
							<table>
								<tr >
									<th style="text-align: center;vertical-align: middle;">Tag</th>
									<th style="text-align: center;">
										<img class="logoBrowserSupport" src="<?php echo $logoPath?>chromelogo.png"/>
									</th>
									<th style="text-align: center;">
										<img class="logoBrowserSupport" src="<?php echo $logoPath?>ielogo.png"/>
									</th >
									<th style="text-align: center;">
										<img class="logoBrowserSupport" src="<?php echo $logoPath?>firefoxlogo.png"/>
									</th>
									<th style="text-align: center;">
										<img class="logoBrowserSupport" src="<?php echo $logoPath?>safarilogo.png"/>
									</th>
									<th style="text-align: center;">
										<img class="logoBrowserSupport" src="<?php echo $logoPath?>operalogo.png"/>
									</th>
								</tr>
								<tr style="text-align: center;">
									<td >&lt;img&gt;</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
								</tr>
							</table>
							<br>
							<h4>ตัวอย่างการใช้</h4>
							<p>
								&lt;img src="picture.png"&gt;
							</p>
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