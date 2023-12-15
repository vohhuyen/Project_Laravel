<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provider;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = 'idProduct';
    public function providers(){
        return $this->belongsTo(Product::class, 'idProvider', 'idProvider');
    }
}
