<h1>Update Data</h1>
<form method='post' action='/updateMatakuliah/{{$matkul->kode_matkul}}'>
    @csrf
    <!-- @method('put') -->
    <pre>
    Kode Matakuliah       :   <input type='text' name='vKode' value='{{$matkul->kode_matkul}}'>
    Nama Matakuliah       :   <input type='text' name='vMatakuliah' value='{{$matkul->matakuliah}}'>
    <input type='submit' name='submit' value='Update'>
    </pre>
</form>