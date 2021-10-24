<?php 
date_default_timezone_set('Asia/Bangkok');
$session = session(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- icon  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- icon tab  -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo_isac.png" />

    <!-- CSS -->

    <link rel="stylesheet" href="/css/edit_profile.css">
   

</head>

<body>

    <div id="container">
        <!-- Tag Header -->
        <nav class="navbar navbar-expand-lg bg-dark" id="bg-drak">
            <div class="container-fluid">
                <a class="navbar-brand" id="text0" href="/index">ISAC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/search_page_index" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ค้นหาข้อมูลศิษย์เก่า
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/search_page_index">จากชื่อ</a></li>
                                <li><a class="dropdown-item" href="/search_page_index">จากปีแรกเข้า</a></li>
                                <li><a class="dropdown-item" href="/search_page_index">จากจังหวัด</a></li>
                                <li><a class="dropdown-item" href="/search_page_index">จากหมู่เรียน</a></li>
                                <li><a class="dropdown-item" href="/search_page_index">จากรหัสนักศึกษา</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/profile">ข้อมูลส่วนตัว</a>
                        </li> -->

                    </ul>
                    <!-- ปุ่มผู้ใช้ และ logout -->
                    <div class="btn-group">

                        <a class="nav-link dropdown-toggle" href="/search_page_index" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            &nbsp;&nbsp;<?php echo $session->get('FName_eng'); ?>&nbsp;&nbsp;

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                            aria-labelledby="navbarDropdown">
                            <li> <a class="dropdown-item" href="/profile">
                                    <i class="far fa-address-card"></i>&nbsp;&nbsp;ข้อมูลส่วนตัว</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/Login/logout'); ?>"
                                    id="logout_btn">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;ออกจากระบบ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <br>




        <div id="u0_div" class="container">

            <!-- <a style="color:black" href="/index">
                <div id="u235" class="ax_default label" style="cursor: pointer;">
                    <div id="u235_text" class="text ">
                        <br>
                        <p><span>
                                <&nbsp;back </span>
                        </p>
                    </div>
                </div>
            </a> -->
            <?php $stu_id = $session->get('stu_id');?>
            <form action="<?= base_url('/update/'. $stu_id) ?>" method="POST">
                <input type="hidden" name="_method" value="PUT" />
                <div id="u1_text">
                    <p><span>แก้ไขประวัติส่วนตัว</span></p>
                </div>

                <div class="form-row">




                    <div class="form-group" style="padding-bottom: 20px;">
                        <div id="u26_div" class="">
                            <div id="u27_text" class="text ">
                                <p><span>ข้อมูลด้านการศีกษา</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 35px;">
                        <div id="u12-1_div" class="u12_div">
                            <p><span>รหัสประจำตัว</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>เลขบัตรประชาชน</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ชื่อ</span></p>
                        </div>
                        <!-- <div id="u12-1_div" class="u12_div">
                            <p><span>นามสกุล</span></p>
                        </div> -->
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ชื่อภาษาอังกฤษ</span></p>
                        </div>
                        <!-- <div id="u12-1_div" class="u12_div">
                            <p><span>นามสกุลอังกฤษ</span></p>
                        </div> -->
                        <div id="u12-1_div" class="u12_div">
                            <p><span>คณะ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>สาขาวิชา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>หมู่เรียน</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>วุฒิการศึกษา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ปีที่เข้าศึกษา</span></p>
                        </div>

                        <div id="u26_div" class="">
                            <div id="u27_text" class="text ">
                                <p><span>ข้อมูลส่วนบุคคล</span></p>
                            </div>
                        </div>

                        <div id="u12-1_div" class="u12_div" style="margin-top:38px;">
                            <p><span>วันเดือนปีเกิด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>จังหวัดที่เกิด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>สัญชาติ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ศาสนา</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>กลุ่มเลือด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ที่อยู่</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>ตำบล</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>อำเภอ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>จังหวัด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>รหัสไปรษณีย์</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>เบอร์โทรติดต่อ</span></p>
                        </div>
                        <div id="u26_div" class="">
                            <div id="u27_text" class="text ">
                                <p><span>ข้อมูลการทำงาน</span></p>
                            </div>
                        </div>

                        <div id="u12-1_div" class="u12_div" style="margin-top:38px;">
                            <p><span>สถานภาพ</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>สถานที่ทำงาน</span></p>
                        </div>


                    </div>

                    <div class="form-group" style="padding-top: 35px;">
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo $stu_id; ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('id_cardnumber'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('name_prefix')." ".$session->get('FName')." ".$session->get('LName'); ?></span>
                            </p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo   $session->get('sex')." ".$session->get('FName_eng')." ".$session->get('LName_eng'); ?></span>
                            </p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('faculty'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('major'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('section'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('edu_level'); ?></span></p>
                        </div>


                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('first_year'); ?></span></p>
                        </div>

                        <div id="u12-1_div" class="u13_div" style="margin-top:38px;">
                            <p><span><?php 
                        $date = $session->get('d_m_y_birth');
                        $dm = 'd/m/';
                        $year=(date("Y")+543);
                        echo date($dm.$year,strtotime($date));
                        ?> </span></p>
                        </div>

                        <div id="u12-1_div" class="u13_div">
                            <p><input id="province_birth" type="text" name="province_birth"
                                    value="<?php echo  $session->get('province_birth'); ?>" /></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input id="nationality" type="text" name="nationality"
                                    value="<?php echo  $session->get('nationality'); ?>" /></p>

                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input id="religion" type="text" name="religion"
                                    value="<?php echo  $session->get('religion'); ?>" />
                            </p>

                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input id="blood_type" type="text" name="blood_type"
                                    value="<?php echo  $session->get('blood_type'); ?>" /></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input id="Address" type="text" name="Address"
                                    value="<?php echo  $session->get('Address'); ?>" /></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input id="SubDistrict" type="text" name="SubDistrict"
                                    value="<?php echo  $session->get('SubDistrict'); ?>" /></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input id="District" type="text" name="District"
                                    value="<?php echo  $session->get('District'); ?>" />
                            </p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input id="Province" type="text" name="Province"
                                    value="<?php echo  $session->get('Province'); ?>" />
                            </p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><input id="Zipcode" type="text" name="Zipcode"
                                    value="<?php echo  $session->get('Zipcode'); ?>" /></p>
                        </div>


                        <div id="u12-1_div" class="u13_div">
                            <p><input id="phone_number" type="text" name="phone_number"
                                    value="<?php echo  $session->get('phone_number'); ?>" /></p>
                            </p>
                        </div>
                        <div id="u12-1_div" class="u13_div" style="margin-top:38px;">
                            <p>
                                <?php if($session->get('status_work')=='ทำงานแล้ว'){?>
                                <input class="form-check-input" type="radio" name="status_work" id="status_work"
                                    value="ทำงานแล้ว" checked>
                                <label class="form-check-label" for="status_work">
                                    ทำงานแล้ว
                                </label>
                                <input class="form-check-input" type="radio" name="status_work" id="status_work"
                                    value="ไม่ได้ทำงาน">
                                <label class="form-check-label" for="status_work">
                                    ไม่ได้ทำงาน
                                </label>
                                <?php } else { ?>
                                <input class="form-check-input" type="radio" name="status_work" id="status_work"
                                    value="ทำงานแล้ว">
                                <label class="form-check-label" for="status_work">
                                    ทำงานแล้ว
                                </label>
                                <input class="form-check-input" type="radio" name="status_work" id="status_work"
                                    value="ไม่ได้ทำงาน" checked>
                                <label class="form-check-label" for="status_work">
                                    ไม่ได้ทำงาน
                                </label>
                                <?php } ?>



                            </p>
                        </div>

                        <div id="u12-1_div" class="u13_div">
                            <p><input id="company_name" type="text" name="company_name"
                                    value="<?php echo  $session->get('company_name'); ?>" /></p>
                            </p>
                        </div>


                    </div>



                </div>
                <!-- form row  -->


                <div id="btn">
                    <center>
                        <input type="hidden" name="stu_id" value="<?php echo $users['user_id']; ?>">
                        <button type="submit" id="submit" class="btn btn-warning"
                            onclick="submit()">อัพเดทข้อมูล</button>
                        <a href="/profile" class="btn btn-danger">ยกเลิก</a>

                    </center>
                </div>
            </form>

        </div>


    </div>
    <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2020 Copyright:
            <a class="text" href="#" id="footer_link">ISAC.org</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function submit() {
        // var stu_id = $("#stu_id").val();
        // var password = $("#password").val();
        // var name_prefix = $("#name_prefix").val();
        // var FName = $("#FName").val();
        // var LName = $("#LName").val();
        // var FName_eng = $("#FName_eng").val();
        // var LName_eng = $("#LName_eng").val();
        // var id_cardnumber = $("#id_cardnumber").val();
        // var sex = $("#sex").val();
        // var faculty = $("#faculty").val();
        // var major = $("#major").val();
        // var edu_level = $("#edu_level").val();
        // var first_year = $("#first_year").val();
        // var d_m_y_birth = $("#d_m_y_birth").val();
        var province_birth = $("#province_birth").val();
        var nationality = $("#nationality").val();
        var religion = $("#religion").val();
        var blood_type = $("#blood_type").val();
        var Address = $("#Address").val();
        var SubDistrict = $("#SubDistrict").val();
        var District = $("#District").val();
        var Province = $("#Province").val();
        var Zipcode = $("#Zipcode").val();
        var phone_number = $("#phone_number").val();


        if (province_birth == '' ||
            nationality == '' || religion == '' || blood_type == '' || Address == '' ||
            SubDistrict == '' || District == '' || Province == '' ||
            Zipcode == '' || phone_number == '') {
            Swal.fire({
                title: "กรอกข้อมูลไม่ครบ!",
                text: "กรุณาเช็คข้อมูลอีกครั้ง!",
                icon: "warning",
                button: "OK",
            });


        } else {
            Swal.fire({
                icon: 'success',
                title: 'ลงทะเบียนสำเร็จแล้ว!!',
                showConfirmButton: false,
                timer: 1000000
            });


        }

    }
    </script> -->
</body>

</html>