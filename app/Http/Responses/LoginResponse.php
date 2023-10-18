<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        $user = Auth::user();

        if ($user->role === '1') {
            return redirect('/Admin/dashboard');
    } else {
        
        return redirect('/Annonce');
        }
    }

}