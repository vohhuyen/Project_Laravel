<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OriginalProductDetail;
use App\Models\Provider;

class DetailSize extends Model
{
    use HasFactory;
    protected $table = "DetailSize";
    public function originalProductDetail()
    {
        return $this->belongsTo(OriginalProduct::class, 'idOPrDetail', 'idOPrDetail');
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'idProvider', 'idProvider');
    }
}
