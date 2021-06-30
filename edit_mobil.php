<?php
$mobil_id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mobil($mobil_id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Mobil</title>
</head>

<body>
    <h1>Edit Data Mobil</h1>
    <a href="viewmobil.php">Kembali</a>
    <br><br>
    <form action="controller.php" method="post">
        <label>ID Mobil</label>
        <br>
        <input type="text" name="mobil_id" value="<?php echo $data->mobil_id ?>">
        <br>
        <label>Merk Tipe</label>
        <br>
        <input type="text" name="merktipe" value="<?php echo $data->merktipe ?>">
        <br>
        <label>Tahun Keluaran</label>
        <br>
        <input type="text" name="thnkeluaran" value="<?php echo $data->thnkeluaran ?>">
        <br>
        <label>Tarif</label>
        <br>
        <input type="text" name="tarif" value="<?php echo $data->tarif ?>">
        <br><br>
        <button type="submit" name="submit_edit_mobil">Submit</button>
    </form>
</body>

</html>