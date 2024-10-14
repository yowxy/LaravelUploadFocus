<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portofolio extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'name',
        'description',
        'image_path',
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
