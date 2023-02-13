<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $table = 'services';
   
    protected $fillable = [
        'vservice_id','name', 'price', 'description','phone','address','fb', 'insta', 'image', 'category_id', 'state_id',  
    ];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function vservice(){
        return $this->belongsTo(Vservice::class);
    }
    

}
