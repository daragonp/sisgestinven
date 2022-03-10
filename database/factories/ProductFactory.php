<?php

namespace Database\Factories;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->image('public/storage/images',300,250, null, false),
            'category_id'=>rand(1, 20),
            'supplier_id'=>rand(1, 50),
            'qty'=>rand(1, 1500),
            'buyingprice'=>rand(1000, 500000),
            'sellingprice'=>rand(1500, 580000),
            'expiration'=>Carbon::now()->add(rand(1, 300), 'day'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    
}
