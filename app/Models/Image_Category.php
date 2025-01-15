<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Category extends Model
{
    use HasFactory;
    protected $table = 'image_categorys';
    public function image(){
        return $this->hasMany(Image::class);
    }
}
