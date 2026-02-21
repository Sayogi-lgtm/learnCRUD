<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Antrian</title>
</head>
<body>
    <h2>Tambah Antrian Baru</h2>

    <form action="index.php?action=store" method="post">
        <label for="">Nama Pelanggan:</label><br>
        <input type="text" name="nama_pelanggan" required><br><br>

        <label for="">Berat (kg):</label><br>
        <input type="number" name="berat_kg" step="0.1" required><br><br>

        <button type="submit">Simpan Antrian</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>