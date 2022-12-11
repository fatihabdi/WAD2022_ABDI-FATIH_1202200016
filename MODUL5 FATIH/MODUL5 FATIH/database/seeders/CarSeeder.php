<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Showrooms;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Showrooms::create([
            'name' => 'Toyota Alphard',
            'brand' => 'Toyota',
            'purchase_date' => '2021-01-01',
            'description' => 'mobil keren banget anjay mabar slebew',
            'image' => 'img/alphard.jpg',
            'status' => 'Lunas',
        ]);
    }
}