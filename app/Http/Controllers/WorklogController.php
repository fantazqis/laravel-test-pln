<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Worklog;

class WorklogController extends Controller
{
    public function index()
    {
        $data_pegawais = Pegawai::all();
        $data_projects = Project::all();

        return view('worklog')->with(['data_pegawais' => $data_pegawais, 'data_projects' => $data_projects]);
    }
    // public function create()
    // {
    //     return view('project.project_create');
    // }

    public function store(Request $request)
    {
        $id_projects = $request->input('id_project');
        $durations = $request->input('durasi_kerja');
        // ddd($request);
        foreach ($id_projects as $key => $id_project) {
            $duration = $durations[$key];


            Worklog::create([
                'id_pegawai' => $request->id_pegawai,
                'id_project' => $id_project,
                'durasi_kerja' => $duration,
                'tanggal_pengerjaan' => $request->tanggal_pengerjaan,

            ]);
        }
        // Worklog::create([
        //     'id_pegawai' => $request->id_pegawai,
        //     'id_project' => $request->id_project,
        //     'durasi_kerja' => $request->durasi_kerja,
        //     'tanggal_pengerjaan' => $request->tanggal_pengerjaan,
        // ]);

        return redirect('worklog');
    }

    public function edit($id)
    {
        $worklog = Worklog::find($id);
        $data_pegawais = Pegawai::all();
        $data_projects = Project::all();
        // dd($project);
        return view('worklog', ['worklog' => $worklog, 'data_pegawais' => $data_pegawais, 'data_projects' => $data_projects]);
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        Project::find($id)->update(
            [
                'durasi_kerja' => $request->durasi_kerja,
                'tanggal_pengerjaan' => $request->tanggal_pengerjaan,
            ]
        );
        return redirect('dashboard');
    }

    public function destroy($id)
    {
        Worklog::find($id)->delete();
        return back();
    }

    // public function identifier(Request $request, $identifier)
    // {
    //     dd($request);
    //     return view('project', ['name' => $identifier]); //$request->username
    // }
}
