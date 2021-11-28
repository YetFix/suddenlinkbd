<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'splicer101',
            'description'=>'It is a slicer',
            'category_id'=>'1',
            'cost_price'=>'90',
            'sell_price'=>'100',
            'stock'=>'12',
        ]);
    }
}
