<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'commande_id',
        'quantite',
        'montantLigneCommande',
        'created_at',
        'updated_at',
    ];

    public function article() {
        return $this->belongsTo(Article::class,'article_id');
    }

    public function commande() {
        return $this->hasMany(Commande::class);
    }
}
