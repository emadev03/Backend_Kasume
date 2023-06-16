<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryConnectedDevice extends Model
{
    use HasFactory;
    protected $table = 'history_connected_devices';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function historable()
    {
        return $this->morphTo();
    }
}
