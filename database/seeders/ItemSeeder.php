<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create([
            'name' => 'Beras',
            'quantity' => 5,
            'notes' => 'Beras premium 5kg'
        ]);

        Item::create([
            'name' => 'Minyak Goreng',
            'quantity' => 2,
            'notes' => 'Minyak goreng kemasan 1 liter'
        ]);

        Item::create([
            'name' => 'Telur',
            'quantity' => 10,
            'notes' => 'Telur ayam negeri'
        ]);
    }
}