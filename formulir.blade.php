<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <form action="/formulir/proses" method="POST">
    @csrf
        <br>
        <label> Judul Buku </label>
        <br>
        <input type="text" name="nama">
        <br>
        <label> Penerbit </label>
        <br>
        <input type="text" name="penerbti">
        <br>
        <input type="submit" value="SIMPAN">
    </form>
</body>
</html>