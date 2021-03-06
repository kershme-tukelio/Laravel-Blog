<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'is_published'];

    public static function published() {
        return self::where('is_published', true);
    }
    public static function unpublished() {
        return self::where('is_published', false);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
    public function createComment($content) {
        $this->comments()->create([
            'content' => $content
        ]);
    }
}
