@extends('layouts.main')
@section('title', 'List Device')
@section('container')
    <div class="flex flex-wrap w-full h-full mx-auto">
        <div class="w-full p-1">
            <!-- button start -->
            <div class="w-full h-full">
                <!-- graph -->
                <div class="w-full h-full border border-gray-200 shadow-lg bg-gray-50 rounded-xl">
                    <div class="w-full py-3 text-sm text-center text-white uppercase bg-darkblue rounded-t-xl font-nobile">
                        <p class="font-medium">List Device</p>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> Code </th>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> Device Name </th>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> Ward of Origin </th>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> Room </th>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> Status </th>
                                    <th scope="col" rowspan="2" class="px-6 py-3 text-center"> ADDED DATE </th>
                                    <th scope="col" rowspan="2" colspan="3" class="px-6 py-3 text-center"> Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($device as $item)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->code }}
                                        </th>
                                        <td class="px-6 py-4">{{ $item->name }}</td>
                                        <td class="px-6 py-4">{{ $item->ward_of_origin }}</td>
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
                                            <button data-modal-toggle="delete-modal" data-device-code="{{ $item->code }}"
                                                class="font-medium text-blue-600 hover:underline" data-target="#delete">
                                                Delete
                                            </button>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('editDevice', $item->code) }}"
                                                class="font-medium text-blue-600 hover:underline">Edit</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('connectDevice', $item->code) }}"
                                                class="font-medium text-blue-600 hover:underline">Connect</a>
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

    <div id="delete-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="delete-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete
                        this device?</h3>
                    <form id="delete-form" action="{{ route('deleteDevice', 'test') }}" method="POST">
                        @csrf
                        @method('delete')
                        <input id="device-code-input" type="hidden" name="code">
                        <div>
                            <button data-modal-toggle="delete-modal" type="submit"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="delete-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
