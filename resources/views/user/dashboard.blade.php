@extends('layouts.home')
@section('title', 'Dashboard')
@section('container')
    @if ($data == 0)
        data kosong
    @else
        @for ($i = 0; $i < count($data); $i++)
            @if ($data[$i]['status'] == 1)
                <div class="flex-wrap w-full pl-2 border-b-2 lg:w-[25%]">
                    <div class=" flex flex-wrap w-full mb-1 bg-darkblue rounded-xl h-96 lg:h-90 p-2">
                        <div class="w-[100%] p-2 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/3 border-softgreen">
                            <p class="text-gray-500 font-poppins">
                                Informasi Pasien
                            </p>
                            <p class="">
                                Pasien
                                <span class="ml-4">: {{ $data[$i]['patient_name'] }} </span>
                            </p>
                            <p class="">
                                Ruang
                                <span class="ml-[15px]">: {{ $data[$i]['room'] }} </span>
                            </p></span>
                            </p>
                            <p class="">
                                Bangsal
                                <span>: {{ $data[$i]['ward_of_origin'] }}</span>
                            </p>
                        </div>
                        <div class="flex flex-wrap w-1/2 h-2/3 pt-2 pb-2 pr-1">
                            <div
                                class="flex flex-wrap w-full p-2 mb-2 border-4 h-1/2 border-slate-200 bg-softblue rounded-bl-2xl rounded-t-2xl">
                                <div class="flex w-full">
                                    <img src="image/tpmLogo.png" class="w-5 h-5" alt="TPM logo" />
                                    <p class="mt-1 text-xs font-semibold uppercase font-nobile">
                                        TPM
                                    </p>
                                </div>
                                <div
                                    class="flex-wrap w-full mx-auto text-xl font-semibold text-center uppercase font-nobile">
                                    <span class='tpm'></span>
                                </div>
                            </div>
                            <div
                                class="flex flex-wrap w-full p-2 mb-2 border-4 h-1/2 border-slate-200 bg-kuning rounded-b-2xl rounded-tl-2xl">
                                <div class="flex w-full">
                                    <img src="image/capacityLogo.png" class="w-5 h-5" alt="kapasitas logo" />
                                    <p class="mt-1 text-[10px] font-semibold uppercase font-nobile">
                                        Kapasitas
                                    </p>
                                </div>
                                <div
                                    class="flex-wrap w-full mx-auto text-xl font-semibold text-center uppercase font-nobile">
                                    <span class='kapasitas'></span> gr
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/2 h-2/3 pt-2 pb-2 pl-1">
                            <div
                                class="flex flex-wrap w-full p-2 mb-2 border-4 h-1/2 border-slate-200 bg-blue-400 rounded-br-2xl rounded-t-2xl">
                                <div class="flex w-full">
                                    <img src="image/statusLogo.png" class="w-5 h-5" alt="TPM logo" />
                                    <p class="mt-1 text-xs font-semibold uppercase font-nobile">
                                        Status
                                    </p>
                                </div>
                                <div
                                    class="flex-wrap w-full mx-auto text-xl font-semibold text-center uppercase font-nobile">
                                    <span class='status'></span>
                                </div>
                            </div>

                            <div
                                class="flex flex-wrap w-full p-2 mb-2 border-4 h-1/2 border-slate-200 bg-softgreen rounded-b-2xl rounded-tr-2xl">
                                <div class="flex w-full">
                                    <img src="image/predictionLogo.png" class="w-5 h-5" alt="Prediksi habis logo" />
                                    <p class="mt-1 text-[10px] font-semibold uppercase font-nobile">
                                        Prediksi
                                    </p>
                                </div>
                                
                                <div
                                    class="flex-wrap w-full mx-auto text-xl font-semibold text-center uppercase font-nobile">
                                    <span class='prediksi'></span> jam
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endfor
    @endif
@endsection
