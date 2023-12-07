<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoryPr;

class categoryPrDetail extends Model
{
    use HasFactory;
    protected $table = "category_Pr_Detail";

    public function categorypr(){
        return $this->belongsTo(categoryPrDetail::class, 'idCategoryPr', 'idCategoryPr');
    }
}
