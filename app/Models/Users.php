<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'Name',
        'Email',
        'password',
    ];
    protected $table = "users";
    protected $primaryKey = 'idUser';
    
}
