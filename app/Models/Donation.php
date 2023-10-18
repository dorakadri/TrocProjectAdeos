<?php

namespace App\Models;
use App\Models\charite;
use App\Models\user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'categorie',
        'etat',
        'photo',
        'quantite',
        'disponibilite',
        'charite_id',
        'user_id'
    ];

    protected $attributes = [
        'charite_id' => null,
        'user_id' => null
    ];

    public function charite()
    {
        return $this->belongsTo(charite::class, 'charite_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }

}
