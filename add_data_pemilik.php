<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
use Intervention\Image\ImageManager;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/pemilik',[
    'json' => [
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'notelp' => $_POST['notelp'],
    ]
]);

$body = $response->getBody();
header('location:pemilik.php')

?>