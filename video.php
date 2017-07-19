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
							<h3>คำสั่งแทรกวิดีโอ</h3>
							<h4>รูปแบบคำสั่ง</h4>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;video controls&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;source src="ไฟล์วิดีโอ" type="ชนิด (Media Type)"&gt;</b>
							<br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/video&gt;</b>
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
									<td>MP4</td>
									<td>video/mp4</td>
								</tr>
								<tr>
									<td>Ogg</td>
									<td>video/ogg</td>
								</tr>
								<tr>
									<td>WebM</td>
									<td>video/webm</td>
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
									<td>height</td>
									<td>ขนาด เป็น pixels</td>
									<td>ขนาดความสูง</td>
								</tr>
								<tr>
									<td>width</td>
									<td>ขนาด เป็น pixels</td>
									<td>ขนาดความกว้าง</td>
								</tr>
								<tr>
									<td>poster</td>
									<td>ชื่อไฟล์รูปภาพ</td>
									<td>ให้แสดงรูปภาพแทนเมื่อวิดีโอยังไม่ถูกโหลด เช่น poster="pic.png"</td>
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
									<td >MP4</td>
									<td>รองรับ</td>
									<td>รองรับ</td>
									<td>
										รองรับ
										<br>(ตั้งแต่ รุ่น 21)
										<br>(ตั้งแต่ รุ่น 30 ใน Linux)
										</td>
									<td>รองรับ</td>
									<td>
										รองรับ
										<br>(ตั้งแต่ รุ่น 25)
									</td>
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
									<td >WebM</td>
									<td>รองรับ</td>
									<td>ไม่รองรับ</td>
									<td>รองรับ</td>
									<td>ไม่รองรับ</td>
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
									<td >&lt;video&gt;</td>
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
								&lt;video controls&gt;
								<br>
  								&nbsp;&nbsp;&nbsp;&nbsp;&lt;source src="video.mp4" type="video/mp4" /&gt;
  								<br>  								
								&lt;/video&gt;
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