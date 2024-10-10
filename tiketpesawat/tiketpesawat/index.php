<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <title>Pemesanan Tiket Pesawat</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input[type="text"], input[type="date"]{
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<body>
    <h1>Pemesanan Tiket Pesawat</h1>
    <form action="proses.php" method="post">
        <label for="nama">Nama Penumpang:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="asal">Kota Asal:</label><br>
        <input type="text" id="asal" name="asal" required><br><br>

        <label for="tujuan">Kota Tujuan:</label><br>
        <input type="tujuan" name="tujuan" id="tujuan" required><br><br>

        <label for="tanggal">Tanggal Penerbangan:</label>
        <input type="date" name="tanggal" id="tanggal" required><br><br>

        <input type="submit" value="pesan Tiket">
    </form>
</body>
</html>