@extends('layout.user')

@section('title', 'Profile Settings')

@section('contents')
    <section>
        <div class="lg:w-[80%] md:w-[90%] xs:w-[96%] mx-auto flex gap-4">
            <div
                class="lg:w-[88%] md:w-[80%] sm:w-[88%] xs:w-full mx-auto rounded-xl  dark:bg-gray-800/40">
                <!--  -->
                <div>
                    <h1
                        class="lg:text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold dark:text-white">
                        Profile
                    </h1>
                    <form method="GET" enctype="multipart/form-data" >
                        <!-- Cover Image -->
                        <div
                            class=" rounded-sm bg-[url('https://images.unsplash.com/photo-1449844908441-8829872d2607?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxob21lfGVufDB8MHx8fDE3MTA0MDE1NDZ8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover bg-center bg-no-repeat">
                            <!-- Profile Image -->
                            <div
                                class=" flex justify-center bg-blue-300/20 rounded-full bg-[url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxwcm9maWxlfGVufDB8MHx8fDE3MTEwMDM0MjN8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover  bg-no-repeat">

                                <div class="bg-white/90 text-center">

                                    <img class="w-11/12 mx-auto" src="https://imgs.search.brave.com/vNq2jFE3XACsBNx6XivyUP5r0PYaPjic3GaSsrkaloE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAyLzE3LzM0LzY3/LzM2MF9GXzIxNzM0/Njc4Ml83WHBDVHQ4/YkxOSnF2VkFhRFpK/d3Zaam0wZXBRbWo2/ai5qcGc">

                                </div>
                            </div>
                        </div>
                        <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                            <div class="w-full  mb-4 mt-6">
                                <label for="" class="mb-2 dark:text-gray-300">Username</label>
                                <input type="text"
                                       value="{{auth()->user()->name}}"
                                       class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                       placeholder="First Name">
                            </div>
                            <div class="w-full  mb-4 lg:mt-6">
                                <label for="" class=" dark:text-gray-300">Email</label>
                                <input type="text"
                                       value="{{auth()->user()->email}}"
                                       class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                       placeholder="Email">
                            </div>
                        </div>
                        <div class="w-full rounded-lg bg-blue-500 mt-4 text-white text-lg font-semibold">
                            <button type="submit" class="w-full p-4">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
