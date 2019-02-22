<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplatePerilakuKerja;
use App\DetailTemplatePerilakuKerja;

class DetailTemplatePerilakuKerjaController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index($id_template_perilaku_kerja)
    {
        $templateperilakukerja = TemplatePerilakuKerja::find($id_template_perilaku_kerja);
        $detailtemplateperilakukerja = $templateperilakukerja->detailTemplatePerilakuKerjas;
        
        return view('detailtemplateperilakukerja.index', compact(['detailtemplateperilakukerja', 'templateperilakukerja']))
                ->with('pustaka', $this->pustaka);
    }

    public function create($id_template_perilaku_kerja)
    {
        $templateperilakukerja = TemplatePerilakuKerja::find($id_template_perilaku_kerja);
        
        return view('detailtemplateperilakukerja.create', compact(['templateperilakukerja']))
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request, $id_template_perilaku_kerja)
    {
        $request->validate([
            'perilaku_kerja' => 'required',
        ]);

        $data = $request->only('perilaku_kerja');
        $data['id_template_perilaku_kerja'] = $id_template_perilaku_kerja;

        DetailTemplatePerilakuKerja::create($data);

        return redirect()->route('detailtemplateperilakukerja.index', $id_template_perilaku_kerja)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $detailtemplateperilakukerja = DetailTemplatePerilakuKerja::find($id);
        $templateperilakukerja = $detailtemplateperilakukerja->templatePerilakuKerja;

        return view('detailtemplateperilakukerja.edit', compact(['detailtemplateperilakukerja', 'templateperilakukerja']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $detailtemplateperilakukerja = DetailTemplatePerilakuKerja::find($id);

        $request->validate([
            'perilaku_kerja' => 'required',
        ]);

        $data = $request->only('perilaku_kerja');

        DetailTemplatePerilakuKerja::where(['id' => $id])->update($data);

        return redirect()->route('detailtemplateperilakukerja.index', $detailtemplateperilakukerja->id_template_perilaku_kerja)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        $detailtemplateperilakukerja = DetailTemplatePerilakuKerja::find($id);
        $idtemplateperilakukerja = $detailtemplateperilakukerja->id_template_perilaku_kerja;
        $detailtemplateperilakukerja->delete();

        return redirect()->route('detailtemplateperilakukerja.index', $idtemplateperilakukerja)->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
