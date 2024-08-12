<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'codeParents',
        'codeUser',
        'points',
        'bonus',
        'created_at',
        'updated_up',
    ];

    public function users() {
        return $this->belongsTo(User::class,'user_id');
    }

}
