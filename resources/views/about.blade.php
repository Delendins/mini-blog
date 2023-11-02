@extends('layouts.main')

@section('container')
    <div class="wrapper bg-slate-200">
        <div class="h-screen bg-image">
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
        </div>

        <div id="about">
            <div class="about my-12 flex place-content-around">
                <div class="grid grid-cols-3 mx-24 p-8">
                    <div class="col-span-2 flex items-center justify-center">
                        <div>
                            <h1 class="text-6xl font-bold">Who are we?</h1>
                            <br>
                            <br>
                            <p class="text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis
                                atque
                                ullam, corrupti debitis
                                itaque adipisci ex rem inventore. Placeat expedita iure repudiandae voluptatem architecto
                                voluptas
                                explicabo eligendi dolor fugiat dolores blanditiis suscipit accusantium ex error, at eum
                                consequatur
                                reiciendis cumque dicta fugit culpa aperiam obcaecati animi quod. Delectus, modi
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
                                <a href="">
                                    <div
                                        class="px-8 py-2 bg-slate-800 text-white rounded-lg shadow-lg hover:bg-slate-900 transition">
                                        Button</div>
                                </a>
                                <a href="">
                                    <div class="px-8 py-2 border border-slate-800 text-slate-800 rounded-lg shadow-lg">
                                        Button
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-end">
                        <img class="rounded-lg shadow-lg" src="https://source.unsplash.com/random/300x500" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="members">
            <div class="text-center font-bold text-6xl">
                <h1>Our members</h1>
            </div>
            <div class="members my-12 flex place-content-around">
                <div class="grid grid-cols-12 mx-40 pt-8 px-8 gap-12">
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130" alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130" alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130" alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130" alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Similique, dolores."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="members my-12 flex place-content-around">
                <div class="grid grid-cols-12 mx-40 px-8 gap-12">
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130" alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130" alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130" alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130" alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="members my-12 flex place-content-around">
                <div class="grid grid-cols-12 mx-40 px-8 gap-12">
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130"
                                    alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130"
                                    alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130"
                                    alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130"
                                    alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="members my-12 flex place-content-around">
                <div class="grid grid-cols-12 mx-40 pb-8 px-8 gap-12">
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130"
                                    alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130"
                                    alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130"
                                    alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="border rounded-lg shadow-lg p-4 py-8">
                            <div class="flex justify-center items-center">
                                <img class="rounded-full" src="https://source.unsplash.com/random/130x130"
                                    alt="">
                            </div>
                            <br>
                            <h1 class="text-xl font-bold text-center">Nama Anda Siapa</h1>
                            <p class="text-center text-slate-500">Jabatan</p>
                            <br>
                            <p class=" text-center text-slate-500">"Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Similique, dolores."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
