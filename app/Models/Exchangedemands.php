<?php

namespace App\Models;

use App\Enums\AnnonceEchangeTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exchangedemands extends Model
{    
    use HasFactory;

    protected $casts = [

        'echangetype' => AnnonceEchangeTypeEnum::class

    ]; 
    public function scopeFilter($query, array $filter)
    {

        if ($filter['status'] ?? false) {

            $query->where('status', 'like', '%' . $filter['status'] . '%');
        }
        if ($filter['searchex'] ?? false) {
            $query->where('user_id', 'like', '%' . request('searchex') . '%');
       
               
        }
    }
    protected $fillable = [

        'user_id', 'annonce_id', 'status', 'description', 'picture'
    ];

    public function annonce():BelongsTo {
        return $this->belongsTo(annonce::class);
    }
}
