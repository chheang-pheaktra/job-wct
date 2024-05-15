<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
<header class="px-4 py-2 shadow">
    <div class="flex justify-between">
        <div class="flex items-center">
            <button data-menu class="p-4 -ml-3 focus:outline-none" type="button">
                <svg class="fill-current w-5" viewBox="0 -21 384 384">
                    <path d="M362.668 0H21.332C9.578 0 0 9.578 0 21.332V64c0 11.754 9.578 21.332 21.332 21.332h341.336C374.422 85.332 384 75.754 384 64V21.332C384 9.578 374.422 0 362.668 0zm0 0M362.668 128H21.332C9.578 128 0 137.578 0 149.332V192c0 11.754 9.578 21.332 21.332 21.332h341.336c11.754 0 21.332-9.578 21.332-21.332v-42.668c0-11.754-9.578-21.332-21.332-21.332zm0 0M362.668 256H21.332C9.578 256 0 265.578 0 277.332V320c0 11.754 9.578 21.332 21.332 21.332h341.336c11.754 0 21.332-9.578 21.332-21.332v-42.668c0-11.754-9.578-21.332-21.332-21.332zm0 0" />
                </svg>
            </button>

            <button data-search class="p-4 md:hidden focus:outline-none" type="button">
                <svg data-search-icon class="fill-current w-4" viewBox="0 0 512 512" style="top: 0.7rem; left: 1rem;">
                    <path d="M225.474 0C101.151 0 0 101.151 0 225.474c0 124.33 101.151 225.474 225.474 225.474 124.33 0 225.474-101.144 225.474-225.474C450.948 101.151 349.804 0 225.474 0zm0 409.323c-101.373 0-183.848-82.475-183.848-183.848S124.101 41.626 225.474 41.626s183.848 82.475 183.848 183.848-82.475 183.849-183.848 183.849z" />
                    <path d="M505.902 476.472L386.574 357.144c-8.131-8.131-21.299-8.131-29.43 0-8.131 8.124-8.131 21.306 0 29.43l119.328 119.328A20.74 20.74 0 00491.187 512a20.754 20.754 0 0014.715-6.098c8.131-8.124 8.131-21.306 0-29.43z" />
                </svg>
            </button>

            <div data-search-form class="relative mr-3 hidden md:inline-block">
                <div class="text-gray-500">
                    <svg data-search-icon class="absolute fill-current w-4" viewBox="0 0 512 512" style="top: 0.7rem; left: 1rem;">
                        <path d="M225.474 0C101.151 0 0 101.151 0 225.474c0 124.33 101.151 225.474 225.474 225.474 124.33 0 225.474-101.144 225.474-225.474C450.948 101.151 349.804 0 225.474 0zm0 409.323c-101.373 0-183.848-82.475-183.848-183.848S124.101 41.626 225.474 41.626s183.848 82.475 183.848 183.848-82.475 183.849-183.848 183.849z" />
                        <path d="M505.902 476.472L386.574 357.144c-8.131-8.131-21.299-8.131-29.43 0-8.131 8.124-8.131 21.306 0 29.43l119.328 119.328A20.74 20.74 0 00491.187 512a20.754 20.754 0 0014.715-6.098c8.131-8.124 8.131-21.306 0-29.43z" />
                    </svg>
                </div>
                <input type="text" placeholder="Search" name="search" id="search" class="h-auto pl-10 py-2 bg-gray-200 text-sm border border-gray-500 rounded-full focus:outline-none focus:bg-white">
            </div>
        </div>
        <div class="flex items-center">
            <button data-messages class="p-3 mr-2 focus:outline-none hover:bg-gray-200 hover:rounded-md" typle="button">
                <svg class="fill-current w-5" viewBox="0 0 512 512">
                    <path d="M339.392 258.624L512 367.744V144.896zM0 144.896v222.848l172.608-109.12zM480 80H32C16.032 80 3.36 91.904.96 107.232L256 275.264l255.04-168.032C508.64 91.904 495.968 80 480 80zM310.08 277.952l-45.28 29.824a15.983 15.983 0 01-8.8 2.624c-3.072 0-6.112-.864-8.8-2.624l-45.28-29.856L1.024 404.992C3.488 420.192 16.096 432 32 432h448c15.904 0 28.512-11.808 30.976-27.008L310.08 277.952z" />
                </svg>
            </button>
            <button data-notifications class="p-3 mr-3 focus:outline-none hover:bg-gray-200 hover:rounded-md" typle="button">
                <svg class="fill-current w-5" viewBox="-21 0 512 512">
                    <path d="M213.344 512c38.636 0 70.957-27.543 78.379-64H134.965c7.426 36.457 39.746 64 78.379 64zm0 0M362.934 255.98c-.086 0-.172.02-.258.02-82.324 0-149.332-66.988-149.332-149.332 0-22.637 5.207-44.035 14.273-63.277-4.695-.446-9.453-.723-14.273-.723-82.473 0-149.332 66.855-149.332 149.332v59.477c0 42.218-18.496 82.07-50.946 109.503C2.25 370.22-2.55 384.937 1.332 399.297c4.523 16.703 21.035 27.371 38.36 27.371H386.89c18.175 0 35.308-11.777 38.996-29.59 2.86-13.781-2.047-27.543-12.735-36.523-31.02-26.004-48.96-64.215-50.218-104.575zm0 0" />
                    <path style="fill: red;" d="M469.344 106.668c0 58.91-47.754 106.664-106.668 106.664-58.91 0-106.664-47.754-106.664-106.664C256.012 47.758 303.766 0 362.676 0c58.914 0 106.668 47.758 106.668 106.668zm0 0" />
                </svg>
            </button>

            <button data-dropdown class="flex items-center px-3 py-2 focus:outline-none hover:bg-gray-200 hover:rounded-md" type="button" x-data="{ open: false }" @click="open = true" :class="{ 'bg-gray-200 rounded-md': open }">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&h=100&q=80" alt="Profle" class="h-8 w-8 rounded-full">

                <span class="ml-4 text-sm hidden md:inline-block">{{auth()->user()->name}}</span>
                <svg class="fill-current w-3 ml-4" viewBox="0 0 407.437 407.437">
                    <path d="M386.258 91.567l-182.54 181.945L21.179 91.567 0 112.815 203.718 315.87l203.719-203.055z" />
                </svg>

                <div data-dropdown-items class="text-sm text-left absolute top-0 right-0 mt-16 mr-4 bg-white rounded border border-gray-400 shadow" x-show="open" @click.away="open = false">
                    <ul>
                        <li class="px-4 py-3 border-b hover:bg-blue-200"><a href="{{route('admin/profile')}}">My Profile</a></li>
                        <li class="px-4 py-3 border-b hover:bg-blue-200"><a href="{{route('admin/profile')}}">Settings</a></li>
                        <li class="px-4 py-3 hover:bg-blue-200"><a href="{{ route('logout') }}">Log out</a></li>
                    </ul>
                </div>
            </button>

        </div>
    </div>
