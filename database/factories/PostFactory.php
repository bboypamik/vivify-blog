<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
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

        $userIds = User::all()->pluck('id')->toArray();
        return [
            'title' => $this->faker->userName,
            'content' => $this->faker->paragraph,
            'is_published' => $this->faker->boolean(50),
            'user_id' => $this->faker->randomElement($userIds)
        ];
    }
}
