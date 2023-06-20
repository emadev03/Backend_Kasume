<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sifis | Login Super Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nobile:wght@400;500;700&family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

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
    <link rel="icon" href="image/mainLogoBg.png" type="image/gif" sizes="5x5" />
</head>

<body style="background-image: url(image/1-ori.jpeg)"
    class="w-full h-full border border-gray-100 rounded-md sm:bg-cover sm:bg-no-repeat">
    <div class="relative py-16 before:absolute before:inset-0 before:w-full before:h-[50%] before:bg-darkblue">
        <div class="container relative px-6 m-auto text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto space-y-8 md:w-8/12 lg:w-full">
                <div>
                    <img src="image/mainLogo.png" loading="lazy" class="w-32 h-32 ml-10 lg:hidden"
                        alt="Permata indah logo" />
                    <p class="text-xl text-white uppercase font-poppins lg:hidden">
                        Permata Indah Hospital
                    </p>
                </div>
                <div class="rounded-xl border bg-opacity-50 backdrop-blur-sm bg-[#373737] shadow-xl">
                    <div class="lg:grid lg:grid-cols-2">
                        <div class="rounded-lg lg:block" hidden>
                            <img src="image/loginPoster2.png" class="object-cover rounded-l-xl" loading="lazy"
                                alt="background Login" />
                        </div>
                        <div class="p-6 sm:p-16">
                            <h2 class="mb-8 text-xl font-bold text-white capitalize">
                                Fill your personal information here:
                            </h2>
                            <form action="/superAdminLogin" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="nip" class="text-white">NIP</label>
                                    </div>
                                    <input type="number" name="nip" id="nip" placeholder="1234567891"
                                        class="block w-full px-4 py-3 text-gray-600 transition duration-300 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                        value="{{ old('nip') }}" required />
                                    @error('nip')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="password" class="text-white">Password</label>
                                    </div>
                                    <input type="password" name="password" id="password" placeholder="**********"
                                        class="block w-full px-4 py-3 text-gray-600 transition duration-300 border border-gray-300 rounded-md focus:ring-2 focus:ring-softblue focus:outline-none invalid:ring-2 invalid:ring-red-400"
                                        required />
                                    @error('password')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button id="submitNurse"
                                    class="w-full px-6 py-3 rounded-md bg-softgreen text-slate-700 active:text-white active:bg-darkblue"
                                    type="submit">
                                    <span class="font-bold font-nobile">Login</span>
                                </button>
                            </form>
                            <div class="mt-20 space-x-4 font-bold text-center text-gray-300 font-inter">
                                <span>&copy; Sifis</span>
                                <a href="#" class="text-sm hover:text-white">Contact</a>
                                <a href="#" class="text-sm hover:text-white">Privacy & Terms</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
