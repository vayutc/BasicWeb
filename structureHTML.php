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
							<h3>โครงสร้างหลักของภาษา HTML</h3>
							<br />
							<img src="picture/basicHTML/structureHTML.png" />
							<p>&nbsp;&nbsp;&nbsp;&nbsp;โครงสร้างของภาษา HTML จะประกอบด้วย 2 ส่วน คือ Head และ Body</p>
							<p>โดย</p>
							<p>&lt;!DOCTYPE html&gt; คือ การประกาศว่าเอกสารเว็บเพจนั้นสร้างขึ้นมาโดยยึดหลักตามมาตราฐานใด</p>
							<p>&lt;html&gt;....&lt;/html&gt; คือการบอกจุดเริ่มต้นและจุดสิ้นสุดของเอกสาร HTML</p>
							<p>
								&lt;head&gt;....&lt;/head&gt; คือส่นหัวของเอกสาร ประกอบด้วยข้อมูลพื้นฐาน เช่น ชื่อเรื่อง ชุดอักขระ keyword เป็นต้น
							</p>
							<p>
								&lt;meta charset="UTF-8"&gt; คือการกำหนดการเข้ารหัสอักขระ เพื่อให้หน้าเว็บสามารถแสดงภาษาไทยได้ โดยสามารถกำหนดได้หลายรูปแบบ เช่น charset="UTF-8" หรือ "charset=TIS-620" เป็นต้น
							</p>
							<p>
								&lt;title&gt;....&lt;/title&gt; คือการกำหนดข้อความที่ต้องการนำมาแสดงผลบนแถบ Title Bar โดยกำหนดความยาวของตัวอักษรได้ไม่เกิน 64 ตัวอักษร
							</p>
							<p>&lt;body&gt;....&lt;/body&gt; คือส่วนของเนื้อหาที่จะแสดงผลในหน้าเว็บเบราว์เซอร์</p>
							<br>
							<h3>แท็ก (tag)</h3>
							<h4>รูปแบบของแท็ก แบ่งออกเป็น 2 กลุ่มคือ</h4>
							<b>1. tag เดี่ยว</b>
							<p>
								&nbsp;&nbsp;&nbsp;&nbsp;คือ รูปแบบคำสั่งที่มีเพียงคำสั่งเดียวหรือมีเพียงแท็กเดียว ก็สามารถใช้งานได้ เช่น &lt;br&gt; เป็นต้น
							</p>
							<b>2. tag คู่</b>
							<p>
								คือ รูปแบบคำสั่งที่เป็นสองส่วน คือ มีส่วนเริ่มต้นและต้องมีส่วนจบของค าสั่งถึงจะสามารถท างานได้
								สมบูรณ์ โดยส่วนจบของแต่ละค าสั่งจะมีเครื่องหมาย Slash (/) ไว้หน้าแท็กค าสั่งนั้น เช่น
								&lt;html&gt;......&lt;/html&gt; เป็นต้น
							</p>
							<br>
							<h4>องค์ประกอบของแท็ก</h4>
							<b>1. แท็กคำสั่ง</b>
							<p>
								&nbsp;&nbsp;&nbsp;&nbsp;เป็นคำสั่งที่จะนำมาใช้เพื่อกำหนดส่วนต่าง ๆ ในเอกสาร ซึ่งมีรูปแบบดังนี้
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>&lt;tag&gt;....&lt;/tag&gt;</b>
							</p>
							<br>
							<b>2. คำสั่งเสริมเพื่อบอกคุณลักษณะของแท็ก (Attribute)</b>
							<p>
								&nbsp;&nbsp;&nbsp;&nbsp;ในแต่ละคำสั่งสามารถกำหนดคำสั่งเสริมเพื่อกำหนดคุณลักษณะ (Attribute) ของแท็กคำสั่งนั้น ซึ่งจะแตกต่างกันออกไปแต่ละแท็ก ซึ่งมีรูปแบบดังนี้
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>attributename="value"</b>
								<br> 
								เช่น
								<br>
								&lt;tag attributename="value"&gt; 
								<br>
								หรือ
								<br>
								&lt;tag attributename1="value1" attributename2="value2" ... attributenameN="valueN"&gt;
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