<?php

namespace Database\Seeders;

use App\Models\Shoe;
use Illuminate\Database\Seeder;

class ShoeSeeder extends Seeder
{
    public function run(): void
    {
        Shoe::create([
            'name' => 'Air Force 1',
            'brand' => 'Nike',
            'category' => 'Sneakers',
            'price' => 5495,
        ]);

        Shoe::create([
            'name' => 'Chuck Taylor All Star',
            'brand' => 'Converse',
            'category' => 'Casual',
            'price' => 3990
        ]);

        Shoe::create([
           'name' => 'Suede Classic',
           'brand' => 'Puma',
           'category' => 'Sneakers',
           'price' => 4200,
        ]);

        Shoe::create([
            'name' => 'Old Skool',
            'brand' => 'Vans',
            'category' => 'Casual',
            'price' => 3995,
        ]);

        Shoe::create([
            'name' => 'Gel-Kayano 30',
            'brand' => 'ASICS',
            'category' => 'Running',
            'price' =>  8990,
        ]);

    }
}
