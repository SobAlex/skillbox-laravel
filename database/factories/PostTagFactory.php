<?php

namespace Database\Factories;

use App\PostTag;
use App\Post;
use App\Tag;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
    protected $model = PostTag::class;

    public function definition()
    {
        return [
            'post_id' => Post::get()->random()->id,
            'tag_id' => Tag::get()->random()->id,
        ];
    }
}
