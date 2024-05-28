@extends('layout.user')
@section('contents')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="mt-14">

        <div>
            <div x-data="{ open: false }" class="relative overflow-hidden bg-blue-900 pb-32 rounded-t-lg">
                <div aria-hidden="true" x-state:on="Menu open" x-state:off="Menu closed"
                     class="inset-y-0 absolute inset-x-0 left-1/2 w-full -translate-x-1/2 transform overflow-hidden lg:inset-y-0"
                     :class="{ 'bottom-0': open, 'inset-y-0': !(open) }">
                    <div class="absolute inset-0 flex">
                        <div class="h-full w-1/2" style="background-color: #0a527b"></div>
                        <div class="h-full w-1/2" style="background-color: #065d8c"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <svg class="flex-shrink-0" width="1750" height="308" viewBox="0 0 1750 308"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M284.161 308H1465.84L875.001 182.413 284.161 308z" fill="#0369a1"></path>
                            <path d="M1465.84 308L16.816 0H1750v308h-284.16z" fill="#065d8c"></path>
                            <path d="M1733.19 0L284.161 308H0V0h1733.19z" fill="#0a527b"></path>
                            <path d="M875.001 182.413L1733.19 0H16.816l858.185 182.413z" fill="#0a4f76"></path>
                        </svg>
                    </div>
                </div>
                <header class="relative py-10 ">
                    <div class="mx-auto max-w-9xl px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold tracking-tight text-white">Settings</h1>
                    </div>
                </header>
            </div>

            <main class="relative -mt-32">
                <div class="mx-auto max-w-screen-xl px-4 pb-6 sm:px-6 lg:px-8 lg:pb-16">
                    <div class="overflow-hidden rounded-lg bg-white shadow">
                        <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                            <aside class="py-6 lg:col-span-3">
                                <nav class="space-y-1">
                                    <a href="#"
                                       class="bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                                       x-state:on="Current" x-state:off="Default" aria-current="page"
                                       x-state-description="Current: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, Default: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             x-state:on="Current" x-state:off="Default"
                                             x-state-description="Current: &quot;text-teal-500 group-hover:text-teal-500&quot;, Default: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                                             x-description="Heroicon name: outline/user-circle" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                            </path>
                                        </svg>
                                        <span class="truncate">Profile</span>
                                    </a>

                                    <a href="#"
                                       class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                                       x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             x-state-description="undefined: &quot;text-teal-500 group-hover:text-teal-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                                             x-description="Heroicon name: outline/cog" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495">
                                            </path>
                                        </svg>
                                        <span class="truncate">Account</span>
                                    </a>

                                    <a href="#"
                                       class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                                       x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             x-state-description="undefined: &quot;text-teal-500 group-hover:text-teal-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                                             x-description="Heroicon name: outline/key" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z">
                                            </path>
                                        </svg>
                                        <span class="truncate">Make resume</span>
                                    </a>

                                    <a href="#"
                                       class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                                       x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             x-state-description="undefined: &quot;text-teal-500 group-hover:text-teal-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                                             x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                                            </path>
                                        </svg>
                                        <span class="truncate">Notifications</span>
                                    </a>

                                    <a href="#"
                                       class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                                       x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             x-state-description="undefined: &quot;text-teal-500 group-hover:text-teal-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                                             x-description="Heroicon name: outline/credit-card" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z">
                                            </path>
                                        </svg>
                                        <span class="truncate">Billing</span>
                                    </a>

                                    <a href="{{'/logout'}}"
                                       class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                                       x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                        </svg>

                                      {{--  <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                             x-state-description="undefined: &quot;text-teal-500 group-hover:text-teal-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;"
                                             x-description="Heroicon name: outline/squares-plus" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z">
                                            </path>
                                        </svg>--}}
                                        <span class="truncate">Log out</span>
                                    </a>

                                </nav>
                            </aside>

                            <form class="divide-y divide-gray-200 lg:col-span-9" action="#" method="POST">
                                <!-- Profile section -->
                                <div class="py-6 px-4 sm:p-6 lg:pb-8">
                                    <div>
                                        <h2 class="text-lg font-medium leading-6 text-gray-900">Profile</h2>
                                        <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what
                                            you share.</p>
                                    </div>

                                    <div class="mt-6 flex flex-col lg:flex-row">
                                        <div class="flex-grow space-y-6">
                                            <div>
                                                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm">workcation.com/</span>
                                                    <input type="text" name="username" id="username" autocomplete="username" class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm" value="deblewis">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                                                <div class="mt-1">
                                                    <textarea id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm"></textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-shrink-0 lg:flex-grow-0">
                                            <p class="text-sm font-medium text-gray-700" aria-hidden="true">Photo</p>
                                            <div class="mt-1 lg:hidden">
                                                <div class="flex items-center">
                                                    <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full"
                                                         aria-hidden="true">
                                                        <img class="h-full w-full rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=320&amp;h=320&amp;q=80" alt="">
                                                    </div>
                                                    <div class="ml-5 rounded-md shadow-sm">
                                                        <div
                                                            class="group relative flex items-center justify-center rounded-md border border-gray-300 py-2 px-3 focus-within:ring-2 focus-within:ring-sky-500 focus-within:ring-offset-2 hover:bg-gray-50">
                                                            <label for="mobile-user-photo" class="pointer-events-none relative text-sm font-medium leading-4 text-gray-700">
                                                                <span>Change</span>
                                                                <span class="sr-only"> user photo</span>
                                                            </label>
                                                            <input id="mobile-user-photo" name="user-photo" type="file" class="absolute h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="relative hidden overflow-hidden rounded-full lg:block">
                                                <img class="relative h-40 w-40 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=320&amp;h=320&amp;q=80" alt="">
                                                <label for="desktop-user-photo" class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100">
                                                    <span>Change</span>
                                                    <span class="sr-only"> user photo</span>
                                                    <input type="file" id="desktop-user-photo" name="user-photo" class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0">
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-6 grid grid-cols-12 gap-6">
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-12">
                                            <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                                            <input type="text" name="url" id="url" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                                            <input type="text" name="company" id="company" autocomplete="organization" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div>

                                <!-- Privacy section -->
                                <div class="divide-y divide-gray-200 pt-6">
                                    <div class="px-4 sm:px-6">
                                        <div>
                                            <h2 class="text-lg font-medium leading-6 text-gray-900">Privacy</h2>
                                            <p class="mt-1 text-sm text-gray-500">Ornare eu a volutpat eget vulputate. Fringilla commodo amet.
                                            </p>
                                        </div>
                                        <ul role="list" class="mt-2 divide-y divide-gray-200">
                                            <li class="flex items-center justify-between py-4" x-data="{ on: true }">
                                                <div class="flex flex-col">
                                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">Available to hire</p>
                                                    <p class="text-sm text-gray-500" id="privacy-option-1-description">Nulla amet tempus sit
                                                        accumsan. Aliquet turpis sed sit lacinia.</p>
                                                </div>
                                                <button type="button" class="bg-gray-200 relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2" role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-teal-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-1-label" aria-describedby="privacy-option-1-description" :aria-checked="on.toString()" @click="on = !on">
                                                    <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                                </button>
                                            </li>
                                            <li class="flex items-center justify-between py-4" x-data="{ on: false }">
                                                <div class="flex flex-col">
                                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">Make account private
                                                    </p>
                                                    <p class="text-sm text-gray-500" id="privacy-option-2-description">Pharetra morbi dui mi mattis
                                                        tellus sollicitudin cursus pharetra.</p>
                                                </div>
                                                <button type="button" class="bg-gray-200 relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2" role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-teal-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-2-label" aria-describedby="privacy-option-2-description" :aria-checked="on.toString()" @click="on = !on">
                                                    <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                                </button>
                                            </li>
                                            <li class="flex items-center justify-between py-4" x-data="{ on: true }">
                                                <div class="flex flex-col">
                                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">Allow commenting</p>
                                                    <p class="text-sm text-gray-500" id="privacy-option-3-description">Integer amet, nunc hendrerit
                                                        adipiscing nam. Elementum ame</p>
                                                </div>
                                                <button type="button" class="bg-gray-200 relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2" role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-teal-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-3-label" aria-describedby="privacy-option-3-description" :aria-checked="on.toString()" @click="on = !on">
                                                    <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                                </button>
                                            </li>
                                            <li class="flex items-center justify-between py-4" x-data="{ on: true }">
                                                <div class="flex flex-col">
                                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">Allow mentions</p>
                                                    <p class="text-sm text-gray-500" id="privacy-option-4-description">Adipiscing est venenatis enim
                                                        molestie commodo eu gravid</p>
                                                </div>
                                                <button type="button" class="bg-gray-200 relative ml-4 inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2" role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-teal-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-4-label" aria-describedby="privacy-option-4-description" :aria-checked="on.toString()" @click="on = !on">
                                                    <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-4 flex justify-end py-4 px-4 sm:px-6">
                                        <button type="button" class="inline-flex justify-center rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Cancel</button>
                                        <button type="submit" class="ml-5 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
@endsection
