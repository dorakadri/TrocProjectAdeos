<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reponse
;
class Reclamation extends Model
{ 
      use HasFactory;
    protected $fillable = [
        'title',
        'description' ,
        'status',
        
    ];
     public function reponses (){

        return $this->hasMany(Reponse::class,'reclamation_id','id');
    }
}
