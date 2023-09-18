<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Harga</td>
        </tr>
        @foreach( $baju as $bajus )
        <tr>
            <td>{{$bajus->nama_baju}}</td>
            <td>{{$bajus->harga_baju}}</td>
            <td>
                <form action="{{route('baju.destroy', $bajus->id)}}" method="POST">
                    <a href="{{route('baju.edit', $bajus->id)}}">Edit</a>
                    @csrf    
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>
    <a href="{{route('baju.create')}}">Tambah</a>
</body>

</html>