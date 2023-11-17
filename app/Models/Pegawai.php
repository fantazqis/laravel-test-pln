<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Worklog;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';
    protected $primaryKey = 'id_pegawai';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'email',
        'no_telpon',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',

    ];

    public function worklog()
    {
        return $this->hasMany(Worklog::class, 'id_pegawai', 'id_pegawai');
    }
}
