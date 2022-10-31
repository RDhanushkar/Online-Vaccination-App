<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annocement extends Model
{
    use HasFactory;
    protected $fillable=[
        'date',
        'vaccine',
        'venue',
        'age_group',
        'no_of_dosage',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
