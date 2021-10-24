<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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

        <link rel="stylesheet" href="/css/login.css"> 

</head>

<body>
    <div id="container">


        <!-- Tag Header -->
        <nav class="navbar navbar-expand-lg bg-dark" id="bg-drak">
            <div class="container-fluid">
                <a class="navbar-brand" id="text0" href="/home">ISAC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
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
                    <a class="nav-link" href="/register" id="navbarDropdown">ลงทะเบียน</a>
                </div>
            </div>
        </nav>

        <?php ini_set('display_errors', '1');  ?>
        <?php if (isset($validation)) : ?>
        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
        <?php endif; ?>

        <div id="u0_div" class="container">

            <a style="color:black" href="/home">
                <div id="u235" class="ax_default label" style="cursor: pointer;">
                    <div id="u235_text" class="text ">
                        <p id="backto"><span>
                                <&nbsp;back </span>
                        </p>
                    </div>
                </div>
            </a>

            <!-- <//?php if(empty(session()->getFlashdata('warning'))){?>

            <div class="alert alert-warning">

                <//?php echo session()->getFlashdata('warning');?>
            </div>
            <//?php }?>
            <//?php form_open(login/check_login)?> -->

            <div id="u1">
                <p id="u1_text"><span>เข้าสู่ระบบ</span></p>
                <p><span>ไม่มีบัญชี?<a href="/register">ลงทะเบียน</a></span></p>
            </div>

            <form action="/login/auth" method="post">
                <div id="form-row">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="stu_id">รหัสนักศึกษา</label>
                            <input type="text" name="stu_id" id="stu_id" required=""
                                value="<?= set_value('stu_id'); ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="FnEng">รหัสผ่าน</label>
                            <input type="password" name="password" id="inputforpassword">
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label style="display: inline-flex; padding-right:62px;  font-weight: 0;">
                        จดจำฉัน
                    </label>
                    <label style="display: inline-flex; text-align:right;"><a
                            href="/register">ลืมรหัสผ่านหรือไม่?</a></label>
                </div>

                <div id="btn" onclick="submit()">
                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                </div>

            </form>



        </div>
        <!-- <br> -->




    </div>
    <!-- container  -->
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
    function submit() {
        var stu_id = $("#stu_id").val();
        var password = $("#inputforpassword").val();

        if (stu_id == '') {
            Swal.fire({
                title: "รหัสนักศึกษาต้องไม่เป็นค่าว่าง!",
                text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
                icon: "warning",
                button: "OK",
                timer: 3000
            });
            // alert("รหัสนักศึกษาต้องไม่เป็นค่าว่าง!");
        } else if (password == '') {
            Swal.fire({
                title: "รหัสผ่านต้องไม่เป็นค่าว่าง!",
                text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
                icon: "warning",
                button: "OK",
                timer: 3000
            });
            // alert("รหัสผ่านต้องไม่เป็นค่าว่าง!");
        }


        // if (stu_id == '' || password == '') {
        //     Swal.fire({
        //         title: "รหัสนัหศึกษาและรหัสผ่านต้องไม่เป็นช่องว่าง!",
        //         text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
        //         icon: "warning",
        //         button: "OK",
        //     });

        //     // swal({
        //     //     title: "กรอกข้ออมูลไม่ครบ!",
        //     //     text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
        //     //     icon: "warning",
        //     //     button: "OK",
        //     // });

        // } else {

        //     Swal.fire({

        //         icon: 'success',
        //         title: 'เข้าสู่ระบบสำเร็จแล้ว!!',
        //         showConfirmButton: false,
        //         timer: 1000000
        //     });
        // }
    }
    </script>

</body>

</html>