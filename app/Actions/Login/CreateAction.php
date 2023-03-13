<?php 

namespace App\Actions\Login;

use Lorisleiva\Actions\Concerns\AsAction;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Route;

class CreateAction
{
    use AsAction;

    public function handle(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }
}
