<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pemesan Kamar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Daftar Pemesan Kamar</h1>
</header>

<div class="container">
    <h2>Data Pemesan</h2>
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Tipe Kamar</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (($file = fopen("pemesanan.csv", "r")) !== FALSE) {
            while (($row = fgetcsv($file)) !== FALSE) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            fclose($file);
        } else {
            echo "<tr><td colspan='7'>Belum ada pemesanan.</td></tr>";
        }
        ?>
        </tbody>
    </table>
    <div class="back-link">
  <a href="index.html">← Kembali ke Halaman Utama</a>
</div>
</div>

</body>
</html>
