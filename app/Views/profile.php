<?php 
date_default_timezone_set('Asia/Bangkok');
$session = session(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    <link rel="stylesheet" href="/css/profile.css">


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

            <a style="color:black" href="/index">
                <div id="u235" class="ax_default label" style="cursor: pointer;">
                    <div id="u235_text" class="text ">
                        <br>
                        <p><span>
                                <&nbsp;back </span>
                        </p>
                    </div>
                </div>
            </a>

            <form action="">
                <div id="u1_text">
                    <p><span>ประวัติส่วนตัว</span></p>
                </div>

                <div class="form-row">
                    <div class="form-group" style="padding-bottom: 20px; padding-right:4px">
                        <div id="u13_div" class="">
                            <div id="u14" class="ax_default box_3">
                                <div id="u14_div" class=""></div>
                                <div id="u14_text" class="text " style="display:none; visibility: hidden">
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div id="u18" class="ax_default box_3">
                            <div id="u18_div" class=""></div>
                            <div id="u16" class="ax_default box_3">

                                <?php $stu_id = $session->get('stu_id');?>
                                <a href="<?php echo base_url('/edit_profile/'.$stu_id);?>" id="text">
                                    <!-- <a href="/show_edit" id="text"> -->
                                    <div id="u17_div">
                                        <p><span>แก้ไขข้อมูลนักศึกษา</span></p>
                                    </div>
                                </a>

                            </div>
                            <!-- <div id="u18_div" class=""></div>
                            <div id="u16" class="ax_default box_3">
                                <a href="" id="text">
                                    <div id="u16_div">
                                        <p><span>เปลี่ยนรหัสผ่าน</span></p>
                                    </div>
                                </a>
                            </div>
                            <div id="u18_div" class=""></div>
                            <div id="u16" class="ax_default box_3">
                                <a href="" id="text">
                                    <div id="u16_div">
                                        <p><span>พิมพ์ข้มูลนักศึกษา</span></p>
                                    </div>
                                </a>
                            </div> -->
                        </div>

                    </div>



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
                        <div id="u12-1_div" class="address_div">
                            <p><span>ที่อยู่</span></p>
                        </div>
                        <!-- <div id="u12-1_div" class="u12_div">
                            <p><span>ตำบล</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>จังหวัด</span></p>
                        </div>
                        <div id="u12-1_div" class="u12_div">
                            <p><span>อำเภอ</span></p> -->
                        <!-- </div> -->
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
                            <p><span><?php echo  $session->get('stu_id'); ?></span></p>
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
                            <p><span>
                                    <?php 
                        $date = $session->get('d_m_y_birth');
                        $dm = 'd/m/';
                        $year=(date("Y")+543);
                        echo date($dm.$year,strtotime($date));
                        ?>
                                </span></p>
                        </div>

                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('province_birth'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('nationality'); ?></span></p>

                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('religion'); ?></span></p>

                        </div>
                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('blood_type'); ?></span></p>
                        </div>
                        <div id="u12-1_div" class="address_div_data">
                            <p><span><?php echo  "บ้านเลขที่ ".$session->get('Address')." ตำบล ". $session->get('SubDistrict')."<br>อำเภอ ".$session->get('District')." จังหวัด ".$session->get('Province')."<br>รหัสไปรษณีย์ ".$session->get('Zipcode'); ?></span>
                            </p>
                        </div>

                        <div id="u12-1_div" class="u13_div">
                            <p><span><?php echo  $session->get('phone_number'); ?></span></p>
                        </div>
                        <div class="form-group" style="padding-top: 35px;">
                            <div id="u12-1_div" class="u13_div">
                                <p><span><?php echo  $session->get('status_work'); ?></span></p>
                            </div>
                            <div id="u12-1_div" class="u13_div">
                                <p><span><?php echo  $session->get('company_name'); ?></span></p>
                            </div>


                        </div>


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
</body>

</html>