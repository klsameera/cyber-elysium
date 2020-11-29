<?php

namespace domain\Gpa;

use App\Models\Account;
use App\Models\Course;
use App\Models\Setting;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;


/**
 * Created by PhpStorm.
 * User: Speralabs
 * Date: 10/07/2020
 * Time: 02:10 PM
 */
class GpaService
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->courses = new Course();
        $this->accounts = new Account();
        $this->settings = new Setting();
    }

    public function getCourses($account_id)
    {
        return $this->courses->getCourses($account_id);
    }

    public function getCourses1Year($account_id)
    {
        return $this->courses->getCourses1Year($account_id);
    }

    public function getCourses2Year($account_id)
    {
        return $this->courses->getCourses2Year($account_id);
    }

    public function getCourses3Year($account_id)
    {
        return $this->courses->getCourses3Year($account_id);
    }

    public function getCourses4Year($account_id)
    {
        return $this->courses->getCourses4Year($account_id);
    }




    public function getOrCreateAccount()
    {
        if(Cookie::get('active_account')){
            $key = Cookie::get('active_account');

            $check = $this->accounts->checkKey($key);
            if($check == 1){
                $accounts = $this->accounts->getByKey($key);
                return $accounts;
            }else{
                $newKey = Str::random(100);
                Cookie::queue('active_account', $newKey, 9999999);

                $data['key'] = $newKey;
                $accounts = $this->accounts->create($data);
                $newData['account_id'] = $accounts->id;
                $this->settings->create($newData);

                return $accounts;
            }

        }else{
            $newKey = Str::random(100);

            Cookie::queue('active_account', $newKey, 9999999);

            $data['key'] = $newKey;
            $accounts = $this->accounts->create($data);
            $newData['account_id'] = $accounts->id;
            $this->settings->create($newData);

            return $accounts;
        }
    }

    public function store($request)
    {
        $account = $this->getOrCreateAccount();

        $data['account_id'] = $account['id'];
        $data['code'] = $request['code'];
        $data['credit'] = $request['credit'];
        $data['grade'] = $request['grade'];
        $data['year'] = $request['year'];
        $data['total'] = $request['grade'] * $request['credit'];
        return $this->courses->create($data);
    }

    public function get($course_id)
    {
        return $this->courses->find($course_id);
    }

    public function remove($course_id)
    {
        return $this->get($course_id)->delete();
    }

    public function courseCount($account_id)
    {
        return $this->courses->courseCount($account_id);
    }

    public function creditCount($account_id)
    {
        $course = $this->courses->getCourses($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->credit;
        }

        return $total;
    }

    public function creditCount1Year($account_id)
    {
        $course = $this->courses->getCourses1Year($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->credit;
        }

        return $total;
    }

    public function creditCount2Year($account_id)
    {
        $course = $this->courses->getCourses2Year($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->credit;
        }

        return $total;
    }

    public function creditCount3Year($account_id)
    {
        $course = $this->courses->getCourses3Year($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->credit;
        }

        return $total;
    }

    public function creditCount4Year($account_id)
    {
        $course = $this->courses->getCourses4Year($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->credit;
        }

        return $total;
    }


    public function totalGpa($account_id)
    {
        if(isset($_COOKIE['year_percentage_enable']) && $_COOKIE['year_percentage_enable'] == 'checked'){

            $setting = $this->getSettings($account_id);

            $year1 = $this->yr1Gpa($account_id)*($setting->year_1/100);
            $year2 = $this->yr2Gpa($account_id)*($setting->year_2/100);
            $year3 = $this->yr3Gpa($account_id)*($setting->year_3/100);
            $year4 = $this->yr4Gpa($account_id)*($setting->year_4/100);

            return $year1 + $year2 + $year3 + $year4;
        }else{
            $course = $this->courses->getCourses($account_id);

            $total = 0;

            foreach($course as $course){
                $total = $total + $course->total;
            }

            $count = $this->creditCount($account_id);

            if($count == 0){
                return 0;
            }else{
                return $total/$count;
            }
        }
    }

    public function yr1Gpa($account_id)
    {
        $course = $this->courses->getCourses1Year($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->total;
        }

        $count = $this->creditCount1Year($account_id);

        if($count == 0){
            return 0;
        }else{
            return $total/$count;
        }
    }

    public function yr2Gpa($account_id)
    {
        $course = $this->courses->getCourses2Year($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->total;
        }

        $count = $this->creditCount2Year($account_id);

        if($count == 0){
            return 0;
        }else{
            return $total/$count;
        }
    }

    public function yr3Gpa($account_id)
    {
        $course = $this->courses->getCourses3Year($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->total;
        }

        $count = $this->creditCount3Year($account_id);

        if($count == 0){
            return 0;
        }else{
            return $total/$count;
        }
    }

    public function yr4Gpa($account_id)
    {
        $course = $this->courses->getCourses4Year($account_id);

        $total = 0;

        foreach($course as $course){
            $total = $total + $course->total;
        }

        $count = $this->creditCount4Year($account_id);

        if($count == 0){
            return 0;
        }else{
            return $total/$count;
        }
    }


    public function checkSettings()
    {
        $account = $this->getOrCreateAccount();
        return $this->settings->checkSettings($account->id);
    }

    public function createSettings($data)
    {
        $account = $this->getOrCreateAccount();
        $data['account_id'] = $account->id;
        $data['status'] = 1;

        return $this->settings->create($data);
    }

    public function updateSettings($data)
    {
        if(isset($data['1_year'])){
            $data['is_1_year'] = true;
        }else{
            $data['is_1_year'] = false;
        }

        if(isset($data['2_year'])){
            $data['is_2_year'] = true;
        }else{
            $data['is_2_year'] = false;
        }

        if(isset($data['3_year'])){
            $data['is_3_year'] = true;
        }else{
            $data['is_3_year'] = false;
        }

        if(isset($data['4_year'])){
            $data['is_4_year'] = true;
        }else{
            $data['is_4_year'] = false;
        }


        $account = $this->getOrCreateAccount();
        $settings = $this->settings->getByAccount($account->id);

        return $settings->update($this->edit($settings, $data));
    }

    protected function edit(Setting $settings, $data)
    {
        $data['status'] = 1;
        return array_merge($settings->toArray(), $data);
    }

    public function getSettings($account_id)
    {
        return $this->settings->getByAccount($account_id);
    }

    public function newAccount()
    {
        $newKey = Str::random(100);
        Cookie::queue('active_account', $newKey, 9999999);

        $data['key'] = $newKey;
        $accounts = $this->accounts->create($data);
        $newData['account_id'] = $accounts->id;
        $this->settings->create($newData);

        return $accounts;
    }


}
