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
    <body>
      <br />
      <div class="mydomens tabs" id="<? print $_SESSION["host_id"] ?>">
        <h2 align="center">Подтверждение прав на <?php print $_SESSION['host_name'] ?></h2>
        <br />
        <h3 class="tt">
          Для получения доступа к настройкам и информации необходимо подтвердить
          права на управление сайтом.<br />
          Чтобы подтвердить права, используйте один из способов ниже.<br /><br />
        </h3>

        <div id="myDIV">
          <button class="btn active" id="HTML_FILE">HTML-файли</button>

          <button class="btn" id="META_TAG">Метатег</button>
        </div>
        <br />

        <div id="html" class="tabs__content active">
          <h3>
            Это наиболее простой способ подтверждения прав на управление
            сайтом.<br />
            В корне сайта создайте файл с именем yandex_<?php print $_SESSION['verification_uin']; ?>.html и
            со следующим содержимым:
          </h3>
          <div class="fon">
            <h3>
              &lt;html&gt;<br />
              &ensp;&ensp;&ensp;&lt;head&gt;<br />
              &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&lt;meta
              http-equiv="Content-Type" content="text/html;
              charset=UTF-8"&gt;<br />
              &ensp;&ensp;&ensp;&lt;/head&gt;<br />
              &ensp;&ensp;&ensp;&lt;body&gt; Verification:
              <?php print $_SESSION['verification_uin'] ?> &lt;/body&gt; <br />
              &lt;/html&gt;<br />
            </h3>
          </div>
          <h3 align="left">
            1. Убедитесь, что:
            <ul>
              <li>
                &ensp;&ensp;&ensp;1.1 Файл содержит только указанный выше код.
                Если в HTML-файл автоматически добавляется дополнительный
                контент, например, элементы дизайна, проверьте настройки вашего
                сервера. Если вам не удается создать файл с указанным
                содержимым, используйте другой способ подтверждения прав.
              </li>
              <li>
                &ensp;&ensp;&ensp;1.2 Файл по адресу
                <span id="host_name"><? print $_SESSION['host_name'] ?></span>yandex_<? print $_SESSION['verification_uin'] ?>.html
                открывается.
              </li>
            </ul>
            <br />
            Если сайт работает по IPv4 и IPv6, убедитесь, что по всем IP-адресам
            сайт отвечает корректно.<br /><br />
            2. Нажмите кнопку Проверить.
          </h3>
          <div class="status__block">
            <h1>Права не подтверждены</h1>
          </div>
        </div>

        <div id="meta" class="tabs__content">
          <h3>
            Добавьте в код главной страницы вашего сайта (в раздел head)
            метатег:
          </h3>
          <br />
          <div class="fon">
            <h3>
              &lt;meta name="yandex-verification" content="<?php print $_SESSION['verification_uin'] ?>"
              /&gt;
            </h3>
          </div>
          <br />
          <h3 align="left">
            1. Перейдите на главную страницу вашего сайта и убедитесь, что
            метатег появился в HTML-коде страницы в разделе head. Для этого в
            меню браузера нужно выбрать «Исходный код страницы». На некоторых
            сайтах метатег может обновляться несколько минут. Если сайт работает
            по IPv4 и IPv6, убедитесь, что по всем IP-адресам сайт отвечает
            корректно.<br /><br />
            2. Когда метатег обновится, нажмите кнопку Проверить.
          </h3>
          <br />
          <div class="status__block">
            <h1>Права не подтверждены</h1>
          </div>
        </div>
        <button id="btnStart">Проверить</button>
      </div>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <script src="js/confirm.js"></script>
    </body>
  </body>
</html>