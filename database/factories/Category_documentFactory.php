<?php

namespace Database\Factories;

use App\Models\Category_document;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Category_documentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category_document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
            $name=$this->faker->unique->word(20);
            return [
                'name'=>$name,
                'slug'=>Str::slug($name),
    
            ];
       
    }
}
