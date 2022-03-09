<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;
use App\models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'is_admin' => '1',
            'password' => bcrypt('admin')

        ]);

        User::create([
            'name' => 'author',
            'username' => 'author',
            'email' => 'author@mail.com',
            'password' => bcrypt('author')

        ]);

        // User::create([
        //     'name' => 'Doni',
        //     'email' => 'Doni@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum Pertama',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus explicabo quae suscipit consequatur molestiae iusto nemo quisquam esse! Quidem voluptatum assumenda atque voluptas magni optio molestias repellendus vitae sunt nemo rem, at quibusdam sint vel a. Suscipit aperiam blanditiis a quibusdam corporis quae adipisci dolorum dolorodit saepe reiciendis labore cum deleniti aut incidunt eveniet magni asperiores quisquam, aliquid voluptatum cumquequidem sit. Ad, pariatur a soluta deserunt sunt esse sint inventore veniam modi quaerat culpa ipsum harum voluptatesvitae autem debitis iure corrupti. Cupiditate quisquam ipsam harum eum voluptatem officiis dolore ab deleniti nihilvoluptatibus quo, enim repellendus magni beatae facere, repudiandae quam aspernatur. Accusantium perferendis errorexpedita ducimus itaque fuga incidunt est repellendus reprehenderit dolores quibusdam, officia qui.'

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus explicabo quae suscipit consequatur molestiae iusto nemo quisquam esse! Quidem voluptatum assumenda atque voluptas magni optio molestias repellendus vitae sunt nemo rem, at quibusdam sint vel a. Suscipit aperiam blanditiis a quibusdam corporis quae adipisci dolorum dolorodit saepe reiciendis labore cum deleniti aut incidunt eveniet magni asperiores quisquam, aliquid voluptatum cumquequidem sit. Ad, pariatur a soluta deserunt sunt esse sint inventore veniam modi quaerat culpa ipsum harum voluptatesvitae autem debitis iure corrupti. Cupiditate quisquam ipsam harum eum voluptatem officiis dolore ab deleniti nihilvoluptatibus quo, enim repellendus magni beatae facere, repudiandae quam aspernatur. Accusantium perferendis errorexpedita ducimus itaque fuga incidunt est repellendus reprehenderit dolores quibusdam, officia qui.'

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus explicabo quae suscipit consequatur molestiae iusto nemo quisquam esse! Quidem voluptatum assumenda atque voluptas magni optio molestias repellendus vitae sunt nemo rem, at quibusdam sint vel a. Suscipit aperiam blanditiis a quibusdam corporis quae adipisci dolorum dolorodit saepe reiciendis labore cum deleniti aut incidunt eveniet magni asperiores quisquam, aliquid voluptatum cumquequidem sit. Ad, pariatur a soluta deserunt sunt esse sint inventore veniam modi quaerat culpa ipsum harum voluptatesvitae autem debitis iure corrupti. Cupiditate quisquam ipsam harum eum voluptatem officiis dolore ab deleniti nihilvoluptatibus quo, enim repellendus magni beatae facere, repudiandae quam aspernatur. Accusantium perferendis errorexpedita ducimus itaque fuga incidunt est repellendus reprehenderit dolores quibusdam, officia qui.'

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus explicabo quae suscipit consequatur molestiae iusto nemo quisquam esse! Quidem voluptatum assumenda atque voluptas magni optio molestias repellendus vitae sunt nemo rem, at quibusdam sint vel a. Suscipit aperiam blanditiis a quibusdam corporis quae adipisci dolorum dolorodit saepe reiciendis labore cum deleniti aut incidunt eveniet magni asperiores quisquam, aliquid voluptatum cumquequidem sit. Ad, pariatur a soluta deserunt sunt esse sint inventore veniam modi quaerat culpa ipsum harum voluptatesvitae autem debitis iure corrupti. Cupiditate quisquam ipsam harum eum voluptatem officiis dolore ab deleniti nihilvoluptatibus quo, enim repellendus magni beatae facere, repudiandae quam aspernatur. Accusantium perferendis errorexpedita ducimus itaque fuga incidunt est repellendus reprehenderit dolores quibusdam, officia qui.'

        // ]);


    }
}
