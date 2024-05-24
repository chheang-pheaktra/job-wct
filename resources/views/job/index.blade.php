<title>Jobs</title>
@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
    @section('contents')
        <main class="mt-10 md:mt-top-content mb-top-title p-3">
            <section>
                <form class="flex flex-col justify-center md:flex-row gap-6">
                    <div class="flex ">
                        <input type="text" placeholder="Search for the tool you like"
                               class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-sky-500 focus:outline-none focus:border-sky-500"
                        >
                        <button type="submit" class="bg-sky-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
                    </div>
                    <select  name="jobs" class=" h-10 border-2 border-sky-500 focus:outline-none focus:border-sky-500 text-sky-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
                        <option value="All" selected="">All</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" >{{$category->name}}</option>
                        @endforeach
                    </select>
                </form>
            </section>
            <section class="mx-auto max-w-screen-xl mt-10">
                <h2 class="text-left  text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
                    Jobs Listing
                </h2>
                <div class="bg-[#BCE1FB] px-10 py-10 mt-10 rounded-xl ">
                    <div class="mx-auto max-w-6xl ">
                        <ul class="mt-1 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3">
                            <li class="rounded-xl bg-blue-900 px-6 py-8 shadow-sm max-h-40">
                                <a href="">
                                    <img src="https://www.svgrepo.com/show/530438/ddos-protection.svg" alt="" class="mx-auto h-10 w-10">
                                    <h3 class="my-3 font-display font-medium text-white">Entry level</h3>
                                </a>

                            </li>
                            <li class="rounded-xl bg-blue-900 px-6 py-8 shadow-sm max-h-40 text-white">
                                <a href="#">
                                    <img src="https://www.svgrepo.com/show/530438/ddos-protection.svg" alt="" class="mx-auto h-10 w-10">
                                    <h3 class="my-3 font-display font-medium"> Junior level</h3>
                                </a>

                            </li>
                            <li class="rounded-xl bg-blue-900 px-6 py-8 shadow-sm max-h-40 text-white">
                                <a>
                                    <img src="https://www.svgrepo.com/show/530438/ddos-protection.svg" alt="" class="mx-auto h-10 w-10">
                                    <h3 class="my-3 font-display font-medium">Senior level</h3>
                                </a>

                            </li>

                        </ul>
                    </div>
                </div>
            </section>
            <h1 class="text-2xl mt-10 font-bold">All Jobs</h1>
            <section class="mt-10 mx-auto w-full max-w-screen-xl grid grid-cols-1 gap-6 text-black md:grid-cols-3">
                @foreach($jobs as $job)
                        <a href="{{url('/jobs/view/' .$job->id)}}">
                            <div class="max-w-sm bg-white border border-gray-100 rounded-lg shadow hover:shadow-lg hover:shadow-blue-100 hover:scale-110 hover:ease-in-out hover:duration-500">
                                <img class="rounded-lg w-full h-48 object-cover" src="{{ asset($job->thumbnail) }}" alt="{{ $job->position }}">
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
                                    <div class="mb-3 font-normal">
                                        <span class="font-bold text-blue-900">Location: </span>
                                        <span>{{ $job->location }}</span>
                                    </div>
                                    <div class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-900 rounded-lg focus:ring-blue-300">
                                        Testing
                                    </div>
                                    <div class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-900 rounded-lg focus:ring-blue-300">
                                        Network
                                    </div>
                                </div>
                            </div>
                        </a>
                @endforeach
            </section>
            <section class="mt-10 ">
                {!! $jobs->links() !!}
            </section>
        </main>
    @endsection
