<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplateTugasPokok;
use App\DetailTemplateTugasPokok;

class TemplateTugasPokokController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $templatetugaspokok = TemplateTugasPokok::all();

        return view('templatetugaspokok.index', compact(['templatetugaspokok']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        return view('templatetugaspokok.create')
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
        ]);

        $data = $request->only('keterangan');

        TemplateTugasPokok::create($data);

        return redirect()->route('templatetugaspokok.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $templatetugaspokok = TemplateTugasPokok::find($id);

        return view('templatetugaspokok.edit', compact(['templatetugaspokok']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required',
        ]);

        $data = $request->only('keterangan');

        TemplateTugasPokok::where(['id' => $id])->update($data);

        return redirect()->route('templatetugaspokok.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        DetailTemplateTugasPokok::where('id_template_tugas_pokok', $id)->delete();
        TemplateTugasPokok::find($id)->delete();

        return redirect()->route('templatetugaspokok.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
