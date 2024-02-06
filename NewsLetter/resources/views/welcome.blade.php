<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body>
<!-- component -->

<main>
    <section class="bg-white dark:bg-gray-900">
        <nav x-data="{ isOpen: false }" class="container mx-auto p-6 lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-2xl font-bold text-gray-800 hover:text-gray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl"
                       href="#">Brand</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button"
                            class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none dark:text-gray-200 dark:hover:text-gray-400 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16"/>
                        </svg>

                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                 class="absolute inset-x-0 z-20 w-full bg-white px-6 py-4 shadow-md transition-all duration-300 ease-in-out dark:bg-gray-900 lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none lg:dark:bg-transparent">
                <div class="lg:-px-8 flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
                    <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                       href="#">Home</a>
                    <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                       href="#">Components</a>
                    <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                       href="#">Pricing</a>
                    <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                       href="#">Contact</a>
                </div>

                <a class="mt-4 block rounded-lg bg-blue-600 px-6 py-2.5 text-center font-medium capitalize leading-5 text-white hover:bg-blue-500 lg:mt-0 lg:w-auto"
                   href="{{route('register')}}"> Get started </a>
            </div>
        </nav>

        <div class="container mx-auto px-6 py-16 text-center">
            <div class="mx-auto max-w-lg">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white lg:text-4xl">Building Your Next App with our
                    Awesome components</h1>
                <p class="mt-6 text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Libero similique obcaecati illum mollitia.</p>
                <button
                    class="mt-6 rounded-lg bg-blue-600 px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 text-white hover:bg-blue-500 focus:outline-none lg:mx-0 lg:w-auto">
                    Start 14-Day free trial
                </button>
                <p class="mt-3 text-sm text-gray-400">No credit card required</p>
            </div>

            <div class="mt-10 flex justify-center">
                <img class="h-96 w-full rounded-xl object-cover lg:w-4/5"
                     src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80"/>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-10">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">
                Portfolio</h1>

            <p class="mt-4 text-center text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Nostrum quam voluptatibus</p>

            <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-12 xl:grid-cols-3 xl:gap-12">
                <div>
                    <img class="h-96 w-full rounded-lg object-cover"
                         src="https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80"
                         alt=""/>
                    <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Best website
                        collections</h2>
                    <p class="mt-2 text-lg uppercase tracking-wider text-blue-500 dark:text-blue-400">Website</p>
                </div>

                <div>
                    <img class="h-96 w-full rounded-lg object-cover"
                         src="https://images.unsplash.com/photo-1621609764180-2ca554a9d6f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                         alt=""/>
                    <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Block of Ui kit
                        collections</h2>
                    <p class="mt-2 text-lg uppercase tracking-wider text-blue-500 dark:text-blue-400">Ui kit</p>
                </div>

                <div>
                    <img class="h-96 w-full rounded-lg object-cover"
                         src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                         alt=""/>
                    <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Ton’s of mobile
                        mockup</h2>
                    <p class="mt-2 text-lg uppercase tracking-wider text-blue-500 dark:text-blue-400">Mockups</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900 mt-12">
        <div class="h-[32rem] bg-gray-100 pb-36 dark:bg-gray-800 mb-36">
            <div class="container mx-auto px-6 py-10">
                <h1 class="text-center justify-content-lg-start-start text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">
                    The
                    Executive Team</h1>

                <div class="mx-auto mt-6 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
                </div>

                <p class="mx-auto mt-6 max-w-2xl text-center text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci
                    rem similique, at omnis eligendi optio eos harum.</p>
            </div>
        </div>

        <div class="container mx-auto -mt-72 px-6 py-10 sm:-mt-80 md:-mt-96">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-16 xl:grid-cols-3">
                <div class="flex flex-col items-center rounded-xl border p-4 dark:border-gray-700 sm:p-6">
                    <img class="aspect-square w-full rounded-xl object-cover"
                         src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                         alt=""/>

                    <h1 class="mt-4 text-2xl font-semibold capitalize text-gray-700 dark:text-white">arthur melo</h1>

                    <p class="mt-2 capitalize text-gray-500 dark:text-gray-300">design director</p>

                    <div class="-mx-2 mt-3 flex">
                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Reddit">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z"></path>
                            </svg>
                        </a>

                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Facebook">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"></path>
                            </svg>
                        </a>

                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Github">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col items-center rounded-xl border p-4 dark:border-gray-700 sm:p-6">
                    <img class="aspect-square w-full rounded-xl object-cover"
                         src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                         alt=""/>

                    <h1 class="mt-4 text-2xl font-semibold capitalize text-gray-700 dark:text-white">Pamela
                        Anderson</h1>

                    <p class="mt-2 capitalize text-gray-500 dark:text-gray-300">Lead Developer</p>

                    <div class="-mx-2 mt-3 flex">
                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Reddit">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z"></path>
                            </svg>
                        </a>

                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Facebook">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"></path>
                            </svg>
                        </a>

                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Github">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col items-center rounded-xl border p-4 dark:border-gray-700 sm:p-6">
                    <img class="aspect-square w-full rounded-xl object-cover"
                         src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                         alt=""/>

                    <h1 class="mt-4 text-2xl font-semibold capitalize text-gray-700 dark:text-white">John Doe</h1>

                    <p class="mt-2 capitalize text-gray-500 dark:text-gray-300">Full stack developer</p>

                    <div class="-mx-2 mt-3 flex">
                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Reddit">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z"></path>
                            </svg>
                        </a>

                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Facebook">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"></path>
                            </svg>
                        </a>

                        <a href="#"
                           class="mx-2 text-gray-600 transition-colors duration-300 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-400"
                           aria-label="Github">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-10">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">What
                clients saying</h1>

            <div class="mx-auto mt-6 flex justify-center">
                <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
                <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
                <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
            </div>

            <div class="mx-auto mt-16 flex max-w-6xl items-start">
                <button
                    class="hidden rounded-full border p-2 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rtl:-scale-x-100 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <div>
                    <p class="flex items-center text-center text-gray-500 lg:mx-8">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Aperiam, quam. Odio voluptatem officiis eos illo! Pariatur, totam
                        alias. Beatae accusamus earum quos obcaecati minima molestias. Possimus minima dolores itaque!
                        Esse! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptates fugiat corrupti
                        laudantium dolores reiciendis pariatur esse quod nihil quia cupiditate debitis quisquam nemo,
                        accusamus animi explicabo? Architecto, unde laboriosam?</p>

                    <div class="mt-8 flex flex-col items-center justify-center">
                        <img class="h-14 w-14 rounded-full object-cover"
                             src="https://images.unsplash.com/photo-1499470932971-a90681ce8530?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                             alt=""/>

                        <div class="mt-4 text-center">
                            <h1 class="font-semibold text-gray-800 dark:text-white">Mia Brown</h1>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Marketer</span>
                        </div>
                    </div>
                </div>

                <button
                    class="hidden rounded-full border p-2 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rtl:-scale-x-100 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-10">
            <div class="text-center">
                <h1 class="text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">From the
                    blog</h1>

                <p class="mx-auto mt-4 max-w-lg text-gray-500">Salami mustard spice tea fridge authentic Chinese food
                    dish salt tasty liquor. Sweet savory foodtruck pie.</p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
                <div>
                    <div class="relative">
                        <img class="h-64 w-full rounded-lg object-cover object-center lg:h-80"
                             src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                             alt=""/>

                        <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
                            <img class="h-10 w-10 rounded-full object-cover object-center"
                                 src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                 alt=""/>

                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700 dark:text-gray-200">Tom Hank</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Creative Director</p>
                            </div>
                        </div>
                    </div>

                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">What do you want to know about
                        UI</h1>

                    <hr class="my-6 w-32 text-blue-500"/>

                    <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Blanditiis fugit dolorum amet dolores praesentium, alias nam? Tempore</p>

                    <a href="#" class="mt-4 inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                </div>

                <div>
                    <div class="relative">
                        <img class="h-64 w-full rounded-lg object-cover object-center lg:h-80"
                             src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                             alt=""/>

                        <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
                            <img class="h-10 w-10 rounded-full object-cover object-center"
                                 src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                 alt=""/>

                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700 dark:text-gray-200">arthur melo</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Creative Director</p>
                            </div>
                        </div>
                    </div>

                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">All the features you want to
                        know</h1>

                    <hr class="my-6 w-32 text-blue-500"/>

                    <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Blanditiis fugit dolorum amet dolores praesentium, alias nam? Tempore</p>

                    <a href="#" class="mt-4 inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                </div>

                <div>
                    <div class="relative">
                        <img class="h-64 w-full rounded-lg object-cover object-center lg:h-80"
                             src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
                             alt=""/>

                        <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
                            <img class="h-10 w-10 rounded-full object-cover object-center"
                                 src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                 alt=""/>

                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
                            </div>
                        </div>
                    </div>

                    <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">Which services you get from
                        Meraki UI</h1>

                    <hr class="my-6 w-32 text-blue-500"/>

                    <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Blanditiis fugit dolorum amet dolores praesentium, alias nam? Tempore</p>

                    <a href="#" class="mt-4 inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">Pricing
                Plan</h1>

            <p class="mx-auto mt-4 max-w-2xl text-center text-gray-500 dark:text-gray-300 xl:mt-6">Lorem ipsum, dolor
                sit amet consectetur adipisicing elit. Alias quas magni libero consequuntur voluptatum velit amet id
                repudiandae ea, deleniti laborum in neque eveniet.</p>

            <div class="mt-6 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:mt-12 xl:gap-12">
                <div class="w-full space-y-8 rounded-lg border border-gray-100 p-8 text-center dark:border-gray-700">
                    <p class="font-medium uppercase text-gray-500 dark:text-gray-300">Free</p>

                    <h2 class="text-5xl font-bold uppercase text-gray-800 dark:text-gray-100">$0</h2>

                    <p class="font-medium text-gray-500 dark:text-gray-300">Life time</p>

                    <button
                        class="mt-10 w-full transform rounded-md bg-blue-600 px-4 py-2 capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Start Now
                    </button>
                </div>

                <div class="w-full space-y-8 rounded-lg bg-blue-600 p-8 text-center">
                    <p class="font-medium uppercase text-gray-200">Premium</p>

                    <h2 class="text-5xl font-bold uppercase text-white dark:text-gray-100">$40</h2>

                    <p class="font-medium text-gray-200">Per month</p>

                    <button
                        class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-80">
                        Start Now
                    </button>
                </div>

                <div class="w-full space-y-8 rounded-lg border border-gray-100 p-8 text-center dark:border-gray-700">
                    <p class="font-medium uppercase text-gray-500 dark:text-gray-300">Enterprise</p>

                    <h2 class="text-5xl font-bold uppercase text-gray-800 dark:text-gray-100">$100</h2>

                    <p class="font-medium text-gray-500 dark:text-gray-300">Life time</p>

                    <button
                        class="mt-10 w-full transform rounded-md bg-blue-600 px-4 py-2 capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Start Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto max-w-4xl px-6 py-10">
            <h1 class="text-center text-4xl font-semibold text-gray-800 dark:text-white">Frequently asked questions</h1>

            <div class="mt-12 space-y-8">
                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">How i can play for my appoinment ?</h1>

                        <span class="rounded-full bg-gray-200 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"/>
                </svg>
            </span>
                    </button>

                    <hr class="border-gray-200 dark:border-gray-700"/>

                    <p class="p-8 text-sm text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum
                        laboriosam recusandae facere dolorum veniam quia pariatur obcaecati illo ducimus?</p>
                </div>

                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">Is the cost of the appoinment covered by
                            private health insurance?</h1>

                        <span class="rounded-full bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </span>
                    </button>
                </div>

                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">Do i need a referral?</h1>

                        <span class="rounded-full bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </span>
                    </button>
                </div>

                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">What are your opening house?</h1>

                        <span class="rounded-full bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </span>
                    </button>
                </div>

                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">What can i expect at my first
                            consultation?</h1>

                        <span class="rounded-full bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section
        class=" bg-gradient-to-r from-blue-600 via-blue-800 to-blue-900 dark:from-gray-700 dark:via-gray-800 dark:to-gray-900">
        <div class="container mx-auto flex flex-col px-6 py-12">
            <div class="flex-1 lg:-mx-6 lg:flex lg:items-center">
                <div class="text-white lg:mx-6 lg:w-1/2">
                    <h1 class="text-3xl w-5/6 font-semibold capitalize lg:text-5xl">Subscribe our newsletter to get
                        update.
                    </h1>


                </div>

                <div class="mt-8 lg:mx-6 lg:w-1/2">
                    <div
                        class="mx-auto w-full overflow-hidden rounded-xl bg-white px-8 py-10 shadow-2xl dark:bg-gray-900 lg:max-w-xl">
                        <h1 class="text-2xl font-medium text-gray-700 dark:text-gray-200">Create beautiful website
                            layout with Meraki UI.</h1>

                        <p class="mt-6 text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Libero similique obcaecati illum mollitia.</p>

                        <div
                            class="mx-auto mt-6 w-full max-w-sm rounded-md border bg-transparent focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 focus-within:ring-opacity-40 dark:border-gray-700 dark:focus-within:border-blue-300">
                            <form class="flex flex-col md:flex-row">
                                <input type="email" placeholder="Enter your email address"
                                       class="m-1 h-10 flex-1 appearance-none border-none bg-transparent px-4 py-2 text-gray-700 placeholder-gray-400 focus:placeholder-transparent focus:outline-none focus:ring-0 dark:text-gray-200"/>

                                <button type="button"
                                        class="m-1 h-10 transform rounded-md bg-blue-500 px-4 py-2 text-white transition-colors duration-300 hover:bg-blue-400 focus:bg-blue-400 focus:outline-none">
                                    Join Us
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-12">
            <div class="md:-mx-3 md:flex md:items-center md:justify-between">
                <h1 class="text-3xl font-semibold tracking-tight text-gray-800 dark:text-white md:mx-3 xl:text-4xl">
                    Subscribe our newsletter to get update.</h1>

                <div class="mt-6 shrink-0 md:mx-3 md:mt-0 md:w-auto">
                    <a href="#"
                       class="inline-flex w-full items-center justify-center rounded-lg bg-gray-800 px-4 py-2 text-sm text-white duration-300 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                        <span class="mx-2">Sign Up Now</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="mx-2 h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10"/>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                    <div class="mt-5 flex flex-col items-start space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Home</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Who
                            We Are</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Our
                            Philosophy</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Industries</p>

                    <div class="mt-5 flex flex-col items-start space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Retail
                            & E-Commerce</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Information
                            Technology</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Finance
                            & Insurance</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Services</p>

                    <div class="mt-5 flex flex-col items-start space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Translation</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Proofreading
                            & Editing</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Content
                            Creation</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Contact Us</p>

                    <div class="mt-5 flex flex-col items-start space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">+880
                            768 473 4978</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">info@merakiui.com</a>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10"/>

            <div class="flex flex-col items-center justify-between sm:flex-row">
                <a href="#"
                   class="text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300">Brand</a>

                <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">© Copyright 2021. All Rights
                    Reserved.</p>
            </div>
        </div>
    </footer>
</main>
</body>
</html>
