<h1>List Mahasiswa</h1>

<a href='/'>Home</a>
<a href='/add'>Tambah Data</a>
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
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($mhs as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nim}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>
                <a href='/edit/{{$data->nim}}'>Update</a>
                <a href='/delete/{{$data->nim}}'>Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

