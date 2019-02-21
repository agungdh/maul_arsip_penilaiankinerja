<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $unit = Unit::all();

        return view('unit.index', compact(['unit']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        return view('unit.create')
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit' => 'required',
        ]);

        $data = $request->only('unit');

        Unit::create($data);

        return redirect()->route('unit.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $unit = Unit::find($id);

        return view('unit.edit', compact(['unit']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'unit' => 'required',
        ]);

        $data = $request->only('unit');

        Unit::where(['id' => $id])->update($data);

        return redirect()->route('unit.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        Unit::where(['id' => $id])->delete();

        return redirect()->route('unit.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
