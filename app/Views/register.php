<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>สมัครวิ่ง</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/styleform.css"/>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
</head>
<body>


	<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<?php  if (isset($validation)) : 
                ?>
				<div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
				<?php endif; 
				?>
		


	<div class="page-content">
		<div class="wizard-heading">สมัครวิ่งออนไลน์</div>
		<div class="wizard-v6-content">
			<div class="wizard-form">

			
		        <form class="form-register" action="/register/save"  method="post"  id="form-register" >
				<?= csrf_field();  ?>
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>1</span></p>
			            	<span class="step-text">กรอกข้อมูลผู้สมัคร</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>ข้อมูลผู้สมัคร</h3>
			                		<span>1/3</span>
			                	</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first_name" name="first_name"
											<?= set_value('first_name');?> >
											<span class="label">ชื่อ</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_name" name="last_name"
											<?= set_value('last_name');?> >
											<span class="label">นามสกุล</span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="id_card" name="id_card" 
											<?= set_value('id_card');?> >
											<span class="label">เลขบัตรประชาชน</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" name="email" id="email" class="form-control" 
											<?= set_value('email');?> >
											<span class="label">อีเมล</span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" name="age" id="age" class="form-control" 
											<?= set_value('age');?> >
											<span class="label">อายุ</span>
										</label>
									</div>
								</div>
								<div class="form-row">
								<div class="form-holder">
										<label class="form-row-inner">
											<input type="password" class="form-control" id="password" name="password" required>
											<span class="label">รหัสผ่าน</span>
										</label>
									</div>
								</div>
								<div class="form-row">
								<div class="form-holder">
										<label class="form-row-inner">
											<input type="password" class="form-control" id="confpassword" name="confpassword" required>
											<span class="label">ยืนยันรหัสผ่าน</span>
										</label>
									</div>
								</div>
								
								
							</div>
							
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>2</span></p>
			            	<span class="step-text">กรอกข้อมูลสมัครวิ่ง</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>ข้อมูลสมัครวิ่ง</h3>
			                		<span>2/3</span>
			                	</div>
		                		<!-- <div class="form-images">
		                			<img src="images/wizard_v6.jpg" alt="wizard_v6">
		                		</div> -->
								<div class="form-row">
								<div class="form-holder">
										<label for="category_name" class="special-label-1">ประเภทการแข่ง</label>
										<select name="category_name" id="category_name" class="form-control">
										<option  selected><?= set_value('category_name');?></option>
											<option value="FUN RUN" >FUN RUN</option>
											<option value="MINI MARATHON">MINI MARATHON</option>
											<option value="VIP">VIP</option>
											<option value="Super VIP">Super VIP</option>
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>
									<div class="form-holder">
										<label for="category_name" class="special-label-1">ระยะทาง</label>
										<select name="length" id="length" class="form-control">
										<option selected><?= set_value('length');?></option>
											<option value="3 KM." >3 KM.</option>
											<option value="10 KM.">10 KM.</option>
											<option value="3/10 KM.">3/10 KM.</option>
											<option value="15 KM.">15 KM.</option>
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-holder">
										<label for="day" class="special-label-1">ยอดค่าสมัคร</label>
										<input  type="text" name="price"  class="day" id="price" value="<?= set_value('price');?>">
									</div>
									
								</div>
							</div>
							
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>3</span></p>
			            	<span class="step-text">ยืนยันการสมัคร</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>ตรวจสอบข้อมูลก่อนสมัคร</h3>
			                		<span>3/3</span>
			                	</div>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>ชื่อเต็ม:</th>
												<td id="fullname-val"></td>
											</tr>
											<tr class="space-row">
												<th>เลขบัตรประชาชน:</th>
												<td id="id_card-val"></td>
											</tr>
											<tr class="space-row">
												<th>อีเมล:</th>
												<td id="email-val"></td>
											</tr>
											<tr class="space-row">
												<th>อายุ:</th>
												<td id="age-val"></td>
											</tr>
											<tr class="space-row">
												<th>ประเภทการแข่ง:</th>
												<td id="category_name-val"></td>
											</tr>
											<tr class="space-row">
												<th>ระยะทาง:</th>
												<td id="length-val"></td>
											</tr>
											<tr class="space-row">
												<th>รวมยอดที่ต้องชำระ:</th>
												<td id="price-val"></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="btn"><button id="bt" type="submit">ยืนยัน</button></div>
								
							</div>
							
			            </section>
						
		        	</div>
					
		        </form>
				
			</div>
		</div>
	</div>
	<script src="js/form/jquery-3.3.1.min.js"></script>
	<script src="js/form/jquery.steps.js"></script>
	<script src="js/form/jquery-ui.min.js"></script>
	<script src="js/form/main.js"></script>

</body>
</html>