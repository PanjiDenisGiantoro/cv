@extends('dashboard')
@section('content')

    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="flex flex-wrap justify-between">
                                <div class="items-center ">
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Profile</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Pages</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Profile</li>
                                    </ol>
                                </div><!--end /div-->
                                <div class="flex items-center">
                                    <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly  required="">
                                    </div>
                                </div><!--end /div-->
                            </div><!--end /div-->
                        </div><!--end /div-->
                    </div><!--end /div-->
                </div><!--end /div-->
            </div><!--end container-->

            <div class="xl:w-full  min-h-[calc(100vh-152px)] relative pb-14">
                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                            <div class="flex-auto p-0">
                                <img src="{{ asset('backend') }}/assets/images/widgets/bg-p.png" alt="" class="bg-cover bg-center h-48 w-fit rounded-md clip-path-bottom">
                            </div><!--end card-body-->
                            <div class="flex-auto p-4 pt-0">
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                        <div class="flex items-center relative -mt-[74px]">
                                            <div class="w-36 h-36 relative">
                                                <img src="{{ asset('backend') }}/assets/images/users/avatar-7.png" alt="" class="rounded-full border-[8px] border-white dark:border-slate-800">
                                                <span class="absolute cursor-pointer w-7 h-7 bg-green-600 rounded-full bottom-4 right-3 flex items-center justify-center border-2 border-white dark:border-slate-800">
                                                        <i class="fas fa-camera text-white text-xs"></i>
                                                    </span>
                                            </div>
                                            <div class="self-end ml-3">
                                                <h5 class="text-xl  md:text-[28px] font-semibold sm:text-white md:text-slate-700 dark:text-gray-300 mb-0 md:mb-2">Rosa Dodson</h5>
                                                <p class="block text-xs lg:text-base  font-medium text-slate-500">UI/UX Designer, USA</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 self-center flex mt-5">
                                        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                            <div class="col-span-6  md:col-span-3 lg:col-span-3 xl:col-span-3 ">
                                                <div class="border-2 border-slate-200/50 dark:border-slate-600/60 inline-flex rounded-full cursor-pointer">
                                                    <img src="{{ asset('backend') }}/assets/images/logos/facebook.png" alt="" class="rounded-full h-9 w-9">
                                                    <span class="self-center px-2 font-medium dark:text-slate-400">Facebook</span>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-span-6  md:col-span-3 lg:col-span-3 xl:col-span-3 ">
                                                <div class="border-2 border-slate-200/50 dark:border-slate-600/60 inline-flex rounded-full cursor-pointer ml-0 md:ml-1">
                                                    <img src="{{ asset('backend') }}/assets/images/logos/insta.png" alt="" class="rounded-full h-9 w-9">
                                                    <span class="self-center px-2 font-medium dark:text-slate-400">instagram</span>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-span-6  md:col-span-3 lg:col-span-3 xl:col-span-3 ">
                                                <div class="border-2 border-slate-200/50 dark:border-slate-600/60 inline-flex rounded-full cursor-pointer ml-0 md:ml-1">
                                                    <img src="{{ asset('backend') }}/assets/images/logos/twitter.png" alt="" class="rounded-full h-9 w-9">
                                                    <span class="self-center px-2 font-medium dark:text-slate-400">Twitter</span>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-span-6  md:col-span-3 lg:col-span-3 xl:col-span-3 ">
                                                <button class="px-3 py-2 lg:px-6 bg-blue-500 collapse:bg-green-100 text-white text-sm font-semibold rounded-full hover:bg-blue-600 ml-0 md:ml-1">Follow</button>
                                            </div><!--end col-->
                                        </div><!--end inner-grid-->
                                    </div><!--end col-->
                                </div><!--end inner-grid-->
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                </div><!--end inner-grid-->

                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 ">
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                        <div class="w-full relative overflow-hidden">
                            <div class="p-0 xl:p-4">
                                <div class="mb-4 border-b border-dashed border-gray-200 dark:border-gray-700 flex flex-wrap justify-start lg:justify-between" data-fc-type="tab">
                                    <ul class="flex flex-wrap mb-5 lg:-mb-px" aria-label="Tabs">
                                        <li class="mr-2" role="presentation">
                                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="Groups-tab" data-fc-target="#Groups"  type="button" role="tab" aria-controls="Groups" aria-selected="false">Groups</button>
                                        </li>
                                        <li class="mr-2" role="presentation">
                                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="Projects-tab" data-fc-target="#Projects"  type="button" role="tab" aria-controls="Projects" aria-selected="false">Projects</button>
                                        </li>
                                        <li class="mr-2" role="presentation">
                                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700 active" id="Posts-tab" data-fc-target="#Posts"  type="button" role="tab" aria-controls="Posts" aria-selected="false">Posts</button>
                                        </li>
                                        <li role="presentation">
                                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="Settings-tab" data-fc-target="#Settings" type="button" role="tab" aria-controls="Settings" aria-selected="false">Settings</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>

                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-3 xl:col-span-3 ">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                            <div class="flex-auto p-4">
                                <h5 class="text-lg font-medium text-slate-700 dark:text-slate-300 mb-3">About <i class="fas fa-minus text-primary-500"></i></h5>
                                <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <ul class="list-none">
                                    <li class="mb-2"><i class="ti ti-gift text-xl text-slate-400 mr-2"></i>
                                        <span class="text-slate-500 text-sm">06 June 1989</span>
                                    </li>
                                    <li class="mb-2"><i class="ti ti-language-hiragana text-xl text-slate-400 mr-2"></i>
                                        <span class="text-slate-500 text-sm">English, French, German</span>
                                    </li>
                                    <li class="mb-2"><i class="ti ti-flag text-xl text-slate-400 mr-2"></i>
                                        <span class="text-slate-500 text-sm">USA</span>
                                    </li>
                                    <li class="mb-2"><i class="ti ti-shield-checkered text-xl text-slate-400 mr-2"></i>
                                        <span class="text-slate-500 text-sm">Music, Reading, journey</span>
                                    </li>
                                </ul>
                                <h5 class="text-lg font-medium text-slate-700 dark:text-slate-300 my-3">Skill <i class="fas fa-minus text-primary-500"></i></h5>
                                <div class="">
                                    <span class="inline-block  text-slate-600  hover:text-primary-500 bg-transparent border border-gray-200  dark:text-slate-400  dark:border-gray-700 mb-1   text-sm font-medium py-0.5 px-3 rounded-full">Javascript</span>
                                    <span class="inline-block  text-slate-600  hover:text-primary-500 bg-transparent border border-gray-200  dark:text-slate-400  dark:border-gray-700 mb-1   text-sm font-medium py-0.5 px-3 rounded-full">Python</span>
                                    <span class="inline-block  text-slate-600  hover:text-primary-500 bg-transparent border border-gray-200  dark:text-slate-400  dark:border-gray-700 mb-1   text-sm font-medium py-0.5 px-3 rounded-full">React</span>
                                    <span class="inline-block  text-slate-600  hover:text-primary-500 bg-transparent border border-gray-200  dark:text-slate-400  dark:border-gray-700 mb-1   text-sm font-medium py-0.5 px-3 rounded-full">Angular</span>
                                    <span class="inline-block  text-slate-600  hover:text-primary-500 bg-transparent border border-gray-200  dark:text-slate-400  dark:border-gray-700 mb-1   text-sm font-medium py-0.5 px-3 rounded-full">Nodejs</span>
                                    <span class="inline-block  text-slate-600  hover:text-primary-500 bg-transparent border border-gray-200  dark:text-slate-400  dark:border-gray-700 mb-1   text-sm font-medium py-0.5 px-3 rounded-full">Flutter</span>
                                </div>
                                <h5 class="text-lg font-medium text-slate-700 dark:text-slate-300 my-3">Experience <i class="fas fa-minus text-primary-500"></i></h5>
                                <p class="text-sm text-slate-600 dark:text-slate-400 font-medium ">University of Oxford</p>
                                <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Research university in Oxford, England 2014-2015</p>
                                <h5 class="text-lg font-medium text-slate-700 dark:text-slate-300 my-3">Follow Report <i class="fas fa-minus text-primary-500"></i></h5>
                                <div class="flex justify-between">
                                    <a href="#" class="text-slate-700 hover:text-primary-500 font-medium underline underline-offset-4 decoration-slate-500 decoration-1">Followers 6.3k</a>
                                    <a href="#" class="text-slate-700 hover:text-primary-500 font-medium underline underline-offset-4 decoration-slate-500 decoration-1">Following 1.1k</a>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                        <div class="w-full relative overflow-hidden">
                            <div class="p-0">
                                <div id="myTabContent">
                                    <div class="hidden" id="Groups" role="tabpanel" aria-labelledby="Groups-tab">
                                        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="flex items-center mb-4">
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                            <div class="self-center">
                                                                <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Joseph Rust <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                                <span class="text-slate-500 mr-2 text-sm">Software Engineer</span>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        <div class="flex flex-wrap content-between mt-4">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-1.png" alt="">
                                                                <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+6</a>
                                                            </div>
                                                            <div class="ml-0 lg:ml-auto self-center">
                                                                <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-4 gap-4 mt-4">
                                                            <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Following</button>
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                            </div>
                                                        </div>

                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="flex items-center mb-4">
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-4.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                            <div class="self-center">
                                                                <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Betty Jenkins <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                                <span class="text-slate-500 mr-2 text-sm">React Developer</span>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        <div class="flex flex-wrap content-between mt-4">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-1.png" alt="">
                                                                <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+8</a>
                                                            </div>
                                                            <div class="ml-0 lg:ml-auto self-center">
                                                                <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-4 gap-4 mt-4">
                                                            <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                                <button class="inline-block focus:outline-none text-white hover:bg-primary-500 hover:text-white bg-primary-500 border border-primary-200 dark:bg-primary-500 dark:text-primary-500 dark:hover:text-white dark:border-primary-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Follow</button>
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                            </div>
                                                        </div>

                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="flex items-center mb-4">
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                            <div class="self-center">
                                                                <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Rolando Paloso <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                                <span class="text-slate-500 mr-2 text-sm">Web Developer</span>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        <div class="flex flex-wrap content-between mt-4">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-1.png" alt="">
                                                            </div>
                                                            <div class="ml-0 lg:ml-auto self-center">
                                                                <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-4 gap-4 mt-4">
                                                            <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                                <button class="inline-block focus:outline-none text-white hover:bg-primary-500 hover:text-white bg-primary-500 border border-primary-200 dark:bg-primary-500 dark:text-primary-500 dark:hover:text-white dark:border-primary-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Follow</button>
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                            </div>
                                                        </div>

                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="flex items-center mb-4">
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-3.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                            <div class="self-center">
                                                                <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Arthur Mann <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                                <span class="text-slate-500 mr-2 text-sm">Python Developer</span>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        <div class="flex flex-wrap content-between mt-4">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="">
                                                                <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+1</a>
                                                            </div>
                                                            <div class="ml-0 lg:ml-auto self-center">
                                                                <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-4 gap-4 mt-4">
                                                            <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Following</button>
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                            </div>
                                                        </div>

                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="flex items-center mb-4">
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-5.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                            <div class="self-center">
                                                                <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Maricel Villalon <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                                <span class="text-slate-500 mr-2 text-sm">UI Developer</span>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        <div class="flex flex-wrap content-between mt-4">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-1.png" alt="">
                                                                <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+3</a>
                                                            </div>
                                                            <div class="ml-0 lg:ml-auto self-center">
                                                                <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-4 gap-4 mt-4">
                                                            <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Following</button>
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                            </div>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="flex items-center mb-4">
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-7.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                            <div class="self-center">
                                                                <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Nicolas Wright <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                                <span class="text-slate-500 mr-2 text-sm">Designer</span>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        <div class="flex flex-wrap content-between mt-4">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-1.png" alt="">
                                                                <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+2</a>
                                                            </div>
                                                            <div class="ml-0 lg:ml-auto self-center">
                                                                <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-4 gap-4 mt-4">
                                                            <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                                <button class="inline-block focus:outline-none text-white hover:bg-primary-500 hover:text-white bg-primary-500 border border-primary-200 dark:bg-primary-500 dark:text-primary-500 dark:hover:text-white dark:border-primary-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Follow</button>
                                                                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                            </div>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                        </div>
                                    </div><!--end tab-pan-->
                                    <div class="hidden" id="Projects" role="tabpanel" aria-labelledby="Projects-tab">
                                        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                            <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="absolute -top-2 -left-0"><i class="fas fa-circle text-green-500 text-xs"></i></div>
                                                        <p class="text-slate-400 text-sm float-right">
                                                            <span class="text-slate-400">01:33</span> /
                                                            <span class="text-slate-400">9:30</span>
                                                            <span class="mx-1">·</span>
                                                            <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                        </p>
                                                        <h5 class="font-medium mt-0 dark:text-slate-200">Organic Farming</h5>
                                                        <p class="text-slate-400 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form.
                                                        </p>
                                                        <div class="my-3">
                                                            <div class="flex justify-between mb-1">
                                                                <span class="text-sm font-medium text-slate-700 dark:text-white">T-Wind</span>
                                                                <span class="text-sm font-medium text-slate-700 dark:text-white">45% Complete</span>
                                                            </div>
                                                            <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                                                                <div class="bg-blue-500 h-1 rounded-full" style="width: 45%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-3.png" alt="">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-5.png" alt="">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-7.png" alt="">
                                                                <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+9</a>
                                                            </div>
                                                            <ul class="mb-0 self-center">
                                                                <li class="inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-green-500 text-base"></i>
                                                                        <span class="text-slate-400 font-medium">15/100</span>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-primary text-base"></i>
                                                                        <span class="text-slate-400 font-medium">3</span>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="ml-2" href="#">
                                                                        <i class="mdi mdi-pencil-outline text-slate-400 font-18"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-trash-can-outline text-slate-400 font-18"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->
                                            <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="absolute -top-2 -left-0"><i class="fas fa-circle text-slate-400 text-xs"></i></div>
                                                        <p class="text-slate-400 text-sm float-right">
                                                            <span class="text-slate-400">01:33</span> /
                                                            <span class="text-slate-400">9:30</span>
                                                            <span class="mx-1">·</span>
                                                            <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                        </p>
                                                        <h5 class="font-medium mt-0 dark:text-slate-200">Transfer Money</h5>
                                                        <p class="text-slate-400 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form.
                                                        </p>
                                                        <div class="my-3">
                                                            <div class="flex justify-between mb-1">
                                                                <span class="text-sm font-medium text-slate-700 dark:text-white">T-Wind</span>
                                                                <span class="text-sm font-medium text-slate-700 dark:text-white">45% Complete</span>
                                                            </div>
                                                            <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                                                                <div class="bg-blue-500 h-1 rounded-full" style="width: 45%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-6.png" alt="">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-1.png" alt="">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-4.png" alt="">
                                                                <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+9</a>
                                                            </div>
                                                            <ul class="mb-0 self-center">
                                                                <li class="inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-green-500 text-base"></i>
                                                                        <span class="text-slate-400 font-medium">15/100</span>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-primary text-base"></i>
                                                                        <span class="text-slate-400 font-medium">3</span>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="ml-2" href="#">
                                                                        <i class="mdi mdi-pencil-outline text-slate-400 font-18"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-trash-can-outline text-slate-400 font-18"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->
                                            <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="absolute -top-2 -left-0"><i class="fas fa-circle text-green-500 text-xs"></i></div>
                                                        <p class="text-slate-400 text-sm float-right">
                                                            <span class="text-slate-400">01:33</span> /
                                                            <span class="text-slate-400">9:30</span>
                                                            <span class="mx-1">·</span>
                                                            <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                        </p>
                                                        <h5 class="font-medium mt-0 dark:text-slate-200">Mobile Account Setting</h5>
                                                        <p class="text-slate-400 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form.
                                                        </p>
                                                        <div class="my-3">
                                                            <div class="flex justify-between mb-1">
                                                                <span class="text-sm font-medium text-slate-700 dark:text-white">T-Wind</span>
                                                                <span class="text-sm font-medium text-slate-700 dark:text-white">45% Complete</span>
                                                            </div>
                                                            <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                                                                <div class="bg-blue-500 h-1 rounded-full" style="width: 45%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-3.png" alt="">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="">
                                                                <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+9</a>
                                                            </div>
                                                            <ul class="mb-0 self-center">
                                                                <li class="inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-green-500 text-base"></i>
                                                                        <span class="text-slate-400 font-medium">15/100</span>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-primary text-base"></i>
                                                                        <span class="text-slate-400 font-medium">3</span>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="ml-2" href="#">
                                                                        <i class="mdi mdi-pencil-outline text-slate-400 font-18"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-trash-can-outline text-slate-400 font-18"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->
                                            <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="flex-auto p-4">
                                                        <div class="absolute -top-2 -left-0"><i class="fas fa-circle text-red-500 text-xs"></i></div>
                                                        <p class="text-slate-400 text-sm float-right">
                                                            <span class="text-slate-400">01:33</span> /
                                                            <span class="text-slate-400">9:30</span>
                                                            <span class="mx-1">·</span>
                                                            <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                        </p>
                                                        <h5 class="font-medium mt-0 dark:text-slate-200">Book My World</h5>
                                                        <p class="text-slate-400 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form.
                                                        </p>
                                                        <div class="my-3">
                                                            <div class="flex justify-between mb-1">
                                                                <span class="text-sm font-medium text-slate-700 dark:text-white">T-Wind</span>
                                                                <span class="text-sm font-medium text-slate-700 dark:text-white">45% Complete</span>
                                                            </div>
                                                            <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                                                                <div class="bg-blue-500 h-1 rounded-full" style="width: 45%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between">
                                                            <div class="flex -space-x-4">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-8.png" alt="">
                                                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="">
                                                                <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+9</a>
                                                            </div>
                                                            <ul class="mb-0 self-center">
                                                                <li class="inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-green-500 text-base"></i>
                                                                        <span class="text-slate-400 font-medium">15/100</span>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-primary text-base"></i>
                                                                        <span class="text-slate-400 font-medium">3</span>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="ml-2" href="#">
                                                                        <i class="mdi mdi-pencil-outline text-slate-400 font-18"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-trash-can-outline text-slate-400 font-18"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->
                                        </div><!--end grid-->
                                    </div><!--end tab-pan-->
                                    <div class="active" id="Posts" role="tabpanel" aria-labelledby="Posts-tab">
                                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between ">
                                                    <div class="relative flex items-center space-x-2">
                                                        <div class="relative">
                                                                <span class="absolute text-green-500 right-0 bottom-0">
                                                                    <svg width="10" height="10">
                                                                        <circle cx="4" cy="4" r="4" fill="currentColor"></circle>
                                                                    </svg>
                                                                </span>
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-3.png" alt="" class="w-8 h-8  rounded-full">
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <div class="text-sm mt-1 flex items-center font-medium">
                                                                <span class="text-gray-700 mr-3 dark:text-slate-200">Anderson Vanhron</span>
                                                            </div>
                                                            <span class="text-xs text-gray-500 -mt-1">online</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-2">
                                                        <button type="button" class="inline-flex items-center justify-center h-10 w-10 transition duration-500 ease-in-out text-gray-400 hover:text-gray-500 focus:outline-none">
                                                            <i class="far fa-image"></i>
                                                        </button>
                                                        <button type="button" class="inline-flex items-center justify-center h-10 w-10 transition duration-500 ease-in-out text-gray-400 hover:text-gray-500 focus:outline-none">
                                                            <i class="fas fa-video"></i>
                                                        </button>
                                                        <button type="button" class="inline-flex items-center justify-center h-10 w-10 transition duration-500 ease-in-out text-gray-400 hover:text-gray-500 focus:outline-none">
                                                            <i class="far fa-calendar"></i>
                                                        </button>

                                                        <div class="dropdown inline-block relative">
                                                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle px-3 py-1 text-sm font-medium text-gray-400 focus:outline-none hover:text-slate-800 focus:z-10 dark:text-gray-400 dark:hover:text-white" type="button">
                                                                <i class="fas fa-ellipsis-vertical dark:text-slate-400"></i>
                                                            </button>
                                                            <!-- Dropdown menu -->
                                                            <div class="dropdown-menu right-auto md:right-0 hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Add to archive</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 text-red-500">Block</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end header-title-->
                                            <div class="flex-auto p-4">
                                                <form>
                                                    <textarea id="post-text" rows="4" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Start a post"></textarea>
                                                    <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Post</button>
                                                </form>
                                            </div> <!--end card-body-->
                                        </div> <!--end card-->
                                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between ">
                                                    <div class="relative flex items-center space-x-2">
                                                        <div class="relative">
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-3.png" alt="" class="w-8 h-8  rounded-full">
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <div class="text-[14px] mt-1 flex items-center font-medium">
                                                                <a href="#" class="text-gray-700 mr-3 dark:text-slate-200 mb-1 hover:text-primary-400">Anderson Vanhron</a>
                                                            </div>
                                                            <span class="text-xs text-gray-500 -mt-1">Yesterday at 11.45 pm</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-2">

                                                        <div class="dropdown inline-block relative">
                                                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle px-3 py-1 text-sm font-medium text-gray-400 focus:outline-none hover:text-slate-800 focus:z-10 dark:text-gray-400 dark:hover:text-white" type="button">
                                                                <i class="fas fa-ellipsis-vertical dark:text-slate-400"></i>
                                                            </button>
                                                            <!-- Dropdown menu -->
                                                            <div class="dropdown-menu right-auto md:right-0 hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Add to archive</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 text-red-500">Block</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end header-title-->
                                            <div class="flex-auto p-4">
                                                <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                <img src="{{ asset('backend') }}/assets/images/widgets/post-2.jpg" alt="" class="mb-3">
                                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                    <button type="button" class="inline-flex items-center justify-center font-medium  transition duration-500 ease-in-out text-slate-400 hover:text-red-500 focus:outline-none">
                                                        <i class="fas fa-heart text-2xl mr-1"></i> <span>4.5k</span>
                                                    </button>
                                                    <button type="button" class="inline-flex items-center justify-center font-medium  transition duration-500 ease-in-out text-slate-400 hover:text-primary-500 focus:outline-none ml-5">
                                                        <i class="fas fa-comment text-2xl mr-1"></i> <span>291</span>
                                                    </button>
                                                    <button type="button" class="inline-flex items-center justify-center font-medium  transition duration-500 ease-in-out text-slate-400 hover:text-primary-500 focus:outline-none ml-5">
                                                        <i class="fas fa-share-nodes text-2xl mr-1"></i> <span>Share</span>
                                                    </button>
                                                </div>
                                                <div class="flex mt-4">
                                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-1.png" alt="" class="mr-2 h-8 inline-block rounded">
                                                    <div class="">
                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Donald Gardner</h5>
                                                        <span class="block  font-normal text-slate-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                                                    </div>
                                                </div>
                                                <form action="" class="mt-4">
                                                    <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
                                                </form>
                                            </div> <!--end card-body-->
                                        </div> <!--end card-->


                                        <div class="bg-slate-800 dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 self-center">
                                                    <img src="{{ asset('backend') }}/assets/images/widgets/post-3.jpg" alt="" class="inline-block rounded-l-md">
                                                </div>
                                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 self-center">
                                                    <div class="flex-auto p-4">
                                                        <a href="#" class="block mb-3 text-[16px] font-medium tracking-tight text-white dark:text-white">Popular admin template you can use for your business.</a>
                                                        <p class="font-normal text-slate-300 text-sm dark:text-slate-400">
                                                            Some quick example text the bulk of the card's content. It is a long   will be distracted by the readable content.
                                                        </p>
                                                    </div><!--end card-body-->
                                                </div>
                                            </div>
                                            <div class="bg-white dark:bg-slate-800 p-4 cursor-pointer">
                                                <span class="block text-slate-600 dark:text-slate-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                                <a href="#" class="block text-primary-500">www.xyz.exemple.com</a>
                                            </div>
                                        </div>
                                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between ">
                                                    <div class="relative flex items-center space-x-2">
                                                        <div class="relative">
                                                            <img src="{{ asset('backend') }}/assets/images/users/avatar-3.png" alt="" class="w-8 h-8  rounded-full">
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <div class="text-[14px] mt-1 flex items-center font-medium">
                                                                <a href="#" class="text-gray-700 mr-3 dark:text-slate-200 mb-1 hover:text-primary-400">Anderson Vanhron</a>
                                                            </div>
                                                            <span class="text-xs text-gray-500 -mt-1">Yesterday at 11.45 pm</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-2">

                                                        <div class="dropdown inline-block relative">
                                                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle px-3 py-1 text-sm font-medium text-gray-400 focus:outline-none hover:text-slate-800 focus:z-10 dark:text-gray-400 dark:hover:text-white" type="button">
                                                                <i class="fas fa-ellipsis-vertical dark:text-slate-400"></i>
                                                            </button>
                                                            <!-- Dropdown menu -->
                                                            <div class="dropdown-menu right-auto md:right-0 hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Add to archive</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 text-red-500">Block</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end header-title-->
                                            <div class="flex-auto p-4">
                                                <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                <img src="{{ asset('backend') }}/assets/images/widgets/post-1.jpg" alt="" class="mb-3">
                                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                    <button type="button" class="inline-flex items-center justify-center font-medium  transition duration-500 ease-in-out text-slate-400 hover:text-red-500 focus:outline-none">
                                                        <i class="fas fa-heart text-2xl mr-1"></i> <span>4.5k</span>
                                                    </button>
                                                    <button type="button" class="inline-flex items-center justify-center font-medium  transition duration-500 ease-in-out text-slate-400 hover:text-primary-500 focus:outline-none ml-5">
                                                        <i class="fas fa-comment text-2xl mr-1"></i> <span>291</span>
                                                    </button>
                                                    <button type="button" class="inline-flex items-center justify-center font-medium  transition duration-500 ease-in-out text-slate-400 hover:text-primary-500 focus:outline-none ml-5">
                                                        <i class="fas fa-share-nodes text-2xl mr-1"></i> <span>Share</span>
                                                    </button>
                                                </div>
                                                <div class="flex mt-4">
                                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-5.png" alt="" class="mr-2 h-8 inline-block rounded">
                                                    <div class="">
                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Donald Gardner</h5>
                                                        <span class="block  font-normal text-slate-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                                                    </div>
                                                </div>
                                                <form action="" class="mt-4">
                                                    <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
                                                </form>
                                            </div> <!--end card-body-->
                                        </div> <!--end card-->
                                    </div><!--end tab-pan-->
                                    <div class="hidden" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                                        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                            <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                        <h4 class="font-medium">Personal Information</h4>
                                                    </div><!--end card-header-->
                                                    <div class="flex-auto p-4">
                                                        <form>
                                                            <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">First Name</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9 mb-2">
                                                                    <input type="text" id="First_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Rosa" placeholder="First name" required>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="Last_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Last Name</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                    <input type="text" id="Last_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Dodson" placeholder="Last name" required>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="Company_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Company Name</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                    <input type="text" id="Company_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Example Themes" placeholder="Last name" required>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Contact Phone</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                    <input type="text" id="Contact_Phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="+1 23456 7890" placeholder="Last name" required>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="Your_Email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your email</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                    <input type="email" id="Your_Email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="example@example.com" placeholder="Last name" required>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Website Link</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                    <input type="text" id="Contact_Phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="https://mannatthemes.com/" placeholder="Last name" required>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Countries</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                    <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                        <option>United States</option>
                                                                        <option>Canada</option>
                                                                        <option>France</option>
                                                                        <option>Germany</option>
                                                                    </select>
                                                                </div><!--end col-->
                                                                <div class=" col-start-4 col-end-13  mb-2">
                                                                    <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Submit</button>
                                                                    <button type="submit" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded">Cancel</button>
                                                                </div><!--end col-->
                                                            </div><!--end grid-->
                                                        </form>
                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                            <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                    <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                        <h4 class="font-medium">Change Password</h4>
                                                    </div><!--end card-header-->
                                                    <div class="flex-auto p-4">
                                                        <form>
                                                            <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="Current_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Current Password</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9 mb-2">
                                                                    <input type="password" id="Current_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"  placeholder="Current Password" required>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="New_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">New Password</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                    <input type="password" id="New_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"  placeholder="New Password" required>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                    <label for="Confirm_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Confirm Password</label>
                                                                </div><!--end col-->
                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                    <input type="password" id="Confirm_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Confirm Password" required>
                                                                </div><!--end col-->
                                                                <div class=" col-start-4 col-end-13  mb-2">
                                                                    <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Chang Password</button>
                                                                    <button type="submit" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded">Cancel</button>
                                                                </div><!--end col-->
                                                            </div><!--end grid-->
                                                        </form>
                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mt-4">
                                                    <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                        <h4 class="font-medium">Other Settings</h4>
                                                    </div><!--end card-header-->
                                                    <div class="flex-auto p-4">
                                                        <form>
                                                            <label class="custom-label block mb-2 dark:text-slate-300">
                                                                <div class="bg-white border border-slate-200 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                                                                    <input type="checkbox" class="hidden">
                                                                    <i class="fas fa-check hidden text-xs text-slate-700 "></i>
                                                                </div>
                                                                Email Notifications <span class="text-slate-400">Do you need them?</span>
                                                            </label>
                                                            <label class="custom-label block dark:text-slate-300">
                                                                <div class="bg-white border border-slate-200 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                                                                    <input type="checkbox" class="hidden">
                                                                    <i class="fas fa-check hidden text-xs text-slate-700"></i>
                                                                </div>
                                                                API Access <span class="text-slate-400">Enable/Disable access</span>
                                                            </label>
                                                        </form>
                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                        </div><!--end grid-->
                                    </div>
                                </div>
                            </div>
                        </div> <!--end inner-grid-->
                    </div><!--end col-->
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-3 xl:col-span-3 ">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Keep in touch</h4>
                            </div><!--end header-title-->
                            <div class="flex-auto p-4">
                                <div class="flex items-center mb-4">
                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                    <div class="self-center">
                                        <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Nicolas Wright </a>
                                        <span class="text-slate-500 mr-2 text-[11px]">Team Leader</span>
                                    </div>
                                </div>
                                <div class="flex items-center mb-4">
                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-4.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                    <div class="self-center">
                                        <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Louise Baker </a>
                                        <span class="text-slate-500 mr-2 text-[11px]">Designer</span>
                                    </div>
                                </div>
                                <div class="flex items-center mb-4">
                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-5.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                    <div class="self-center">
                                        <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Thomas Jewell </a>
                                        <span class="text-slate-500 mr-2 text-[11px]">Python Developer</span>
                                    </div>
                                </div>
                                <div class="flex items-center mb-4">
                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-6.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                    <div class="self-center">
                                        <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Betty Jenkins </a>
                                        <span class="text-slate-500 mr-2 text-[11px]">React Developer</span>
                                    </div>
                                </div>
                                <div class="flex items-center mb-4">
                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-9.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                    <div class="self-center">
                                        <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Arthur Mann </a>
                                        <span class="text-slate-500 mr-2 text-[11px]">Tester</span>
                                    </div>
                                </div>
                            </div> <!--end card body-->
                        </div><!--end card-->
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Twitter Feed</h4>
                            </div><!--end header-title-->
                            <div class="flex-auto p-4">
                                <div class=" mb-4">
                                    <div class="flex items-center">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-2.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                        <div class="self-center">
                                            <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Nicolas Wright </a>
                                            <span class="text-slate-500 mr-2 text-[11px]">@nicolas_wright</span>
                                        </div>
                                    </div>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">There are many variations of <a href="#" class="text-cyan-500">#Passages</a> of Lorem Ipsum available, but the majority ✨ have suffered alteration in <a href="#" class="text-cyan-500">#Some</a> form.</p>
                                </div>
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-4.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                        <div class="self-center">
                                            <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Louise Baker </a>
                                            <span class="text-slate-500 mr-2 text-[11px]">@louise-baker</span>
                                        </div>
                                    </div>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">There are many variations of <a href="#" class="text-cyan-500">#Passages</a> of Lorem Ipsum available,🎉 have suffered alteration in <a href="#" class="text-cyan-500">#Some</a> form.</p>
                                </div>
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-5.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                        <div class="self-center">
                                            <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Thomas Jewell </a>
                                            <span class="text-slate-500 mr-2 text-[11px]">@thomas_jewell</span>
                                        </div>
                                    </div>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">There are many variations of <a href="#" class="text-cyan-500">#Passages</a> ❤️ of Lorem Ipsum available, but the  have suffered alteration in <a href="#" class="text-cyan-500">#Some</a> form.</p>
                                </div>
                            </div> <!--end card body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->
                <!-- footer -->
                <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                    <div class="container">
                        <!-- Footer Start -->
                        <footer
                            class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left "
                        >
                            &copy;
                            <script>
                                var year = new Date();document.write(year.getFullYear());
                            </script>
                            Robotech
                            <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block"
                            >Crafted with <i class="ti ti-heart text-red-500"></i> by
                              Mannatthemes</span
                            >
                        </footer>
                        <!-- end Footer -->
                    </div>
                </div>


            </div><!--end container-->

        </div>
    </div>

@endsection
