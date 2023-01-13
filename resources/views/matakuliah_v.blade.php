<h1>List Matakuliah</h1>
<a href='/'>Home</a>
<a href='/addMatakuliah'>Tambah Data</a>
<br>
<br>
@if (session('message'))
    {{ session('message')}}
@endif
<table border='1' cellpadding='5'>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($matkul as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->kode_matkul}}</td>
            <td>{{$data->matakuliah}}</td>
            <td>
                <a href='/editMatakuliah/{{$data->kode_matkul}}'>Update</a>
                <a href='/deleteMatakuliah/{{$data->kode_matkul}}'>Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

