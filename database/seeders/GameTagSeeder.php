<?php

namespace Database\Seeders;

use App\Models\GameTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameTag::create([
            'product_id' => 1,
            'tag_id' => 1
        ]); //1
        GameTag::create([
            'product_id' => 1,
            'tag_id' => 4
        ]); //2
        GameTag::create([
            'product_id' => 1,
            'tag_id' => 5
        ]); //3
        GameTag::create([
            'product_id' => 1,
            'tag_id' => 10
        ]);
        GameTag::create([
            'product_id' => 2,
            'tag_id' => 4
        ]);
        GameTag::create([
            'product_id' => 2,
            'tag_id' => 3
        ]);
        GameTag::create([
            'product_id' => 2,
            'tag_id' => 5
        ]);
        GameTag::create([
            'product_id' => 2,
            'tag_id' => 10
        ]);
        GameTag::create([
            'product_id' => 3,
            'tag_id' => 4
        ]);
        GameTag::create([
            'product_id' => 3,
            'tag_id' => 8
        ]);
        GameTag::create([
            'product_id' => 3,
            'tag_id' => 9
        ]);
        GameTag::create([
            'product_id' => 4,
            'tag_id' => 9
        ]);
        GameTag::create([
            'product_id' => 4,
            'tag_id' => 1
        ]);
        GameTag::create([
            'product_id' => 4,
            'tag_id' => 4
        ]);
        GameTag::create([
            'product_id' => 4,
            'tag_id' => 8
        ]);
        GameTag::create([
            'product_id' => 5,
            'tag_id' => 9
        ]);
        GameTag::create([
            'product_id' => 5,
            'tag_id' => 1
        ]);
        GameTag::create([
            'product_id' => 5,
            'tag_id' => 4
        ]);
        GameTag::create([
            'product_id' => 5,
            'tag_id' => 8
        ]);
        GameTag::create([
            'product_id' => 6,
            'tag_id' => 2
        ]);
        GameTag::create([
            'product_id' => 6,
            'tag_id' => 4
        ]);
        GameTag::create([
            'product_id' => 6,
            'tag_id' => 8
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 1
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 2
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 3
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 4
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 5
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 6
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 7
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 8
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 9
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 10
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 11
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 12
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 13
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 14
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 15
        ]);
        GameTag::create([
            'product_id' => 7,
            'tag_id' => 16
        ]);
        GameTag::create([
            'product_id' => 8,
            'tag_id' => 2
        ]);
        GameTag::create([
            'product_id' => 8,
            'tag_id' => 3
        ]);
        GameTag::create([
            'product_id' => 8,
            'tag_id' => 10
        ]);
        GameTag::create([
            'product_id' => 8,
            'tag_id' => 12
        ]);
        GameTag::create([
            'product_id' => 8,
            'tag_id' => 14
        ]);
        GameTag::create([
            'product_id' => 9,
            'tag_id' => 3
        ]);
        GameTag::create([
            'product_id' => 10,
            'tag_id' => 2
        ]);
        GameTag::create([
            'product_id' => 10,
            'tag_id' => 4
        ]);

        //
    }
}
