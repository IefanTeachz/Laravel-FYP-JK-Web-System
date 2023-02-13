<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = 'carts';

    protected $fillable = ['user_id', 'service_id',];

    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
