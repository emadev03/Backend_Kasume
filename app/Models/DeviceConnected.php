<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\HistoryConnectedDevice;

class DeviceConnected extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'connected_devices';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
