@include('admin.side')
<div class="flex overflow-hidden bg-white">
    <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
        <main>
            <!-- component -->
            <div class="mx-auto w-full relative flex flex-col overflow-hidden sm:py-12">
                <div class="max-w-screen-md mx-auto">
                    <div class="grid grid-cols-3 gap-6">
                        @foreach($medias as $media)
                            @foreach($media->getMedia() as $mediaItem)
                                <div class="group pb-24 relative overflow-hidden">
                                    <div
                                        class="group-hover:translate-y-0 transition-all duration-700 translate-y-full top-0 right-0 bottom-24 left-0 absolute bg-gradient-to-b from-transparent to-orange-600 z-10"></div>
                                    {{--<img src="{{ asset('storage/' . "$mediaItem->id/" . $mediaItem->file_name) }}" alt="Media Image">--}}
                                    @if(str_contains($mediaItem['mime_type'], "video"))
                                        <img src="https://img.freepik.com/free-vector/video-media-player-design_114579-839.jpg?t=st=1707920195~exp=1707920795~hmac=4344a5fa2c4d08a38446d0d47db0e2c16ecadc3fabf0e5c9fa52e5b9cd509df6" alt="{{ $mediaItem->name }}"
                                             class="transition-all group-hover:scale-125 duration-700 mr-4 h-60 w-auto"/>
                                    @else
                                        <img src="{{ asset('storage/' . "$mediaItem->id/" . $mediaItem->file_name) }}" alt="{{ $mediaItem->name }}"
                                             class="transition-all group-hover:scale-125 duration-700 mr-4 h-60 w-auto"/>
                                    @endif
                                    <div
                                        class="bg-orange-600 absolute z-10 bottom-0 left-0 w-full h-24 flex flex-col justify-center items-center">
                                        <div class="z-20 absolute -top-5 w-full flex justify-center">
                                            <form action="/deleteMedia/{{$mediaItem->id}}" method="post">
                                                @csrf
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                         stroke-width="1.5"
                                                         stroke="currentColor"
                                                         class="group-hover:bg-gray-700 group-hover:text-orange-600 group-hover:rotate-180 w-10 h-10 bg-black text-white p-2 rounded-full transition-all">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="delete">
                                                            <path
                                                                d="M24.2,12.193,23.8,24.3a3.988,3.988,0,0,1-4,3.857H12.2a3.988,3.988,0,0,1-4-3.853L7.8,12.193a1,1,0,0,1,2-.066l.4,12.11a2,2,0,0,0,2,1.923h7.6a2,2,0,0,0,2-1.927l.4-12.106a1,1,0,0,1,2,.066Zm1.323-4.029a1,1,0,0,1-1,1H7.478a1,1,0,0,1,0-2h3.1a1.276,1.276,0,0,0,1.273-1.148,2.991,2.991,0,0,1,2.984-2.694h2.33a2.991,2.991,0,0,1,2.984,2.694,1.276,1.276,0,0,0,1.273,1.148h3.1A1,1,0,0,1,25.522,8.164Zm-11.936-1h4.828a3.3,3.3,0,0,1-.255-.944,1,1,0,0,0-.994-.9h-2.33a1,1,0,0,0-.994.9A3.3,3.3,0,0,1,13.586,7.164Zm1.007,15.151V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Zm4.814,0V13.8a1,1,0,0,0-2,0v8.519a1,1,0,0,0,2,0Z"></path>
                                                        </svg>
                                                    </svg>
                                                </button>
                                            </form>

                                        </div>
                                        <div
                                            class="group-hover:hidden transition-all duration-1000 w-4 absolute overflow-hidden inline-block right-0 -top-6">
                                            <div class="h-6 bg-orange-900 -rotate-45 transform origin-bottom-right"></div>
                                        </div>
                                        <h2 class="font-bold pt-12">{{ $mediaItem->name }}</h2>
                                        <span class="text-black">{{ $mediaItem->mime_type }}</span>
                                        <span class="text-black mb-6">Created by: {{ $user[$media->user_id] }}</span>
                                        {{--                                <p class="text-base text-gray-400 font-normal">{{ $user[$media->user_id] }}</p>--}}
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
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
