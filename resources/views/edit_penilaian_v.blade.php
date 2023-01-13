<h1>Update Data Penilaian</h1>
<form method='post' action='/updatePenilaian/{{$penilaian->nim}}'>
    @csrf
    <!-- @method('put') -->
    <pre>
    NIM              :   <input type='text' name='vNim' value='{{$penilaian->nim}}'>
    Nama             :   <input type='text' name='vNama' value='{{$penilaian->nama}}'>
    Matakuliah       :   <input type='text' name='vMatakuliah' value='{{$penilaian->matakuliah}}'>
    Tugas            :   <input type='text' name='vTugas' value='{{$penilaian->tugas}}'>
    UTS              :   <input type='text' name='vUts' value='{{$penilaian->uts}}'>
    UAS              :   <input type='text' name='vUas' value='{{$penilaian->uas}}'>
    <input type='submit' name='submit' value='Update'>
    </pre>
</form>
