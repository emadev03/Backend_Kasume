@extends('layouts.main')
@section('title', 'Dashboard')
@section('container')
<div class="flex flex-wrap w-full lg:w-1/5">
    <div class="w-full p-1">
      <!-- button start -->
      <div class="w-full h-full">
        <!-- graph -->
        <div
          class="h-full px-6 bg-gray-300 border border-gray-200 shadow-lg rounded-xl"
        >
          <div
            class="p-2 mt-2 text-sm text-center capitalize bg-white rounded-lg shadow-lg font-nobile"
          >
            <p class="font-medium">Upcoming task to do</p>
          </div>
          <div
            class="p-2 mt-2 space-y-0 text-xs capitalize bg-white border-l-4 border-yellow-400 rounded-lg shadow-lg font-nobile"
          >
            <p class="text-slate-500">Dr. Almadhani</p>
            <p class="">
              Patient
              <span class="ml-[10px]">: Teddy Mukh</span>
            </p>
            <p class="">
              Room
              <span class="ml-[18px]">: 4.7.12</span>
            </p>
            <p class="">
              WoR <span class="ml-[26px]">: Jasmine Utara</span>
            </p>
            <p class="">
              Task<span class="ml-[29px]">: change RL</span>
            </p>
          </div>
          <div
            class="p-2 mt-2 space-y-0 text-xs capitalize bg-white border-l-4 border-yellow-400 rounded-lg shadow-lg font-nobile"
          >
            <p class="text-slate-500">Dr. Almadhani</p>
            <p class="">
              Patient
              <span class="ml-[10px]">: Teddy Mukh</span>
            </p>
            <p class="">
              Room
              <span class="ml-[18px]">: 4.7.12</span>
            </p>
            <p class="">
              WoR <span class="ml-[26px]">: Jasmine Utara</span>
            </p>
            <p class="">
              Task<span class="ml-[29px]">: change RL</span>
            </p>
          </div>
          <div
            class="p-2 mt-2 space-y-0 text-xs capitalize bg-white border-l-4 border-yellow-400 rounded-lg shadow-lg font-nobile"
          >
            <p class="text-slate-500">Dr. Almadhani</p>
            <p class="">
              Patient
              <span class="ml-[10px]">: Teddy Mukh</span>
            </p>
            <p class="">
              Room
              <span class="ml-[18px]">: 4.7.12</span>
            </p>
            <p class="">
              WoR <span class="ml-[26px]">: Jasmine Utara</span>
            </p>
            <p class="">
              Task<span class="ml-[29px]">: change RL</span>
            </p>
          </div>
          <div
            class="p-2 mt-2 space-y-0 text-xs capitalize bg-white border-l-4 border-yellow-400 rounded-lg shadow-lg font-nobile"
          >
            <p class="text-slate-500">Dr. Almadhani</p>
            <p class="">
              Patient
              <span class="ml-[10px]">: Teddy Mukh</span>
            </p>
            <p class="">
              Room
              <span class="ml-[18px]">: 4.7.12</span>
            </p>
            <p class="">
              WoR <span class="ml-[26px]">: Jasmine Utara</span>
            </p>
            <p class="">
              Task<span class="ml-[29px]">: change RL</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-wrap w-full ml-2 border-b-2 lg:w-[38%]">
    <div
      class="w-full mb-1 bg-darkblue rounded-xl h-60 lg:h-64"
    >
      <div class="flex flex-wrap w-full h-full p-2">
        <div
          class="flex flex-wrap w-[45%] mr-4 p-2 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/2 border-softgreen"
        >
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
          <p class="">Penyakit <span>: Demam</span></p>
        </div>
        <div class="flex flex-wrap w-1/2 h-1/2">
          <div
            class="p-2 flex w-[47%] h-full border-slate-200 border-4 bg-softblue rounded-bl-2xl rounded-t-2xl"
          >
            <img
              src="image/tpmLogo.png"
              class="w-5 h-5"
              alt="TPM logo"
            />
            <p
              class="mt-1 text-xs font-semibold uppercase font-nobile"
            >
              TPM
            </p>
          </div>
          <div
            class="p-2 flex w-[47%] ml-3 h-full border-slate-200 border-4 bg-blue-400 rounded-br-2xl rounded-t-2xl"
          >
            <img
              src="image/statusLogo.png"
              class="w-5 h-5"
              alt="TPM logo"
            />
            <p
              class="mt-1 text-xs font-semibold uppercase font-nobile"
            >
              status
            </p>
          </div>
        </div>
        <div
          class="flex flex-wrap w-[45%] mr-4 p-2 mt-1 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/2 border-softgreen"
        >
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
          <p class="">Penyakit <span>: Demam</span></p>
        </div>
        <div class="flex flex-wrap w-1/2 mt-1 h-1/2">
          <div
            class="p-2 flex w-[47%] h-full border-slate-200 border-4 bg-kuning rounded-b-2xl rounded-tl-2xl"
          >
            <img
              src="image/capacityLogo.png"
              class="w-5 h-5"
              alt="kapasitas logo"
            />
            <p
              class="mt-1 text-[10px] font-semibold uppercase font-nobile"
            >
              Kapasitas
            </p>
          </div>
          <div
            class="p-2 flex w-[47%] ml-3 h-full border-slate-200 border-4 bg-softgreen rounded-b-2xl rounded-tr-2xl"
          >
            <img
              src="image/predictionLogo.png"
              class="w-5 h-5"
              alt="Prediksi habis logo"
            />
            <p
              class="mt-1 text-[10px] font-semibold uppercase font-nobile"
            >
              Habis
            </p>
          </div>
        </div>
      </div>
    </div>
    <div
      class="w-full mb-1 bg-darkblue rounded-xl h-60 lg:h-64"
    >
      <div class="flex flex-wrap w-full h-full p-2">
        <div
          class="flex flex-wrap w-[45%] mr-4 p-2 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/2 border-softgreen"
        >
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
          <p class="">Penyakit <span>: Demam</span></p>
        </div>
        <div class="flex flex-wrap w-1/2 h-1/2">
          <div
            class="p-2 flex w-[47%] h-full border-slate-200 border-4 bg-softblue rounded-bl-2xl rounded-t-2xl"
          >
            <img
              src="image/tpmLogo.png"
              class="w-5 h-5"
              alt="TPM logo"
            />
            <p
              class="mt-1 text-xs font-semibold uppercase font-nobile"
            >
              TPM
            </p>
          </div>
          <div
            class="p-2 flex w-[47%] ml-3 h-full border-slate-200 border-4 bg-blue-400 rounded-br-2xl rounded-t-2xl"
          >
            <img
              src="image/statusLogo.png"
              class="w-5 h-5"
              alt="TPM logo"
            />
            <p
              class="mt-1 text-xs font-semibold uppercase font-nobile"
            >
              status
            </p>
          </div>
        </div>
        <div
          class="flex flex-wrap w-[45%] mr-4 p-2 mt-1 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/2 border-softgreen"
        >
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
          <p class="">Penyakit <span>: Demam</span></p>
        </div>
        <div class="flex flex-wrap w-1/2 mt-1 h-1/2">
          <div
            class="p-2 flex w-[47%] h-full border-slate-200 border-4 bg-kuning rounded-b-2xl rounded-tl-2xl"
          >
            <img
              src="image/capacityLogo.png"
              class="w-5 h-5"
              alt="kapasitas logo"
            />
            <p
              class="mt-1 text-[10px] font-semibold uppercase font-nobile"
            >
              Kapasitas
            </p>
          </div>
          <div
            class="p-2 flex w-[47%] ml-3 h-full border-slate-200 border-4 bg-softgreen rounded-b-2xl rounded-tr-2xl"
          >
            <img
              src="image/predictionLogo.png"
              class="w-5 h-5"
              alt="Prediksi habis logo"
            />
            <p
              class="mt-1 text-[10px] font-semibold uppercase font-nobile"
            >
              Habis
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-wrap w-full ml-2 border-b-2 lg:w-[38%]">
    <div
      class="w-full mb-1 bg-darkblue rounded-xl h-60 lg:h-64"
    >
      <div class="flex flex-wrap w-full h-full p-2">
        <div
          class="flex flex-wrap w-[45%] mr-4 p-2 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/2 border-softgreen"
        >
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
          <p class="">Penyakit <span>: Demam</span></p>
        </div>
        <div class="flex flex-wrap w-1/2 h-1/2">
          <div
            class="p-2 flex w-[47%] h-full border-slate-200 border-4 bg-softblue rounded-bl-2xl rounded-t-2xl"
          >
            <img
              src="image/tpmLogo.png"
              class="w-5 h-5"
              alt="TPM logo"
            />
            <p
              class="mt-1 text-xs font-semibold uppercase font-nobile"
            >
              TPM
            </p>
          </div>
          <div
            class="p-2 flex w-[47%] ml-3 h-full border-slate-200 border-4 bg-blue-400 rounded-br-2xl rounded-t-2xl"
          >
            <img
              src="image/statusLogo.png"
              class="w-5 h-5"
              alt="TPM logo"
            />
            <p
              class="mt-1 text-xs font-semibold uppercase font-nobile"
            >
              status
            </p>
          </div>
        </div>
        <div
          class="flex flex-wrap w-[45%] mr-4 p-2 mt-1 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/2 border-softgreen"
        >
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
          <p class="">Penyakit <span>: Demam</span></p>
        </div>
        <div class="flex flex-wrap w-1/2 mt-1 h-1/2">
          <div
            class="p-2 flex w-[47%] h-full border-slate-200 border-4 bg-kuning rounded-b-2xl rounded-tl-2xl"
          >
            <img
              src="image/capacityLogo.png"
              class="w-5 h-5"
              alt="kapasitas logo"
            />
            <p
              class="mt-1 text-[10px] font-semibold uppercase font-nobile"
            >
              Kapasitas
            </p>
          </div>
          <div
            class="p-2 flex w-[47%] ml-3 h-full border-slate-200 border-4 bg-softgreen rounded-b-2xl rounded-tr-2xl"
          >
            <img
              src="image/predictionLogo.png"
              class="w-5 h-5"
              alt="Prediksi habis logo"
            />
            <p
              class="mt-1 text-[10px] font-semibold uppercase font-nobile"
            >
              Habis
            </p>
          </div>
        </div>
      </div>
    </div>
    <div
      class="w-full mb-1 bg-darkblue rounded-xl h-60 lg:h-64"
    >
      <div class="flex flex-wrap w-full h-full p-2">
        <div
          class="flex flex-wrap w-[45%] mr-4 p-2 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/2 border-softgreen"
        >
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
          <p class="">Penyakit <span>: Demam</span></p>
        </div>
        <div class="flex flex-wrap w-1/2 h-1/2">
          <div
            class="p-2 flex w-[47%] h-full border-slate-200 border-4 bg-softblue rounded-bl-2xl rounded-t-2xl"
          >
            <img
              src="image/tpmLogo.png"
              class="w-5 h-5"
              alt="TPM logo"
            />
            <p
              class="mt-1 text-xs font-semibold uppercase font-nobile"
            >
              TPM
            </p>
          </div>
          <div
            class="p-2 flex w-[47%] ml-3 h-full border-slate-200 border-4 bg-blue-400 rounded-br-2xl rounded-t-2xl"
          >
            <img
              src="image/statusLogo.png"
              class="w-5 h-5"
              alt="TPM logo"
            />
            <p
              class="mt-1 text-xs font-semibold uppercase font-nobile"
            >
              status
            </p>
          </div>
        </div>
        <div
          class="flex flex-wrap w-[45%] mr-4 p-2 mt-1 border-t-4 shadow-md bg-gray-50 rounded-xl h-1/2 border-softgreen"
        >
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
          <p class="">Penyakit <span>: Demam</span></p>
        </div>
        <div class="flex flex-wrap w-1/2 mt-1 h-1/2">
          <div
            class="p-2 flex w-[47%] h-full border-slate-200 border-4 bg-kuning rounded-b-2xl rounded-tl-2xl"
          >
            <img
              src="image/capacityLogo.png"
              class="w-5 h-5"
              alt="kapasitas logo"
            />
            <p
              class="mt-1 text-[10px] font-semibold uppercase font-nobile"
            >
              Kapasitas
            </p>
          </div>
          <div
            class="p-2 flex w-[47%] ml-3 h-full border-slate-200 border-4 bg-softgreen rounded-b-2xl rounded-tr-2xl"
          >
            <img
              src="image/predictionLogo.png"
              class="w-5 h-5"
              alt="Prediksi habis logo"
            />
            <p
              class="mt-1 text-[10px] font-semibold uppercase font-nobile"
            >
              Habis
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection