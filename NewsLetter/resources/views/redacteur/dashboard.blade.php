<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
<div class="flex">
    @include('redacteur.side')

    <div class="bg-gray-500 h-full font-sans leading-normal my-auto rounded-lg shadow-2xl tracking-normal mx-auto">
        <div class="flex justify-center">
            <div class="bg-white rounded-lg profile-card w-96 p-6">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center mx-auto">
                        <span class="text-2xl ml-2 text-lg font-bold text-gray-800">Welcome Editor !</span>
                    </div>

                </div>
                <div class="flex justify-center mb-6">
                    <img src="https://unsplash.it/64/64" alt="Profile"
                         class="rounded-full border-2 border-blue-700 p-1">
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-xl font-semibold">Arthur Taylor</h2>
                    <p class="text-gray-600">Lorem Ipsum Neque porro quisquam
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    {{--    <main class="flex-1">--}}
    {{--        <!-- component -->--}}
    {{--        <div class="py-12">--}}
    {{--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
    {{--                    <div class="p-6 bg-white border-b border-gray-200">--}}
    {{--                        <form method="POST" action="action.php">--}}
    {{--                            <div class="mb-4">--}}
    {{--                                <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>--}}
    {{--                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>--}}
    {{--                            </div>--}}

    {{--                            <div class="mb-4">--}}
    {{--                                <label class="text-xl text-gray-600">Description</label></br>--}}
    {{--                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" placeholder="(Optional)">--}}
    {{--                            </div>--}}

    {{--                            <div class="mb-8">--}}
    {{--                                <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>--}}
    {{--                                <textarea name="content" class="border-2 border-gray-500">--}}

    {{--                            </textarea>--}}
    {{--                            </div>--}}

    {{--                            <div class="flex p-1">--}}
    {{--                                <select class="border-2 border-gray-300 border-r p-2" name="action">--}}
    {{--                                    <option>Save and Publish</option>--}}
    {{--                                    <option>Save Draft</option>--}}
    {{--                                </select>--}}
    {{--                                <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>--}}

    {{--        <script>--}}
    {{--            CKEDITOR.replace( 'content' );--}}
    {{--        </script>        </main>--}}

</div>
