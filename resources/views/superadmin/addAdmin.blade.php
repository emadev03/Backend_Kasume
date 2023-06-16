@extends('layouts.main')
@section('title', 'Add New Admin')
@section('container')
    <div class="flex flex-wrap w-2/3 h-full mx-auto mb-16">
        <div class="w-full p-1">
            <!-- button start -->
            <div class="w-full h-full">
                <!-- graph -->
                <div class="w-full h-full border border-gray-200 shadow-lg bg-gray-50 rounded-xl">
                    <div class="w-full py-5 text-sm text-center text-white uppercase bg-darkblue rounded-t-xl font-nobile">
                        <p class="font-medium">Add new Admin</p>
                    </div>
                    <div class="p-4 space-y-6 text-black capitalize font-nobile">
                        <p class="mt-3 font-medium text-center"> fill personal information here: </p>

                        <form action="{{ route ('addAdmin') }}" method="POST" x-data="{password: '',password_confirm: ''}" class="space-y-3 font-nobile">
                            @csrf
                            <div class="">
                                <label for="first_name" class="text-black" >First Name</label>
                                <input type="text" name="first_name" id="first_name" placeholder="Almadhani"  value="{{old('first_name')}}" class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"/>
                                @error('first_name')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="">
                                <label for="last_name" class="text-black">Last Name</label>
                                <input type="text" name="last_name" id="last_name" placeholder="Kurnia"  value="{{old('last_name')}}" class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"/>
                                @error('last_name')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="">
                                <label for="email" class="text-black">Email</label>
                                <input type="email" name="email" id="email" placeholder="orangtampan@gmail.com"  value="{{old('email')}}" class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400" />
                                @error('email')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror   
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="nip" class="text-black" >NIP</label>
                                </div>
                                <input type="number" name="nip" id="nip" placeholder="1234567891"  value="{{old('nip')}}" class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"/>
                                @error('nip')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="">
                                <label for="ward_of_origin" class="text-black">Ward of origin</label>
                                <input type="text" name="ward_of_origin" id="ward_of_origin" placeholder="Jasmine "  value="{{old('ward_of_origin')}}" class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"/>
                                @error('ward_of_origin')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password" class="text-black">Password</label>
                                </div>
                                    <input type="password" x-model="password" name="password" id="password"  value="{{old('password')}}" placeholder="*********" class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"/>
                                @error('password')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password Verification start -->
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password_confirmation" class="text-black">Password Confirm</label>
                                </div>
                                <input type="password" x-model="password_confirm" name="password_confirmation" id="password_confirmation"  value="{{old('password_confirmation')}} placeholder="*********" class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-gray-100 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"/>
                                @error('password_confirmation')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="flex justify-start p-1 mt-3 ml-4">
                                <ul>
                                    <li class="flex items-center py-1">
                                        <div :class="{'bg-green-200 text-green-700': password == password_confirm && password.length > 0, 'bg-red-200 text-red-700':password != password_confirm || password.length == 0}" class="p-1 rounded-full fill-current">
                                            <svg
                                                class="w-4 h-4"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    x-show="password == password_confirm && password.length > 0"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M5 13l4 4L19 7"
                                                />
                                                <path
                                                    x-show="password != password_confirm || password.length == 0"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"
                                                />
                                            </svg>
                                        </div>
                                        
                                        <span :class="{'text-green-700': password == password_confirm && password.length > 0, 'text-red-700':password != password_confirm || password.length == 0}" class="ml-3 text-sm font-medium" x-text="password == password_confirm && password.length > 0 ? 'Passwords match' : 'Passwords do not match' "></span>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <div
                                            :class="{'bg-green-200 text-green-700': password.length > 7, 'bg-red-200 text-red-700':password.length < 7 }"
                                            class="p-1 rounded-full fill-current"
                                        >
                                            <svg
                                                class="w-4 h-4"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                x-show="password.length > 7"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 13l4 4L19 7"
                                                />
                                                <path
                                                x-show="password.length < 7"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"
                                                />
                                            </svg>
                                        </div>
                                        <span
                                        :class="{'text-green-700': password.length > 7, 'text-red-700':password.length < 7 }"
                                        class="ml-3 text-sm font-medium"
                                        x-text="password.length > 7 ? 'The minimum length is reached' : 'At least 8 characters required' "
                                        ></span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Password Verification end -->
                            <button
                                id="submitNurse"
                                type="submit"
                                class="w-full px-6 py-3 rounded-md bg-softgreen text-slate-800 active:text-white active:bg-darkblue"
                            >
                                <span class="font-bold font-nobile">Add New Admin</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection