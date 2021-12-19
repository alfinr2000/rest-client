<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];
// echo $id;
// echo $_POST['alamat'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/kontrakan',[
    'json' => [
        'id' => $id,
        'alamat' => $_POST['alamat'],
        'jumlahKT' => $_POST['jumlahKT'],
        'jumlahKM' => $_POST['jumlahKM'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:index.php')
// var_dump($body);

?>