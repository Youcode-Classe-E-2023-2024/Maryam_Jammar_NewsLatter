<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">

<div class="flex ">
    @include('redacteur.side')
    <!-- component -->
    <div class="py-12 mx-auto">
        <div class="w-full max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white rounded-lg border-b border-gray-200">
                    <h3 class="font-medium text-lg text-center mb-4">Create a template</h3>
                    <form id="templateForm" method="POST" action="/createTemplate">
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label><br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label><br>
                            <textarea name="content" class="border-2 border-gray-500" required></textarea>
                        </div>

                        <div class="flex justify-between p-1">
                            <div>
                                <select id="statusSelect" class="border-2 border-gray-300 border-r p-2" name="status">
                                    <option value="published" onclick="submitForm('/send')">Save and Publish</option>
                                    <option value="unpublished">Save Draft</option>
                                </select>

                                <button type="submit" id="submitButton" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>
                                    Submit
                                </button>
                            </div>
                            <div>
                                <select class="border-2 border-gray-300 border-r p-2" name="media">
                                    @foreach($medias as $media)
                                        @foreach($media['media'] as $image)
                                            <option value="{{ $image->id }}">
                                                <img src="{{asset("storage/$image->id/$image->file_name")}}" alt="">
                                                {{ $image->file_name }}
                                            </option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('content');
    </script>
    <script>
        function submitForm(url) {
            var form = document.getElementById('templateForm');
            form.action = url;
            form.submit();
        }
    </script>

</div>


