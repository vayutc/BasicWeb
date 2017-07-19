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
							<h3>คำสั่งแสดงลำดับรายการแบบเรียงลำดับ</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<b>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;ol&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;....&lt;/li&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;....&lt;/li&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ol&gt;
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
									<td>reversed  <font color="red">(เพิ่มเข้ามาใหม่ใน HTML5)</font></td>
									<td>reversed</td>
									<td>แสดงลำดับจากหลังมาหน้า เช่น 5 4 3 2 1 เป็นต้น</td>
								</tr>
								<tr>
									<td>start</td>
									<td>ค่าตัวเลข</td>
									<td>ค่าเรื่มต้น</td>
								</tr>
								<tr>
									<td rowspan="5">type </td>
									<td>1</td>
									<td rowspan="5">ชนิดของลำดับที่ใช้</td>
								</tr>
								<tr>
									<td>A</td>
								</tr>
								<tr>
									<td>a</td>
								</tr>
								<tr>
									<td>I</td>
								</tr>
								<tr>
									<td>i</td>
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
									<td >&lt;ol&gt;</td>
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
								&lt;ol start="50"&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Coffee&lt;/li&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Tea&lt;/li&gt;
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Milk&lt;/li&gt;
								<br>
								&lt;/ol&gt;
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