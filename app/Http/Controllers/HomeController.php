<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\MhsModel;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;

use PDF;

class HomeController extends Controller {
    public function __construct() {
        $this->MhsModel = new MhsModel();
    }

    public function index() {
        $data = [
            'penilaian'=>$this->MhsModel->allDataPenilaian()
        ];
        return view('home', $data);
    }

    public function mahasiswa() {
        $data = [
            'mhs'=>$this->MhsModel->allData()
        ];
        return view('mhs_v', $data);
    }

    public function add() {
        return view('add_v');
    }

    public function lap_nilai() {
        $data = [
            'matkul'=>$this->MhsModel->getMatakuliah()
        ];
        return view('lap_nilai_v', $data);
    }

    public function insert() {
        {
            $data = [
                'nim' => Request()->vNim,
                'nama' => Request()->vNama,
                'alamat' => Request()->vAlamat,
            ];
            $this->MhsModel->addData($data);
            return redirect()->to('/mhs_v')->send()->with('message', 'Data '.request()
            ->vNim.' Berhasil ditambah');
        }   
    }

    public function edit($id) {
        $data = [
            'mhs'=>$this->MhsModel->getData($id)
        ];
        return view('edit_v', $data);
    }

    public function update($id) {
        $data = [
            'nim' => Request()->vNim,
            'nama' => Request()->vNama,
            'alamat' => Request()->vAlamat,
        ];
        $this->MhsModel->updateData($id, $data);
        return redirect()->to('/mhs_v')->send()->with('message', 'Data '.$id.' Berhasil diupdate');
    }

    public function delete($id) {
        $this->MhsModel->deleteData($id);
        return redirect()->to('/mhs_v')->send()->with('message', 'Data '.$id.' Berhasil dihapus');
    }

    //controller matakuliah
    public function matakuliah() {
        $data = [
            'matkul'=>$this->MhsModel->allDataMatakuliah()
        ];
        return view('matakuliah_v', $data);
    }

    public function addMatakuliah() {
        return view('add_matkul_v');
    }

    public function insertMatakuliah() {
        {
            $data = [
                'kode_matkul' => Request()->vKode,
                'matakuliah' => Request()->vMatakuliah,
            ];
            $this->MhsModel->addDataMatakuliah($data);
            return redirect()->to('/matakuliah_v')->send()->with('message', 'Data '.request()
            ->vMatakuliah.' Berhasil ditambah');
        }   
    }

    public function editMatakuliah($id) {
        $data = [
            'matkul'=>$this->MhsModel->getDataMatakuliah($id)
        ];
        return view('edit_matkul_v', $data);
    }

    public function updateMatakuliah($id) {
        $data = [
            'kode_matkul' => Request()->vKode,
            'matakuliah' => Request()->vMatakuliah,
        ];
        $this->MhsModel->updateDataMatakuliah($id, $data);
        return redirect()->to('/matakuliah_v')->send()->with('message', 'Data '.$id.' Berhasil diupdate');
    }

    public function deleteMatakuliah($id) {
        $this->MhsModel->deleteDataMatakuliah($id);
        return redirect()->to('/matakuliah_v')->send()->with('message', 'Data '.$id.' Berhasil dihapus');
    }

    //controller penilaian
    public function penilaian() {
        $data = [
            'penilaian'=>$this->MhsModel->allDataPenilaian()
        ];
        return view('home', $data);
    }

    public function addPenilaian() {
        $dataMahasiswa = [
            'mhs'=>$this->MhsModel->allData()
        ];

        $dataMatkul = [
            'matkul'=>$this->MhsModel->getMatakuliah()
        ];
        return view('add_penilaian_v', $dataMatkul, $dataMahasiswa);
    }

    public function insertPenilaian() {
        {
            $nilaiTugas = Request()->vTugas;
            $nilaiUts = Request()->vUts;
            $nilaiUas = Request()->vUas;
            $nilaiAkhir = 0.3*$nilaiTugas + 0.3*$nilaiUts + 0.4*$nilaiUas;

            if ($nilaiAkhir >= 85 || $nilaiAkhir == 100) {
                $grade = "A";
            } else if ($nilaiAkhir >= 80 || $nilaiAkhir == 84 ) {
                $grade = "A-";
            } else if ($nilaiAkhir >= 75 || $nilaiAkhir == 79) {
                $grade = "B+";
            } else if ($nilaiAkhir >= 70 || $nilaiAkhir == 74) {
                $grade = "B";
            } else if ($nilaiAkhir >= 65 || $nilaiAkhir == 69) {
                $grade = "B-";
            } else if ($nilaiAkhir >= 60 || $nilaiAkhir == 64) {
                $grade = "C";
            } else if ($nilaiAkhir >= 45 || $nilaiAkhir == 59) {
                $grade = "D";
            } else if ($nilaiAkhir == 0 || $nilaiAkhir < 45) {
                $grade = "E";
            }

            $data = [
                'nim' => Request()->vNim,
                'nama' => Request()->vNama,
                'matakuliah' => Request()->vMatakuliah,
                'tugas' => $nilaiTugas,
                'uts' => $nilaiUts,
                'uas' => $nilaiUas,
                'akhir' => $nilaiAkhir,
                'grade' => $grade,
            ];
            $this->MhsModel->addDataPenilaian($data);
            return redirect()->to('/home')->send()->with('message', 'Data '.request()
            ->vNim.' Berhasil ditambah');
        }   
    }

    public function editPenilaian($id) {
        $data = [
            'penilaian'=>$this->MhsModel->getDataPenilaian($id)
        ];
        return view('edit_penilaian_v', $data);
    }

    public function updatePenilaian($id) {

        $data = [
            'nim' => Request()->vNim,
            'nama' => Request()->vNama,
            'matakuliah' => Request()->vMatakuliah,
            'tugas' => Request()->vTugas,
            'uts' => Request()->vUts,
            'uas' => Request()->vUas,
        ];
        $this->MhsModel->updateDataPenilaian($id, $data);
        return redirect()->to('/home')->send()->with('message', 'Data '.$id.' Berhasil diupdate');
    }

    public function deletePenilaian($id) {
        $this->MhsModel->deleteDataPenilaian($id);
        return redirect()->to('/home')->send()->with('message', 'Data '.$id.' Berhasil dihapus');
    }

    //controller cetak laporan

    public function getPenilaian() {
        $data = [
            'penilaian'=>$this->MhsModel->allDataPenilaian()
        ];
        return view('lap_nilai_v', $data);
    }

    public function cetakPDF($id) {
        $data = [
            'penilaian'=>$this->MhsModel->getPenilaian($id),
            'kdmtkl'=>$this->MhsModel->getMatkulByName($id),
        ];

        $pdf = PDF::loadView('cetakpenilaian', $data);
        return $pdf->stream('Laporan-Data-Penilaian.pdf');
   }

   public function cetakXLS($id) {
        return Excel::download(new UserExport, 'Laporan-Data-Penilaian.xlsx');
    }
 }

?>