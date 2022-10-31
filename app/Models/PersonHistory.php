<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonHistory extends Model
{
    use HasFactory;
    protected $fillable=[
        'date',
        'nic',
        'vaccine_product',
        'batch_number',
        'vaccination_status',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
