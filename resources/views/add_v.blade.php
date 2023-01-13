<h1>Tambah Data</h1>
<form method='post' action='/insert'>
    @csrf
    <pre>
    NIM          :   <input type='text' name='vNim'>
    Nama         :   <input type='text' name='vNama'>
    Alamat       :   <input type='text' name='vAlamat'>
    <input type='submit' name='submit' value='Simpan'>
    </pre>
</form>