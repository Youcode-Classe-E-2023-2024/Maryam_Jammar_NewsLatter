<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">

<div class="flex ">
    @include('redacteur.side')

    <!-- component -->
    <div class="py-12 mx-auto">
        <div class="w-full max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white rounded-lg border-b border-gray-200">
                    <h3 class="font-medium text-lg text-center mb-4">Update template</h3>
                    <form method="POST" action="/updateTemplate/{{$template->id}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title"
                                   value="{{$template->title}}" required>
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span
                                    class="text-red-500">*</span></label></br>
                            <textarea name="content" class="border-2 border-gray-500">
                                {{$template->content}}
                            </textarea>
                        </div>

                        <div class="flex justify-between p-1">
                            <div>
                                <select class="border-2 border-gray-300 border-r p-2" name="status">
                                    <option value="published">Save and Publish</option>
                                    <option value="unpublished">Save Draft</option>
                                </select>
                                <button type="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>
                                    Submit
                                </button>
                            </div>

                            <input type="file">
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

</div>
