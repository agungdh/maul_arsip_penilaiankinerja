<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TugasPokok;
use App\SKP;
use App\Pegawai;

class SKPController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $skp = SKP::all();

        return view('skp.index', compact(['skp']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        $pegawais_raw = Pegawai::all();
        $pegawais=[];
        foreach ($pegawais_raw as $value) {
            $pegawais[$value->id] = "{$value->nama} [{$value->nip}]";
        }

        return view('skp.create', compact(['pegawais']))
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|numeric|min:1900|max:2900',
            'id_pegawai_penilai' => 'required|different:id_pegawai_dinilai',
            'id_pegawai_dinilai' => 'required|different:id_pegawai_penilai',
        ]);

        $data = $request->only('tahun', 'id_pegawai_penilai', 'id_pegawai_dinilai');

        $cekDataSKP = SKP::where($data)->get();
        if (count($cekDataSKP) > 0) {
            return redirect()
                        ->back()
                        ->withInput($request->input())
                        ->withErrors([
                            'data_sudah_ada' => true,
                        ]);
        }

        SKP::create($data);

        return redirect()->route('skp.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $skp = SKP::find($id);

        $pegawais_raw = Pegawai::all();
        $pegawais=[];
        foreach ($pegawais_raw as $value) {
            $pegawais[$value->id] = "{$value->nama} [{$value->nip}]";
        }

        return view('skp.edit', compact(['skp', 'pegawais']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $skp = SKP::find($id);

        $request->validate([
            'tahun' => 'required|numeric|min:1900|max:2900',
            'id_pegawai_penilai' => 'required|different:id_pegawai_dinilai',
            'id_pegawai_dinilai' => 'required|different:id_pegawai_penilai',
        ]);

        $data = $request->only('tahun', 'id_pegawai_penilai', 'id_pegawai_dinilai');

        if (!(  $skp->tahun == $request->tahun &&
                $skp->id_pegawai_penilai == $request->id_pegawai_penilai &&
                $skp->id_pegawai_dinilai == $request->id_pegawai_dinilai)) {
            
            $cekDataSKP = SKP::where($data)->get();
            if (count($cekDataSKP) > 0) {
                return redirect()
                            ->back()
                            ->withInput($request->input())
                            ->withErrors([
                                'data_sudah_ada' => true,
                            ]);
            }
        }

        SKP::where(['id' => $id])->update($data);

        return redirect()->route('skp.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        TugasPokok::where(['id_skp' => $id])->delete();

        SKP::where(['id' => $id])->delete();

        return redirect()->route('skp.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
