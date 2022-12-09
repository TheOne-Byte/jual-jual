<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'name' => 'Genshin Impact',
            'logo' => 'GenshinImpact.png',
        ]); //1

        Game::create([
            'name' => 'GTA V',
            'logo' => 'gtav.png',
        ]); //2

        Game::create([
            'name' => 'Dota 2',
            'logo' => 'Dota-2-Logo.png',
        ]); //3

        Game::create([
            'name' => 'Mobile Legends',
            'logo' => 'ML-Logo.png',
        ]); //4

        Game::create([
            'name' => 'Wild Rift',
            'logo' => 'League_of_Legends_Wild_Rift_logo.png',
        ]); //5

        Game::create([
            'name' => 'Valorant',
            'logo' => 'Valorant-Emblem.png',
        ]); //6

        Game::create([
            'name' => 'Roblox',
            'logo' => 'roblox.png',
        ]); //7

        Game::create([
            'name' => 'PUBG Mobile',
            'logo' => 'pubgm.png',
        ]); //8

        Game::create([
            'name' => 'Bus Simulator',
            'logo' => 'Bus-Simulator-21-Logo.png',
        ]); //9

        Game::create([
            'name' => 'Free Fire',
            'logo' => 'logo-ff.png',
        ]); //10
    }
}
