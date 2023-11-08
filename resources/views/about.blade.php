@extends('layouts.main')

@section('container')
    <div class="wrapper">
        {{-- <div class="h-screen bg-[url('../../public/images/about/about-image-background.jpg')]">
            <div class="flex justify-center items-center h-full z-10">
                <div>
                    <p class="block text-white text-3xl text-center">
                        <span class="text-6xl text-slate-800">"</span>If you cannot do great things, do small things in a
                        great way.<span class="text-6xl text-slate-800">"</span>
                    </p>
                    <p class="text-center text-2xl text-white mt-6"><span class="text-2xl text-slate-800">-</span>Napoleon
                        Hill</p>
                    <div class="flex justify-center gap-x-5 text-white mt-12">
                        <a href="#about">
                            <h1
                                class="text-white text-2xl p-2 px-8 mx-auto border-2 rounded-lg hover:bg-white hover:text-slate-800 transition">
                                ABOUT US
                            </h1>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="about">
            <div class="about my-12 xl:mx-32 mx-0 flex place-content-around">
                <div class="grid lg:grid-cols-3 mx-12 min-[0px]:mx-6 max-[640px] py-8 pb-24">
                    <div class="xl:col-span-2 lg:col-span-3 flex items-center justify-center">
                        <div>
                            <h1 class="text-6xl font-bold">About us</h1>
                            <br>
                            <br>
                            <p class="text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis
                                atque
                                ullam, corrupti debitis
                                itaque adipisci ex rem inventore. Placeat expedita iure repudiandae voluptatem architecto
                                voluptas
                                explicabo eligendi dolor fugiat dolores blanditiis suscipit accusantium ex error, at eum
                                consequatur
                                reiciendis cumque dicta fugit culpa aperiam obcaecati animi quod. <br><br>Delectus, modi
                                repudiandae!
                                Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Debitis illo voluptate a quibusdam quae,
                                id
                                deleniti perferendis qui. Vitae, eos nostrum eum minus est nulla necessitatibus molestias
                                sit
                                porro
                                tenetur culpa eveniet doloribus magni veniam, velit officiis dignissimos atque voluptatum
                                accusamus
                                dicta aliquam optio! Fugit accusamus eius neque id sequi.</p>
                            <br>
                            <br>
                            <div class="flex gap-4">
                                <a href="#">
                                    <div
                                        class="px-8 py-2 bg-slate-800 text-white rounded-lg shadow-lg hover:bg-slate-900 transition">
                                        Button</div>
                                </a>
                                <a href="#">
                                    <div class="px-8 py-2 border border-slate-800 text-slate-800 rounded-lg shadow-lg">
                                        Button
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="min-[0px]:hidden max-[640px] lg:hidden xl:flex xl:justify-end">
                        <img class="rounded-lg shadow-lg" width="350px" height="550px"
                            src="https://images.unsplash.com/photo-1590099914662-a76f2f83b802?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="statistics">
            <div class="my-12 mx-12 xl:mx-36 py-8 flex justify-center items-center border-t border-b">
                <dl class="lg:flex md:flex auto-cols-auto gap-48">
                    <div class="flex min-[0px]:my-12 text-center max-[640px] flex-col-reverse">
                        <dt class="text-lg leading-7 text-slate-500">Users</dt>
                        <dd class="text-3xl font-bold leading-9 tracking-tight">{{ $userCount }}</dd>
                    </div>
                    <div class="flex min-[0px]:my-12 text-center max-[640px] flex-col-reverse">
                        <dt class="text-lg leading-7 text-slate-500">Categories</dt>
                        <dd class="text-3xl font-bold leading-9 tracking-tight">{{ $categoryCount }}</dd>
                    </div>
                    <div class="flex min-[0px]:my-12 text-center max-[640px] flex-col-reverse">
                        <dt class="text-lg leading-7 text-slate-500">Posts</dt>
                        <dd class="text-3xl font-bold leading-9 tracking-tight">{{ $blogCount }}</dd>
                    </div>
                </dl>
            </div>
        </div>

        <div id="members">
            <div class="bg-white my-24">
                <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
                    <div class="max-w-2xl">
                        <h2 class="text-6xl font-bold tracking-tight">Meet our team.</h2>
                        <p class="mt-6 text-lg leading-8 text-slate-500">Libero fames augue nisl porttitor nisi, quis. Id ac
                            elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
                    </div>
                    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <div>
                                    <h3 class="text-base font-bold leading-7 tracking-tight">Maftuh Romadon</h3>
                                    <p class="text-sm font-semibold leading-6 text-slate-500">Fullstack Developer
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <div>
                                    <h3 class="text-base font-bold leading-7 tracking-tight">Mohamad Ferdiansyah</h3>
                                    <p class="text-sm font-semibold leading-6 text-slate-500">Fullstack Developer
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="mx-48 mb-12">
            <div class="splide">
                <div class="splide__track">
                    <div class="splide__list">
                        @foreach ($members as $member)
                            <div class="splide__slide">
                                <div class="col-span-3 m-12">
                                    <div class="border rounded-lg shadow-lg p-4 py-8">
                                        <div class="flex justify-center items-center">
                                            <img class="rounded-full" width="130px" height="130px"
                                                src="https://images.unsplash.com/flagged/photo-1562599838-8cc871c241a5?auto=format&fit=crop&q=80&w=1780&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </div>
                                        <br>
                                        <h1 class="text-md font-bold text-center mt-3">{{ $member['name'] }}</h1>
                                        <p class="text-center text-slate-500">{{ $member['position'] }}</p>
                                        <br>
                                        <p class=" text-center text-slate-500">"{{ $member['quote'] }}"</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
