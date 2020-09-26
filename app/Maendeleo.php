<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Maendeleo extends Model
{
    protected $table = 'maendeleo';

    protected $fillable = [
       'amount_in_figures',
        'amount_in_words',
            'months',
            'phase',
            'total',
            'purpose',
            'collateral',
            'creditor',
            'creditor_Address',
            'creditor_amount',
            'mdhamini1',
            'mdhamini2',
            'user_id',

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
