<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SatuanWaktu;

class SatuanWaktuController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $satuanwaktu = SatuanWaktu::all();

        return view('satuanwaktu.index', compact(['satuanwaktu']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        return view('satuanwaktu.create')
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'satuan_waktu' => 'required',
        ]);

        $data = $request->only('satuan_waktu');

        SatuanWaktu::create($data);

        return redirect()->route('satuanwaktu.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $satuanwaktu = SatuanWaktu::find($id);

        return view('satuanwaktu.edit', compact(['satuanwaktu']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'satuan_waktu' => 'required',
        ]);

        $data = $request->only('satuan_waktu');

        SatuanWaktu::where(['id' => $id])->update($data);

        return redirect()->route('satuanwaktu.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        SatuanWaktu::where(['id' => $id])->delete();

        return redirect()->route('satuanwaktu.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
