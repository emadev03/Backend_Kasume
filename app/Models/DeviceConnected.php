<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceConnected extends Model
{
    use HasFactory;
    protected $table = 'connected_devices';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public function histories()
    {
        return $this->morphMany(HistoryConnectedDevice::class, 'historable');
    }
}
