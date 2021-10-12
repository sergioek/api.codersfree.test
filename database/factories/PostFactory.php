<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$name=$this->faker->unique->word(20),
            'slug'=>Str::slug($name),
            'extract'=>$this->faker->text(255),
            'body'=>$this->faker->text(2000),
            'status'=>$this->faker->randomElement([1,2]),
            'category_id'=>Category::all()->random->id,
            'user_id'=>User::all()->random->id,
        ];
    }
}
