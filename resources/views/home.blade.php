@extends('layouts.main')

@section('container')
    <div class="min-[0px]:mx-6 max-[640px]">
        <div class="mx-auto max-w-2xl py-32">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight sm:text-6xl">Get information from all over the
                    world.
                </h1>
                <p class="mt-6 text-lg leading-8 text-slate-500">Acquire the essential information you require swiftly and
                    conveniently, no matter your location or the time of day. Empower yourself with the knowledge you seek,
                    effortlessly and on your own terms.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/blogs"
                        class="rounded-md bg-slate-800 px-6 py-3 text-sm font-semibold text-white shadow-lg hover:bg-slate-900 transition">Start
                        journey</a>
                </div>
            </div>
        </div>
    </div>

    <div class="m-12">
        <div
            class="xl:mx-auto mx-0 min-[0px]:mx-[-2rem] max-[640px] max-w-7xl px-6 lg:px-8 h-auto lg:py-24 min-[0px]:py-8 max-[640px] border flex items-center justify-center bg-slate-800 text-white rounded-lg shadow-lg">
            <div
                class="lg:grid lg:grid-cols-2 sm:grid-cols-1 sm:flex sm:flex-col-reverse min-[0px]:flex max-[640px] min-[0px]:flex-col-reverse max-[640px] gap-12">
                <div class="flex flex-wrap lg:justify-end min-[0px]:justify-center max-[640px] gap-2">
                    @foreach ($categories as $category)
                        <a class="my-2" href="blogs/category/{{ $category->slug }}"><span
                                class="p-2 px-4 border rounded-full hover:bg-white hover:text-slate-800 transition">{{ $category->name }}</span></a>
                    @endforeach
                    <a class="my-2" href="blogs/categories"><span
                            class="p-2 px-4 border rounded-full hover:bg-white hover:text-slate-800 transition">More
                            +</span></a>
                </div>
                <div class="flex justify-center items-center">
                    <h1 class="text-5xl font-bold lg:text-start min-[0px]:text-center max-[640px]">Discover Your Passion in
                        Diverse Categories</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-24 sm:py-12 mb-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-2">
                <div class="justify-start flex items-center">
                    <h1 class="text-4xl font-bold">Latest posts</h1>
                </div>
                <div class="justify-end flex items-center">
                    <a href="/blogs" class=" text-lg">See all posts &rarr;</a>
                </div>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($blogs as $blog)
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="relative py-7">
                            <a href="blogs/post/{{ $blog->slug }}">
                                <img class="rounded-lg shadow-lg "
                                    src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                    alt="">
                            </a>
                        </div>
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="blogs/post/{{ $blog->slug }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $blog->body }}</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" class="h-10 w-10 rounded-full bg-gray-50">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                    <a href="blogs/post/{{ $blog->slug }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $blog->user->name }}
                                    </a>
                                </p>
                                <p class="text-gray-600">{{ $blog->user->position }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
                <!-- More posts... -->
            </div>
        </div>
    </div>
@endsection
