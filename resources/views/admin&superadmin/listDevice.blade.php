@extends('layouts.main')
@section('title', 'List Device')
@section('container')
<div class="flex flex-wrap w-full h-full mx-auto">
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
            <p class="font-medium">List Device</p>
          </div>

          <div
            class="relative overflow-x-auto shadow-md sm:rounded-lg"
          >
            <table
              class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
            >
              <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
              >
                <tr>
                  <th scope="col" rowspan="2" class="px-6 py-3"> Code </th>
                  <th scope="col" rowspan="2" class="px-6 py-3"> Device Name </th>
                  <th scope="col" rowspan="2" class="px-6 py-3"> Ward of Origin </th>
                  <th scope="col" rowspan="2" class="px-6 py-3"> Room </th>
                  <th scope="col" rowspan="2" class="px-6 py-3"> Status </th>
                  <th scope="col" rowspan="2" class="px-6 py-3 text-center"> ADDED DATE </th>
                  <th scope="col" rowspan="2" colspan="3" class="px-6 py-3 text-center"> Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($device as $item)
                <tr
                  class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"
                >
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" >
                    {{ $item->code }}
                  </th>
                  <td class="px-6 py-4">{{ $item->name }}</td>
                  <td class="px-6 py-4">{{ $item->ward_of_origin}}</td>
                  <td class="px-6 py-4">{{ $item->room }}</td>
                  <td class="px-6 py-4">
                    @if ($item->status == 0)
                        <span>Unconnected</span>
                    @elseif ($item->status == 1)
                        <span>Connected</span>
                    @endif
                  </td>
                  <td class="px-6 py-4 text-center"> {{ $item->created_at }} </td>
                  <td class="px-6 py-4">
                    <form action="{{ route('deleteDevice', $item->code) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="font-medium text-blue-600 hover:underline">
                            Delete
                        </button>
                    </form>
                  </td>
                  <td class="px-6 py-4">
                    <a
                      href="{{ route('editDevice', $item->code) }}"
                      class="font-medium text-blue-600 hover:underline"
                      >Edit</a
                    >
                  </td>
                  <td class="px-6 py-4">
                    <a
                      href="{{ route('connectDevice', $item->code) }}"
                      class="font-medium text-blue-600 hover:underline"
                      >Connect</a
                    >
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection