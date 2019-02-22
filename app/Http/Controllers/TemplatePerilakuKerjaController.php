<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplatePerilakuKerja;
use App\DetailTemplatePerilakuKerja;

class TemplatePerilakuKerjaController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $templateperilakukerja = TemplatePerilakuKerja::all();

        return view('templateperilakukerja.index', compact(['templateperilakukerja']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        return view('templateperilakukerja.create')
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
        ]);

        $data = $request->only('keterangan');

        TemplatePerilakuKerja::create($data);

        return redirect()->route('templateperilakukerja.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $templateperilakukerja = TemplatePerilakuKerja::find($id);

        return view('templateperilakukerja.edit', compact(['templateperilakukerja']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required',
        ]);

        $data = $request->only('keterangan');

        TemplatePerilakuKerja::where(['id' => $id])->update($data);

        return redirect()->route('templateperilakukerja.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        DetailTemplatePerilakuKerja::where('id_template_perilaku_kerja', $id)->delete();
        TemplatePerilakuKerja::find($id)->delete();

        return redirect()->route('templateperilakukerja.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
