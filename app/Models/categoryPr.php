<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoryPrDetail;

class categoryPr extends Model
{
    use HasFactory;
    protected $table = "category_Pr";

    public function category_Pr_Detail(){
        return $this->hasMany(categoryPrDetail::class, 'idCategoryPr', 'idCategoryPr');
    }
}
