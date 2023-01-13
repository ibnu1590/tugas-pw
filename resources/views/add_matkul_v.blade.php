<h1>Tambah Data Matakuliah</h1>
<form method='post' action='/insertMatakuliah'>
    @csrf
    <pre>
    Kode Matakuliah      :   <input type='text' name='vKode'>
    Nama Matakuliah      :   <input type='text' name='vMatakuliah'>
    <input type='submit' name='submit' value='Simpan'>
    </pre>
</form>