<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id',
        'raisonPaiement',
        'montantPaye',
        'reference',
        'created_at',
        'updated_at',
    ];

    public function commande():BelongsTo
     {
        return $this->belongsTo(Commande::class,'commande_id');
    }
}
