<?php

namespace App\Models;

use App\Models\Pegawai;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Worklog extends Model
{
    use HasFactory;

    protected $table = 'worklogs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_pegawai',
        'id_project',
        'durasi_kerja',
        'tanggal_pengerjaan'

    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project', 'id_project');
    }
}
