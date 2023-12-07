<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\Product;
=======
>>>>>>> 33550ab518a828a29af06061ec49dff9985a668a

class Provider extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = "Providers";
    // protected $primaryKey = 'idProvider';
    public function product(){
        return $this->hasMany(Provider::class, 'idProvider', 'idProvider');
    }
=======
    protected $table = "providers";
    protected $primaryKey = 'idProvider';
>>>>>>> 33550ab518a828a29af06061ec49dff9985a668a
}
