<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <form action="{{route('baju.store')}}" method="POST">
        @csrf
        <label>nama</label>
        <input type="text" name="nama_baju">
        <label>Harga</label>
        <input type="text" name="harga_baju">
        <button type="submit">klik</button>
    </form>
</body>
</html>