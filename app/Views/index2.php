<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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

    <!-- CSS -->
    <link rel="stylesheet" href="/css/index.css"> 
   
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
                                <li><a class="dropdown-item" href="/search_page_index">จากรหัสนักศึกษา</a></li>
                            </ul>
                        </li>


                    </ul>

                    <!-- ปุ่มผู้ใช้ และ logout -->
                    <div class="btn-group">
                        <a class="nav-link dropdown-toggle" href="/search_page_index" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            &nbsp;&nbsp;<?php echo $session->get('FName_eng'); ?>&nbsp;&nbsp;

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                            aria-labelledby="navbarDropdown">
                            <li> <a class="dropdown-item" href="/profile">
                                    <i class="far fa-address-card"></i>&nbsp;&nbsp;ข้อมูลส่วนตัว</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Login/logout'); ?>" id="logout_btn">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;ออกจากระบบ</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>

        <br>
        <div class="content">
            <div class="container">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/home.jpg" class="d-block w-100" alt="home">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/home2.jpg" class="d-block w-100" alt="home2">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/home3.jpg" class="d-block w-100" alt="home3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- <div id="u8" class="ax_default heading_1" style="left: 900px;">
                <div id="u8_div" class=""></div>
                <div id="u8_text" class="text ">
                    <p><span>Welcome</span></p>
                </div> -->

        </div>
        <!-- <br> -->

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