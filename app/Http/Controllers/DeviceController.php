<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function addNewDevice()
    {
        $title = 'Add New Device';
        return view('admin&superadmin.addNewDevice', compact('title'));
    }

    public function adminAddNewDevice(Request $request)
    {
        $title = 'Add New Device';
        $validatedData = $request->validate([
            'code' => 'required|min:10|max:10',
            'name' => 'required',
            'ward_of_origin' => 'required',
            'room' => 'required|min:1|max:3',
        ]);

        Device::create($validatedData);
        return redirect('/admin/add-new-device', compact('title'))->with('success', 'Add New Device Success');
    }
    public function list()
    {
        $title = 'List Device';
        $device = Device::all();
        return view('admin&superadmin.listDevice', compact('title'))->with('device', $device);
    }
    public function deleteDevice($code)
    {
        $title = 'Device';
        $device = Device::find($code);
        $device->delete();
        return redirect('/listDevice');
    }
    public function editDevice($code)
    {
        $title = 'Device';
        $device = Device::whereCode($code)->first();
        return view('admin&superadmin.editDevice', compact('title'))->with('device', $device);
    }
    public function updateDevice(Request $request, $code)
    {
        $title = 'Device';
        $device = Device::find($code);

        $device->name = $request->name;
        $device->code = $request->code;
        $device->ward_of_origin = $request->ward_of_origin;
        $device->room = $request->room;
        $device->save();

        return redirect('/listDevice', compact('title'));
    }
    public function addNewConnectedDevice($code)
    {
        $title = 'Device';
        $device = Device::whereCode($code)->first();
        return view('admin&superadmin.connectDevice', compact('title'))->with('device', $device);
    }
}
