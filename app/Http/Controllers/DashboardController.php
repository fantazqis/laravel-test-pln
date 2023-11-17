<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Project;
use App\Models\Worklog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //dashboard statistic
        $totalPegawai = count(Pegawai::all());
        $totalProject = count(Project::all());
        $worklog = Worklog::all();

        $data = [$totalPegawai, $totalProject];

        return view('dashboard')->with(['data' => $data, 'worklog' => $worklog]);
    }
}
