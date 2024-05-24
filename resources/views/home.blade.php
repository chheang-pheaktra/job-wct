@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('title', 'Home')
@section('contents')
    <main class="">
        <section>
            <div >
                <div >
                    <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
                        <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                            <h1
                                class="text-3xl sm:text-5xl md:text-5xl lg:text-4xl xl:text-5xl text-center text-black  font-black leading-10">
                                Let's start with
                                <span class="text-blue-600 ">CareerQuest</span>
                            </h1>
                            <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-600 dark:text-gray-300 font-normal text-center text-xl">
                                Improve your experience via us.
                            </p>
                        </div>
                        <form class="flex w-11/12 md:w-8/12 xl:w-6/12" >
                            <div class="flex rounded-md w-full">
                                <input type="text" name="search"
                                       class="w-full p-3 rounded-md rounded-r-none border-2 border-gray-500 placeholder-current  dark:text-gray-300  "
                                       placeholder="Find jobs and internships" />
                                <button
                                    class="inline-flex items-center gap-2 bg-[#1D5D9B] text-white text-lg font-semibold py-3 px-6 rounded-r-md">
                                    <span>Find</span>
                                    <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                         viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                         xml:space="preserve">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-4/6 mx-auto mb-5">
                <img src="https://cdn01.alison-static.net/public/html/site/img/homepage/banner-image.svg">
            </div>
        </section>
        <section>
            <div class="bg-[#BCE1FB] rounded-xl px-2 py-10 ">
                <div id="features" class="mx-auto max-w-6xl">
                    <p class="text-center text-base font-semibold leading-7 text-primary-500">Features</p>
                    <h2 class="text-center font-display text-3xl font-bold tracking-tight text-slate-600 md:text-4xl">
                        Categories job
                    </h2>
                    <ul class="mt-10 grid grid-cols-1 items-center gap-6 text-center text-blue-900 md:grid-cols-3">
                        @foreach($categories as $category)
                            @php
                                $jobCount = $jobs->where('category_id', $category->id)->count();
                             @endphp
                            <a href="{{ url('category_view/' . $category->id . '/' . $category->name) }}">
                                <li class="bg-blue-900 rounded-xl px-6 py-8 shadow-lg hover:scale-110 hover:duration-500">
                                    <h3 class="my-3 text-lg font-display font-medium text-white">{{ $category->name }}</h3>
                                    <p class="mt-1.5 text-sm leading-6 text-secondary-500 text-white">
                                        {{ $jobCount }} JOB
                                    </p>
                                </li>
                            </a>

                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <h1 class="text-2xl mt-10 font-bold">Recently</h1>
        <section class="mt-10 mx-auto w-full max-w-screen-xl grid grid-cols-1 gap-6 text-black md:grid-cols-3">
            @foreach($jobs as $job)
                @if($job->created_at->isToday())
                    <a href="{{'/jobs/view/' .$job->id}}">
                        <div class="max-w-sm bg-white border border-gray-100 rounded-lg shadow hover:shadow-lg hover:shadow-blue-100 hover:scale-110 hover:ease-in-out hover:duration-500">
                            <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset($job->thumbnail) }}" alt="{{ $job->position }}">
                            <div class="p-10">
                                <h5 class="mb-3 text-2xl font-bold tracking-tight text-blue-900">{{ $job->position }}</h5>
                                <div class="mb-3 font-normal text-gray-700">
                                    <span class="font-bold text-blue-900">Salary: </span>
                                    <span>{{ $job->salary }}</span>
                                </div>
                                <div class="mb-3 font-normal text-gray-700">
                                    <span class="font-bold text-blue-900">Type of Work: </span>
                                    <span>{{ $job->type_of_work }}</span>
                                </div>
                                <div class="font-normal">
                                    <span class="font-bold text-blue-900">Location: </span>
                                    <span>{{ $job->location }}</span>
                                </div>
                            </div>
                            <div class=" px-3 py-4 text-sm font-medium text-center text-gray-600 bg-blue-300 rounded-b-lg focus:ring-blue-300">{{date('d-m-y', strtotime($job->created_at))}}</div>
                        </div>
                    </a>
                @endif
            @endforeach
        </section>
        <section class="mt-10">
            <div class="pt-12 bg-gray-50 sm:pt-16">
                <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto text-center">
                        <h2 class="text-3xl font-extrabold leading-9 text-gray-900 sm:text-4xl sm:leading-10">
                            Trusted by developers
                        </h2>
                        <p class="mt-3 text-xl leading-7 text-gray-600 sm:mt-4">
                            This package powers many production applications on many different hosting platforms.
                        </p>
                    </div>
                </div>
                <div class="pb-12 mt-10 bg-gray-50 sm:pb-16">
                    <div class="relative">
                        <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                        <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
                            <div class="max-w-4xl mx-auto">
                                <dl class="bg-white rounded-lg shadow-lg sm:grid sm:grid-cols-3">
                                    <div class="flex flex-col p-6 text-center border-b border-gray-100 sm:border-0 sm:border-r">
                                        <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500" id="item-1">
                                            Stars on GitHub
                                        </dt>
                                        <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600" aria-describedby="item-1">
                                            4670+
                                        </dd>
                                    </div>
                                    <div
                                        class="flex flex-col p-6 text-center border-t border-b border-gray-100 sm:border-0 sm:border-l sm:border-r">
                                        <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                            Downloads
                                        </dt>
                                        <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600">
                                            80k+
                                        </dd>
                                    </div>
                                    <div class="flex flex-col p-6 text-center border-t border-gray-100 sm:border-0 sm:border-l">
                                        <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                            Sponsors
                                        </dt>
                                        <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600">
                                            100+
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5 mb-24">
            <div id="default-carousel" class="relative z-0 w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-facebook-cover_23-2149418949.jpg?t=st=1710311296~exp=1710314896~hmac=47cd9d658b34cede0ba73190e112153de21f5900e85b59dd9e914e0c48f6b527&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149418948.jpg?t=st=1710311358~exp=1710314958~hmac=64f81d30afd1a9273dff4e98e43d62b3c5c164e35d4c4a30d7d6bd6048aa8964&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149418948.jpg?t=st=1710311358~exp=1710314958~hmac=64f81d30afd1a9273dff4e98e43d62b3c5c164e35d4c4a30d7d6bd6048aa8964&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149418948.jpg?t=st=1710311358~exp=1710314958~hmac=64f81d30afd1a9273dff4e98e43d62b3c5c164e35d4c4a30d7d6bd6048aa8964&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149418948.jpg?t=st=1710311358~exp=1710314958~hmac=64f81d30afd1a9273dff4e98e43d62b3c5c164e35d4c4a30d7d6bd6048aa8964&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
                </button>
                <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </section>
    </main>
@endsection

