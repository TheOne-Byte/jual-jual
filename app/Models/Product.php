<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = 'id';

    public $timestamps = false;

    public function gameTags()
    {
        return $this->hasMany(GameTag::class);
    }

    protected $fillable = [
        'name',
        'tag_id',
        'game_id',
        'price',
        'description',
        'image',
    ];
}
