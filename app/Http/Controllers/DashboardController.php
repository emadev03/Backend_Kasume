<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\Value;
use App\Models\Device;
use App\Models\DeviceConnected;
use Response;

class DashboardController extends Controller
{
    public function sensor($code, $dropsPerMinutes, $kapasitas, $status)
    {
        if ($kapasitas < 0) {
            $kapasitas = 0;
        }
        $device = DeviceConnected::where('code', $code)->where('status', '1')->first();
        $prediksi = ($kapasitas / $dropsPerMinutes) / 4;
        $dropsPerMinutes = $dropsPerMinutes - 1;

        Value::create([
            'idPasien' => $device->id,
            'tpm' => $dropsPerMinutes,
            'kapasitas' => $kapasitas,
            'prediksi' => $prediksi,
            'status' => $status
        ]);
    }

    public function index()
    {
        $title = 'Dashboard';
        $Tempdata = DeviceConnected::with('Device.Value')->get();

        $Tempvalue = Value::get();

        $data = $Tempdata->toArray();
        $value = $Tempvalue->toArray();

        if (count($Tempdata) != 0) {
            return view('admin&superadmin.dashboard', ['data' => $data], compact('title'));
        } else {
            return view('admin&superadmin.dashboard', ['data' => 0], compact('title'));
        }
    }

    public function index2()
    {
        $title = 'Dashboard';
        $Tempdata = DeviceConnected::with('Device.Value')->get();

        $Tempvalue = Value::get();

        $data = $Tempdata->toArray();
        $value = $Tempvalue->toArray();

        if (count($Tempdata) != 0) {
            return view('user.dashboard', ['data' => $data], compact('title'));
        } else {
            return view('user.dashboard', ['data' => 0], compact('title'));
        }
    }

    public function get()
    {
        $Tempdata = DeviceConnected::with('Device.Value')->get();
        $Tempvalue = Value::get();
        $data = $Tempdata->toArray();
        $value = $Tempvalue->toArray();

        if (count($Tempdata) != 0) {
            return response()->json(['value' => $value, 'data' => $data], 200);
        } else {
            dd("dsadsa");
        }
    }

    public function device2($idAlat, $dropsPerMinutes, $kapasitas, $status)
    {
        if ($kapasitas < 0) {
            $kapasitas = 0;
        }
        $device = DeviceConnected::where('code', $idAlat)->where('status', '1')->first();
        $prediksi = ($kapasitas / $dropsPerMinutes) / 4;
        $dropsPerMinutes = $dropsPerMinutes - 1;

        Value::create([
            'idPasien' => $device->id,
            'tpm' => $dropsPerMinutes,
            'kapasitas' => $kapasitas,
            'prediksi' => $prediksi,
            'status' => $status
        ]);
    }

    public function get2()
    {
        $Tempdata = DeviceConnected::with('Device.Value')->get();
        $Tempvalue = Value::get();
        $data = $Tempdata->toArray();
        $value = $Tempvalue->toArray();

        if (count($Tempdata) != 0) {
            return response()->json(['value' => $value, 'data' => $data], 200);
        } else {
            dd("dsadsa");
        }
    }
}
