<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model
{
    use HasFactory;

    public $table = 'userprofile';
   
    protected $fillable = [
        'address', 'poscode', 'state', 'phoneNumber','partner','wedDate'
    ];
}
