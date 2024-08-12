<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'user_id',
        'commentaire',
        'created_at',
        'updated_at',
    ];

    public function article() {
        return $this->belongsTo(Article::class);
    }

    public function users() {
        return $this->belongsTo(User::class,'user_id');
    }
}
