<?php

namespace Joy\VoyagerBreadDeal\Database\Factories;

use Joy\VoyagerBreadDeal\Models\Deal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DealFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Deal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(500),
        ];
    }

    /**
     * Indicate that the model's status should be active.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function active()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Deal::ACTIVE,
            ];
        });
    }

    /**
     * Indicate that the model's status should be inactive.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function inactive()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Deal::INACTIVE,
            ];
        });
    }

    /**
     * Indicate that the model's status should be expired.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function expired()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => Deal::EXPIRED,
            ];
        });
    }
}
