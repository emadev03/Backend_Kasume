<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;
    protected $table = 'values';
    protected $fillable = [
        'id',
        'idPasien',
        'code',
        'tpm',
        'kapasitas',
        'prediksi',
        'status',
        ];
    

        public function DeviceConnected(){
            return $this->belongsTo(DeviceConnected::class,'id','idPasien');
        }   
         
       
}