<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nom',
        'message',
        'created_at',
        'updated_up',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
