<?php

namespace Database\Seeders;

use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Seeder;

use App\Models\Product;
use Carbon\Carbon;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 16; $i++) {
            $product = new Product();
            $product->name = $faker->name();
            $product->size = $faker->text(5);
            $product->status = $faker->numberBetween(0, 1);
            $product->qty = $faker->numberBetween(1, 99);
            $product->save();
        }
    }
}
