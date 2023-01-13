<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Laporan-Data-Penilaian.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table border='1'>
<tr>
    <th>Nim</th>
    <th>Nama</th>
    <th>Tugas</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Akhir</th>
    <th>Grade</th>
  </tr>

  <?php
  $no=1;
  foreach($penilaian as $s) {
  echo "<tr>
            <td>{{$s->nim}}</td>
            <td>{{$s->nama}}</td>
            <td>{{$s->tugas}}</td>
            <td>{{$s->uts}}</td>
            <td>{{$s->uas}}</td>
            <td>{{$s->akhir}}</td>
            <td>{{$s->grade}}</td>
        </tr> ";
  $no++;
}
?>
</table>
