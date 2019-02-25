<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OutputTugasPokok;

class OutputTugasPokokController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $outputtugaspokok = OutputTugasPokok::all();

        return view('outputtugaspokok.index', compact(['outputtugaspokok']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        return view('outputtugaspokok.create')
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'output' => 'required',
            'alias' => 'required',
        ]);

        $data = $request->only('output', 'alias');

        OutputTugasPokok::create($data);

        return redirect()->route('outputtugaspokok.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $outputtugaspokok = OutputTugasPokok::find($id);

        return view('outputtugaspokok.edit', compact(['outputtugaspokok']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'output' => 'required',
            'alias' => 'required',
        ]);

        $data = $request->only('output', 'alias');

        OutputTugasPokok::where(['id' => $id])->update($data);

        return redirect()->route('outputtugaspokok.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        OutputTugasPokok::where(['id' => $id])->delete();

        return redirect()->route('outputtugaspokok.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
