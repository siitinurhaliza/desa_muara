<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataKematian extends Model
{

    use SoftDeletes;

    public $table = 'data_kematians';

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $fillable = ['nama', 'penduduk_id', 'tgl_lahir', 'tgl_mati', 'penyebab'];

    public function penduduk()
    {
        return $this->belongsTo(DataPenduduk::class, 'penduduk_id'); // specify the foreign key
    }
}
