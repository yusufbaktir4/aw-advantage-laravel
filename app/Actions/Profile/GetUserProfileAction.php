<?php

namespace App\Actions\Profile;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;

class GetUserProfileAction
{
    use AsAction;

    public function handle(User $user): User
    {
        return $user;
    }

    public function htmlResponse(User $user)
    {
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $user instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }

    public function jsonResponse(User $user)
    {
        return new UserProfileResource($user);
    }
}