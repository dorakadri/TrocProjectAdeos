<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey='id';
    protected $fillable = [
        'title', 'description', 'location', 'start_time', 'end_time', 'image', 'user_id', 'community_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function community()
    {
        return $this->belongsTo(Community::class);
    }
    public function participants()
    {
        return $this->belongsToMany(User::class);
    }
}
