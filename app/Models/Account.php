<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'user_id',
        'status',
    ];

    public function checkKey($key)
    {
        $check = $this->where('key',$key)->where('status',0)->count();
        if ($check > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getByKey($cart_key)
    {
        return $this->where('key',$cart_key)->first();
    }


}
