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

    public function index(Request $request)
    {

        $inputs = $request->all();

        $harilibur = HariLibur::all();

        if ($inputs['tanggal'] != null && $inputs['durasi'] != null) {
            $date=date_create($this->pustaka->parseTanggalIndo($inputs['tanggal']));
            date_add($date,date_interval_create_from_date_string("{$inputs["durasi"]} days"));
            $date = date_format($date,"Y-m-d");
            $deadline = $this->pustaka->tanggalIndo($date);
        } else {
            $deadline = '';
        }


        return view('harilibur.index', compact(['harilibur', 'inputs', 'deadline']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        $hariliburs = HariLibur::all();

        return view('harilibur.create', compact(['hariliburs']))
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
        ]);

        $data = $request->only('tanggal', 'keterangan');
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
        $hariliburs = HariLibur::all();

        $harilibur = HariLibur::find($id);
        $harilibur->tanggal = $this->pustaka->tanggalIndo($harilibur->tanggal);

        return view('harilibur.edit', compact(['harilibur', 'hariliburs']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $harilibur = HariLibur::find($id);
     
        $request->validate([
            'tanggal' => 'required',
        ]);

        $data = $request->only('tanggal', 'keterangan');
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
