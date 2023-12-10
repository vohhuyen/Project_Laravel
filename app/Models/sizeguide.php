<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizeguide extends Model
{
    use HasFactory;
    protected $primaryKey = 'idSizeGuide';
    protected $table = "sizeguide";
}
