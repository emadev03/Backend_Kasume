@extends('layouts.main')
@section('title', 'Add New Device')
@section('container')

    <div class="flex flex-wrap h-full mx-auto">
        <div class="lg:w-[450px] md:w-[300px] p-1">
            <!-- button start -->
            <div class="w-full h-full">
                <!-- graph -->
                <div class="w-full h-full border border-gray-200 shadow-lg bg-gray-50 rounded-xl">
                    <div class="w-full py-3 text-sm text-center text-white uppercase bg-darkblue rounded-t-xl font-nobile">
                        <p class="font-medium">Add new device</p>
                    </div>
                    <div class="p-4 space-y-6 text-black capitalize font-nobile">
                        <p class="mt-3 font-medium text-center">
                            fill the new device information here:
                        </p>

                        <form action="{{ route('adminAddNewDevice') }}" method="POST" class="space-y-2 font-nobile">
                            @csrf
                            <div class="">
                                <label for="name" class="text-black">Device Name</label>
                                <input type="text" name="name" id="name" placeholder="Infused"
                                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                    value="{{ old('name') }}" />
                                @error('name')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="pt-3">
                                <label for="code" class="text-black">Device Code</label>
                                <input type="number" name="code" id="code" placeholder="1234567890"
                                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                    value="{{ old('code') }}" />
                                @error('code')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-3">
                                <div class="flex items-center justify-between">
                                    <label for="code" class="text-black">Ward of Origin</label>
                                </div>
                                <input type="text" name="ward_of_origin" id="ward_of_origin" placeholder="Jasmine"
                                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                    value="{{ old('ward_of_origin') }}" />
                                @error('ward_of_origin')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="pt-3">
                                <div class="flex items-center justify-between">
                                    <label for="room" class="text-black">Room</label>
                                </div>
                                <input type="text" name="room" id="room" placeholder="1"
                                    class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                    value="{{ old('room') }}" />
                                @error('room')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <button id="submitNurse"
                                class="w-full px-6 py-3 rounded-md bg-softgreen text-slate-800 active:text-white active:bg-darkblue">
                                <span class="font-bold font-nobile">Add Device</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
