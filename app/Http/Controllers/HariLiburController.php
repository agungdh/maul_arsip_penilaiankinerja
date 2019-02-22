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

        $deadline = '';
        $deadline_hari = '';
        if ((isset($inputs['tanggal']) && $inputs['tanggal'] != null) && (isset($inputs['durasi']) && $inputs['durasi'] != null)) {
            $tanggal_mulai = $this->pustaka->parseTanggalIndo($inputs['tanggal']);
            $hari_libur = HariLibur::where('tanggal', '>', $tanggal_mulai)->get();
            $hari_libur_array = [];
            foreach ($hari_libur as $item_harilibur) {
                $hari_libur_array[] = $item_harilibur->tanggal;
            }

            $tanggal = date_create($tanggal_mulai);
            $hari_kerja = [];
            for ($i=1; $i <= $inputs['durasi']; $i++) { 
                date_add($tanggal, date_interval_create_from_date_string('1 days'));
                if ( in_array(date_format($tanggal, 'Y-m-d'), $hari_libur_array) ||
                    date_format($tanggal, 'N') == 6 || date_format($tanggal, 'N') == 7 ) {
                    $i--;
                } else {
                    $hari_kerja[] = date_format($tanggal, 'Y-m-d l');
                }
            }
            // dd([
            //     $tanggal_mulai,
            //     $hari_kerja,
            //     date_format($tanggal, 'Y-m-d l')
            // ]);
            $deadline = $this->pustaka->tanggalIndo(date_format($tanggal, 'Y-m-d'));
            $deadline_hari = date_format($tanggal, 'l');
        }


        return view('harilibur.index', compact(['harilibur', 'inputs', 'deadline', 'deadline_hari']))
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
