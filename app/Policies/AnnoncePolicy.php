<?php

namespace App\Policies;

use App\Models\annonce;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class AnnoncePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function manage(User $user, annonce $annonce)
{      

    return $user->id === $annonce->user_id;
}


}
