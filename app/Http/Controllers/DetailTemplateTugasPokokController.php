<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplateTugasPokok;
use App\DetailTemplateTugasPokok;

class DetailTemplateTugasPokokController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index($id_template_tugas_pokok)
    {
        $templatetugaspokok = TemplateTugasPokok::find($id_template_tugas_pokok);
        $detailtemplatetugaspokok = $templatetugaspokok->detailTemplateTugasPokoks;
        
        return view('detailtemplatetugaspokok.index', compact(['detailtemplatetugaspokok', 'templatetugaspokok']))
                ->with('pustaka', $this->pustaka);
    }

    public function create($id_template_tugas_pokok)
    {
        $templatetugaspokok = TemplateTugasPokok::find($id_template_tugas_pokok);
        
        return view('detailtemplatetugaspokok.create', compact(['templatetugaspokok']))
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request, $id_template_tugas_pokok)
    {
        $request->validate([
            'tugas_pokok' => 'required',
        ]);

        $data = $request->only('tugas_pokok');
        $data['id_template_tugas_pokok'] = $id_template_tugas_pokok;

        DetailTemplateTugasPokok::create($data);

        return redirect()->route('detailtemplatetugaspokok.index', $id_template_tugas_pokok)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $detailtemplatetugaspokok = DetailTemplateTugasPokok::find($id);
        $templatetugaspokok = $detailtemplatetugaspokok->templatetugaspokok;

        return view('detailtemplatetugaspokok.edit', compact(['detailtemplatetugaspokok', 'templatetugaspokok']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $detailtemplatetugaspokok = DetailTemplateTugasPokok::find($id);

        $request->validate([
            'tugas_pokok' => 'required',
        ]);

        $data = $request->only('tugas_pokok');

        DetailTemplateTugasPokok::where(['id' => $id])->update($data);

        return redirect()->route('detailtemplatetugaspokok.index', $detailtemplatetugaspokok->id_template_tugas_pokok)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        $detailtemplatetugaspokok = DetailTemplateTugasPokok::find($id);
        $idtemplatetugaspokok = $detailtemplatetugaspokok->id_template_tugas_pokok;
        $detailtemplatetugaspokok->delete();

        return redirect()->route('detailtemplatetugaspokok.index', $idtemplatetugaspokok)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
