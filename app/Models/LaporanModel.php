<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Laporan extends Model {
    use HasFactory;
    // protected $table = 'penilaian';
    // protected $primaryKey = 'id';
    // protected $fillable = ['id', 'nim', 'nama', 'matakuliah', 'tugas', 'uts', 'uas', 'akhir', 'grade'];
    public function getPenilaian() {
        return DB::table('penilaian')->get();
    }
}

?>