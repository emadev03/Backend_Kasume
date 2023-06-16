<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $table = 'devices';
    protected $primaryKey = 'code';
    protected $fillable = [
        'code',
        'name',
        'ward_of_origin',
        'room'
    ];
}
