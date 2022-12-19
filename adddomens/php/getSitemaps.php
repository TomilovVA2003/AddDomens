<?php

require_once './classes/WebmasterApi.php';
session_start();

if(isset($_SESSION['token'])) {
  $sitemaps=$api->getSitemaps($_SESSION['user_id'], $_SESSION["host_id"]);
}
if(count($sitemaps) > 0) {


?>

<h6>Очередь на обработку</h6>
<hr />
<span>Sitemap был добавлен в очередь на обработку. Когда он будет обработан, данные обновятся автоматически.
Процесс занимает до 1-2 недель. Если в Диагностике отображается предупреждение об отсутствии обработанных файлов, оно также исчезнет после завершения обработки</span>

<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php

    foreach($sitemaps as $sitemap) {
      echo('
        <tr class="tbl-content__item" id='.$sitemap->sitemap_id.'>
          <td class="name__host">'.$sitemap->sitemap_url.' </td>
          <td class="btn__delete">Удалить</td>
        </tr>
      ');

    } ?>
  </tbody>
</table>

<? } ?>