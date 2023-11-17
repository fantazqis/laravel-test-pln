<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function index()
    {
        return view('project', [
            'projects' => Project::all(),
        ]);
    }


    public function store(Request $request)
    {
        Project::create([
            'nama_project' => $request->nama_project,
            'lokasi_project' => $request->lokasi_project,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        return redirect('project');
    }

    public function edit($id)
    {
        $project = Project::find($id);

        return view('project', ['project' => $project]);
    }

    public function update(Request $request, $id)
    {
        Project::find($id)->update(
            [
                'nama_project' => $request->nama_project,
                'lokasi_project' => $request->lokasi_project,
                'deskripsi' => $request->deskripsi,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
            ]
        );
        return redirect('project');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();
        return back();
    }
}
