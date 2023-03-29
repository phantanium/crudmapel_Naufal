<?php
if (isset($_POST['update'])) {
    require_once('../config.php');
    $id = $_POST['id'];
    $mapel = $_POST['mapel'];
    $jam = $_POST['jam'] == '' ? 0 : $_POST['jam'];

    $sql = "UPDATE mapel SET mapel='$mapel', jam='$jam'WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}