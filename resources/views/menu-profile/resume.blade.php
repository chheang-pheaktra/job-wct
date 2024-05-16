@extends('layout.user')
@section('contents')

    <div class="bg-gray-100 font-sans">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col justify-center items-center my-16">
                <h1 class="text-5xl font-bold text-gray-800 leading-tight">Choose Your Template</h1>
                <p class="text-2xl text-gray-600 mt-4">Create your own resume with our template.</p>

                <div class="flex justify-center mt-10 ">
                    <a class="w-1/2 h-1/2 flex items-center justify-center">
                        <img src="{{asset('/asset/resume1.jpeg')}}" class="object-contain h-full w-full">
                    </a>
                    <a href="{{route('/create_resume')}}" class="w-1/2 h-1/2 flex items-center justify-center">
                        <img src="{{asset('/asset/resume2.jpeg')}}" class="object-contain h-full w-full">
                    </a>
                </div>


            </div>
        </div>
    </div>

@endsection
