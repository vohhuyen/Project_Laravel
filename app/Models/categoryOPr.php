<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoryOPrDetail;

class categoryOPr extends Model
{
    use HasFactory;
    protected $table = "category_opr";

    public function categoryoprdetail(){
        return $this->hasMany(categoryOPr::class, 'idCategoryOPr', 'idCategoryOPr');
    }
}
