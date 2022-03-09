<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
    [
        "title" => "Judul post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Zidna",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur consectetur, modi dolorem praesentium hic debitis voluptatem a possimus nihil. Cum ut est porro quasi, consequuntur vitae earum aliquam vero dolorem tempora saepe animi! Ipsum laboriosam, quas ad magni provident nisi perspiciatis. Rem quisquam minima labore dicta amet veniam quae eum quas quis nostrum. Facilis modi hic omnis dolorum, deleniti eaque, molestias repellendus corporis aperiam necessitatibus voluptatem repellat odio rerum! Ipsum, itaque incidunt. Aliquid, tempora labore? Veritatis placeat reiciendis voluptatum natus."], [
        "title" => "Judul post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Doni",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur consectetur, modi dolorem praesentium hic debitis voluptatem a possimus nihil. Cum ut est porro quasi, consequuntur vitae earum aliquam vero dolorem tempora saepe animi! Ipsum laboriosam, quas ad magni provident nisi perspiciatis. Rem quisquam minima labore dicta amet veniam quae eum quas quis nostrum. Facilis modi hic omnis dolorum, deleniti eaque, molestias repellendus corporis aperiam necessitatibus voluptatem repellat odio rerum! Ipsum, itaque incidunt. Aliquid, tempora labore? Veritatis placeat Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur consectetur, modi dolorem praesentium hic debitis voluptatem a possimus nihil. Cum ut est porro quasi, consequuntur vitae earum aliquam vero dolorem tempora saepe animi! Ipsum laboriosam, quas ad magni provident nisi perspiciatis. Rem quisquam minima labore dicta amet veniam quae eum quas quis nostrum. Facilis modi hic omnis dolorum, deleniti eaque, molestias repellendus corporis aperiam necessitatibus voluptatem repellat odio rerum! Ipsum, itaque incidunt. Aliquid, tempora labore? Veritatis placeatreiciendis voluptatum natus."
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
