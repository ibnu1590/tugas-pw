<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MhsModel extends Model {
    public function allData() {
        return DB::table('mahasiswa')->get();
    }

    public function getMatakuliah() {
        return DB::table('matakuliah')->get();
    }

    public function addData($data) {
        DB::table('mahasiswa')->insert($data);
    }

    public function getData($id) {
        return DB::table('mahasiswa')->where('nim', $id)->first();
    }

    public function updateData($id, $data) {
        return DB::table('mahasiswa')
                    ->where('nim', $id)
                    ->update($data);
    }

    public function deleteData($id) {
        return DB::table('mahasiswa')
                    ->where('nim', $id)
                    ->delete();
    }

    //model matakuliah
    public function allDataMatakuliah() {
        return DB::table('matakuliah')->get();
    }

    public function addDataMatakuliah($data) {
        DB::table('matakuliah')->insert($data);
    }

    public function getDataMatakuliah($id) {
        return DB::table('matakuliah')->where('kode_matkul', $id)->first();
    }

    public function getMatkulByName($id) {
        return DB::table('matakuliah')
                    ->where('matakuliah', $id )
                    ->get();
    }

    public function updateDataMatakuliah($id, $data) {
        return DB::table('matakuliah')
                    ->where('kode_matkul', $id)
                    ->update($data);
    }

    public function deleteDataMatakuliah($id) {
        return DB::table('matakuliah')
                    ->where('kode_matkul', $id)
                    ->delete();
    }

    //model penilaian
    public function allDataPenilaian() {
        return DB::table('penilaian')->get();
    }

    public function addDataPenilaian($data) {
        DB::table('penilaian')->insert($data);
    }

    public function getDataPenilaian($id) {
        return DB::table('penilaian')->where('nim', $id)->first();
    }

    public function updateDataPenilaian($id, $data) {
        return DB::table('penilaian')
                    ->where('nim', $id)
                    ->update($data);
    }

    public function deleteDataPenilaian($id) {
        return DB::table('penilaian')
                    ->where('nim', $id)
                    ->delete();
    }

    //model laporan pdf
    public function getPenilaian($id) {
        return DB::table('penilaian')
                    ->where('matakuliah', $id )
                    ->get();
    }
}

?>