<?php 
    include 'include/navbar.php';
?>
<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('GET','/api/pemilik');
$body = $response->getBody();
$data_body = json_decode($body);

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pemilik</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Alfin Rizky - 19650065</li>
                        </ol>
                    </div>
                    <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-7">
                                <a href="add_pemilik.php" class="btn btn-secondary"><span class="material-icons-outlined">Tambah Data</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover" id="tabel-undangan" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Lainnya</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no = 1;
                           foreach((array)$data_body as $data){ ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data->nama ?></td>
                                <td><?php echo $data->alamat ?></td>
                                <td><?php echo $data->notelp ?></td>
                                <td>
                                <a href="#"><button type="button" class="btn btn-warning"><a href="edit_pemilik.php?id=<?php echo $data->id;?>" >Edit</a></button></a>
                                    <a href="#"><button type="button" class="btn btn-danger"><a href="delete_pemilik.php?id=<?php echo $data->id;?>" >Delete</a></button></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                </main>    
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
