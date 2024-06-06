<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        
        function konversiNilaiHuruf($nilai) {
            if ($nilai >= 80) {
                return "A+";
            } elseif ($nilai >= 76) {
                return "A-";
            } elseif ($nilai >= 68) {
                return "B+";
            } elseif ($nilai >= 65) {
                return "B";
            } elseif ($nilai >= 62) {
                return "B-";
            } elseif ($nilai >= 57) {
                return "C+";
            } elseif ($nilai >= 55) {
                return "C";
            } elseif ($nilai >= 51) {
                return "C-";
            } elseif ($nilai >= 43) {
                return "D+";
            } elseif ($nilai >= 40) {
                return "D";
            } else {
                return "E";
            }
        }

        
        if ($nilai >= 60) {
            echo "Nilai anda $nilai, anda lulus<br>";
        } else {
            echo "Nilai anda $nilai, anda gagal<br>";
        }

        
        $nilaiHuruf = konversiNilaiHuruf($nilai);
        echo "Konversi nilai anda adalah $nilaiHuruf<br>";
    } else {
    ?>
        <form action="" method="post">
            <label for="nilai">Masukkan nilai anda:</label>
            <input type="number" id="nilai" name="nilai" required>
            <input type="submit" value="Submit">
        </form>
    <?php
    }
    ?>
</body>
</html>
