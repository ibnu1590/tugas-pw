<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Penilaian Mahasiswa</h1>
        <br>
        <a href='/mhs_v'>List Mahasiswa</a>
        <a href='/matakuliah_v'>List Matakuliah</a>
        <a href='/addPenilaian'>Tambah Penilaian</a>
        <a href='/lap_nilai'>Cetak Laporan Nilai</a>
        <br>
        <br>
        @if (session('message'))
            {{ session('message')}}
        @endif
        <table border='1' cellpadding='5'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Matakuliah</th>
                    <th>Tugas</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($penilaian as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->nim}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->matakuliah}}</td>
                    <td>{{$data->tugas}}</td>
                    <td>{{$data->uts}}</td>
                    <td>{{$data->uas}}</td>
                    <td>{{$data->akhir}}</td>
                    <td>{{$data->grade}}</td>
                    <td>
                        <a href='/editPenilaian/{{$data->nim}}'>Update</a>
                        <a href='/deletePenilaian/{{$data->nim}}'>Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>