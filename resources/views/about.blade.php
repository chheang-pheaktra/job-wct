@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('title','ABOUT')
@section('contents')
    <main>
        <section class="mt-24">
            <div class="sm:flex items-center max-w-screen-xl ">
                <div class="sm:w-1/2 p-10">
                    <div class="image object-center text-center">
                        <img src="https://i.pinimg.com/originals/50/78/a0/5078a05eb1b6847d93383eaa4c0ed500.gif">
                    </div>
                </div>
                <div class="sm:w-1/2 p-5">
                    <div class="text">
                        <span class=" text-5xl text-black-500 border-indigo-600 uppercase">About us</span>
                        <h2 class="my-4 font-bold text-3xl  sm:text-5xl ">About <span class="text-[#1D5D9B]">CareerQuest</span>
                        </h2>
                        <p class="text-gray-700">
                            Welcome to CareerQuest, your personalized gateway to navigating the world of career opportunities. Designed for students and job seekers alike, CareerQuest empowers you to explore, discover, and pursue your career aspirations with confidence. Whether you're embarking on your first job search or seeking to advance your career, CareerQuest provides the tools, resources, and guidance you need to succeed.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <p class="text-6xl font-bold text-center mt-24">Meet our team</p>


        <section class="card flex justify-center gap-10  flex-wrap">
            <div class="text-center"></div>
            <div class="mt-10">
                <a class="p-5 mx-auto max-w-sm border border-[#1D5D9B] rounded-2xl hover:shadow-indigo-50 flex flex-col items-center"
                   href="#">
                    <img src="{{asset('asset/pheaktra.jpg')}}" class="shadow rounded-lg overflow-hidden border" >
                    <div class="mt-6">

                        <p class="mt-2 font-bold text-black">CHHEANG PHEAKTRA
                        </p>
                        <div class="mt-5">
                            <div class="flex items-center justify-center border-black">

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row-span-2 mt-10">
                <a class="p-5 mx-auto max-w-sm border border-[#1D5D9B] rounded-2xl hover:shadow-indigo-50 flex flex-col items-center"
                   href="#">
                    <img src="{{asset('asset/somanita.jpg')}}" class="shadow rounded-lg overflow-hidden border" >
                    <div class="mt-6">

                        <p class="mt-2 text-black font-bold">DY SOMANITA
                        </p>
                        <div class="mt-5">
                            <div class="flex items-center justify-center border-black">

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mt-10">
                <a class="p-5 mx-auto max-w-sm border border-[#1D5D9B] rounded-2xl  hover:shadow-indigo-50 flex flex-col items-center"
                   href="#">
                    <img src="{{asset('asset/sreyneat.jpg')}}" class="shadow rounded-lg overflow-hidden border" >
                    <div class="mt-6">

                        <p class="mt-2 text-black font-bold">CHHORN SREYNEAT
                        </p>
                        <div class="mt-5">
                            <div class="flex items-center justify-center border-black">

                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="mt-10">
                <a class="p-5 mx-auto max-w-sm border border-[#1D5D9B] rounded-2xl  hover:shadow-indigo-50 flex flex-col items-center"
                   href="#">
                    <img src="{{asset('asset/theavytek.jpg')}}" class="shadow  rounded-lg overflow-hidden border" >
                    <div class="mt-6">

                        <p class="mt-2 text-black font-bold">TEK SOTHEAVY
                        </p>
                        <div class="mt-5">
                            <div class="flex items-center justify-center border-black">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row-span-2 mt-10">
                <a class="p-5 mx-auto max-w-sm border border-[#1D5D9B] rounded-2xl hover:shadow-xl hover:shadow-indigo-50 flex flex-col items-center"
                   href="#">
                    <img src="{{asset('asset/meyneang.jpeg')}}" class="shadow rounded-lg overflow-hidden border" >
                    <div class="mt-8">

                        <p class="mt-2 font-bold text-black">THHAN MEYNEANG
                        </p>
                        <div class="mt-5">
                            <div class="flex items-center justify-center border-black">

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>
@endsection
