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
							<h3>คำสั่งแสดงหัวเรื่อง (Header)</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;....&lt;/h1&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;....&lt;/h2&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;....&lt;/h3&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&gt;....&lt;/h4&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h5&gt;....&lt;/h5&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h6&gt;....&lt;/h6&gt;</b>
							<br>
							<p>โดย h1 คือหัวข้อที่สำคัญที่สุด เรียงลงไปจนถึง h6</p>
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
									<td rowspan="3">align</td>
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
									<td >&lt;h1&gt; - &lt;h6&gt;</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
								</tr>
							</table>
							<br>
							<h4>ตัวอย่างการใช้</h4>
							<p>&lt;h1&gt;หัวข้อ 1&lt;/h1&gt;</p>
							<p>&lt;h1 align="center"&gt;หัวข้อ 1&lt;/h1&gt;</p>
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