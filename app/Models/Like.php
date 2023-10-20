<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';

    protected $fillable = ['user_id', 'post_id', 'type'];

    /**
     * Get the user who liked/disliked the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post that was liked/disliked.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
