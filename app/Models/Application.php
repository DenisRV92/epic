<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'objects';
    protected $fillable = ['title'];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'object_category','object_id','category_id');
    }
}
