@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <section>
        <nav class="flex mb-5 mt-16" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="/" class="text-gray-700 hover:text-gray-900 inline-flex items-center">
                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <a href="#" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">{{$category->name}}</a>
                    </div>
                </li>
            </ol>
        </nav>
    </section>
    <section class="mt-10 mx-auto w-full max-w-screen-xl grid grid-cols-1 gap-6 text-black md:grid-cols-3 ">
        @php
            $filteredJobs = $jobs->where('category_id', $category->id);
        @endphp

        @foreach($filteredJobs as $filteredJob)
            <a href="{{url('/jobs/view/'. $filteredJob->id)}}">
                <div class="max-w-sm bg-white border border-gray-100 rounded-lg shadow hover:shadow-lg hover:shadow-blue-100 hover:scale-110 hover:ease-in-out hover:duration-500">
                    <img class="rounded-lg w-full h-48 object-cover" src="{{ asset($filteredJob->thumbnail) }}" alt="{{ $filteredJob->position }}">
                    <div class="p-10">
                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-blue-900">{{ $filteredJob->position }}</h5>
                        <div class="mb-3 font-normal text-gray-700">
                            <span class="font-bold text-blue-900">Salary: </span>
                            <span>{{ $filteredJob->salary }}</span>
                        </div>
                        <div class="mb-3 font-normal text-gray-700">
                            <span class="font-bold text-blue-900">Type of Work: </span>
                            <span>{{ $filteredJob->type_of_work }}</span>
                        </div>
                        <div class="mb-3 font-normal">
                            <span class="font-bold text-blue-900">Location: </span>
                            <span>{{ $filteredJob->location }}</span>
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
    <section class="mt-10">
            {{$jobs->links() }}
    </section>

@endsection
