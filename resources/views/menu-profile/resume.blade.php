@extends('layout.user')
@section('contents')
    <div class="bg-white font-sans">
            <div class="flex flex-col justify-center items-center my-16">
                <h1 class="text-4xl font-bold text-gray-800 ">Select a Template for your résume</h1>
                <p class="text-l text-gray-600 mt-4">Worried about your design ? We have you covered. </p>
                <p class="text-l text-gray-600 mt-4">Choose a layout you prefer and we will fill your information </p>

                <div class="flex justify-center  ">
                    <a href="{{'/create_resume'}}" class="w-1/2  h-1/2 ">
                        <p class="text-4xl text-gray-600 mt-4 text-center mt-8">Profesional Blue</p>
                        <img src="{{asset('/asset/resume1.jpeg')}}" class="object-cover mt-10 ">
                    </a>
                    <a href="{{'/create_resume'}}" class="w-1/2 h-1/2">
                        <p class="text-4xl text-gray-600 mt-4 text-center mt-8">Contemperary </p>

                        <img src="{{asset('/asset/resume2.jpeg')}}" class="object-cover mt-10">
                    </a>
                </div>

            </div>
    </div>

@endsection
