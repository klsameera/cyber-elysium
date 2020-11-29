<?php

namespace App\Http\Controllers\PublicArea;

use App\Http\Controllers\Controller;
use App\Traits\FormHelper;
use domain\Facades\GpaFacade;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    use FormHelper;

    public function createNew()
    {
        GpaFacade::newAccount();

        return redirect()->route('gpa.calculator');
    }
}
