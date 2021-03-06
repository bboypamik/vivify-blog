<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'is_published'];

    public static function published(){
        return self::where('is_published', 1);
    }

    public static function unpublished(){
        return self::where('is_published', 0);
    }

    public function user(){
        $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function createComment($content){
        return $this->comments()->create([
          'content' =>  $content
        ]);
    }
}
