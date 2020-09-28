<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commitee extends Model
{
    protected $table ='commitees';

    protected $fillable =['interest', 'description', 'status', 'chair', 'secretary', 'messenger', 'loan_officer','receive_date', 'start_date', 'end_day', 'month_interest','month_payment',];

}
