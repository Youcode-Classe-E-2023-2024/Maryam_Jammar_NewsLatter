<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">

<div class="flex ">
    @include('redacteur.side')

    <div class="mx-auto w-full relative flex min-h-screen flex-col justify-center overflow-hidden py-6 sm:py-12">
        <main>
            <!-- component -->
            <div class="bg-white p-8 rounded-md">
                <div class=" flex items-center justify-between pb-6 w-3/4 mx-auto">
                    <div>
                        <h2 class="text-gray-600 font-semibold">Subscribers</h2>
                        <span class="text-xs">All members</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex bg-gray-50 items-center p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <input class="bg-gray-50 outline-none ml-1 block " type="text" name="" id=""
                                   placeholder="search...">
                        </div>

                    </div>
                </div>
                <div class="w-3/4 mx-auto">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal text-center">
                                <thead class="text-center">
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                @foreach($subscribers as $subscriber)
                                    <tbody>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$subscriber->email}}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                              class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
									<span class="relative">{{$subscriber->status}}</span>
									</span>
                                        </td>
                                    </tr>
                                    </tbody>

                                @endforeach
                            </table>
                            <div class="flex-col justify-between items-center mt-8 p-4">
                                {{ $subscribers->links() }}
                            </div>

                        </div>
                    </div>
                </div>


                {{--unsubscribers--}}
                <div class="w-3/4 mx-auto">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal text-center">
                                <thead class="text-center">
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                @foreach($unsubscribers as $unsubscriber)
                                    <tbody>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$unsubscriber->email}}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
			<span
                                        class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden
                                              class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
									<span class="relative">{{$unsubscriber->status}}</span>
									</span>
                                        </td>
                                    </tr>
                                    </tbody>

                                @endforeach
                            </table>
                            <div class="flex-col justify-between items-center mt-8 p-4">
                                {{ $unsubscribers->links() }}
                            </div>

                        </div>
                    </div>
                </div>


        </main>
        <p class="text-center text-sm text-gray-500 my-10">
            &copy;<?php echo date("Y"); ?>. All rights
            reserved.
        </p>
					
    </div>

</div>
