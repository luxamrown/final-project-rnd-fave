<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'productImage',
        'productDescription',
        'productPrice',
        'productStock',
        'categoryId'
    ];


    public function categories(){
        return $this->belongsTo(Category::class, 'categoryId');
    }
}
