<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HariLibur;
use Validator;

class HariLiburController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $harilibur = HariLibur::all();

        return view('harilibur.index', compact(['harilibur']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        return view('harilibur.create')
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
        ]);

        $data = $request->only('tanggal');
        $data['tanggal'] = $this->pustaka->parseTanggalIndo($data['tanggal']);

        $validator = Validator::make($data, [
            'tanggal' => 'unique:hari_libur,tanggal',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        HariLibur::create($data);

        return redirect()->route('harilibur.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Tambah Data',
                'class' => 'success',
            ]);
    }

    public function edit($id)
    {
        $harilibur = HariLibur::find($id);
        $harilibur->tanggal = $this->pustaka->tanggalIndo($harilibur->tanggal);

        return view('harilibur.edit', compact(['harilibur']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $harilibur = HariLibur::find($id);
     
        $request->validate([
            'tanggal' => 'required',
        ]);

        $data = $request->only('tanggal');
        $data['tanggal'] = $this->pustaka->parseTanggalIndo($data['tanggal']);

        if ($data['tanggal'] != $harilibur->tanggal) {
            $validator = Validator::make($data, [
                'tanggal' => 'unique:hari_libur,tanggal',
            ]);

            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput();
            }
        }

        HariLibur::where(['id' => $id])->update($data);

        return redirect()->route('harilibur.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Ubah Data',
                'class' => 'success',
            ]);
    }

    public function destroy($id)
    {
        HariLibur::where(['id' => $id])->delete();

        return redirect()->route('harilibur.index')->with('alert', [
                'title' => 'BERHASIL !!!',
                'message' => 'Berhasil Hapus Data',
                'class' => 'success',
            ]);
    }
}
