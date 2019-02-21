<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pangkat;

class PangkatController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $pangkat = Pangkat::all();

        return view('pangkat.index', compact(['pangkat']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        return view('pangkat.create')
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'golongan' => 'required',
            'ruang' => 'required',
            'pangkat' => 'required',
        ]);

        $data = $request->only('golongan', 'ruang', 'pangkat');

        Pangkat::create($data);

        return redirect()->route('pangkat.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $pangkat = Pangkat::find($id);

        return view('pangkat.edit', compact(['pangkat']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'golongan' => 'required',
            'ruang' => 'required',
            'pangkat' => 'required',
        ]);

        $data = $request->only('golongan', 'ruang', 'pangkat');

        Pangkat::where(['id' => $id])->update($data);

        return redirect()->route('pangkat.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        Pangkat::where(['id' => $id])->delete();

        return redirect()->route('pangkat.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
