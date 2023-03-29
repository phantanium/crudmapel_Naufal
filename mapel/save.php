<?php
if (isset($_POST['simpan'])) {
    require_once('../config.php');
    $mapel = $_POST['mapel'];
    $jam = $_POST['jam'] == '' ? 0  : $_POST['jam'];

    $sql = "INSERT INTO mapel SET mapel='$mapel', jam='$jam'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan');</script>";
        echo "<script>location='index.php';</script>";
        //var_dump($sql);
    }
}
