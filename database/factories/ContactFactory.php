<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Contact;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'message' => $this->faker->sentence(5),
        ];
    }
}
