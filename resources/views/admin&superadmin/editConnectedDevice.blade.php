@extends('layouts.main')
@section('title', 'Edit Device')
@section('container')
<div class="flex flex-wrap w-1/3 h-full mx-auto">
    <div class="w-full p-1">
        <!-- button start -->
        <div class="w-full h-full">
        <!-- graph -->
        <div
            class="w-full h-full border border-gray-200 shadow-lg bg-gray-50 rounded-xl"
        >
            <div
            class="w-full py-3 text-sm text-center text-white uppercase bg-darkblue rounded-t-xl font-nobile"
            >
            <p class="font-medium">Update Connected Device</p>
            </div>
            <div
            class="p-4 space-y-6 text-black capitalize font-nobile"
            >
            <p class="mt-3 font-medium text-center">
                fill the update connected device information here:
            </p>

            <form action="{{ route('updateConnectedDevice', $connecteddevice->id) }}" method="POST" class="space-y-2 font-nobile">
                @csrf
                <div class="">
                <label for="name" class="text-black"
                    >Patient Name</label
                >
                <input
                    type="text"
                    name="patient_name"
                    id="patient_name"
                    placeholder="Catheter"
                    value="{{$connecteddevice->patient_name}}"
                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                />
                </div>
                <div class="">
                <label for="code" class="text-black"
                    >Code</label
                >
                <input
                    type="number"
                    name="code"
                    id="code"
                    placeholder="1234567890"
                    value="{{$connecteddevice->code}}"
                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                />
                </div>

                <div>
                <div class="flex items-center justify-between">
                    <label for="code" class="text-black"
                    >Ward of Origin</label
                    >
                </div>
                <input
                    type="text"
                    name="ward_of_origin"
                    id="ward_of_origin"
                    placeholder="Jasmine"
                    value="{{$connecteddevice->ward_of_origin}}"
                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                />
                </div>
                <div>
                <div class="flex items-center justify-between">
                    <label for="room" class="text-black"
                    >Room</label
                    >
                </div>
                <input
                    type="text"
                    name="room"
                    id="room"
                    placeholder="1"
                    value="{{$connecteddevice->room}}"
                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                />
                </div>

                <button
                id="submitNurse"
                class="w-full px-6 py-3 rounded-md bg-softgreen text-slate-800 active:text-white active:bg-darkblue"
                >
                <span class="font-bold font-nobile"
                    >Update Connected Device</span
                >
                </button>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection