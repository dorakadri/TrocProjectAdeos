<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    protected $table = 'community';
    protected $primaryKey='id';
    protected $fillable = ['name', 'description', 'image','user_id'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

     
}
