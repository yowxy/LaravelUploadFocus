<?php

namespace App\Models;

use App\Http\Controllers\PortofolioUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillablle = [
        'name'
    ];

    public function portofolios(){
        return $this->hasMany(Portofolio::class);
    }

}
