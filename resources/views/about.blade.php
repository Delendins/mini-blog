@extends('layouts.home')

@section('container')
    <div class="wrapper">
        <div class="bg-image h-screen">
            <div class="flex justify-center items-center h-full">
                <a href="">
                    <h1
                        class="text-white text-2xl font-bold p-2 px-8 border-2 hover:bg-white hover:text-slate-800 hover:border-none transition">
                        ABOUT US</h1>
                </a>
            </div>
        </div>
        <div class="about my-12 flex place-content-around">
            <div class="grid grid-cols-3 mx-auto p-8">
                <div class="col-span-2">
                    <h1 class="text-6xl font-bold">Who are we?</h1>
                    <br>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis atque ullam, corrupti debitis
                        itaque adipisci ex rem inventore. Placeat expedita iure repudiandae voluptatem architecto voluptas
                        explicabo eligendi dolor fugiat dolores blanditiis suscipit accusantium ex error, at eum consequatur
                        reiciendis cumque dicta fugit culpa aperiam obcaecati animi quod. Delectus, modi repudiandae! Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Debitis illo voluptate a quibusdam quae, id
                        deleniti perferendis qui. Vitae, eos nostrum eum minus est nulla necessitatibus molestias sit porro
                        tenetur culpa eveniet doloribus magni veniam, velit officiis dignissimos atque voluptatum accusamus
                        dicta aliquam optio! Fugit accusamus eius neque id sequi.</p>
                    <br>
                    <br>
                    <div class="flex gap-4">
                        <a href="">
                            <div class="px-8 py-2 bg-slate-800 text-white">Button</div>
                        </a>
                        <a href="">
                            <div class="px-8 py-2 border border-slate-800 text-slate-800">Button</div>
                        </a>
                    </div>
                </div>
                <div class="col-span-1 flex justify-center">
                    <img src="https://source.unsplash.com/random/300x500" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
