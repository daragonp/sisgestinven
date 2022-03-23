<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Supplier::class;
    public function definition()
    {
        return [
            //
        'name'=>$this->faker->unique()->name(),
        'phone'=>rand(6010000000, 6019999999),
        'address'=>$this->faker->sentence(),
        ];
    }
}
