<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

   <link rel="stylesheet" href="/css/home.css">

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
                    <a class="nav-link" href="/login" id="navbarDropdown">เข้าสู่ระบบ</a>
                </div>
            </div>
    </div>
    </nav>




    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
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



                <!-- ปุ่มตรงกลาง  -->
                <!-- </div>
            <a href="/register">
                <div style="left: 700px; top:340px; cursor: pointer;" id="u3" class="ax_default button">
                    <div id="u3_div" class="" tabindex="0">

                        <div id="u3_text" class="text " style="padding-left: 44px;">
                            <p><span>ลงทะเบียน</span></p>
                        </div>
                    </div>

                </div>
            </a>

            <a href="/login">
                <div style="left: 1000px; top:340px; cursor: pointer;" id="u3" class="ax_default button">
                    <div id="u3_div" class="" tabindex="0">

                        <div id="u3_text" class="text " style="padding-left: 36px;">
                            <p><span>ลงชื่อเข้าใช้</span></p>
                        </div>
                    </div>

                </div>
            </a> -->
                <!-- ปุ่มตรงกลาง  -->

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





            <!-- <div class="content">
            
            </div> -->




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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>