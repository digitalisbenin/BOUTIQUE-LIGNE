<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'user_id',
        'quantite',
        'montant',
        'created_at',
        'updated_at',
    ];

    public function article() {
        return $this->belongsTo(Article::class);
    }

}
