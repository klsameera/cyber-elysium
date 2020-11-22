<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'gradeA',
        'status',
        'is_1_year',
        'is_2_year',
        'is_3_year',
        'is_4_year',
        'year_1',
        'year_2',
        'year_3',
        'year_4',
    ];


    public function checkSettings($account_id)
    {
        return $this->where('account_id',$account_id)->get()->count();
    }

    public function getByAccount($account_id)
    {
        return $this->where('account_id',$account_id)->first();
    }
}
