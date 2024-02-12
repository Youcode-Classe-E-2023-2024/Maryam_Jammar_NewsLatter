<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">

<div class="flex">
    @include('redacteur.side')

    <div class="mx-auto w-full relative flex min-h-screen flex-col justify-center overflow-hidden py-6 sm:py-12">
        <div class="flex justify-end w-26">
            <button class="m-4 bg-gray-200 hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center">
                <svg class="w-4 h-4 mr-2 transform rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
                </svg>
                <span>Upload more..</span>
            </button>
        </div>

        <div class="max-w-screen-md mx-auto">
            <div class="grid grid-cols-3 gap-6">
                @foreach($medias as $media)
                    @foreach($media->getMedia() as $mediaItem)
                        <div class="group pb-24 relative overflow-hidden">
                            <div class="group-hover:translate-y-0 transition-all duration-700 translate-y-full top-0 right-0 bottom-24 left-0 absolute bg-gradient-to-b from-transparent to-orange-600 z-10"></div>
                            <img src="{{ $mediaItem->getUrl() }}" alt="{{ $mediaItem->name }}" class="transition-all group-hover:scale-125 duration-700 mr-4 h-60 w-auto"/>

                            <div class="bg-orange-600 absolute z-10 bottom-0 left-0 w-full h-24 flex flex-col justify-center items-center">
                                <div class="z-20 absolute -top-5 w-full flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="currentColor"
                                         class="group-hover:bg-gray-700 group-hover:text-orange-600 group-hover:rotate-180 w-10 h-10 bg-black text-white p-2 rounded-full transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="delete">
                                            <path
                                                d="M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z"></path>
                                        </svg>
                                    </svg>
                                </div>
                                <div class="group-hover:hidden transition-all duration-1000 w-4 absolute overflow-hidden inline-block right-0 -top-6">
                                    <div class="h-6 bg-orange-900 -rotate-45 transform origin-bottom-right"></div>
                                </div>
                                <h2 class="font-bold">{{ $mediaItem->file_name }}</h2>
                                <span class="text-black">{{ $mediaItem->mime_type }}</span>
                                <span class="text-black">Created by: {{ $media->user_id }}</span>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>

</div>
