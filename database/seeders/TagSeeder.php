<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'RPG'
        ]); //1
        Tag::create([
            'name' => 'FPS'
        ]); //2
        Tag::create([
            'name' => 'Simulator'
        ]); //3
        Tag::create([
            'name' => 'Action'
        ]); //4
        Tag::create([
            'name' => 'Adventure'
        ]); //5
        Tag::create([
            'name' => 'Romance'
        ]); //6
        Tag::create([
            'name' => 'Horror'
        ]); //7
        Tag::create([
            'name' => 'Strategy'
        ]); //8
        Tag::create([
            'name' => 'MOBA'
        ]); //9
        Tag::create([
            'name' => 'Fighting'
        ]); //10
        Tag::create([
            'name' => 'Sports'
        ]); //11
        Tag::create([
            'name' => 'survival'
        ]); //12
        Tag::create([
            'name' => 'Rythm'
        ]); //13
        Tag::create([
            'name' => 'Battle Royale'
        ]); //14
        Tag::create([
            'name' => 'Puzzle'
        ]); //153
        Tag::create([
            'name' => 'Art'
        ]); //16

    }
}
