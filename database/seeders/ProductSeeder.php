<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'game_id' => 1,
            'name' => 'Genshin Impact akun bintang 5',
            'description' => 'Char lengkap bintang 5 semua level maks weapon maks',
            'price' => 2000000,
            'image' => 'ProductSeederPNG/Akun Genshin.png',
        ]);

        Product::create([
            'game_id' => 2,
            'name' => 'GTA V',
            'description' => 'Char maks level, Duit 10000000 billion, Rumah 20, Outfit lengkap, Mobil lengkap',
            'price' => 1000000,
            'image' => 'ProductSeederPNG/Akun GTA V.webp',
        ]);


        Product::create([
            'game_id' => 3,
            'name' => 'Dota 2',
            'description' => 'Skin lengkap, cosmetic lengkap',
            'price' => 50000000,
            'image' => 'ProductSeederPNG/Akun Dota 2.png',
        ]);


        Product::create([
            'game_id' => 4,
            'name' => 'Mobile Legend',
            'description' => 'Hero lengkap, Skin lengkap, diamond 64000, BP 5000000',
            'price' => 200000000,
            'image' => 'ProductSeederPNG/Akun Mobile Legend.jpg',
        ]);


        Product::create([
            'game_id' => 5,
            'name' => 'Wild Rift',
            'description' => 'Hero lengkap, Skin lengkap, Blue mote 64000, WildCore 5000000',
            'price' => 2000000,
            'image' => 'ProductSeederPNG/Akun WilrdRift.webp',
        ]);

        Product::create([
            'game_id' => 6,
            'name' => 'Valorant',
            'description' => 'All champion unlocked, All Knife skin Unlocked, All weapon skin unlocked',
            'price' => 50000000,
            'image' => 'ProductSeederPNG/Akun Valorant.png',
        ]);

        Product::create([
            'game_id' => 7,
            'name' => 'Roblox Sword Simulator',
            'description' => 'All weapon exotic shiny ++, Mythic qi, all spell maks level ',
            'price' => 500000,
            'image' => 'ProductSeederPNG/akun weapon fighting simulaotr.png',
        ]);

        Product::create([
            'game_id' => 8,
            'name' => 'PUBG Mobile',
            'description' => 'Skin character & weapon & kendaraan lengkap, UC 50000',
            'price' => 100000000,
            'image' => 'ProductSeederPNG/Akun PUBG Mobile.jpg',
        ]);

        Product::create([
            'game_id' => 9,
            'name' => 'Bus Simultor',
            'description' => 'Skin kendaraan lengkap',
            'price' => 1000000,
            'image' => 'ProductSeederPNG/Akun Bus Simulator.jpg',
        ]);

        Product::create([
            'game_id' => 10,
            'name' => 'Free Fire',
            'description' => 'Skin character & weapon & kendaraan lengkap, Diamond 200000',
            'price' => 50000000,
            'image' => 'ProductSeederPNG/Akun Free Fire.jpg',
        ]);
    }
}
