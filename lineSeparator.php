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
							<h3>คำสั่งเส้นแบ่งแนวนอน</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;hr&gt;</b>
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
									<td rowspan="3">align  <font color="red">(ไม่รองรับใน HTML5)</font></td>
									<td>left</td>
									<td>จัดชิดซ้าย</td>
								</tr>
								<tr>
									<td>center</td>
									<td>จัดกึ่งกลาง</td>
								</tr>
								<tr>
									<td>right</td>
									<td>จัดชิดขวา</td>
								</tr>
								<tr>
									<td>size  <font color="red">(ไม่รองรับใน HTML5)</font></td>
									<td>ขนาด (pixel)</td>
									<td>ขนาดความสูง</td>
								</tr>
								<tr>
									<td>width  <font color="red">(ไม่รองรับใน HTML5)</font></td>
									<td>ขนาด % (pixel)</td>
									<td>ขนาดความกว้าง</td>
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
									<td >&lt;hr&gt;</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
								</tr>
							</table>
							<br>
							<h4>ตัวอย่างการใช้</h4>
							<p>&lt;hr&gt;</p>
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