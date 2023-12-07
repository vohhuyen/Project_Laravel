<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provider;

class OriginalProductDetail extends Model
{
    use HasFactory;
    protected $table = "originalproductsdetail";
    protected $primaryKey = 'idOPrDetail';
    public function providers()
    {
        return $this->belongsToMany(Provider::class, 'detailsize', 'idOPrDetail', 'idProvider');
    }
}
