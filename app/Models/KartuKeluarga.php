<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KartuKeluarga extends Model
{
    use SoftDeletes;

    public $table = 'kartu_keluargas';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = ['nama', 'nik', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'agama', 'pendidikan', 'jenis_pekerjaan'];

    public function penduduk()
    {
        return $this->hasMany(DataPenduduk::class, 'kartu_keluarga_nik', 'nik');
    }
}
