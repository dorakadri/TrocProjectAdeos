<?php

namespace App\Models;
use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charite extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'date',
        'lieu',
        'description',
        'organisateur',
        'beneficiaire',
        'budget',
        'donation_id'

    ];

    public function organisateur()
    {
        return $this->belongsTo(User::class, 'organisateur');
    }

    public function products()
    {
        return $this->hasMany(Donation::class, 'charite_id', 'id');
    }

}
