<?php

require_once './classes/WebmasterApi.php';
session_start();

if(isset($_SESSION['token'])) {
  $hosts=$api->getHosts($api->getUserId());
}

?>

<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php

    foreach($hosts as $host) {
      echo('
        <tr class="tbl-content__item" id='.$host->host_id.'>
        <td class="name__host">'.$host->ascii_host_url.' </td>
        <td class="btn__delete">Удалить</td>
        </tr>
      ');

    } ?>
  </tbody>
</table>