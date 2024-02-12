<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        $listmahasiswa = mahasiswa::query()
            ->select(['nama', 'nim', 'alamat', 'program_studi', 'semester'])
            ->get();

        $listmahasiswa = DB::table("mahasiswa")
            ->select(['created_at', 'nama', 'nim', 'alamat', 'program_studi', 'semester'])
            ->get();
        return $listmahasiswa;
    }
    public function create(){
        // mahasiswa::create([
        //     'nama' => 'Mikhael Surya A',
        //     'nim' => '123654',
        //     'alamat' => 'Indonesia, Jateng, Semarang',
        //     'program_studi' => 'Informatika',
        //     'semester' => 'satu'
        // ]);
        DB::table("mahasiswa")
            ->insert([
                'nama' => '2Mikhael Surya A',
                'nim' => '2123654',
                'alamat' => '2Indonesia, Jateng, Semarang',
                'program_studi' => '2Informatika',
                'semester' => '1satu',
            ]);
        return 'create';
    }
    public function update(){
        // mahasiswa::query()
        //     ->where('id', '=', '2')
        //     ->update([
        //         'nama' => 'Mikhael Adeputra'
        //     ])
        DB::table("mahasiswa")
            ->where('id', '=', '7')
            ->update([
                'nama' => 'Mikhael Adeputra'
            ]);
    }
    public function delete(){
        mahasiswa::query()
            ->delete();
    }
}
