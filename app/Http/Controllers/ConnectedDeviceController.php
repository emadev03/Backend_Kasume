<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceConnected;
use App\Models\HistoryConnectedDevice;

class ConnectedDeviceController extends Controller
{
    public function connectDevice(Request $request)
    {
        $title = 'Device';
        $validatedData = $request->validate([
            'patient_name' => 'required',
            'code' => 'required',
            'ward_of_origin' => 'required',
            'room' => 'required',

        ]);
        $connecteddevice = new DeviceConnected($validatedData);
        $connecteddevice -> save();


        return redirect('/list-connected-device')->with('success', 'Add New Device Success');
    }
    public function listConnectedDevice()
    {
        $title = 'List Connected Device';
        $connecteddevice = DeviceConnected::all();
        return view('admin&superadmin.connectedDevice', compact('title'))->with('connecteddevice', $connecteddevice);
    }
    public function moveToHistory($id)
    {
        $title = 'Device';
        $connecteddevice = DeviceConnected::find($id);
        $connecteddevice->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
    
    public function editConnectedDevice($id)
    {
        $title = 'Device';
        $connecteddevice = DeviceConnected::whereId($id)->first();
        return view('admin&superadmin.editConnectedDevice', compact('title'))->with('connecteddevice', $connecteddevice);
    }
    public function updateConnectedDevice(Request $request, $id)
    {
        $title = 'Device';
        $connecteddevice = DeviceConnected::find($id);

        $connecteddevice->patient_name = $request->patient_name;
        $connecteddevice->code = $request->code;
        $connecteddevice->ward_of_origin = $request->ward_of_origin;
        $connecteddevice->room = $request->room;
        $connecteddevice->save();

        return redirect('/list-connected-device');
    }

    public function historyConnectedDevice()
    {
        $title = 'History of Connected Device';
        $connecteddevice = DeviceConnected::onlyTrashed()->get();
        return view('admin&superadmin.historyConnectedDevice', compact('connecteddevice', 'title'));
    }
}
