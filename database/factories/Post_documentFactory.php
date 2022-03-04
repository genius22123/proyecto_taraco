<?php

namespace Database\Factories;

use App\Models\Category_document;
use App\Models\Post_document;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class Post_documentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post_document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->unique->sentence(),
            'extract'=>$this->faker->text(250),
            'category_id'=>Category_document::all()->random()->id,
            'user_id'=>User::all()->random()->id,
        ];
    }
}
