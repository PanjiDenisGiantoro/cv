@extends('dashboard')

@section('title', 'Blog')

@section('content')

    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="flex flex-wrap justify-between">
                                <div class="items-center ">
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Blogs</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Pages</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Blogs</li>
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
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-3 ">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                            <a href="#">
                                <img class="rounded-t-lg" src="assets/images/widgets/1.jpg" alt="" />
                            </a>
                            <div class="flex-auto p-4">
                                <span class="focus:outline-none text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-1 px-2">Fashion</span>
                                <a href="#" class="my-3 block text-[20px] font-medium tracking-tight text-gray-800 dark:text-white">Popular admin template you can use for your business.</a>
                                <p class="font-normal text-gray-500 text-sm dark:text-gray-400">
                                    It is a long established fact that a reader will be distracted by the readable content.
                                </p>
                                <div class="border-b border-dashed dark:border-slate-700/40 my-3"></div>
                                <div class="flex flex-wrap justify-between">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 rounded">
                                            <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="assets/images/users/avatar-3.png" alt="logo" />
                                        </div>
                                        <div class="ml-2">
                                            <a tabindex="0" class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline"><h5 class=" font-medium text-sm">Fitbit Incorporation</h5></a>
                                            <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">San Diego, California</p>
                                        </div>
                                    </div>
                                    <a href="#" class="text-primary-500 font-semibold text-sm self-center">Read More <i class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                </div><!--end inner-grid-->
                <!-- footer -->



            </div><!--end container-->
        </div><!--end page-wrapper-->
    </div><!--end /div-->

@endsection
