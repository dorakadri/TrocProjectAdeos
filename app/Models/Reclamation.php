<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reponse;
use App\Models\User;
class Reclamation extends Model
{ 
      use HasFactory;
    protected $fillable = [
        'title',
        'description' ,
        'status',
        'user_id', 
        
    ];
     public function reponses (){

        return $this->hasMany(Reponse::class,'reclamation_id','id');
    }
       public function user()
    {
        return $this->belongsTo(User::class);
    }
}
