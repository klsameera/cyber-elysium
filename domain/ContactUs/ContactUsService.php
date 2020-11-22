<?php

namespace domain\ContactUs;

use App\Models\VisitorRequest;

/**
 * Created by PhpStorm.
 * User: Speralabs
 * Date: 10/07/2020
 * Time: 02:10 PM
 */
class ContactUsService
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->visitor_request = new VisitorRequest();
    }

    /**
     * store visitor request
     *
     * @param  mixed $request
     * @return void
     */
    public function store($request)
    {
        return $this->visitor_request->create($request);
    }



}
