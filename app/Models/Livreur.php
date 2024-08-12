<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenoms',
        'adresseResidence',
        'phoneNumber',
        'created_at',
        'updated_at',
    ];

    public function commande() {
        return $this->hasMany(Commande::class);
    }
}
