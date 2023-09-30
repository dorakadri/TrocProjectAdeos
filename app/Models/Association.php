<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;

    protected $table = 'association';
    protected $primaryKey='id';
    protected $fillable = ['name', 'logo', 'responsable', 'description'];


}
