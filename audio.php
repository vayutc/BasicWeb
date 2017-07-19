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
							<h3>คำสั่งแทรกไฟล์เสียง</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;audio controls&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;source src="ไฟล์เสียง" type="ชนิด (Media Type)"&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/audio&gt;</b>
							<br>
							<font color="red">(เพิ่มเข้ามาใหม่ใน HTML5)</font>
							<br>
							<br>
							<h4>ชนิด (Media Type)</h4>
							<table>
								<tr>
									<th>ชิดไฟล์</th>
									<th>MIME-type</th>
								</tr>
								<tr>
									<td>MP3</td>
									<td>audio/mpeg</td>
								</tr>
								<tr>
									<td>Ogg</td>
									<td>audio/ogg</td>
								</tr>
								<tr>
									<td>WAV</td>
									<td>audio/wav</td>
								</tr>
							</table>
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
									<td>ชื่อไฟล์</td>
									<td>ระบุตำแหน่งไฟล์ที่ต้องการแสดง</td>
								</tr>
								<tr>
									<td>controls</td>
									<td>controls</td>
									<td>ให้แสดงหน้า Controls</td>
								</tr>
								<tr>
									<td>autoplay</td>
									<td>autoplay</td>
									<td>ให้เล่นอัตโนมัติ</td>
								</tr>
								<tr>
									<td>loop</td>
									<td>loop</td>
									<td>ให้เล่นซ้ำ</td>
								</tr>
								<tr>
									<td>muted</td>
									<td>muted</td>
									<td>ให้ปิดเสียง</td>
								</tr>
								<tr>
									<td rowspan="3">preload</td>
									<td>auto</td>
									<td>โหลดข้อมูลทั้งไฟล์เมื่อเข้าสู่หน้าเว็บ</td>
								</tr>
								<tr>
									<td>metadata</td>
									<td>โหลดเฉพาะข้อมูลประกอบแต่ยังไม่โหลดเนื้อหาเมื่อเข้าสู่หน้าเว็บ</td>
								</tr>
								<tr>
									<td>none</td>
									<td>ไม่โหลดข้อมูลเมื่อเข้าสู่หน้าเว็บ</td>
								</tr>
							</table>

							<br>
							<h4>การรองรับการเล่นไฟล์ใน Browser</h4>
							<table>
								<tr >
									<th style="text-align: center;vertical-align: middle;">ชนิดไฟล์</th>
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
									<td >MP3</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
								</tr>
								<tr style="text-align: center;">
									<td >Ogg</td>
									<td>รองรับ</td>
									<td>ไม่รองรับ</td>
									<td>รองรับ</td>
									<td>ไม่รองรับ</td>
									<td>รองรับ</td>
								</tr>
								<tr style="text-align: center;">
									<td >WAV</td>
									<td>รองรับ</td>
									<td>ไม่รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
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
									<td >&lt;audio&gt;</td>
									<td>4.0</td>
									<td>9.0</td>
									<td>3.5</td>
									<td>4.0</td>
									<td>10.5</td>
								</tr>
							</table>
							<br>
							<h4>ตัวอย่างการใช้</h4>
							<p>
								&lt;audio controls&gt;
								<br>
  								&nbsp;&nbsp;&nbsp;&nbsp;&lt;source src="music.mp3" type="audio/mpeg" /&gt;
  								<br>  								
								&lt;/audio&gt;
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