</header>

<div class="flex flex-row">
    <div class="flex flex-col w-64 overflow-y-auto bg-gray-900 border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
        <div class="sidebar text-center bg-gray-900">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">
                    <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                    <h1 class="font-bold text-gray-200 text-[15px] ml-3">Admin</h1>
                </div>
                <div class="my-2 bg-gray-600 h-[1px]"></div>
            </div>
            <a href="{{url('admin/home') }}">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="bi bi-house-door-fill"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
                </div>
            </a>
            <a href="{{ url('admin/category') }}">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z"/>
                    </svg>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Category</span>
                </div>
            </a>
            <a href="{{url('admin/career') }}">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-duffle-fill" viewBox="0 0 16 16">
                        <path d="M5.007 4.097q.011-.146.027-.298c.05-.464.141-.979.313-1.45.169-.465.432-.933.853-1.249 1.115-.836 2.485-.836 3.6 0 .42.316.684.784.853 1.25.171.47.263.985.313 1.449q.016.15.027.298c1.401.194 2.65.531 3.525 1.012 2.126 1.169 1.446 6.095 1.089 8.018a.954.954 0 0 1-.95.772H1.343a.954.954 0 0 1-.95-.772c-.357-1.923-1.037-6.85 1.09-8.018.873-.48 2.123-.818 3.524-1.012M4.05 5.633a22 22 0 0 0-1.565.352l-.091.026-.034.01a.5.5 0 0 0 .282.959l.005-.002.02-.005.08-.023a21 21 0 0 1 1.486-.334A21 21 0 0 1 8 6.25c1.439 0 2.781.183 3.767.367a21 21 0 0 1 1.567.356l.02.005.004.001a.5.5 0 0 0 .283-.959h-.003l-.006-.002-.025-.007a15 15 0 0 0-.43-.113 22 22 0 0 0-1.226-.265A22 22 0 0 0 8 5.25c-1.518 0-2.926.192-3.95.383M6.8 1.9c-.203.153-.377.42-.513.791a5.3 5.3 0 0 0-.265 1.292 35 35 0 0 1 1.374-.076c.866-.022 1.742.003 2.584.076a5.3 5.3 0 0 0-.266-1.292c-.135-.372-.309-.638-.513-.791-.76-.57-1.64-.57-2.4 0Z"/>
                    </svg>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Career</span>
                </div>
            </a>
            <a href="{{url('admin/apply/index') }}">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-duffle-fill" viewBox="0 0 16 16">
                        <path d="M5.007 4.097q.011-.146.027-.298c.05-.464.141-.979.313-1.45.169-.465.432-.933.853-1.249 1.115-.836 2.485-.836 3.6 0 .42.316.684.784.853 1.25.171.47.263.985.313 1.449q.016.15.027.298c1.401.194 2.65.531 3.525 1.012 2.126 1.169 1.446 6.095 1.089 8.018a.954.954 0 0 1-.95.772H1.343a.954.954 0 0 1-.95-.772c-.357-1.923-1.037-6.85 1.09-8.018.873-.48 2.123-.818 3.524-1.012M4.05 5.633a22 22 0 0 0-1.565.352l-.091.026-.034.01a.5.5 0 0 0 .282.959l.005-.002.02-.005.08-.023a21 21 0 0 1 1.486-.334A21 21 0 0 1 8 6.25c1.439 0 2.781.183 3.767.367a21 21 0 0 1 1.567.356l.02.005.004.001a.5.5 0 0 0 .283-.959h-.003l-.006-.002-.025-.007a15 15 0 0 0-.43-.113 22 22 0 0 0-1.226-.265A22 22 0 0 0 8 5.25c-1.518 0-2.926.192-3.95.383M6.8 1.9c-.203.153-.377.42-.513.791a5.3 5.3 0 0 0-.265 1.292 35 35 0 0 1 1.374-.076c.866-.022 1.742.003 2.584.076a5.3 5.3 0 0 0-.266-1.292c-.135-.372-.309-.638-.513-.791-.76-.57-1.64-.57-2.4 0Z"/>
                    </svg>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Apply</span>
                </div>
            </a>
            <a href="{{url('admin/testing/index') }}">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                        <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                    </svg>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Test</span>
                </div>
            </a>
            <a href="{{ url('admin/profile') }}">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Profile</span>
                </div>
            </a>
            <a href="{{url('logout') }}">
                <div class="my-4 bg-gray-600 h-[1px]"></div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
                </div>
            </a>
        </div>
    </div>
    <div class="flex flex-col w-full h-screen px-4 py-8 mt-10">
        <div>@yield('contents')</div>
    </div>
</div>
</body>

</html>
