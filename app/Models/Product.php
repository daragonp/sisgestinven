<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'category_id',
        'supplier_id',
        'qty',
        'buyingprice',
        'sellingprice',
        'expiration'
    ];

    public function category(){

        return $this->belongsTo(Category::class);

    }
    public function supplier(){

        return $this->belongsTo(Supplier::class);

    }


}
