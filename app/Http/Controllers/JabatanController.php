<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;

class JabatanController extends Controller
{
    var $pustaka;
    
    public function __construct(){
        $this->pustaka = new \agungdh\Pustaka;
    }

    public function index()
    {
        $jabatan = Jabatan::all();

        return view('jabatan.index', compact(['jabatan']))
                ->with('pustaka', $this->pustaka);
    }

    public function create()
    {
        return view('jabatan.create')
                ->with('pustaka', $this->pustaka);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jabatan' => 'required',
        ]);

        $data = $request->only('jabatan');

        Jabatan::create($data);

        return redirect()->route('jabatan.index');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::find($id);

        return view('jabatan.edit', compact(['jabatan']))
                ->with('pustaka', $this->pustaka);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jabatan' => 'required',
        ]);

        $data = $request->only('jabatan');

        Jabatan::where(['id' => $id])->update($data);

        return redirect()->route('jabatan.index');
    }

    public function destroy($id)
    {
        Jabatan::where(['id' => $id])->delete();

        return redirect()->route('jabatan.index');
    }
}
