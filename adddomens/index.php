<?php
// session_start();
// if ($_SESSION['user']) {
//     header('Location:php/auth.php');
// }
// else {
//     header('Location:../index.php');
// }
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AddDomen's</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/popup.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/confirm.css" />

</head>

<body>

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <h1 class="colh">AddDomen's</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Главная</a></li>
                                            <li><a href="contact.html">Контакты</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="#" id="open_pop_up_reg">Регистрация</a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="#" id="open_pop_up_log">Войти</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    
    <!--Авторизация-->
    <div class="pop_up" id="pop_up">
        <div class="pop_up_container">
            <div class="pop_up_body">
                <h1>Авторизация</h1>
                <form action="login.php" method="post">
                    <input type="text" name="login" placeholder="Логин">
                    <input type="text" name="password" placeholder="Пароль">
                    <button>Войти</button>
                </form>
                <div class="pop_up_close" id="pop_up_close">&#10006</div>
            </div>
        </div>
    </div>

    <!--Регистрация-->
    <div class="pop_up" id="pop_up_reg">
        <div class="pop_up_container">
            <div class="pop_up_body">
                <h1>Регистрация</h1>
                <form action="register.php" method="post">
                    <input type="text" name="name" placeholder="Ваше Имя">
                    <input type="text" name="login" placeholder="Логин">
                    <input type="text" name="password" placeholder="Пароль">
                    <button type="submit">Зарегистрироваться</button>
                </form>
                <div class="pop_up_close" id="pop_up_close_reg">&#10006</div>
            </div>
        </div>
    </div>

    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Хотите загрузить много доменов за раз?</h5>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Вводите свои домены</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">И мы загрузим ваши домены на Яндекс Вебмастер</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <img src="img/banner/illustration.png" alt="">
        </div>
    </div>

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div align = "center" class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">
                                    <h1 class="colh">AddDomen's</h1>
                                </a>
                            </div>
                            <p>
                                info@wbest.ru <br>
                                +7 (495) 266-67-95 <br>
                                г. Череповец, ул. Монтклер, д. 20
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
 
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>