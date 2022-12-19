<?php
session_start();
class WebmasterApi {
  public $accessToken;
  public $expiresIn;
  public $refreshToken;
  public $verificationCode;
  private $client_id = '7074b24275b94df99dac54c573afb065';
  private $client_secret = '0bcb08fd82c941879347e233b4dc9ec1';

  public function getToken($code) {
  $query = array(
		'grant_type'    => 'authorization_code',
		'code'          => $code,
		'client_id'     => $this->client_id,
		'client_secret' => $this->client_secret
	);
  $header = array("Content-type: application/x-www-form-urlencoded");

  $ch = curl_init('https://oauth.yandex.ru/token');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $res = curl_exec($ch);
  curl_close($ch);
  $res = json_decode($res);
  if (!isset($_SESSION['token'])){
    $_SESSION['token'] = $res->access_token;
  }
  $this->accessToken= $res->access_token;
  $this->expiresIn = $res->expires_in;
	$this->refreshToken = $res->refresh_token;
  }

  public function getRefreshedToken() {
    $query = array(
      'grant_type'    => 'refresh_token',
      'refresh_token' => $this->refreshToken,
    );
    $header = array("Content-type: application/x-www-form-urlencoded");

    $ch = curl_init('https://oauth.yandex.ru/token');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    $this->accessToken= $res->access_token;
    $this->expiresIn = $res->expires_in;
    $this->refreshToken = $res->refresh_token;
  }

  public function getUserId() {
    $header = array('Authorization: OAuth '. $_SESSION['token']);
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    if (!isset($_SESSION['user_id'])){
      $_SESSION['user_id'] = $res->user_id;
    }

    return $res->user_id;
  }

  public function getHosts($id) {
    $header = array('Authorization: OAuth '. $_SESSION['token']);
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$id.'/hosts');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res->hosts;
  }

  public function addLink($id, $link) {
    $header = array('Authorization: OAuth '. $_SESSION['token'], 'Content-type: application/json');
    $query = array(
      'host_url' => $link,
    );

    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$id.'/hosts');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res->host_id;
  }

  public function deleteLink($id, $url) {
    $header = array('Authorization: OAuth '. $_SESSION['token']);
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$id.'/hosts/'. $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res;
  }

  public function addSiteMap($host_id) {
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$_SESSION['user_id'].'/hosts/'. $host_id.'/user-added-sitemaps');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res->sitemap_id;
  }

  public function getVerificationId($host_id) {
    $header = array('Authorization: OAuth '. $_SESSION['token']);
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$_SESSION['user_id'].'/hosts/'.$host_id.'/verification');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res;
  }

  public function startVerification($host_id, $type) {
    $header = array('Authorization: OAuth '. $_SESSION['token']);
    $query = array(
      'verification_type' => $type,
    );
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$_SESSION['user_id'].'/hosts/'.$host_id.'/verification');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res;
  }

  public function getSitemaps($user_id, $host_id) {
    $header = array('Authorization: OAuth '. $_SESSION['token']);
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$user_id.'/hosts/'.$host_id.'/user-added-sitemaps');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res->sitemaps;
  }

  public function createSitemap($user_id, $host_id, $url) {
    $header = array('Authorization: OAuth '. $_SESSION['token'], 'Content-type: application/json');
    $query = array(
      'url' => $url,
    );
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$user_id.'/hosts/'.$host_id.'/user-added-sitemaps');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res;
  }

  public function deleteSitemap($user_id, $host_id, $sitemap_id) {
    $header = array('Authorization: OAuth '. $_SESSION['token']);
    $ch = curl_init('https://api.webmaster.yandex.net/v4/user/'.$user_id.'/hosts/'.$host_id.'/user-added-sitemaps/'.$sitemap_id);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);
    return $res;
  }
}

$api = new WebmasterApi();