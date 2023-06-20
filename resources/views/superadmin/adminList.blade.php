@extends('layouts.main')
@section('title', 'List Admin')
@section('container')
    <div class="flex flex-wrap w-full h-full mx-auto">
        <div class="w-full p-1">
            <!-- button start -->
            <div class="w-full h-full">
                <!-- graph -->
                <div class="w-full h-full border border-gray-200 shadow-lg bg-gray-50 rounded-xl">
                    <div class="w-full py-5 text-sm text-center text-white uppercase bg-darkblue rounded-t-xl font-nobile">
                        <p class="font-medium">List Admin</p>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> NIP </th>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> Admin Name </th>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> Email </th>
                                    <th scope="col" rowspan="2" class="px-6 py-3"> Wards </th>
                                    <th scope="col" rowspan="2" colspan="3" class="py-3 text-center">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admin as $item)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nip }}</th>
                                        <td class="px-6 py-4">{{ $item->first_name }} {{ $item->last_name }}</td>
                                        <td class="px-6 py-4">{{ $item->email }}</td>
                                        <td class="px-6 py-4">{{ $item->ward_of_origin }}</td>
                                        <td class="px-6 py-4 text-center">
                                            <form action="{{ route('delete.admin', $item->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="font-medium text-blue-600 hover:underline">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td class="px-6 py-4 text-center"><a href="{{ route('edit.admin', $item->id) }}"
                                                class="font-medium text-blue-600 hover:underline">Edit</a> </td>
                                        {{-- <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 hover:underline">Done</a></td> --}}
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
