<?php
if (isset($_GET['id'])) {
    require_once('../config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM mapel WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan');</script>";
        echo "<script>location='index.php';</script>";
        //var_dump($sql);
    }
}
