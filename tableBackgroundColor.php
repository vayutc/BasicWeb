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
							<h3>คำสั่งกำหนดสีพื้นหลังตาราง</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;table style="background-color:สีพื้นหลัง"&gt;</b>
							<br>							
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;</b>
							<br>
							<b>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;....&lt;/th&gt;
							</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;</b>
							<br>
							<b>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;....&lt;/td&gt;
							</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/table&gt;</b>
							<br>						

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
									<td >background-color</td>
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
								&lt;table style="background-color:red"&gt;
									<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
									<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;วัน&lt;/th&gt;
										<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;เวลา&lt;/th&gt;
										<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;วิชา&lt;/th&gt;
										<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
									<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
									<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;จันทร์&lt;/td&gt;
										<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;08.00 – 12.00&lt;/td&gt;
										<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;3128-0004 ระบบคอมพิวเตอร์และอุปกรณ์&lt;/td&gt;
										<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
									<br>
								&lt;/table&gt;
							</p>
							<br>
							<a href="https://www.w3schools.com/colors/colors_picker.asp">เลือกสีเพิ่มเติม</a>
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