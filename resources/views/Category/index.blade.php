@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <section>
        @if($categories->isEmpty())
            <img class="w-1/3 mx-auto mt-24" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9Q0TOXHGoPsoJ5Xf5YmFgJGy6FF0EhMR_-A&s">
        @else
            <div class="rounded-xl px-2 py-10">
                <div id="features" class="mx-auto max-w-6xl">
                    <p class="text-center text-base font-semibold leading-7 text-primary-500">Features</p>
                    <h2 class="text-center font-display text-3xl font-bold tracking-tight text-slate-600 md:text-4xl">
                        Categories job
                    </h2>
                    <ul class="mt-10 grid grid-cols-1 items-center gap-6 text-center text-blue-900 md:grid-cols-3">
                        @foreach($categories as $category)
                            @php
                                $jobCount = $jobs->where('category_id', $category->id)->count();
                            @endphp
                            <a href="{{ url('category_view/' . $category->id . '/' . $category->name) }}">
                                <li class="bg-blue-900 rounded-xl px-6 py-8 shadow-lg hover:scale-110 hover:duration-500">
                                    <h3 class="my-3 text-lg font-display font-medium text-white">{{ $category->name }}</h3>
                                    <p class="mt-1.5 text-sm leading-6 text-secondary-500 text-white">
                                        {{ $jobCount }} JOB
                                    </p>
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-6">
                    {{ $categories->links() }}
                </div>
            </div>
        @endif
    </section>
@endsection
