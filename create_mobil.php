<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Mobil</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="viewmobil.php">Kembali</a>
    <br><br>
    <form action="controller.php" method="post">
        <label>ID Mobil</label>
        <br>
        <input type="text" name="mobil_id">
        <br>
        <label>Merk Tipe</label>
        <br>
        <input type="text" name="merktipe">
        <br>
        <label>Tahun Keluaran</label>
        <br>
        <input type="text" name="thnkeluaran">
        <br>
        <label>Tarif<tabel>
        <br>
        <input type="text" name="tarif">
        <br><br>
        <button type="submit" name="submit_simpan_mobil">Submit</button>
        <button type="reset">Reset</button>
    </form> 
</body>
</html>