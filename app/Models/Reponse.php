<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reclamation;

class Reponse extends Model
{        protected $fillable = [
      
        'description' ,
        'reclamation_id',
 
        
    ];
 public function reclamation (){
return $this->belongsTo(Reclamation::class);

 }
    use HasFactory;
  
}
