<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Cetak Penilaian Mahasiswa</h1>
        <br>
        <a href='/'>Home</a>
        <br>
        <br>
        @if (session('message'))
            {{ session('message')}}
        @endif
        <table border='1' cellpadding='5'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Matakuliah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($penilaian as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->matakuliah}}</td>
                    <td>
                        <a href='/cetakPDF/{{$data->matakuliah}}'>Cetak PDF</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>