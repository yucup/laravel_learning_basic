<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
    <form action="{{route('baju.update', $baju->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label>nama</label>
        <input type="text" name="nama_baju" value="{{$baju->nama_baju}}">
        <label>Harga</label>
        <input type="text" name="harga_baju" value="{{$baju->harga_baju}}">
        <button type="submit">masuk</button>
    </form>
</body>

</html>