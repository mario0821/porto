<?php
$koneksi = new mysqli('localhost', 'root', '', 'medio_xipplg2') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien']; 
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasiensanti (idPasien, nmPasien, jk, alamat) values ('$idPasien','$nmPasien','$jk','$alamat')");

    header('location:pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasiensanti where idPasien = '$idPasien'");
    header("location:pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasiensanti SET idPasien='$idPasien',nmPasien='$nmPasien',jk='$jk',alamat='$alamat'WHERE idPasien=$idPasien");
    header("location:pasien.php");
}