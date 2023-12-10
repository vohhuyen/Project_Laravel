<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class originalproducts extends Model
{
    use HasFactory;
    protected $primaryKey = 'idOPr';
    protected $table = "OriginalProducts";
}
