<?php 

namespace App\Actions\ForgotPassword;

use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\ActionRequest;
use Inertia\Inertia;
use Inertia\Response;

class ResetIndexAction
{
    use AsAction;

    public function handle(ActionRequest $request): Response
    {
        return Inertia::render('Auth/ResetPassword', [
            'email' => $request->email,
            'token' => $request->route('token'),
        ]);
    }
}
