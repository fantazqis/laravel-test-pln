<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Worklog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{

    public function index()
    {

        return view('payroll_check', [
            'data_pegawais' => Pegawai::all(),
        ]);
    }

    public function showForm()
    {
        return view('payroll_check', ['data_pegawais' => Pegawai::all()]);
    }

    public function showWork(Request $request)
    {
        $id_pegawai = $request->input('id_pegawai');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $worklogs = Worklog::where('id_pegawai', $id_pegawai)
            ->whereBetween('tanggal_pengerjaan', [$start_date, $end_date])
            ->get();

        $summarizedWorklogs = DB::table('worklogs')
            ->select('id_pegawai', 'tanggal_pengerjaan', DB::raw('SUM(durasi_kerja) as total_durasi'))
            ->where('id_pegawai', $id_pegawai)
            ->whereBetween('tanggal_pengerjaan', [$start_date, $end_date])
            ->groupBy('id_pegawai', 'tanggal_pengerjaan')
            ->get();

        return view('payroll_calculation', ['worklogs' => $worklogs, 'summarizedWorklogs' => $summarizedWorklogs, 'data_pegawais' => Pegawai::all(), 'start_date' => $start_date, 'end_date' => $end_date]);
    }

    public function showPayroll(Request $request, $userId)
    {
        $selectedDate = $request->input('selectedDate');
        $worklogs = Worklog::where('id_pegawai', $userId)
            ->whereDate('tanggal_pengerjaan', $selectedDate)
            ->get();

        $totalDuration = $worklogs->sum('duration');

        $availableDates = Worklog::where('id_pegawai', $userId)
            ->pluck('tanggal_pengerjaan')
            ->unique();

        return view('payroll_calculation', ['worklogs' => $worklogs, 'totalDuration' => $totalDuration, 'availableDates' => $availableDates, 'userId' => $userId]);
    }


    public function getTotalHoursByDate($userId, $date)
    {
        $totalHours = Worklog::where('user_id', $userId)
            ->where('work_date', $date)
            ->sum('duration_hours');

        return $totalHours;
    }

    public function getTotalHoursByMonth($userId, $month, $year)
    {
        $startDate = "$year-$month-01";
        $endDate = date('Y-m-t', strtotime($startDate));

        $totalHours = Worklog::where('user_id', $userId)
            ->whereBetween('work_date', [$startDate, $endDate])
            ->sum('duration_hours');

        return $totalHours;
    }
}
