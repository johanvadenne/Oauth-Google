<?php

require_once __DIR__.'/vendor/autoload.php';

session_start();

$client = new Google\Client();
$client->setAuthConfig('client_secrets.json');
$client->addScope(Google\Service\Drive::DRIVE_METADATA_READONLY);

if (false && isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
  $drive = new Google\Service\Drive($client);
  $files = $drive->files->listFiles(array())->getItems();
  echo json_encode($files);
} else {
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php';
  //var_dump($redirect_uri);
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}