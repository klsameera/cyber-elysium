<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'account_id',
        'credit',
        'grade',
        'total',
        'year',
    ];

    public function getCourses($account_id)
    {
        return $this->where('account_id',$account_id)->get();
    }

    public function courseCount($account_id)
    {
        return $this->where('account_id',$account_id)->get()->count();
    }

    public function getCourses1Year($account_id)
    {
        return $this->where('account_id',$account_id)->where('year',1)->get();
    }

    public function getCourses2Year($account_id)
    {
        return $this->where('account_id',$account_id)->where('year',2)->get();
    }

    public function getCourses3Year($account_id)
    {
        return $this->where('account_id',$account_id)->where('year',3)->get();
    }

    public function getCourses4Year($account_id)
    {
        return $this->where('account_id',$account_id)->where('year',4)->get();
    }


}
