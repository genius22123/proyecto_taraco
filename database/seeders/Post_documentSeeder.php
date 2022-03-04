<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Post_document;
use Illuminate\Database\Seeder;

class Post_documentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents=Post_document::factory(100)->create();
        foreach ($documents as $document) {
            Document::factory(1)->create([
                'documentable_id'=>$document->id,
                'documentable_type'=>Post_document::class
            ]);
         
        }
    }
}
