<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mohstaff extends Model
{
    use HasFactory;
    protected $fillable=[

        'mohid',
        'email',
        'district',
        'mname',
        'fname',
        'lname',
        'address',
        'contactno',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
