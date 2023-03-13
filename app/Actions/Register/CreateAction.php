<?php 

namespace App\Actions\Register;

use Lorisleiva\Actions\Concerns\AsAction;
use Inertia\Inertia;
use Inertia\Response;

class CreateAction
{
    use AsAction;

    public function handle(): Response
    {
        return Inertia::render('Auth/Register');
    }
}
