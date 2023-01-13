<h1>Tambah Data</h1>
<form method='post' action='/insertPenilaian'>
    @csrf
    <pre>
    NIM              :   <select name="vNim" id="nim">
                            @foreach ($mhs as $dataMahasiswa)
                            <option value='{{$dataMahasiswa->nim}}'>{{$dataMahasiswa->nim}}</option>
                            @endforeach
                         </select>
    Nama             :   <select name="vNama" id="nama">
                            @foreach ($mhs as $dataMahasiswa)
                            <option value='{{$dataMahasiswa->nama}}'>{{$dataMahasiswa->nama}}</option>
                            @endforeach
                         </select>
    Pilih Matakuliah :   <select name="vMatakuliah" id="matakuliah">
                            @foreach ($matkul as $dataMatkul)
                            <option value='{{$dataMatkul->matakuliah}}'>{{$dataMatkul->matakuliah}}</option>
                            @endforeach
                         </select>
    Tugas            :   <input type='number' name='vTugas'>
    UTS              :   <input type='number' name='vUts'>
    UAS              :   <input type='number' name='vUas'>
    <input type='submit' name='submit' value='Simpan'>
    </pre>
</form>