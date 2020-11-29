<?php

namespace App\Http\Controllers\PublicArea;

use App\Http\Controllers\Controller;
use App\Traits\FormHelper;
use domain\Facades\GpaFacade;
use Illuminate\Http\Request;

class GpaController extends Controller
{
    use FormHelper;

    public function index()
    {
        $account = GpaFacade::getOrCreateAccount();
        $response['settings'] = GpaFacade::getSettings($account['id']);
        $response['tc'] = $this;
        return view('PublicArea.Pages.Gpa.index')->with($response);
    }

    public function store(Request $request)
    {
        return GpaFacade::store($request);
    }

    public function remove($course_id)
    {
        return GpaFacade::remove($course_id);
    }

    public function summery()
    {
        $account = GpaFacade::getOrCreateAccount();
        $response['course_count'] = GpaFacade::courseCount($account['id']);
        $response['credit_count'] = GpaFacade::creditCount($account['id']);
        $response['total_gpa'] = GpaFacade::totalGpa($account['id']);
        $response['yr1_gpa'] = GpaFacade::yr1Gpa($account['id']);
        $response['yr2_gpa'] = GpaFacade::yr2Gpa($account['id']);
        $response['yr3_gpa'] = GpaFacade::yr3Gpa($account['id']);
        $response['yr4_gpa'] = GpaFacade::yr4Gpa($account['id']);
        $response['courses_1_year'] = GpaFacade::getCourses1Year($account['id']);
        $response['courses_2_year'] = GpaFacade::getCourses2Year($account['id']);
        $response['courses_3_year'] = GpaFacade::getCourses3Year($account['id']);
        $response['courses_4_year'] = GpaFacade::getCourses4Year($account['id']);
        $response['tc'] = $this;
        return view('PublicArea.Pages.Gpa.summary')->with($response);
    }

    public function coursesAll()
    {
        $account = GpaFacade::getOrCreateAccount();
        $response['courses'] = GpaFacade::getCourses($account['id']);
        $response['courses_1_year'] = GpaFacade::getCourses1Year($account['id']);
        $response['courses_2_year'] = GpaFacade::getCourses2Year($account['id']);
        $response['courses_3_year'] = GpaFacade::getCourses3Year($account['id']);
        $response['courses_4_year'] = GpaFacade::getCourses4Year($account['id']);
        $response['tc'] = $this;
        return view('PublicArea.Pages.Gpa.courses')->with($response);
    }

    public function settings(Request $request)
    {
        $check = GpaFacade::checkSettings();

        if($check > 0){
            GpaFacade::updateSettings($request->all());
        }else{
            GpaFacade::createSettings($request->all());
        }

        return redirect()->back();
    }

    public function report()
    {
        $account = GpaFacade::getOrCreateAccount();
        $response['courses'] = GpaFacade::getCourses($account['id']);
        $response['tc'] = $this;
        return view('PublicArea.Pages.Gpa.report')->with($response);
    }

}
