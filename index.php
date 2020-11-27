<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Gaji Karyawan</title>
</head>

<body>
    <h4>Form Hitung Gaji Karyawan</h4>
    <form action="gaji.php" method="post">
        <p>
            <label for="">Nama Karyawan :</label>
            <input type="text" name="nama">
        </p>
        <p>
            <label for="">Golongan :</label>
            <select name="gol" id="">
                <option value="">Pilih Golongan :</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </p>
        <p>
            <label for="">Jam Kerja :</label>
            <input type="number" name="jamkerja">
        </p>
        <button type="submit">Hitung Gaji</button>

    </form>
</body>

</html>