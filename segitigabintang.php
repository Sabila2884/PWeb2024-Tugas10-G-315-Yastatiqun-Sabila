<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga Bintang Rata Tengah</title>
</head>
<body>
    <pre>
        <?php
        // Fungsi untuk membuat segitiga bintang rata tengah
        function buatSegitiga($tinggi) {
            for ($baris = 1; $baris <= $tinggi; $baris++) {
                // Cetak spasi di awal setiap baris untuk membuat segitiga rata tengah
                for ($i = $tinggi - $baris; $i > 0; $i--) {
                    echo " ";
                }
                // Cetak bintang
                for ($j = 1; $j <= (2 * $baris - 1); $j++) {
                    echo "*";
                }
                echo "\n";
            }
        }

        // Meminta input tinggi dari pengguna
        $tinggi = 5; // Nilai default
        if (isset($_POST['tinggi'])) {
            $tinggi = intval($_POST['tinggi']);
        }
        ?>

        <form method="post" action="">
            <label for="tinggi">Tinggi:</label>
            <input type="number" id="tinggi" name="tinggi" value="<?php echo $tinggi; ?>" required>
            <input type="submit" value="Submit">
        </form>

        <?php
        // Menampilkan segitiga bintang rata tengah
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            buatSegitiga($tinggi);
        }
        ?>
    </pre>
</body>
</html>
