<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $catatan = $_POST['catatan'];

    $data = [$nama, $email, $telepon, $checkin, $checkout, $tipe_kamar, $catatan];

    $file = fopen("pemesanan.csv", "a");
    fputcsv($file, $data);
    fclose($file);

    header("Location: daftar_pemesanan.php");
    exit();
}
?>

