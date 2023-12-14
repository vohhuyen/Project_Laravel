<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $primaryKey = 'idUser';
    protected $table = "users";
    protected $fillable = [
        'Name',
        'Email',
        'password',
    ];
    
}
