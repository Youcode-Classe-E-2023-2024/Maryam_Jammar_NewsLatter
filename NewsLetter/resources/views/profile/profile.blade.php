@include('admin.side')
<div class="flex overflow-hidden bg-white">
    <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
        <main>
            <!-- component -->
            <div
                class="px-8 h-full flex flex-col">
                <div class="bg-green-300 shadow-lg pb-3 top-0 rounded-b-3xl">
                    <div
                        class="flex  rounded-b-3xl bg-gray-100 dark:bg-gray-700 space-y-5 flex-col items-center py-7">
                        <img class="h-28 w-28 rounded-full"
                             src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe"
                             alt="User">
                        <a href="#"> <span
                                class="text-h1">Michele</span></a>
                    </div>
                    <div
                        class="grid px-7 py-2  items-center justify-around grid-cols-3 gap-4 divide-x divide-solid ">
                        <div class="col-span-1 flex flex-col items-center ">
                            <span class="text-2xl font-bold dark:text-gray-500">4</span>
                            <span class="text-lg font-medium 0">My templates</span>
                        </div>
                        <div class="col-span-1 px-3 flex flex-col items-center ">
                                                        <span class="text-2xl font-bold dark:text-gray-500">
                                                           Free</span>
                            <span class="text-lg font-medium">Plan</span>
                        </div>
                        <div class="col-span-1 px-3 flex flex-col items-center ">
                                                        <span class="text-2xl font-bold dark:text-gray-500">
                                                            546</span>
                            <span class="text-lg font-medium">My media</span>
                        </div>
                    </div>

                </div>

                <div
                    class="grid rounded-2xl divide-y divide-dashed hover:divide-solid  justify-evenly bg-gray-50 dark:bg-gray-300 m-3 mt-10 grid-cols-3">
                    <div class="col-span-1  p-3">
                        <div class="flex flex-col items-center ">
                            <a href="">
                                <button
                                    class="tr-300">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-14 w-14 text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="text-lg font-medium">Mi Perfil</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-1  p-3">
                        <div class="flex flex-col items-center ">
                            <a href="">
                                <button
                                    class="tr-300">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-14 w-14 text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                    </svg>
                                    <span class="text-lg font-medium">Mis dinero</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-1  p-3">
                        <div class="flex flex-col items-center ">
                            <a href="">
                                <button
                                    class="tr-300">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-14 w-14 text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                                    </svg>
                                    <span class="text-lg font-medium">Mis referidos</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-1  p-3">
                        <div class="flex flex-col items-center ">
                            <a href="">
                                <button class="tr-300">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-14 w-14 text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    <span class="text-lg font-medium">Mis facturas</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-1  p-3">
                        <div class="flex flex-col items-center ">
                            <a href="">
                                <button class="tr-300">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-14 w-14 text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-lg font-medium">Ayuda</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-1 bg-red-50 p-3">
                        <div class="flex  flex-col items-center ">
                            <a href="">
                                <button class="tr-300">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-14 w-14 text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    <span class="text-lg font-medium">Salir</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex mx-auto mt-3 w-100 ">
                    <a href="">
                        <button
                            class="p-2 shadow-lg rounded-2xl tr-300 w-100 font-medium  bg-green-500 rounded-md hover:bg-green-600 text-gray-50">
                            Mejorar
                            membresía
                        </button>
                    </a>
                </div>
            </div>
        </main>
        <p class="text-center text-sm text-gray-500 my-10">
            &copy;<?php echo date("Y"); ?>. All rights
            reserved.
        </p>

    </div>
</div>
