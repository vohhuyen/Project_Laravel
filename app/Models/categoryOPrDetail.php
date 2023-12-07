<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoryOPr;
use App\Models\OriginalProduct;

class categoryOPrDetail extends Model
{
    use HasFactory;
    protected $table = "category_opr_detail";

    public function categoryopr(){
        return $this->belongsTo(categoryOPrDetail::class, 'idCategoryOPr', 'idCategoryOPr');
    }
    public function originalproduct(){
        return $this->hasMany(categoryOPrDetail::class, 'idCategoryOPrDetail', 'idCategoryOPrDetail');
    }
}
