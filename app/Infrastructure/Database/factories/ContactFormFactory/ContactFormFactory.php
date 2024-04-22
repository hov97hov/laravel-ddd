<?php

namespace App\Infrastructure\Database\factories\ContactFormFactory;

use App\Domain\ContactForm\Domain\Models\ContactForm;
use Illuminate\Database\Eloquent\Factories\Factory;


class ContactFormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactForm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'last_name' => $this->faker->last_name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
