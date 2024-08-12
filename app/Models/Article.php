<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'nomArticle',
        'codeArticle',
        'image_path',
        'imageUrl',
        'description',
        'status',
        'prixAchatArticle',
        'prixVenteArticle',
        'stock',
        'created_at',
        'updated_at'
    ];

    public function commande() {
        return $this->hasMany(Commande::class);
    }

    public function categorie() {
        return $this->belongsTo(Categorie::class,'categorie_id');
    }

    public function lignecommande() {
        return $this->belongsTo(LigneCommande::class);
    }

    public function commentaire() {
        return $this->hasMany(Commentaire::class);
    }

    public function favoris() {
        return $this->hasMany(Favoris::class);
    }
}
