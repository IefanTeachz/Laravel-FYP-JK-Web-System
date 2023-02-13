<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    public $table = 'planner';
   
    protected $fillable = [
        'user_id','plan', 'date',  
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
