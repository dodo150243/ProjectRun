<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- CSS  -->
    <link rel="stylesheet" href="/css/register.css">



</head>

<body>

    <div id="container">

        <!-- Tag Header -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" id="text0" href="/home">ISAC</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/search_page" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ค้นหาข้อมูลศิษย์เก่า
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/search_page">จากชื่อ</a></li>
                                <li><a class="dropdown-item" href="/search_page">จากปีแรกเข้า</a></li>
                                <li><a class="dropdown-item" href="/search_page">จากจังหวัด</a></li>
                                <li><a class="dropdown-item" href="/search_page">จากหมู่เรียน</a></li>
                                <li><a class="dropdown-item" href="/search_page">จากรหัสนักศึกษา</a></li>
                            </ul>
                        </li>


                    </ul>
                    <a class="nav-link" href="/login" id="navbarDropdown">เข้าสู่ระบบ</a>
                </div>
            </div>
        </nav>

        <!-- <?php //  if (isset($validation)) : 
                ?>
        <div class="alert alert-danger"><? //= $validation->listErrors(); 
                                        ?></div>
        <?php // endif; 
        ?> -->


        <script>
        // swal({
        //      title: "กรอกข้ออมูลไม่ครบ!",
        //     text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
        //      icon: "warning",
        //      button: "OK",
        //  });
        </script>




        <div id="u0_div" class="container">

            <!--------------------------------------(ข้อมูลนักศึกษา)------------------------------------------------------>

            <!-- <form id="create-form" action="/register/save" method="post" class="register-form"> -->
            <?= form_open(); ?>

            <div id="u1_text">
                <p><span>ลงทะเบียนศิษย์เก่า</span></p>
            </div>

            <!-- ------------------------------------------------(ข้อมูลนักศึกษา)---------------------------------------------------------------- -->
            <hr>
            <div id="hr">ข้อมูลนักศึกษา <span style="color:red">* จำเป็นต้องกรอกข้อมูล</span></div>


            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="faculty">คณะ</label>
                    <select class="select" id="faculty" name="faculty" style="width:205px;">
                        <option selected><?= set_value('faculty');?></option>
                        <option>------------------------------</option>
                        <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
                        <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                        <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                        <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
                        <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                    </select>
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('faculty')): ?>
                        <?= $validation->getError('faculty'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>

                <div class="form-group">
                    <label for="name">สาขา</label>
                    <input type="text" name="major" id="major" value="<?= set_value('major'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('major')): ?>
                        <?= $validation->getError('major'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>


            </div>


            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">หมู่เรียน</label>
                    <input type="text" name="section" id="section" value="<?= set_value('section'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('section')): ?>
                        <?= $validation->getError('section'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
                <div class="form-group">
                    <label for="name">ปีที่เข้าศึกษา</label>
                    <input type="text" name="first_year" id="first_year" value="<?= set_value('first_year'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('first_year')): ?>
                        <?= $validation->getError('first_year'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">วุฒิการศึกษาสูงสุด</label>
                    <select class="select" id="edu_level" name="edu_level" style="width:415px;">
                        <option selected><?= set_value('edu_level'); ?></option>
                        <!-- <option value="ประถมศึกษา">ประถมศึกษา</option>
                            <option value="มัธยมศึกษาหรือเทียบเท่า">มัธยมศึกษา หรือ เทียบเท่า</option> -->
                        <option>-----------------------------------------------------------------</option>
                        <option value="อนุปริญญา ภาคปกติ">อนุปริญญา ภาคปกติ</option>
                        <option value="อนุปริญญา ภาคกศ.พป.">อนุปริญญา ภาคกศ.พป.</option>
                        <option value="อนุปริญญา ภาคกศ.พป.(ภาคเช้า)">อนุปริญญา ภาคกศ.พป.(ภาคเช้า)</option>
                        <option value="อนุปริญญา ภาคกศ.พป.(ภาคค่ำ)">อนุปริญญา ภาคกศ.พป.(ภาคค่ำ)</option>
                        <option value="ปริญาญาตรี (4 ปี) ภาคปกติ">ปริญาญาตรี (4 ปี) ภาคปกติ </option>
                        <option value="คณะวิทยาศาสตร์และเทคโนโลยี (สาขาพยาบาลศาสตร์)">คณะวิทยาศาสตร์และเทคโนโลยี
                            (สาขาพยาบาลศาสตร์)</option>
                        <option value="ปริญาญาตรี (4 ปี) ภาคกศ.พป.">ปริญาญาตรี (4 ปี) ภาคกศ.พป.</option>
                        <option value="ปริญาญาตรี (4 ปี) ภาคกศ.พป. วันธรรมดา (ภาคเช้า)">ปริญาญาตรี (4 ปี) ภาคกศ.พป.
                            วันธรรมดา (ภาคเช้า)</option>
                        <option value="ปริญาญาตรี (4 ปี) ภาคกศ.พป. วันธรรมดา (ภาคค่ำ)">ปริญาญาตรี (4 ปี) ภาคกศ.พป.
                            วันธรรมดา (ภาคค่ำ)</option>
                        <option value="วิชาโท">วิชาโท</option>
                        <option value="ปริญาญาตรี (4 ปี) โครงการนักศึกษานานาชาติ">ปริญาญาตรี (4 ปี)
                            โครงการนักศึกษานานาชาติ</option>
                        <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคปกติ">ปริญาญาตรี (หลังอนุปริญญา) ภาคปกติ
                        </option>
                        <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคปกติ ภาคค่ำ">ปริญาญาตรี (หลังอนุปริญญา) ภาคปกติ
                            ภาคค่ำ</option>
                        <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคกศ.พป.">ปริญาญาตรี (หลังอนุปริญญา) ภาคกศ.พป.
                        </option>
                        <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคกศ.พป. วันธรรมดา (ภาคเช้า)">ปริญาญาตรี
                            (หลังอนุปริญญา) ภาคกศ.พป. วันธรรมดา (ภาคเช้า)</option>
                        <option value="ปริญาญาตรี (หลังอนุปริญญา) ภาคกศ.พป. วันธรรมดา (ภาคค่ำ)">ปริญาญาตรี
                            (หลังอนุปริญญา) ภาคกศ.พป. วันธรรมดา (ภาคค่ำ)</option>
                        <option value="ปริญาญาตรี (5 ปี) ภาคปกติ">ปริญาญาตรี (5 ปี) ภาคปกติ</option>
                        <option value="ปริญาญาตรี (5 ปี) ภาคกศ.พป.">ปริญาญาตรี (5 ปี) ภาคกศ.พป.</option>
                        <option value="ปริญาญาตรี (5 ปี) ภาคกศ.พป. วันธรรมดา (ภาคเช้า)">ปริญาญาตรี (5 ปี) ภาคกศ.พป.
                            วันธรรมดา (ภาคเช้า)</option>
                        <option value="ปริญาญาตรี (5 ปี) ภาคกศ.พป. วันธรรมดา (ภาคค่ำ)">ปริญาญาตรี (5 ปี) ภาคกศ.พป.
                            วันธรรมดา (ภาคค่ำ)</option>
                        <option value="ปริญาญาโท ภาคปกติ">ปริญาญาโท ภาคปกติ</option>
                        <option value="ปริญาญาโท ภาคพิเศษ">ปริญาญาโท ภาคพิเศษ</option>
                        <option value="ปริญาญาเอก ภาคปกติ">ปริญาญาเอก ภาคปกติ</option>
                        <option value="ปริญาญาเอก ภาคพิเศษ">ปริญาญาเอก ภาคพิเศษ</option>
                    </select>
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('edu_level')): ?>
                        <?= $validation->getError('edu_level'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">รหัสนักศึกษา</label>
                    <input type="text" name="stu_id" id="stu_id" value="<?= set_value('stu_id'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('stu_id')): ?>
                        <?= $validation->getError('stu_id'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">รหัสผ่าน</label>
                    <input type="password" name="password" id="password" value="<?= set_value('password'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('password')): ?>
                        <?= $validation->getError('password'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">ยืนยันรหัสผ่าน</label>
                    <input type="password" name="confpassword" id="confpassword"
                        value="<?= set_value('confpassword'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('confpassword')): ?>
                        <?= $validation->getError('confpassword'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
            </div>



            <!-- ------------------------------------------(ข้อมูลส่วนบุค)------------------------------------------------------------------------- -->
            <hr>
            <div id="hr">ข้อมูลส่วนบุคล <span style="color:red">* จำเป็นต้องกรอกข้อมูล</span></div>



            <div class="form-row">
                <div class="form-group">
                    <label for="name" style="width: 61px;">คำนำหน้า</label>
                    <select class="select" id="name_prefix" name="name_prefix">
                        <option selected><?= set_value('name_prefix'); ?></option>
                        <option>-------</option>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">น.ส.</option>
                        <option value="นาง">นาง</option>
                    </select>

                </div>

                <div class="form-group">
                    <label for="name">ชื่อ</label>
                    <input type="text" name="FName" id="FName" value="<?= set_value('FName'); ?>">

                </div>
                <div class="form-group">
                    <label for="father_name">นามสกุล</label>
                    <input type="text" name="LName" id="LName" value="<?= set_value('LName'); ?>">

                </div>

            </div>
            <span style="padding-left: 115px;" id="error"><?php  if (isset($validation)) : ?>
                <?php if($validation->hasError('name_prefix')||$validation->hasError('FName')||$validation->hasError('LName')){ ?>
                <?php echo'กรุณากรอก ' ?><?= $validation->getError('name_prefix');  ?>
                <?= $validation->getError('FName'); ?>
                <?= $validation->getError('LName'); ?>
                <?php } ?>
                <?php endif; ?></span>

            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="FnEng">ชื่อ(อังกฤษ)</label>
                    <input type="text" name="FName_eng" id="FName_eng" value="<?= set_value('FName_eng'); ?>"
                        onkeyup="upperCharacter()">

                </div>

                <div class="form-group">
                    <label for="LnEng">นามสกุล(อังกฤษ)</label>
                    <input type="text" name="LName_eng" id="LName_eng" value="<?= set_value('LName_eng'); ?>"
                        onkeyup="upperCharacter()">

                </div>
            </div>
            <span style="padding-left: 115px;" id="error"><?php  if (isset($validation)) : ?>
                <?php if($validation->hasError('FName_eng')||$validation->hasError('LName_eng')){ ?>
                <?php echo'กรุณากรอก ' ?><?=  $validation->getError('FName_eng'); ?>
                <?= $validation->getError('LName_eng'); echo' เป็นภาษาอังกฤษ' ?>
                <?php } ?>
                <?php endif; ?></span>

            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="FnEng">เลขบัตรประชาชน</label>
                    <input type="text" name="id_cardnumber" id="id_cardnumber"
                        value="<?= set_value('id_cardnumber'); ?>">

                </div>
                <div style="display:flex; padding-left: 13px;">
                    <label id="sexLabel">เพศ</label>
                    <div class="form-group" id="sexMr">

                        <input class="form-check-input" type="radio" name="sex" value="Mr.">

                        <label id="sexText">ชาย</label>
                    </div>

                    <div class="form-group" id="sexMrs">
                        <input class="form-check-input" type="radio" name="sex" value="Mrs.">
                        <label id="sexText">หญิง</label>
                    </div>
                </div>



            </div>
            <span style="padding-left: 115px;" id="error"><?php  if (isset($validation)) : ?>
                <?php if($validation->hasError('id_cardnumber')||$validation->hasError('sex')){ ?>
                <?php  ?><?= $validation->getError('id_cardnumber'); ?>
                <?= $validation->getError('sex'); ?>

                <?php } ?>
                <?php endif; ?></span>








            <!-- ------------------------------------(ข้อมูลส่วนตัว)--------------------------------------------------------------------------- -->




            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">วัน/เดือน/ปีเกิด</label>
                    <input style="width: 200px; height:30px" type="date" name="d_m_y_birth" id="d_m_y_birth"
                        placeholder="" value="<?= set_value('d_m_y_birth'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('d_m_y_birth')): ?>
                        <?= $validation->getError('d_m_y_birth'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
                <div class="form-group">
                    <label for="name">จังหวัดที่เกิด</label>
                    <input type="text" name="province_birth" id="province_birth"
                        value="<?= set_value('province_birth'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('province_birth')): ?>
                        <?= $validation->getError('province_birth'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
            </div>


            <div class="form-row">

                <div class="form-group" id="regis0">
                    <label for="name">สัญชาติ</label>
                    <input style="width: 98px;" type="text" name="nationality" id="nationality"
                        value="<?= set_value('nationality'); ?>">

                </div>
                <div class="form-group">
                    <label for="name">ศาสนา</label>
                    <input style="width: 98px;" type="text" name="religion" id="religion"
                        value="<?= set_value('religion'); ?>">

                </div>
                <div class="form-group">
                    <label for="name" style="width: 61px;">กรุ๊ปเลือด</label>
                    <select class="select" name="blood_type" id="blood_type">//aria-label="Default select example">
                        <option selected><?= set_value('blood_type'); ?></option>
                        <option>-------</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
            </div>
            <span style="padding-left: 115px;" id="error"><?php  if (isset($validation)) : ?>
                <?php if($validation->hasError('nationality')||$validation->hasError('religion')||$validation->hasError('blood_type')){ ?>
                <?php echo'กรุณากรอก ' ?><?= $validation->getError('nationality'); ?>
                <?= $validation->getError('religion'); ?>
                <?= $validation->getError('blood_type'); ?>
                <?php } ?>
                <?php endif; ?></span>


            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">เบอร์โทรติดต่อ</label>
                    <input type="text" name="phone_number" id="phone_number" value="<?= set_value('phone_number'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('phone_number')): ?>
                        <?= $validation->getError('phone_number'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
            </div>


            <!-- -------------------------------------------(ที่อยู่)---------------------------------------------------------------------------- -->
            <hr>
            <div id="hr">ที่อยู่ปัจจุบัน <span style="color:red">* จำเป็นต้องกรอกข้อมูล</span></div>


            <div class="form-row">
                <div class="form-group" id="regis0">

                    <!-- <label for="name">ที่อยู่</label>
                        <input style="width: 98px;" type="text" name="Address" id="Address" required="" value="<? //=  set_value('Address'); 
                                                                                                                ?>"> -->

                    <label for="name">บ้านเลขที่ และ หมู่</label>
                    <input style="width: 200px;" type="text" name="Address" id="Address"
                        value="<?= set_value('Address'); ?>" placeholder="เช่น 96/4 ม.18">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('Address')): ?>
                        <?= $validation->getError('Address'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
                <div class="form-group">
                    <label for="name">ตำบล</label>
                    <input style="width: 98px;" type="text" name="SubDistrict" id="SubDistrict"
                        value="<?= set_value('SubDistrict'); ?>">
                    <span id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('SubDistrict')): ?>
                        <?= $validation->getError('SubDistrict'); ?>
                        <?php endif; ?>
                        <?php endif; ?></span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">อำเภอ</label>
                    <input style="width: 98px;" type="text" name="District" id="District"
                        value="<?= set_value('District'); ?>">

                </div>
                <div class="form-group">
                    <label for="name">จังหวัด</label>
                    <input style="width: 98px;" type="text" name="Province" id="Province"
                        value="<?= set_value('Province'); ?>">

                </div>
                <div class="form-group">
                    <label for="name">รหัสไปรษณีย์</label>
                    <input style="width: 98px;" type="text" name="Zipcode" id="Zipcode"
                        value="<?= set_value('Zipcode'); ?>">

                </div>
            </div>

            <span style="padding-left: 115px;" id="error"><?php  if (isset($validation)) : ?>
                <?php if($validation->hasError('District')||$validation->hasError('Province')||$validation->hasError('Zipcode')){ ?>
                <?php  echo'กรุณากรอก '; ?><?= $validation->getError('District'); ?>
                <?= $validation->getError('Province'); ?>
                <?= $validation->getError('Zipcode'); ?>
                <?php } ?>
                <?php endif; ?></span>
            <!-- -------------------------------------------(การทำงาน)---------------------------------------------------------------------------- -->
            <hr>
            <div id="hr">สถานภาพการทำงาน
            </div>

            <div class="form-row">
                <div class="form-group" id="regis0">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_work" id="status_work"
                            value="ทำงานแล้ว">
                        <label class="form-check-label" for="status_work1">
                            ทำงานแล้ว
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_work" id="status_work"
                            value="ไม่ได้ทำงาน" checked>
                        <label class="form-check-label" for="status_work">
                            ไม่ได้ทำงาน
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group" id="regis0">
                    <label for="name">สถานที่ทำงาน/บริษัท</label>
                    <input style="width: 150px;" type="text" name="company_name" id="company_name"
                        value="<?= set_value('company_name'); ?>">
                </div>
            </div>


            <div id="btn">
                <center>
                    <button type="submit" id="submit" class="btn btn-primary"
                        style="width:250px; height:auto;">ลงทะเบียน</button>
                    <a href=" /home" class="btn btn-danger" style="width:250px; height:auto;">ยกเลิก</a>
                </center>
            </div>
            <?= form_close(); ?>
            <!-- </form> -->

        </div>


    </div>
    <!-- <br> -->
    <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2020 Copyright:
            <a class="text" href="#" id="footer_link">ISAC.org</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function upperCharacter() {
        var x = document.getElementById("FName_eng");
        var y = document.getElementById("LName_eng");
        x.value = x.value.toUpperCase();
        y.value = y.value.toUpperCase();
    }

    // function submit() {
    //     var stu_id = $("#stu_id").val();
    //     var password = $("#password").val();
    //     var name_prefix = $("#name_prefix").val();
    //     var FName = $("#FName").val();
    //     var LName = $("#LName").val();
    //     var FName_eng = $("#FName_eng").val();
    //     var LName_eng = $("#LName_eng").val();
    //     var id_cardnumber = $("#id_cardnumber").val();
    //     var sex = $("#sex").val();
    //     var faculty = $("#faculty").val();
    //     var major = $("#major").val();
    //     var edu_level = $("#edu_level").val();
    //     var first_year = $("#first_year").val();
    //     var d_m_y_birth = $("#d_m_y_birth").val();
    //     var province_birth = $("#province_birth").val();
    //     var nationality = $("#nationality").val();
    //     var religion = $("#religion").val();
    //     var Address = $("#Address").val();
    //     var SubDistrict = $("#SubDistrict").val();
    //     var District = $("#District").val();
    //     var Province = $("#Province").val();
    //     var Zipcode = $("#Zipcode").val();
    //     var phone_number = $("#phone_number").val();


    //     if (stu_id == '' || password == '' || name_prefix == '' ||
    //         FName == '' || LName == '' || FName_eng == '' ||
    //         LName_eng == '' || id_cardnumber == '' || sex == '' ||
    //         faculty == '' || major == '' || edu_level == '' ||
    //         first_year == '' || d_m_y_birth == '' || province_birth == '' ||
    //         nationality == '' || religion == '' || Address == '' ||
    //         SubDistrict == '' || District == '' || Province == '' ||
    //         Zipcode == '' || phone_number == '') {
    //         Swal.fire({
    //             title: "กรอกข้อมูลไม่ครบ!",
    //             text: "กรุณาเช็คข้อมูลอีกครั้ง!",
    //             icon: "warning",
    //             button: "OK",
    //         });


    //     } else {

    //         Swal.fire({

    //             icon: 'success',
    //             title: 'ลงทะเบียนสำเร็จแล้ว!!',
    //             showConfirmButton: false,
    //             timer: 1000000
    //         });


    //     }

    // }


    // $('#btn').click(function() {

    //     var stu_id = $("#stu_id").val();
    //     var password = $("#password").val();
    //     var name_prefix = $("#name_prefix").val();
    //     var FName = $("#FName").val();
    //     var LName = $("#LName").val();
    //     var FName_eng = $("#FName_eng").val();
    //     var LName_eng = $("#LName_eng").val();
    //     var id_cardnumber = $("#id_cardnumber").val();
    //     var sex = $("#sex").val();
    //     var faculty = $("#faculty").val();
    //     var major = $("#major").val();
    //     var edu_level = $("#edu_level").val();
    //     var first_year = $("#first_year").val();
    //     var d_m_y_birth = $("#d_m_y_birth").val();
    //     var province_birth = $("#province_birth").val();
    //     var nationality = $("#nationality").val();
    //     var religion = $("#religion").val();
    //     var Address = $("#Address").val();
    //     var SubDistrict = $("#SubDistrict").val();
    //     var District = $("#District").val();
    //     var Province = $("#Province").val();
    //     var Zipcode = $("#Zipcode").val();
    //     var phone_number = $("#phone_number").val();


    //     if (stu_id == '' || password == '' || name_prefix == '' ||
    //         FName == '' || LName == '' || FName_eng == '' ||
    //         LName_eng == '' || id_cardnumber == '' || sex == '' ||
    //         faculty == '' || major == '' || edu_level == '' ||
    //         first_year == '' || d_m_y_birth == '' || province_birth == '' ||
    //         nationality == '' || religion == '' || Address == '' ||
    //         SubDistrict == '' || District == '' || Province == '' ||
    //         Zipcode == '' || phone_number == '') {
    //         swal({
    //             title: "กรอกข้ออมูลไม่ครบ!",
    //             text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
    //             icon: "warning",
    //             button: "OK",
    //         });
    //     } else {
    //         swal({
    //             title: "ลงทะเบียนสำเร็จแล้ว!!",
    //             text: "คลิกที่ปุ่ม!!",
    //             icon: "success",
    //             button: "OK",
    //         });
    //     }


    // });
    </script>




</body>

</html>