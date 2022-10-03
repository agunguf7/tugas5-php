<?php

require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'SegiTiga.php';

$d1 = new Lingkaran(22);
$d2 = new PersegiPanjang(12, 32);
$d3 = new Lingkaran(80);
$d4 = new PersegiPanjang(10, 8);
$d5 = new SegiTiga(7, 9, 17);
$d6 = new PersegiPanjang(10, 25);
$d7 = new SegiTiga(14, 15, 17);
$d8 = new Lingkaran(40);
$d9 = new PersegiPanjang(10, 10);
$d10 = new SegiTiga(20, 30, 10);
$thead = ['No.', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

$data_bidang = [$d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 PHP | Agung Kusaeri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center my-5 mb-5">
                            Abstract Class Bidang Bentuk 2D
                        </h1>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <?php foreach ($thead as $th) : ?>
                                        <th><?= $th ?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data_bidang as $db) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= $db->nameBidang(); ?></td>
                                        <td><?= $db->keterangan(); ?></td>
                                        <td><?= $db->luasBidang(); ?> CM</td>
                                        <td><?= $db->kelBidang(); ?> CM</td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
