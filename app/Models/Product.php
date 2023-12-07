<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\Provider;
=======
>>>>>>> 33550ab518a828a29af06061ec49dff9985a668a

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = 'idProduct';
<<<<<<< HEAD
    public function providers(){
        return $this->belongsTo(Product::class, 'idProvider', 'idProvider');
    }
=======
>>>>>>> 33550ab518a828a29af06061ec49dff9985a668a
}
