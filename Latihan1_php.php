<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Contoh Form Bootstrap</h1>

    <form method="post" class="mt-4">
        <div class="form-group">
            <label for="angka">Masukkan Angka:</label>
            <input type="number" class="form-control" name="angka" id="angka" placeholder="Angka" required>
        </div>
        <div class="form-group">
            <label for="pilihan">Pilih Angka:</label>
            <select class="form-control" name="pilihan" id="pilihan">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
    </form>
</div>

</body>
</html>
