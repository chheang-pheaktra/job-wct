@extends('layout.user')
@section('contents')
    <div class="bg-gray-100 font-sans">
            <div class="flex flex-col justify-center items-center my-16">
                <h1 class="text-5xl font-bold text-gray-800 ">Choose Your Template</h1>
                <p class="text-2xl text-gray-600 mt-4">Create your own resume with our template.</p>

                <div class="flex justify-center mt-10 ">
                    <a href="{{'/create_resume'}}" class="w-1/2  h-1/2 ">
                        <img src="{{asset('/asset/resume1.jpeg')}}" class="object-cover ">
                    </a>
                    <a href="{{'/create_resume'}}" class="w-1/2 h-1/2">
                        <img src="{{asset('/asset/resume2.jpeg')}}" class="object-cover">
                    </a>
                </div>

            </div>
    </div>

@endsection
