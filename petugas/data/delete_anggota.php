<?php
include '../../koneksi/koneksi.php';

if (isset($_GET['iduser'])) {
    $id = $_GET['iduser'];

    // Delete the record from the database
    $delete_query = mysqli_query($koneksi, "DELETE FROM user WHERE IDuser='$id'");

    if ($delete_query) {
        // If deletion is successful, redirect back to the data_buku.php page
        header("Location:../anggota.php");
        exit();
    } else {
        // If deletion fails, display an error message
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
   
    header("Location: ../anggota.php");
    exit();
}
?>