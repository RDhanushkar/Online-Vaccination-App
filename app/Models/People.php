<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable=[
        'fstname',
        'lstname',
        'address',
        'mobilenumber',
        'gender',
        'nic',
        'dob',
        'district',
        'moh',
        'uname',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
}
