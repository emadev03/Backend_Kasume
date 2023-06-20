@extends('layouts.home')
@section('title', 'Dashboard')
@section('container')
    <div class="flex-wrap w-full ml-2 border-b-2 lg:w-[25%]">
        <div class=" flex flex-wrap w-full mb-1 bg-darkblue rounded-xl h-96 lg:h-90 p-2">
            <div class="w-[100%] p-2 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/3 border-softgreen">
                <p class="text-gray-500 font-poppins">
                    Informasi Pasien
                </p>
                <p class="">
                    Pasien
                    <span class="ml-4">: Teddy Mukh</span>
                </p>
                <p class="">
                    Ruang
                    <span class="ml-[15px]">: 4.7.12</span>
                </p>
                <p class="">
                    Penyakit
                    <span>: Demam</span>
                </p>
            </div>
            <div class="flex flex-wrap w-1/2 h-2/3 pt-2 pb-2">
                <div
                    class="p-2 mb-2 flex w-[100%] h-1/2 border-slate-200 border-4 bg-softblue rounded-bl-2xl rounded-t-2xl">
                    <img src="image/tpmLogo.png" class="w-5 h-5" alt="TPM logo" />
                    <p class="mt-1 text-xs font-semibold uppercase font-nobile">
                        TPM
                    </p>
                </div>
                <div class="p-2 flex w-[100%] h-1/2 border-slate-200 border-4 bg-kuning rounded-b-2xl rounded-tl-2xl">
                    <img src="image/capacityLogo.png" class="w-5 h-5" alt="kapasitas logo" />
                    <p class="mt-1 text-[10px] font-semibold uppercase font-nobile">
                        Kapasitas
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap w-1/2 h-2/3 pt-2  pb-2">
                <div
                    class="p-2 mb-2 flex w-[100%] ml-3 h-1/2 border-slate-200 border-4 bg-blue-400 rounded-br-2xl rounded-t-2xl">
                    <img src="image/statusLogo.png" class="w-5 h-5" alt="TPM logo" />
                    <p class="mt-1 text-xs font-semibold uppercase font-nobile">
                        status
                    </p>
                </div>

                <div
                    class="p-2 flex w-[100%] ml-3 h-1/2 border-slate-200 border-4 bg-softgreen rounded-b-2xl rounded-tr-2xl">
                    <img src="image/predictionLogo.png" class="w-5 h-5" alt="Prediksi habis logo" />
                    <p class="mt-1 text-[10px] font-semibold uppercase font-nobile">
                        Habis
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
