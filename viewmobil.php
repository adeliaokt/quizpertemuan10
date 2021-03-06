<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">


<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Rental Mobil</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F0F8FF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Rental Mobil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="viewmobil.php">Mobil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="viewrental.php">Rental</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewmember.php">Member</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
        <h1>Data Mobil</h1>
        <a href="create_mobil.php" target="_blank">Tambah Data</a> </br>        
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Mobil</th>
                    <th>Merk Tipe</th>
                    <th>Tahun Keluaran</th>
                    <th>Tarif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data_mobil();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $data->mobil_id ?></td>
                            <td><?= $data->merktipe ?></td> 
                            <td><?= $data->thnkeluaran ?></td>
                            <td><?= $data->tarif ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit_mobil.php?id=<?= $data->mobil_id ?>">Edit</a>
                                <a name="hapus" id="hapus" href="controller.php?id=<?= $data->mobil_id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel mobil.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>