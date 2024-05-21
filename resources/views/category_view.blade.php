@extends('layout.user')
@section('contents')
    <section class="flex flex-wrap gap-5 justify-center">
        @php
            $filteredJobs = $jobs->where('category_id', $category->id);
        @endphp

        @foreach($filteredJobs as $filteredJob)
            <a href="#">
                <div class="max-w-sm bg-white border border-gray-100 rounded-lg shadow hover:shadow-lg hover:shadow-blue-100 hover:scale-110 hover:ease-in-out hover:duration-500">
                    <img class="rounded-lg w-max-full h-48 object-cover " src="{{ asset($filteredJob->thumbnail) }}" alt="{{ $filteredJob->position }}">
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
        {!! $jobs->links() !!}
    </section>

@endsection
