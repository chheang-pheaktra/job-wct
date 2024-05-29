@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <main class=" ">
        <section>
            <div class="mb-3 text-5xl text-center font-bold text-gray-900 text-center mt-24">{{$jobs->position}}</div>
            <div class="flex flex-col w-full items-center px-10 py-10 shadow-lg shadow-blue-50 md:flex-row md:max-w-l">
                <div class="rounded-lg w-full mx-auto lg:w-1/2 ">
                    <img class="object-cover md:rounded-l md:rounded-s-lg p-2" src="{{asset($jobs->thumbnail)}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-10 leading-normal text-left">
                    <div class="font-normal text-gray-700">
                        <span class="text-xl">Salary:</span>
                        <span class="text-xl">{{$jobs->salary}}</span>
                    </div>
                    <div class="font-normal text-gray-700">
                        <span>Job Type:</span>
                        <span>Full Time</span>
                    </div>
                    <div class="font-normal text-gray-700">
                        <span>Level:</span>
                        <span>{{$jobs->level->name}}</span>
                    </div>
                    <div class="font-normal text-gray-700">
                        <span>Category:</span>
                        <span>{{$jobs->category->name}}</span>
                    </div>
                    <div class="font-normal text-gray-700">
                        <span>Location:</span>
                        <span>{{$jobs->location}}</span>
                    </div>
                    <div class="font-normal text-gray-700">
                        <span>Posts:</span>
                        <span>{{$jobs->available_position}}</span>
                    </div>
                    <div class="font-normal text-gray-700">Required Skills: Networking, Testing</div>
                    <div class="font-normal text-gray-900 text-xl">Public date: March 11, 2024</div>
                    <div class="font-normal text-gray-900 text-xl">Close date: March 31, 2024</div>
                </div>
            </div>
        </section>
        <section>
            <div class="mt-5 text-gray-900  md:text-lg lg:text-xl ">
                <span class="text-wrap">{!! $jobs->description !!}</span>
            </div>

        </section>
        <section class="flex w-full justify-center item-center mt-10  ">
            <!-- Modal toggle -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mx-auto">
                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v11.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 1 1 1.06-1.06l3.22 3.22V3a.75.75 0 0 1 .75-.75Zm-9 13.5a.75.75 0 0 1 .75.75v2.25a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V16.5a.75.75 0 0 1 1.5 0v2.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V16.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                </svg>
                Apply Now
            </button>
            <!-- Main modal -->
            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                            <h3 class="text-lg font-semibold text-gray-900 ">
                               Complete Information for Apply
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5" action="{{ url('/apply/' . auth()->user()->id . '/job/' . $jobs->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Your Name" required>
                                </div>
                                <div class="col-span-2">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Your Email" required>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                                    <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option selected disabled>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="cv" class="block mb-2 text-sm font-medium text-gray-900">Upload CV</label>
                                    <input type="file" name="cv" id="cv" class="block w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Submit
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
