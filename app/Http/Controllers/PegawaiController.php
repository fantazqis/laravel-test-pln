<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function index()
    {
        return view('pegawai', [
            'pegawais' => Pegawai::all(),
        ]);
    }


    public function store(Request $request)
    {

        Pegawai::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'no_telpon' => $request->no_telpon,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect('pegawai');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function update(Request $request, $id)
    {
        Pegawai::find($id)->update(
            [
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'email' => $request->email,
                'no_telpon' => $request->no_telpon,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
            ]
        );
        return redirect('pegawai');
    }

    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        return back();
    }

    // public function identifier(Request $request, $identifier)
    // {
    //     dd($request);
    //     return view('project', ['name' => $identifier]); //$request->username
    // }
}
