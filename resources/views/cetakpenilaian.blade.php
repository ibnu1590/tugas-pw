<html>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
}
</style>
<h3><center>Laporan Nilai</center></h3>
<a><b>Kode MTK     : </b><?php echo $kdmtkl[0]->kode_matkul ?></a>
<br>
<a><b>Matakuliah   : </b><?php echo $penilaian[0]->matakuliah ?></a>
<br>
<br>
<table>
<tr>
    <th>Nim</th>
    <th>Nama</th>
    <th>Tugas</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Akhir</th>
    <th>Grade</th>
  </tr>
  @foreach($penilaian as $s) 
  <tr>
    <td>{{$s->nim}}</td>
    <td>{{$s->nama}}</td>
    <td>{{$s->tugas}}</td>
    <td>{{$s->uts}}</td>
    <td>{{$s->uas}}</td>
    <td>{{$s->akhir}}</td>
    <td>{{$s->grade}}</td>
  </tr>
  @endforeach
</table>
<div>
</html>