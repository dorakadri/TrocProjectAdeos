<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo', 'responsable', 'description'];
    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

}
