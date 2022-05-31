<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Ahmad Riza",
        "email" => "rizanoer1404@gmail.com",
        "image" => "riza.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Ahmad",
            "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, laboriosam maxime possimus ex atque maiores velit officia dolore veritatis soluta quam suscipit doloremque vitae voluptatum nemo fugit, eos dolor provident facilis amet ab laborum corporis! Ut voluptate ducimus id impedit deleniti. Laboriosam, ratione provident. Est laudantium laboriosam dolores nesciunt ad cum deserunt atque sunt dolor. Quibusdam minus, molestiae atque fugit placeat quos libero deserunt beatae, officia magni iure maiores, blanditiis ad nisi nam voluptatem a? Hic eos impedit reiciendis autem."
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Riza",
            "body"      => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque corrupti dolore consectetur natus eos ratione dignissimos accusamus deserunt, ullam reiciendis necessitatibus iste cumque officiis odit explicabo ex ea nihil magnam? Cupiditate vel eligendi alias deserunt suscipit maxime assumenda id iste pariatur hic distinctio fuga odit quaerat esse mollitia ipsam tempora nulla ut culpa numquam quod, quidem nisi? Id, sint labore commodi quaerat debitis assumenda tempora excepturi. Perspiciatis cumque laudantium aperiam maiores, ipsa distinctio possimus expedita incidunt laboriosam, obcaecati commodi non molestias id tenetur fugiat eius? Ipsam mollitia adipisci error in, laborum doloribus autem quia, quas iure dicta nobis voluptas."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Ahmad",
            "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, laboriosam maxime possimus ex atque maiores velit officia dolore veritatis soluta quam suscipit doloremque vitae voluptatum nemo fugit, eos dolor provident facilis amet ab laborum corporis! Ut voluptate ducimus id impedit deleniti. Laboriosam, ratione provident. Est laudantium laboriosam dolores nesciunt ad cum deserunt atque sunt dolor. Quibusdam minus, molestiae atque fugit placeat quos libero deserunt beatae, officia magni iure maiores, blanditiis ad nisi nam voluptatem a? Hic eos impedit reiciendis autem."
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Riza",
            "body"      => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque corrupti dolore consectetur natus eos ratione dignissimos accusamus deserunt, ullam reiciendis necessitatibus iste cumque officiis odit explicabo ex ea nihil magnam? Cupiditate vel eligendi alias deserunt suscipit maxime assumenda id iste pariatur hic distinctio fuga odit quaerat esse mollitia ipsam tempora nulla ut culpa numquam quod, quidem nisi? Id, sint labore commodi quaerat debitis assumenda tempora excepturi. Perspiciatis cumque laudantium aperiam maiores, ipsa distinctio possimus expedita incidunt laboriosam, obcaecati commodi non molestias id tenetur fugiat eius? Ipsam mollitia adipisci error in, laborum doloribus autem quia, quas iure dicta nobis voluptas."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title"     => "single post",
        "post"      => $new_post
    ]);
});
