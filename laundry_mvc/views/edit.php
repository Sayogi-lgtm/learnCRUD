<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Antrian</title>
</head>
<body>
    <h2>Edit Antrian Laundry</h2>

    <form action="index.php?action=update" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label>Nama Pelanggan</label><br>
        <input type="text" name="nama_pelanggan" value="<?= $data['nama_pelanggan']; ?>" required><br><br>


        <label>Berat (Kg)</label><br>
        <input type="number" step="0.1" name="berat_kg" value="<?= $data['berat_kg']; ?>" required><br><br>
        
        <label>Status Cucian:</label><br>
        <select name="status">
            <option value="Menunggu"<?= ($data['status'] == 'Menunggu') ? 'selected' : ''; ?>>Menunggu</option>
            <option value="Sedang Dicuci"<?= ($data['status'] == 'Sedang Dicuci') ? 'selected' : ''; ?>>Sedang Dicuci</option>
            <option value="Selesai"<?= ($data['status'] == 'Selesai') ? 'selected' : ''; ?>>Selesai</option>
        </select><br><br>

        <button type="submit">Update Antrian</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>