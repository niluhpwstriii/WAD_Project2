<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Kalkulator</h1>

    <form method="post" class="mt-4">
        <div class="form-group">
            <input type="text" class="form-control" name="angka1" required>
        </div>
        <div class="form-group">
            <select class="form-control" name="operator">
                <option value="tambah">Tambah (+)</option>
                <option value="kurang">Kurang (-)</option>
                <option value="kali">Kali (x)</option>
                <option value="bagi">Bagi (/)</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="angka2" required>
        </div>
        <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        if (is_numeric($angka1) && is_numeric($angka2)) {
            switch ($operator) {
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;
                    break;
                case 'kali':
                    $hasil = $angka1 * $angka2;
                    break;
                case 'bagi':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        $hasil = "Pembagian dengan nol tidak valid.";
                    }
                    break;
                default:
                    $hasil = "Operasi tidak valid.";
            }

            echo "<p class='mt-3'>Hasil: $hasil</p>";
        } else {
            echo "<p class='mt-3 text-danger'>Masukkan harus berupa angka.</p>";
        }
    }
    ?>

</div>

</body>
</html>
