<?php 

namespace App\Actions\ForgotPassword;

use Lorisleiva\Actions\Concerns\AsAction;
use Inertia\Inertia;
use Inertia\Response;

class CreateAction
{
    use AsAction;

    public function handle(): Response
    {
        return Inertia::render('Auth/ForgotPassword', [
            'status' => session('status'),
        ]);
    }
}
