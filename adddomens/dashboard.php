<?php
session_start();
require_once './php/classes/WebmasterApi.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AddDomen's</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/popup.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/confirm.css" />
  </head>

  <body>
    <header>
      <div class="header-area">
        <div id="sticky-header" class="main-header-area">
          <div class="container-fluid">
            <div class="header_bottom_border">
              <div class="row align-items-center">
                <div class="col-xl-3 col-lg-2">
                  <div class="logo">
                    <a href="index.php">
                      <h1 class="colh">AddDomen's</h1>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                  <div class="Appointment">
                    <div class="d-none d-lg-block">
                      <a class="boxed-btn3" href="auth.php">Назад</a>
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
    </header><br><br>
      <br />
      <div class="mydomens" id="<? print $_SESSION["host_id"] ?>">
        <h2 align="center">Добавить файл Sitemap</h2>
        <form id="formAddLink">
          <label>Добавить Sitemap</label>
          <input type="text" name="url" id="nameInput" placeholder="Введите ссылку на файл sitemap.xml">
          <button type="submit" id="btnAdd">Добавить</button>
        </form>
        <div class="tbl-content">
        </div>
      </div>

      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <script src="js/dashboard.js"></script>
    </body>
  </body>
</html>