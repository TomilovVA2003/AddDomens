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
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="d-none d-lg-block">
                              <a class="boxed-btn3" href="exit.php">Выйти</a>
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
<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/php/classes/WebmasterApi.php';

$api = new WebmasterApi();

if(isset($_GET['code'])) {
  $api->getToken($_GET['code']);
}
?>
<br>
<section>
<div class="mydomens">
  <h1>Мои Домены</h1>
  <form id="formAddArrLinks">
    <label>Добавить домен(ы)</label>
    <textarea name="arrLinks" id="nameTextarea" placeholder="Введите ссылки"></textarea>
    <button type="submit" id="addLinks">Добавить</button>
  </form>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Домен</th>
          <th>Удалить</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  </div>
</section>
</div>


    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/auth.js"></script>