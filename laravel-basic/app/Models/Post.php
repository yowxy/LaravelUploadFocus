<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'post'; // Mapping the model to the 'post' table

    // Define the relationship between Post and Comment

    public  $fillable = [
        'title',
        'content',
    ];

    public static function boot(){
        parent::boot();

        static::creating(function($post){
            $post->slug = str_replace(' ','-' ,$post->title);
        });
    }

    public function total_comments(){
        return $this->comments()->count();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    // Define a query scope for active posts
    public function scopeActive($query){
            return $query->where('active', true);
    }
}
