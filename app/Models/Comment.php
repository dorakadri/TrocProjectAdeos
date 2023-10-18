<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'description' ,
        'post_id',
    ];

    public function post():BelongsTo 
    {
        return $this->belongsTo(Post::class);
    }
    

 /*   public function user(){
        return $this->belongsTo(User::class);
    }*/
    
}