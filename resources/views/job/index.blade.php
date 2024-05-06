@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
    @section('contents')
        <main class="mt-10 md:mt-top-content mb-top-title p-3">
            <section class="mx-auto  max-w-screen-xl">
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
        </main>
    @endsection
