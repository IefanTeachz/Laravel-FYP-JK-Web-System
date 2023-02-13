<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendorprofile extends Model
{
    use HasFactory;
    public $table = 'vendorprofile';
   
    protected $fillable = [
        'address','poscode','state','phoneNumber', 'image' 
    ];
}
