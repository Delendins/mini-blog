<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/blogs', function() {
    $article = [
        [
            "title" => "Mari kita mencari rejeki",
            "author" => "Maftuh Romadon",
            "position" => "Fullstack Developer",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
        ],
        [
            "title" => "Mari kita mencari rejeki",
            "author" => "Maftuh Romadon",
            "position" => "Fullstack Developer",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
        ],
        [
            "title" => "Mari kita mencari rejeki",
            "author" => "Maftuh Romadon",
            "position" => "Fullstack Developer",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
        ],
        [
            "title" => "Mari kita mencari rejeki",
            "author" => "Maftuh Romadon",
            "position" => "Fullstack Developer",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
        ],
        [
            "title" => "Mari kita mencari rejeki",
            "author" => "Maftuh Romadon",
            "position" => "Fullstack Developer",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
        ],
        [
            "title" => "Mari kita mencari rejeki",
            "author" => "Maftuh Romadon",
            "position" => "Fullstack Developer",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
        ],
        [
            "title" => "Mari kita mencari rejeki",
            "author" => "Maftuh Romadon",
            "position" => "Fullstack Developer",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
        ],
        [
            "title" => "Pentingnya sodaqoh",
            "author" => "Jefri Nichol",
            "position" => "Magang Developer",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
        ]
        ];
    return view('/blogs', [
        "title" => "Blogs",
        "blogs" => $article
    ]);
});
Route::get('/about', function() {
    return view('/about', [
        "title" => "About"
    ]);
});
// Route::get('/post/{slug}' function($slug) {
//     return view('post');
// });