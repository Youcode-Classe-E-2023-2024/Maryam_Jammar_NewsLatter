@include('admin.side')
<div class="flex overflow-hidden bg-white">
    <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
        <main>
            <section class="p-6 pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-[#F3F4F6]">
                <div class="container">
                    <div class="flex flex-wrap mx-auto  -mx-4">
                        @foreach($templates as $template)
                            <div class="w-full py-1 md:w-1/2 xl:w-1/3 shadow-md rounded-lg mb-6">
                                <div class="px-3 bg-white rounded-lg overflow-hidden ">
                                    <img
                                        src="https://cdn.tailgrids.com/1.0/assets/images/cards/card-01/image-01.jpg"
                                        alt="image"
                                        class="w-full"
                                    />
                                    <div class=" sm:p-9 md:p-7 xl:p-9 text-center">
                                        <h3 class="
                            font-semibold
                            text-dark text-xl
                            sm:text-[22px]
                            md:text-xl
                            lg:text-[22px]
                            xl:text-xl
                            2xl:text-[22px]
                            mb-4
                            block
                            hover:text-primary
                            ">
                                            {{$template->title}}
                                        </h3>
                                        <p class="text-base text-body-color leading-relaxed mb-7">
                                            {{$content = substr($template->content, 1, 40)}}

                                        </p>
                                        <div>
                                            Status: {{$template->status}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div>
                        {{$templates->links()}}
                    </div>

                </div>
            </section>
        </main>
        <p class="text-center text-sm text-gray-500 my-10">
            &copy;<?php echo date("Y"); ?>. All rights
            reserved.
        </p>

    </div>
</div>
