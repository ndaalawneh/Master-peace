<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'description' , 'main_image' , 'image1' , 'image2' , 
        'image3' , 'price' , 'category_id' , 'provider_id'
    ];

    public function category(){
        return $this->belongsTo(category::class , 'category_id' , 'id');
    }
}









