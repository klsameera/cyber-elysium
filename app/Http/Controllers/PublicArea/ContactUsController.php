<?php

namespace App\Http\Controllers\PublicArea;

use App\Http\Controllers\Controller;
use App\Traits\FormHelper;
use domain\Facades\ContactUsFacade;
use domain\Facades\ContactFacade;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    use FormHelper;

    /**
     * contact us form
     *
     * @return void
     */
    public function contact()
    {
        return view('PublicArea.Pages.ContactUs.index');
    }

    /**
     * store visitor request
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        ContactUsFacade::store($request->all());

        $response['alert-success'] = 'Message Sent Successfully';
        return redirect(route('contact'))->with($response);

    }
}
