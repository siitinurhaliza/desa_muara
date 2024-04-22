<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataKelahiran extends Model
{
    use SoftDeletes;

    public $table = 'datakelahiran';
    
    protected $dates = ['created_at','updated_at', 'deleted_at'
 ];
 
 protected $fillable = [
     'nama',
     'Tanggal_Lahir',
     'nama_ayah',
     'nama_ibu',
     'waktu_kelahiran',
     'No_Hp',
     'created_at',
     'updated_at',
     'deleted_at'
 ];
}
