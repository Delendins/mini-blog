<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;

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

Route::get('/', [HomeController::class, 'home']);

// Route::get('/', function () {
//     $latests = [
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//     ];

//     $categories = [
//         [
//             "name" => "News",
//             "slug" => "news"
//         ],
//         [
//             "name" => "Personal",
//             "slug" => "personal"
//         ],
//         [
//             "name" => "Web Programming",
//             "slug" => "web-programming"
//         ],
//         [
//             "name" => "Web Design",
//             "slug" => "web-design"
//         ],
//         [
//             "name" => "Cyber Security",
//             "slug" => "cyber-security"
//         ],
//         [
//             "name" => "Lifestyle",
//             "slug" => "lifestyle"
//         ],
//         [
//             "name" => "Mobile Programming",
//             "slug" => "mobile-programming"
//         ],
//         [
//             "name" => "Desktop Programming",
//             "slug" => "desktop-programming"
//         ],
//         [
//             "name" => "News",
//             "slug" => "news"
//         ],
//     ];
//     return view('/home', [
//         "title" => "Home",
//         "latests" => $latests,
//         "categories" => $categories
//     ]);
// });

Route::get('/about', [AboutController::class, 'about']);

// Route::get('/about', function () {
//     $teams = [
//         [
//             "name" => "Maftuh Romadon",
//             "position" => "Fullstack Developer"
//         ],
//         [
//             "name" => "Mohamad Ferdiansyah",
//             "position" => "Fullstack Developer"
//         ],
//     ];

//     $stats = [
//         [
//             "numbers" => "12",
//             "categories" => "Members",
//         ],
//         [
//             "numbers" => "20",
//             "categories" => "Categories",
//         ],
//         [
//             "numbers" => "300+",
//             "categories" => "Posts",
//         ],
//     ];
//     return view('/about', [
//         "title" => "About",
//         "teams" => $teams,
//         "stats" => $stats
//     ]);
// });

Route::get('/blogs', [PostController::class, 'index']);

// Route::get('/blogs', function () {
//     $article = [
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Mari kita mencari rejeki",
//             "author" => "Maftuh Romadon",
//             "position" => "Fullstack Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ],
//         [
//             "title" => "Pentingnya sodaqoh",
//             "author" => "Jefri Nichol",
//             "position" => "Magang Developer",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae fugiat sint sunt sequi obcaecati corrupti cupiditate cumque doloremque in! Eveniet, quia. Voluptates aspernatur totam a illo reprehenderit numquam corporis, perspiciatis obcaecati ipsam animi! Pariatur excepturi, amet fugit dolore fugiat maxime, ut quo similique cumque nulla aspernatur! Earum nisi illo impedit magnam quod cupiditate esse error aperiam fugit, corporis consequuntur officia, adipisci aut itaque atque, eum necessitatibus delectus dolores quasi minus libero. Natus, quos delectus id repudiandae laboriosam aliquid? Eum deleniti enim eligendi officiis nisi! Quae veniam ipsam ullam rem exercitationem repellendus ab nam excepturi. Alias hic nam obcaecati dolorem architecto."
//         ]
//     ];
//     return view('/blogs', [
//         "title" => "Blogs",
//         "blogs" => $article
//     ]);
// });

// Route::get('/post/{slug}' function($slug) {
//     return view('post');
// });