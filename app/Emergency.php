<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
protected $table ='emergencies';

    protected $fillable =['saving', 'bond', 'successor_name', 'successor_phone', 'member_id', 'business', 'place','day_income', 'month_income', 'amount', 'reason','month_payment','payment_phase',];
}
