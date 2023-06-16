@extends('layouts.main')
@section('title', 'Connect Device')
@section('container')
    <div class="flex flex-wrap w-1/3 h-full mx-auto">
        <div class="w-full p-1">
        <!-- button start -->
            <div class="w-full h-full">
        <!-- graph -->
                <div class="w-full h-full border border-gray-200 shadow-lg bg-gray-50 rounded-xl">
                    <div class="w-full py-3 text-sm text-center text-white uppercase bg-darkblue rounded-t-xl font-nobile">
                        <p class="font-medium">Connect Device</p>
                    </div>
                    <div class="p-4 space-y-6 text-black capitalize font-nobile">
                        <p class="mt-3 font-medium text-center"> fill the patient information here: </p>

                        <form action="/admin/connect-device" method="POST" class="space-y-2 font-nobile">
                            @csrf
                            <div class="">
                                <label for="name" class="text-black">Patient Name</label>
                                <input
                                    type="text"
                                    name="patient_name"
                                    id="patient_name"
                                    placeholder="Ifused"
                                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                />
                            </div>
                            <div class="">
                                <label for="ward" class="text-black">Code</label>
                                <input type="number" name="code" value="{{$device->code}}" class="form-control block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400" readonly>
                            </div>
                            <div >
                                <label for="code" class="text-black">Ward of Origin</label>
                                <input
                                    type="text"
                                    name="ward_of_origin"
                                    id="ward_of_origin"
                                    value="{{$device->ward_of_origin}}"
                                    class=" form-control block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                    readonly
                                />
                            </div>  
                            <div class="form-group">
                                <label for="device_code" class="text-black">Room</label>
                                <input
                                    type="number"
                                    name="room"
                                    id="room"
                                    value="{{$device->room}}"
                                    class=" form-control block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                    readonly
                                />
                            </div>

                            <button id="submitNurse" class="w-full px-6 py-3 rounded-md bg-softgreen text-slate-800 active:text-white active:bg-darkblue">
                                <span class="font-bold font-nobile">Connect Device</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection