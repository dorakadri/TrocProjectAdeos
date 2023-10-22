<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail as Verify;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Reclamation;
use App\Models\Reponse;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;

use Illuminate\Database\Eloquent\Model;
use App\Models\Community;
use App\Models\Event;

class User extends Authenticatable implements Verify 
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
         'role',
        'name',
        'email',
        'password',
     'username',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function likes()
{
    return $this->hasMany(Like::class);
}
public function reclamations()
    {
        return $this->hasMany(Reclamation::class);
    }

    public function responses()
    {
        return $this->hasMany(Reponse::class);
    }
    public function coummunities()
    {
        return $this->hasMany(Community::class);
    }
    
    public function joinedCommunities()
    {
        return $this->belongsToMany(Community::class);
    }
    public function goingEvents()
    {
        return $this->belongsToMany(Event::class);
    }


}
