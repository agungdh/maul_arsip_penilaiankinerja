<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;
use App\Unit;
use App\Pangkat;

class PegawaiController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $pegawai = Pegawai::all();

        return view('pegawai.index', compact(['pegawai']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        $jabatans_raw = Jabatan::all();
        $jabatans=[];
        foreach ($jabatans_raw as $value) {
            $jabatans[$value->id] = $value->jabatan;
        }

        $pangkats_raw = Pangkat::all();
        $pangkats=[];
        foreach ($pangkats_raw as $value) {
            $pangkats[$value->id] = "{$value->golongan}{$value->ruang} {$value->pangkat}";
        }

        $units_raw = Unit::all();
        $units=[];
        foreach ($units_raw as $value) {
            $units[$value->id] = $value->unit;
        }

        return view('pegawai.create', compact(['jabatans', 'pangkats', 'units']))
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:pegawai,nip',
            'nama' => 'required',
            'id_jabatan' => 'required',
            'id_pangkat' => 'required',
            'id_unit' => 'required',
        ]);

        $data = $request->only('nip', 'nama', 'id_jabatan', 'id_pangkat', 'id_unit');

        Pegawai::create($data);

        return redirect()->route('pegawai.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);

        $jabatans_raw = Jabatan::all();
        $jabatans=[];
        foreach ($jabatans_raw as $value) {
            $jabatans[$value->id] = $value->jabatan;
        }

        $pangkats_raw = Pangkat::all();
        $pangkats=[];
        foreach ($pangkats_raw as $value) {
            $pangkats[$value->id] = "{$value->golongan}{$value->ruang} {$value->pangkat}";
        }

        $units_raw = Unit::all();
        $units=[];
        foreach ($units_raw as $value) {
            $units[$value->id] = $value->unit;
        }

        return view('pegawai.edit', compact(['pegawai', 'jabatans', 'pangkats', 'units']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'id_jabatan' => 'required',
            'id_pangkat' => 'required',
            'id_unit' => 'required',
        ]);

        if ($request->nip != $pegawai->nip) {
            $request->validate([
                'nip' => 'unique:pegawai,nip',
            ]);
        }

        $data = $request->only('nip', 'nama', 'id_jabatan', 'id_pangkat', 'id_unit');

        Pegawai::where(['id' => $id])->update($data);

        return redirect()->route('pegawai.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        Pegawai::where(['id' => $id])->delete();

        return redirect()->route('pegawai.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
