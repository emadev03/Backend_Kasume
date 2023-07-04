<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sifis | @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nobile:wght@400;500;700&family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: '16px',
                },
                extend: {
                    colors: {
                        kuning: '#FFCA4B',
                        darkblue: '#000C66',
                        softblue: '#D4F1F4',
                        softgreen: '#75E6DA',
                    },
                    fontFamily: {
                        poppins: ['Poppins'],
                        nobile: ['Nobile'],
                    },
                    screens: {
                        '2xl': '1320px',
                    },
                },
            },
        };
    </script>

    <link href="css/output.css" rel="stylesheet" />
    <link rel="icon" href={{ asset('image/mainLogoBg.png') }} type="image" sizes="5x5" />
</head>

<body>
    <div class="">
        <aside
            class="bg-darkblue navbar-menu fixed z-10 left-[-300px] pb-3 px-6 h-screen flex flex-col justify-between transition duration-300 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] lg:left-0">
            <nav>
                <div class="px-6 py-4 mt-10">
                    <a href="#" title="home" class="flex justify-center">
                        <img src="{{ asset('image/mainLogo.png') }}" class="w-24 h-24" alt="Permata Indah logo" />
                    </a>
                </div>

                <ul class="mt-8 space-y-4 font-sans tracking-wide">
                    <li class="ml-1">
                        <a href="/dashboard" aria-label="dashboard"
                            class="relative flex items-center px-4 py-3 space-x-4 group">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                height="40"
                                class="fill-current {{ $title == 'Dashboard' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}"
                                viewBox="0 0 48 48">
                                <path
                                    d="M39.5,43h-9c-1.381,0-2.5-1.119-2.5-2.5v-9c0-1.105-0.895-2-2-2h-4c-1.105,0-2,0.895-2,2v9c0,1.381-1.119,2.5-2.5,2.5h-9	C7.119,43,6,41.881,6,40.5V21.413c0-2.299,1.054-4.471,2.859-5.893L23.071,4.321c0.545-0.428,1.313-0.428,1.857,0L39.142,15.52	C40.947,16.942,42,19.113,42,21.411V40.5C42,41.881,40.881,43,39.5,43z">
                                </path>
                            </svg>
                            <span
                                class="pt-2 -mr-1 font-medium font-nobile {{ $title == 'Dashboard' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">Dashboard</span>
                        </a>
                    </li>
                    <li class="ml-1">
                        <button id="dropdownRightButton" data-dropdown-toggle="dropdownRightDevices"
                            data-dropdown-placement="right">
                            <div href="/superAddNewDevice" aria-label="Devices"
                                class="relative flex items-center px-4 py-3 space-x-4 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-9 h-9 {{ $title == 'Device' || $title == 'Add New Device' || $title == 'List Device' || $title == 'List Connected Device' || $title == 'History of Connected Device' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <span
                                    class="pt-2 -mr-1 font-medium font-nobile {{ $title == 'Device' || $title == 'Add New Device' || $title == 'List Device' || $title == 'List Connected Device' || $title == 'History of Connected Device' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">Devices</span>
                            </div>

                            <div id="dropdownRightDevices" class="z-10 hidden bg-white rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownRightButton">
                                    <li>
                                        <a href="{{ route('adminAddNewDevice') }}"
                                            class="block px-4 py-2 {{ $title == 'Add New Device' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">Add
                                            New Device</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listDevice') }}"
                                            class="block px-4 py-2 {{ $title == 'List Device' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">List
                                            Device</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listConnectedDevice') }}"
                                            class="block px-4 py-2 {{ $title == 'List Connected Device' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">Connected
                                            Device</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('historyConnectedDevice') }}"
                                            class="block px-4 py-2 {{ $title == 'History of Connected Device' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">History
                                            of Connected Device</a>
                                    </li>
                                </ul>
                            </div>
                        </button>
                    </li>
                    @auth
                        @if (Auth::user()->role_id != 1)
                        @else
                            <li class="">
                                <button id="dropdownRightButton" data-dropdown-toggle="dropdownRightNurses"
                                    data-dropdown-placement="right">
                                    <div href="/addAdmin" aria-label="Add Nurses"
                                        class="relative flex items-center px-4 py-3 space-x-4 transition duration-500 ease-in-out delay-150 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-10 h-10 fill-current {{ $title == 'Add New Admin' || $title == 'List Admin' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                        </svg>

                                        <span
                                            class="pt-2 -mr-1 font-medium font-nobile {{ $title == 'Add New Admin' || $title == 'List Admin' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">Nurses</span>
                                    </div>

                                    <div id="dropdownRightNurses" class="z-10 hidden bg-white rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownRightButton">
                                            <li>
                                                <a href="/addAdmin"
                                                    class="block px-4 py-2 {{ $title == 'Add New Admin' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">Add
                                                    New Admin</a>
                                            </li>
                                            <li>
                                                <a href="/adminList"
                                                    class="block px-4 py-2 {{ $title == 'List Admin' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">Admin
                                                    List</a>
                                            </li>
                                        </ul>
                                    </div>
                                </button>
                            </li>
                        @endif
                    @endauth
                </ul>
            </nav>

            <div class="flex items-center justify-between px-6 pt-4 -mx-6 border-t">
                <button type="button" data-modal-toggle="popup-modal"
                    class="flex items-center px-4 py-3 space-x-4 transition duration-500 ease-in-out rounded-md group text-slate-200 {{ ($title = 'Device') ? 'active' : 'hover:bg-red-500' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="group-hover:text-white">Logout</span>
                </button>
            </div>
        </aside>
        <!-- Sidebar section end -->
        <aside id="sidebar" class="relative z-50 hidden navbar-menu">
            <div class="fixed inset-0 opacity-25 navbar-backdrop bg-darkblue"></div>
            <nav
                class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm px-6 py-6 overflow-y-auto border-r bg-darkblue">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="#">
                        <img src="{{ asset ('image/mainLogo.png') }}" class=" w-24 h-24" alt="Permata Indah logo" />
                    </a>
                    <button class="navbar-close">
                        <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="">
                            <a href="/dashboard" aria-label="dashboard"
                                class="relative flex items-center px-4 py-3 space-x-4 transition duration-500 ease-in-out delay-150 group hover:translate-x-1 hover:bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                    height="40" class="fill-current {{ $title == 'Dashboard' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M39.5,43h-9c-1.381,0-2.5-1.119-2.5-2.5v-9c0-1.105-0.895-2-2-2h-4c-1.105,0-2,0.895-2,2v9c0,1.381-1.119,2.5-2.5,2.5h-9	C7.119,43,6,41.881,6,40.5V21.413c0-2.299,1.054-4.471,2.859-5.893L23.071,4.321c0.545-0.428,1.313-0.428,1.857,0L39.142,15.52	C40.947,16.942,42,19.113,42,21.411V40.5C42,41.881,40.881,43,39.5,43z">
                                    </path>
                                </svg>
                                <span
                                    class="pt-2 -mr-1 font-medium font-nobile {{ $title == 'Dashboard' ? 'text-softgreen group-hover:text-cyan-600' : 'text-slate-200 group-hover:text-slate-400' }}">Dashboard</span>
                            </a>
                        </li>
                        <li class="ml-1">
                            <a href="devices.html" aria-label="dashboard"
                                class="relative flex items-center px-4 py-3 space-x-4 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" width="40" height="40"
                                    class="text-slate-200 group-hover:text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <span
                                    class="pt-2 -mr-1 font-medium font-nobile text-slate-200 group-hover:text-slate-400">Devices</span>
                            </a>
                        </li>
                        <li class="ml-2">
                            <a href="tools.html" aria-label="dashboard"
                                class="relative flex items-center px-4 py-3 space-x-4 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" width="35" height="35"
                                    class="text-slate-200 group-hover:text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>

                                <span
                                    class="pt-2 -mr-1 font-medium font-nobile text-slate-200 group-hover:text-slate-400">Nurses</span>
                            </a>
                        </li>
                    </ul>
                    <div class="items-center px-6 -mx-6 border-t mt-60">
                        <button data-modal-target="popup-modal"
                            class="flex items-center px-4 py-3 space-x-4 transition duration-500 ease-in-out rounded-md group text-slate-200 hover:bg-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span class="group-hover:text-white">Logout</span>
                        </button>
                    </div>
                </div>
            </nav>
        </aside>
        <!-- Content section start -->
        <section class="ml-auto bg-darkblue lg:w-[75%] xl:w-[80%] 2xl:w-[85%] 2xl:h-full">
            <div class="top-0 z-10 h-4"></div>
            <div class="bg-slate-50 h-full rounded-t-[50px]">
                <!-- Content section start -->
                <div class="ml-auto lg:w-full">
                    <div class="">
                        <div class="px-5 pt-5 mx-auto lg:px-10">
                            <div
                                class="flex justify-between w-11/12 h-20 mb-5 rounded-full lg:w-full lg:h-14 bg-slate-200">
                                <p class="pl-4 font-semibold text-left uppercase font-poppins lg:pt-4 pt-7">
                                    permata indah hospital
                                </p>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        class="w-10 h-8 mt-6 fill-current lg:mt-3 lg:w-32 2xl:w-28 text-slate-600"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M 12 2 C 11.172 2 10.5 2.672 10.5 3.5 L 10.5 4.1953125 C 7.9131836 4.862095 6 7.2048001 6 10 L 6 16 L 4.4648438 17.15625 L 4.4628906 17.15625 A 1 1 0 0 0 4 18 A 1 1 0 0 0 5 19 L 12 19 L 19 19 A 1 1 0 0 0 20 18 A 1 1 0 0 0 19.537109 17.15625 L 18 16 L 18 10 C 18 7.2048001 16.086816 4.862095 13.5 4.1953125 L 13.5 3.5 C 13.5 2.672 12.828 2 12 2 z M 10 20 C 10 21.1 10.9 22 12 22 C 13.1 22 14 21.1 14 20 L 10 20 z">
                                        </path>
                                    </svg>
                                    <img src="{{ asset('image/1st.png') }}"
                                        class="w-6 h-6 mt-5 lg:mt-2 -ml-5 lg:-ml-8 xl:-ml-8 2xl:-ml-[22px] lg:mr-5 mr-1"
                                        alt="notification logo" />
                                    <img src="{{ asset('image/avatar.jpeg') }}" alt="Avatar User"
                                        class="hidden object-cover w-8 h-8 mt-6 rounded-full md:flex lg:mt-3" />
                                    <p class="pt-6 ml-2 mr-4 font-semibold text-left uppercase font-poppins lg:pt-4">
                                        @auth
                                            @if (Auth::user()->role_id != 1)
                                                {{ auth()->user()->admin->first_name }}
                                            @else
                                                Super Admin
                                            @endif
                                        @endauth
                                    </p>
                                    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
                                        <div class="z-10 top-0 h-16 lg:pt-2.5">
                                            <div
                                                class="flex items-center justify-between px-2 space-x-4 2xl:container">
                                                <div class="lg:hidden">
                                                    <button class="flex items-center py-3 text-blue-600 navbar-burger">
                                                        <svg class="absolute block w-8 h-8 mt-12 fill-current right-7"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Mobile menu</title>
                                                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap">
                                @yield('container')
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="popup-modal"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                            data-modal-toggle="popup-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                Yakin ingin keluar?
                            </h3>
                            <div class="p-6 text-center flex flex-col md:flex-row md:items-center md:justify-center">
                                @auth
                                    @if (Auth::user()->role_id != 1)
                                        <form id="logout-form" action="/logout" method="post">
                                            @csrf
                                            <button data-modal-toggle="popup-modal"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Ya, Saya Yakin
                                            </button>
                                        </form>
                                    @else
                                        <form id="logout-form" action="/logoutSuperAdmin" method="post">
                                            @csrf
                                            <button data-modal-toggle="popup-modal"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Ya, Saya Yakin
                                            </button>
                                        </form>
                                    @endif
                                @endauth
                                <button data-modal-toggle="popup-modal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                    Tidak
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!-- sidebar section start -->

    <!-- Content section end -->

    <!-- component -->
</body>

<!-- Script section -->
<script src="{{ asset('js/script.js') }}"></script>

<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script>
    AOS.init();
</script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />

</html>
