<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartVaccine extends Model
{
    use HasFactory;
    protected $fillable=[
        'nic',
        'fullname',
        'age',
        'email',
        'doc',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
