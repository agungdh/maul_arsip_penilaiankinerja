<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SKP;
use App\TugasPokok;

class TugasPokokController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index($id_skp)
    {
        $skp = SKP::find($id_skp);
        $tugaspokok = $skp->tugasPokoks;
        
        return view('tugaspokok.index', compact(['tugaspokok', 'skp']))
                ->with('pustaka', $this->pustaka);
    }

    public function create($id_skp)
    {
        $skp = SKP::find($id_skp);
        
        return view('tugaspokok.create', compact(['skp']))
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request, $id_skp)
    {
        $request->validate([
            'tugas_pokok' => 'required',
        ]);

        $data = $request->only('tugas_pokok');
        $data['id_skp'] = $id_skp;

        TugasPokok::create($data);

        return redirect()->route('tugaspokok.index', $id_skp)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $tugaspokok = TugasPokok::find($id);
        $skp = $tugaspokok->skp;

        return view('tugaspokok.edit', compact(['tugaspokok', 'skp']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $tugaspokok = TugasPokok::find($id);

        $request->validate([
            'tugas_pokok' => 'required',
        ]);

        $data = $request->only('tugas_pokok');

        TugasPokok::where(['id' => $id])->update($data);

        return redirect()->route('tugaspokok.index', $tugaspokok->id_skp)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        $tugaspokok = TugasPokok::find($id);
        $idskp = $tugaspokok->id_skp;
        $tugaspokok->delete();

        return redirect()->route('tugaspokok.index', $idskp)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
