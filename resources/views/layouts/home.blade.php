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
                        <a href="/" aria-label="dashboard"
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
                        <a href="#" aria-label="dashboard"
                            class="relative flex items-center px-4 py-3 space-x-4 group"
                            data-modal-toggle="defaultModal">
                            <svg class="h-10 w-10 text-white {{ $title == 'Dashboard' ? 'text-slate-200 group-hover:text-slate-400' : 'text-softgreen group-hover:text-cyan-600' }}"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="16" x2="12" y2="12" />
                                <line x1="12" y1="8" x2="12.01" y2="8" />
                            </svg>
                            <span
                                class="pt-2 -mr-1 font-medium font-nobile {{ $title == 'Dashboard' ? 'text-slate-200 group-hover:text-slate-400' : 'text-softgreen group-hover:text-cyan-600' }}">
                                About
                            </span>
                        </a>
                    </li>
                </ul>
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
                                    <a href="/login"
                                        class="pt-6 ml-2 font-semibold text-left uppercase font-poppins lg:pt-4">
                                        LOGIN
                                    </a>
                                    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
                                        <div class="z-10 top-0 h-16 lg:pt-2.5">
                                            <div class="flex items-center justify-between px-2 space-x-4 2xl:container">
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
            {{-- Modal --}}
            <div id="defaultModal" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full border-10 border-[#000C66]">
                <div class="relative w-full max-w-2xl max-h-full border-10 border-[#000C66] border-solid">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-2xl shadow ">
                        <!-- Modal header -->
                        <div class="p-4 border-b rounded-t-2xl bg-[#000C66] border:border-[#000C66]">
                            <h3 class="text-xl font-semibold text-white text-center">
                                Permata Indah Hospital
                            </h3>
                        </div>

                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p
                                class="text-base leading-relaxed text-justify text-black first-letter:text-7xl first-letter:font-bold indent-8">
                                Permata Indah Hospital is a medical facility located in the bustling city of Yogyakarta.
                                The hospital is renowned for its high-quality services and complete modern facilities.
                                With skilled and experienced medical teams, the hospital provides a wide range of
                                healthcare services, from general care to specialized treatments in various fields.
                                Patients at Permata Indah Hospital can feel at ease with its clean and organized
                                environment, as well as the use of state-of-the-art medical equipment for diagnosis and
                                treatment. Additionally, the hospital offers convenience for patients' families with
                                spacious waiting areas, a cafeteria, and adequate parking facilities.

                            </p>
                            <p class="text-base text-justify leading-relaxed text-black indent-8">
                                In addition to excellent healthcare services, Permata Indah Hospital is also known for
                                its humanistic approach and the care provided to patients. Each patient is accompanied
                                by a compassionate and empathetic medical team, ensuring they feel heard and respected
                                throughout their treatment journey. The hospital also utilizes advanced information
                                technology to ensure digital availability of patients' medical records, facilitating
                                access and management of health information. In terms of security, Permata Indah
                                Hospital has strict security systems in place to safeguard patient confidentiality and
                                privacy. With its comprehensive facilities and values, Permata Indah Hospital has become
                                the preferred choice for many individuals seeking the best healthcare in Yogyakarta.
                            </p>
                        </div>
                        <div
                            class="flex justify-center items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="defaultModal" type="button"
                                class="bg-[#75E6DA] hover:bg-[#75E6DA] text-white font-bold py-2 px-4 rounded-full">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
