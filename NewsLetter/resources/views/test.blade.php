<a
    role="menuitem"
    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</a>

<!-- -->

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
<title>Inscription en attente</title>

<!-- component -->
<div id="button" class="hidden container mx-auto flex justify-center items-center px-4 md:px-10 py-20">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <button onclick="openModal()" class="bg-white text-gray-800 py-5 px-10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white rounded">Open Modal</button>
</div>
<div id="modal" class="container mx-auto flex justify-center items-center px-4 md:px-10 py-20">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <div class="bg-white dark:bg-gray-800 px-3 md:px-4 py-12 flex flex-col justify-center items-center">

        <h3 class="mt-8 md:mt-12 text-3xl lg:text-4xl font-semibold leading-10 text-center text-gray-800 text-center md:w-9/12 lg:w-7/12 dark:text-white">Merci de vous être inscrit!</h3>
        <h3 class="mt-8 md:mt-12 text-2xl lg:text-2xl font-semibold leading-10 text-center text-gray-800 text-center md:w-9/12 lg:w-7/12 dark:text-white">Votre inscription est en attente de validation</h3>
        <p class="mt-10 text-base leading-normal text-center text-gray-600 md:w-9/12 lg:w-7/12 dark:text-white">A confirmation email has been sent to your account, johndoe@gmail.com, with the details of shipping and delivery.</p>
        <div class="mt-12 md:mt-14 w-full flex justify-center">
            <a  href="/" class="dark:text-white dark:border-white w-full sm:w-auto border border-gray-800 text-base font-medium text-gray-800 py-5 px-14 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-800 hover:text-white dark:hover:text-white dark:hover:bg-gray-700">Back to Home page</a>
        </div>
    </div>
</div>
