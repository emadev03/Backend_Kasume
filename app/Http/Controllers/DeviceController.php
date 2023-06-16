<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function addNewDevice()
    {
        return view('admin&superadmin.addNewDevice', []);
    }

    public function adminAddNewDevice(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|min:10|max:10',
            'name' => 'required',
            'ward_of_origin' => 'required',
            'room' => 'required|min:1|max:3',
        ]);

        Device::create($validatedData);
        return redirect('/admin/add-new-device')->with('success', 'Add New Device Success');
    }
    public function list()
    {
        $device = Device::all();
        return view('admin&superadmin.listDevice')->with('device', $device);
    }
    public function deleteDevice($code)
    {
        $device = Device::find($code);
        $device->delete();
        return redirect('/listDevice');
    }
    public function editDevice($code)
    {
        $device = Device::whereCode($code)->first();
        return view('admin&superadmin.editDevice')->with('device', $device);
    }
    public function updateDevice(Request $request, $code)
    {
        $device = Device::find($code);

        $device->name = $request->name;
        $device->code = $request->code;
        $device->ward_of_origin = $request->ward_of_origin;
        $device->room = $request->room;
        $device->save();

        return redirect('/listDevice');
    }
    public function addNewConnectedDevice($code)
    {
        $device = Device::whereCode($code)->first();
        return view('admin&superadmin.connectDevice')->with('device', $device);
    }
}
