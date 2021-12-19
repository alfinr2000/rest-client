<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/kontrakan',[
    'json' => [
        'alamat' => $_POST['alamat'],
        'jumlahKT' => $_POST['jumlahKT'],
        'jumlahKM' => $_POST['jumlahKM'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:index.php')

?>