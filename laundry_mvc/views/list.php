<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Antrian Laundry</title>
</head>
<body>
    <h1>Daftar Antrian Laundry</h1><br>

    <a href="index.php?action=create">
        <button style="margin-bottom: 15px;">+ Tambah Antrian</button>
    </a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No Antrian</th>
                <th>Nama Pelanggan</th>
                <th>Berat (kg)</th>
                <th>Status</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if ($data_antrian->num_rows > 0) {
                while ($row = $data_antrian->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama_pelanggan'] . "</td>";
                    echo "<td>" . $row['berat_kg'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>";
                    echo "<a href='index.php?action=edit&id=" . $row['id'] . "'>Edit</a> | ";
                    echo "<a href='index.php?action=delete&id=" . $row['id'] . "' onclick=\"return confirm('Yakin ingin menghapus antrian ini?');\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Belum Ada Antrian.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>