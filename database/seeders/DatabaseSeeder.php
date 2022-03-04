<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Category_document;
use App\Models\Doc_gobierno;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Tag;
use App\Models\Type_document;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('posts');
        Storage::deleteDirectory('documents');
        Storage::deleteDirectory('portfolio');
        Storage::deleteDirectory('slider');
        Storage::makeDirectory('posts');
        Storage::makeDirectory('documents');
        Storage::makeDirectory('portfolio');
        Storage::makeDirectory('slider');


     $this->call(UserSeeder::class);
     Category::factory(5)->create();
     Category_document::factory(7)->create();
     Tag::factory(8)->create();
     Portfolio::factory(8)->create();
     Slider::factory(4)->create();
    $this->call(PostSeeder::class);
    $this->call(Post_documentSeeder::class);
    Doc_gobierno::factory(5)->create();
   
    }
}
