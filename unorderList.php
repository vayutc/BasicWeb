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
							<h3>คำสั่งแสดงลำดับรายการแบบไม่มีลำดับ</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<b>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;....&lt;/li&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;....&lt;/li&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;
							</b>
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
									<td rowspan="5">type   <font color="red">(ไม่รองรับใน HTML5)</font></td>
									<td>disc</td>
									<td rowspan="5">ชนิดของลำดับที่ใช้</td>
								</tr>
								<tr>
									<td>square</td>
								</tr>
								<tr>
									<td>circle</td>
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
									<td >&lt;ul&gt;</td>
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
								&lt;ul&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Coffee&lt;/li&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Tea&lt;/li&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Milk&lt;/li&gt;
								<br>
								&lt;/ul&gt;
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