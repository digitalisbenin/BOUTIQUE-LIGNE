<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'imageUrl',
        'nomCategorie',
        'slug',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    public function article() {
        return $this->hasMany(Article::class);
    }
}
