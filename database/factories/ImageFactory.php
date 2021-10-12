<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //guardar imagen aleatoria en la carp posts, con tamaño.. el true indica que se guarda toda la ruta y no solo el nombre.
            'url'=>$this->faker->image('public/storage/posts',640,480,null,true),
        ];
    }
}
