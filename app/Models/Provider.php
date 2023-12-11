<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Provider extends Model
{
    use HasFactory;
    protected $table = "Providers";
    // protected $primaryKey = 'idProvider';
    public function product(){
        return $this->hasMany(Provider::class, 'idProvider', 'idProvider');
    }
}
