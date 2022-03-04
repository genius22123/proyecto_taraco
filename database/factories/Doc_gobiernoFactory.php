<?php

namespace Database\Factories;

use App\Models\Doc_gobierno;
use Illuminate\Database\Eloquent\Factories\Factory;

class Doc_gobiernoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doc_gobierno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->unique->word(20),
            'url'=>'documents/pdf_de_prueba.pdf'
        ];
    }
}
