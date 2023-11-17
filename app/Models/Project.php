<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $primaryKey = 'id_project';

    protected $fillable = [
        'nama_project',
        'lokasi_project',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai'

    ];

    public function worklog()
    {
        return $this->hasMany(Worklog::class, 'id_project', 'id_project');
    }
}
