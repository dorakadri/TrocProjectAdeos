<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reclamation;
use App\Models\User; 
class Reponse extends Model
{        protected $fillable = [
      
        'description' ,
        'reclamation_id',
    'user_id', 
        
    ];
 public function reclamation (){
return $this->belongsTo(Reclamation::class);

 }

     public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
  
}
