<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payroll extends Model
{
    use HasFactory;

    public static function getTotalWorkHoursPerMonth($year, $month)
    {
        return DB::table('worklogs')
            ->select(DB::raw('SUM(durasi_kerja) as total_hours'))
            ->whereYear('tanggal_pengerjaan', $year)
            ->whereMonth('tanggal_pengerjaan', $month)
            ->value('total_hours') ?? 0;
    }
}
