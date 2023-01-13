<h1>Update Data</h1>
<form method='post' action='/update/{{$mhs->nim}}'>
    @csrf
    <!-- @method('put') -->
    <pre>
    NIM           :   <input type='text' name='vNim' value='{{$mhs->nim}}'>
    Nama          :   <input type='text' name='vNama' value='{{$mhs->nama}}'>
    Alamat        :   <input type='text' name='vAlamat' value='{{$mhs->alamat}}'>
    <input type='submit' name='submit' value='Update'>
    </pre>
</form>