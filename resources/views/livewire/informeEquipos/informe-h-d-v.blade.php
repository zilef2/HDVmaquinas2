<x-slot name="header">
    <h2 class="font-semibold text-center text-lg text-gray-600 hover:text-indigo-700 leading-tight">
        {{ __('Hoja de vida de ') }} "equipo->nombre"
    </h2>
    <div class="mt-1 pt-1 w-auto">
        @if (session()->has('message'))
            <div class="bg-green-600 p-2">
                <div class="">
                    <p class="text-lg text-white text-center">
                        {{ session('message') }}
                    </p>
                </div>
            </div>
        @endif
    </div>
</x-slot>
<div class="flex flex-col items-center">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
                    href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation">Tailwind Starter Kit</a>
                <button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button"
                    onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div
                class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/landing"><i
                                class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>
                            Docs</a>
                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "></i><span class="lg:hidden inline-block ml-2">Share</span></a>
                    </li>
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "></i><span class="lg:hidden inline-block ml-2">Tweet</span></a>
                    </li>
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg "></i><span class="lg:hidden inline-block ml-2">Star</span></a>
                    </li>
                    <li class="flex items-center">
                        <button
                            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            type="button"
                            style="transition: all 0.15s ease 0s;">
                            <i class="fas fa-arrow-alt-circle-down"></i> Download
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                        <p class="text-lg leading-relaxed m-4 text-gray-600">
                            According to the National Oceanic and Atmospheric
                            Administration, Ted, Scambos, NSIDClead scentist, puts the
                            potentially record maximum.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img
                                alt="..."
                                src="./assets/img/team-1-800x800.jpg"
                                class="shadow-lg rounded-full max-w-full mx-auto"
                                style="max-width: 120px;"
                            />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Ryan Tompson</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Web Developer
                                </p>
                                <div class="mt-6">
                                    <button
                                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-twitter"></i></button>
                                    <button
                                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-facebook-f"></i></button>
                                    <button
                                        class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-dribbble"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img
                                alt="..."
                                src="./assets/img/team-2-800x800.jpg"
                                class="shadow-lg rounded-full max-w-full mx-auto"
                                style="max-width: 120px;"
                            />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Romina Hadid</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Marketing Specialist
                                </p>
                                <div class="mt-6">
                                    <button
                                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-google"></i></button>
                                    <button
                                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img
                                alt="..."
                                src="./assets/img/team-3-800x800.jpg"
                                class="shadow-lg rounded-full max-w-full mx-auto"
                                style="max-width: 120px;"
                            />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Alexa Smith</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    UI/UX Designer
                                </p>
                                <div class="mt-6">
                                    <button
                                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-google"></i></button>
                                    <button
                                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-twitter"></i></button>
                                    <button
                                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img
                                alt="..."
                                src="./assets/img/team-4-470x470.png"
                                class="shadow-lg rounded-full max-w-full mx-auto"
                                style="max-width: 120px;"
                            />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Jenna Kardi</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Founder and CEO
                                </p>
                                <div class="mt-6">
                                    <button
                                        class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-dribbble"></i></button>
                                    <button
                                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-google"></i></button>
                                    <button
                                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-twitter"></i></button>
                                    <button
                                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
