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
    protected $fillable = [

        'user_id', 'annonce_id', 'status', 'description', 'picture'
    ];

    public function annonce():BelongsTo {
        return $this->belongsTo(annonce::class);
    }
}
