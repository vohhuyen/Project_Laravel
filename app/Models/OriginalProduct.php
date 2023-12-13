<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoryOPrDetail;

class OriginalProduct extends Model
{
    use HasFactory;
    protected $table = "originalproducts";
    protected $primaryKey = 'idOPr';
    public function categoryoprdetail(){
        return $this->belongsTo(OriginalProduct::class, 'idCategoryOPrDetail', 'idCategoryOPrDetail');
    }
}
