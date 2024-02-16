<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
<div class="flex">
    @include('redacteur.side')

    <!-- component -->
    <body class="">
    <div class="w-2/6 mx-auto my-36 bg-white rounded-lg shadow-xl p-5">
        <div class="grid gap-8 grid-cols-1">
            <form action="/updateProfile/{{Auth::user()->id}}" method="post">
                @csrf
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        {{--                    <h2 class="font-semibold text-lg mr-auto">Shop Info</h2>--}}
                        <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                    </div>
                    <img class="w-24 h-24 rounded-full mx-auto" src="{{ Auth::user()->picture }}" alt="Profile picture">

                    <div class="mt-5">
                        <div class="form">
                            <div class="text-center md:space-y-2 mb-3">
                                <label class="text-xs  font-semibold text-gray-600 py-2">Update your profile <abbr
                                        class="hidden" title="required">*</abbr></label>
                                <div class="flex items-center justify-center py-6">
                                    <label class="cursor-pointer ">
                                        <span
                                            class="text-center focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-400 hover:bg-blue-500 hover:shadow-lg">Browse</span>
                                        <input name="picture" type="file" class="hidden text-center"
                                               :multiple="multiple" :accept="accept">
                                    </label>
                                </div>
                            </div>
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2">Your Name <abbr
                                            title="required">*</abbr></label>
                                    <input value="{{ Auth::user()->name }}" placeholder="Name"
                                           class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                           required="required" type="text" name="name" id="integration_shop_name">
                                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                                </div>
                                {{--                            <div class="mb-3 space-y-2 w-full text-xs">--}}
                                {{--                                <label class="font-semibold text-gray-600 py-2">Your  Role <abbr title="required">*</abbr></label>--}}
                                {{--                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">--}}
                                {{--                                <p class="text-red text-xs hidden">Please fill out this field.</p>--}}
                                {{--                            </div>--}}
                            </div>
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label class=" font-semibold text-gray-600 py-2">Your Email</label>
                                <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                                    <input value="{{ Auth::user()->email }}" name="email" type="email"
                                           class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border  h-10 border-grey-light rounded-lg px-3 relative focus:border-blue focus:shadow"
                                           placeholder="email@gmail.com">
                                </div>
                            </div>
                            <div class="mt-5 text-center md:space-x-3 md:block flex flex-col-reverse">
                                <a href="/redacteur"
                                   class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                    Cancel </a>
                                <button type="submit"
                                        class="mb-2 md:mb-0 bg-blue-300 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </body>
</div>
