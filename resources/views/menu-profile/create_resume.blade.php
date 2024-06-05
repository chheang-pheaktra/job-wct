@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <div class="flex mt-10">
        <div>
            <div class="p-4  mt-12 ">
                <details class="mb-2">
                    <summary class=" p-4 rounded-lg cursor-pointer shadow-md mb-4">
                        <span class="font-semibold">Personal details *</span>
                        <p>Add your name,contact information, social links and portfolio links .</p>
                    </summary>

                    <ul class="ml-8 space-y-4 justify-end">
                        <div class="rounded-lg border bg-white px-4 pt-8 pb-10 shadow-lg">
                            <div class="relative mx-auto w-36 rounded-full">
                        <span
                            class="absolute right-0 m-3 h-3 w-3 rounded-full bg-green-500 ring-2 ring-green-300 ring-offset-2"></span>
                                <img class="mx-auto h-auto w-full rounded-full"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                     alt="" />
                            </div>

                            <div class=" ">
                                <div class="w-full max-w-3xl mx-auto p-8">
                                    <div class="  p-8 rounded-lg   ">

                                        <div class="mb-6 ">
                                            <p>Add your name,contact information, social links and portfolio links .</p>
                                            <div class=" gap-4 mt-10">
                                                <div>
                                                    <label for="first_name" class="block text-gray-700  mb-1">First Name</label>
                                                    <input type="text" id="first_name"
                                                           class="w-full rounded-lg border py-2 px-3 ">
                                                </div>
                                                <div>
                                                    <label for="last_name" class="block text-gray-700  mb-1">Last Name</label>
                                                    <input type="text" id="last_name"
                                                           class="w-full rounded-lg border py-2 px-3 ">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="email" class="block text-gray-700 mb-1">
                                                    Email Address
                                                </label>
                                                <input type="email" name="email" id="email" placeholder=""
                                                       class="w-full rounded-lg border py-2 px-3 " />
                                            </div>


                                            <div class="mt-4">
                                                <label for="address" class="block text-gray-700 e mb-1">Address</label>
                                                <input type="text" id="address"
                                                       class="w-full rounded-lg border py-2 px-3 ">
                                            </div>

                                            <div class="mt-4">
                                                <label for="city" class="block text-gray-700  mb-1">Contact Number</label>
                                                <input type="text" id="call"
                                                       class="w-full rounded-lg border py-2 px-3 ">
                                            </div>

                                            <div class=" gap-4 mt-4">
                                                <div>
                                                    <label for="state" class="block text-gray-700  mb-1">City/Town</label>
                                                    <input type="text" id="state"
                                                           class="w-full rounded-lg border py-2 px-3 ">
                                                </div>
                                                <div>
                                                    <label for="zip" class="block text-gray-700  mb-1">Gender</label>
                                                    <select
                                                        class="w-full rounded-lg border py-2 px-3 ">
                                                        <option value="">Choose an options</option>
                                                        <option value="f">Female</option>
                                                        <option value="m">Male</option>
                                                        <option value="others">Prefer not to say</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="mt-4">
                                                <label for="card_number" class="block text-gray-700  mb-1">DATE
                                                    OF BIRTH</label>
                                                <input type="date" name="date" id="date"
                                                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mt-1 ">
                                <div class="w-full max-w-3xl mx-auto ">
                                    <div class="bg-white  p-8 rounded-lg shadow-md border ">

                                        <div class="mb-6 ">
                                            <span class="font-semibold">Add Website or soical links.</span>
                                            <p class="text-gray-300"> (optionals)</p>

                                            <div class="  gap-4 mt-10">
                                                <div class="mt-4">
                                                    <label for="address" class="block text-gray-700 e mb-1">Add Links</label>
                                                    <input type="text" id="address"
                                                           class="w-full rounded-lg border py-2 px-3 ">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
            <div class="p-4 mx-auto">
                <details class="mb-2">
                    <summary class=" p-4 rounded-lg cursor-pointer shadow-md mb-4">
                        <span class="font-semibold">Summary *</span>
                        <p>A summary is a great way to tell your story to potential employers. Write a few words about your skils and work experience.</p>
                    </summary>
                    <ul class="ml-8 space-y-4 justify-end">
                        <div class="rounded-lg border bg-gray px-4 pt-8 pb-10 shadow-lg">
                            <div class="w-full max-w-3xl mx-auto p-8">
                                <div class="  p-8 rounded-lg   ">


                                    <div class="w-full max-w-3xl mx-auto ">
                                        <div class="bg-gray-100  p-8 rounded-lg shadow-md border ">

                                            <div class="mb-6  ">
                                                <span class="text-gray-600">How to write a professional summary? </span>

                                                <ul class="text-gray-400">
                                                    <li> -Consider and record your most importatnt experience and skills.</li>
                                                    <li> -Carefully review job descriptions for positions you're interested for.  </li>
                                                    <li> -Take note of the requirements that over laps with your own qualifications.</li>
                                                </ul>

                                                <div class="  gap-4 ">
                                                    <div class="mt-4">
                                                        <div class="max-w-2xl mx-auto p-4">
                                                            <form action="/submit-post" method="POST">
                                                                <div class="mb-6">
                                                                    <label for="title" class="block text-lg font-medium text-gray-800 mb-1">CURRENT JOB TITLE/ DESIGNATION</label>
                                                                    <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
                                                                </div>

                                                                <div class="mb-6">
                                                                    <label for="content" class="block text-lg font-medium text-gray-800 mb-1">SUMMARY</label>
                                                                    <textarea id="content" name="content" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" rows="6" required></textarea>
                                                                </div>

                                                                <div class="mb-6">
                                                                    <label for="image" class="block text-lg font-medium text-gray-800 mb-1">NOTED Include a few more lines to describe yourself.</label>

                                                                </div>


                                                            </form>
                                                        </div>
                                                        <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
                                                        <script>
                                                            ClassicEditor
                                                                .create(document.querySelector('#content'))
                                                                .catch(error => {
                                                                    console.error(error);
                                                                });
                                                        </script>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

            <div class="p-4   mx-auto">
                <details class="mb-2">
                    <summary class=" p-4 rounded-lg cursor-pointer shadow-md mb-4">
                        <span class="font-semibold">Educational History *</span>
                        <p>A summary is a great way to tell your story to potential employers. Write a few words about your skils and work experience.</p>
                    </summary>

                    <div class=" gap-4 mt-10">

                        <div>
                            <label for="first_name" class="block text-gray-700  mb-1">Institute *</label>
                            <input type="text" id="first_name"
                                   class="w-full rounded-lg border py-2 px-3 ">
                        </div>
                        <div>
                            <label for="last_name" class="block text-gray-700  mb-1 ">Last Name</label>
                            <input type="text" id="last_name"
                                   class="w-full rounded-lg border py-2 px-3 ">
                        </div>
                    </div>
                    <div class="mb-6 mt-5">
                        <label for="image" class="block text-lg font-medium text-gray-800 mb-1">Duration</label>

                    </div>
                    <div>
                        <div class="mt-4">
                            <label for="card_number" class="block text-gray-700  mb-1">Start</label>
                            <input type="date" name="date" id="date"
                                   class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div>
                        <div class="mt-4">
                            <label for="card_number" class="block text-gray-700  mb-1">End</label>
                            <input type="date" name="date" id="date"
                                   class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                    </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-2 bg-indigo-500 text-white font-semibold rounded-md hover:bg-indigo-600 focus:outline-none">Create</button>
            </div>
        </div>
        <div class="flex justify-center w-16/12  ">
            <a href="{{'/create_resume'}}" class="w-1/2  h-1/2 ">
                <p class="text-4xl text-gray-600 mt-4 text-center mt-8">Profesional Blue</p>
                <img src="{{asset('/asset/resume1.jpeg')}}" class="object-cover mt-10 ">
            </a>
        </div>
    </div>
@endsection
