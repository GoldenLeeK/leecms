<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title'       => $this->faker->sentence(),
            'content'        => $this->faker->text,
            'user_id'     => rand(1, 100),
            'category_id' => rand(1, 10),
            'abstract'     => $this->faker->sentence(),
        ];
    }
}
