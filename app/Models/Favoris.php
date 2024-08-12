<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function article() {
        return $this->belongsTo(Article::class,'article_id');
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
