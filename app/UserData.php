<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $fillable = [
        'name', 'address','phone','work','location','gender','street', 'status','bond',
    ];

}
