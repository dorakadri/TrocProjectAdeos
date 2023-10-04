<?php

namespace App\Models;

use App\Enums\AnnonceEchangeTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class annonce extends Model
{
    use HasFactory;

    protected $fillable = [

        'tags', 'title', 'location', 'taken', 'image', 'description', 'echangetype'
    ];


    protected $casts = [

        'echangetype' => AnnonceEchangeTypeEnum::class

    ];
    public function scopeFilter($query, array $filter)
    {

        if ($filter['tag'] ?? false) {

            $query->where('tags', 'like', '%' . $filter['tag'] . '%');
        }
        if ($filter['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
               
        }
    }

public function exchangesdemands() :HasMany{
    return  $this->hasMany(Exchangedemands::class,"annonce_id");

}
}