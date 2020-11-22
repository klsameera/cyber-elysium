<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait FormHelper
{
    public function getGrade($grade)
    {
        switch($grade){
            case 4.3:
                return  '<span class="badge badge-success">A+</span>';
                break;
            case 4.0:
                return  '<span class="badge badge-success">A</span>';
                break;
            case 3.7:
                return  '<span class="badge badge-success">A-</span>';
                break;
            case 3.3:
                return  '<span class="badge badge-success">B+</span>';
                break;
            case 3.0:
                return  '<span class="badge badge-success">B</span>';
                break;
            case 2.7:
                return  '<span class="badge badge-info">B-</span>';
                break;
            case 2.3:
                return  '<span class="badge badge-info">C+</span>';
                break;
            case 2.0:
                return  '<span class="badge badge-info">C</span>';
                break;
            case 1.7:
                return  '<span class="badge badge-warning">C-</span>';
                break;
            case 1.3:
                return  '<span class="badge badge-warning">D+</span>';
                break;
            case 1.0:
                return  '<span class="badge badge-warning">D</span>';
                break;
            case 0:
                return  '<span class="badge badge-danger">E</span>';
                break;
        }
    }

    public function Gpa($total_gpa)
    {
        return number_format($total_gpa, 4);
    }

    public function finalClass($total_gpa)
    {
        if($total_gpa >= 3.7){
            return  '<span class="badge badge-success text-white">First Class</span>';
        }else if($total_gpa >= 3.3){
            return  '<span class="badge badge-info text-white">Second Upper Class</span>';
        }else if($total_gpa >= 3.0){
            return  '<span class="badge badge-warning text-white">Second Lower Class</span>';
        }else{
            return  '<span class="badge badge-danger text-white">No Class</span>';
        }
    }

    public function getGradeA($grade)
    {
        if($grade == 1){
            return '<span class="badge badge-info text-white" style="font-size: 90%;line-height: 2;">A+ = 4.3</span>';
        }else{
            return '<span class="badge badge-info text-white" style="font-size: 90%;line-height: 2;">A+ = 4.0</span>';
        }
    }

    public function getYear($year)
    {
        switch($year){
            case 1:
                return  '<span class="badge badge-year1">1st Year</span>';
                break;
            case 2:
                return  '<span class="badge badge-year2">2nd Year</span>';
                break;
            case 3:
                return  '<span class="badge badge-year3">3rd Year</span>';
                break;
            case 4:
                return  '<span class="badge badge-year4">4th Year</span>';
                break;
        }
    }
}
