<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable = [
        'client_id',
        'log_book_no',
        'registration',
        'chassis',
        'make',
        'model',
        'type',
        'body',
        'fuel',
        'main_year',
        'rating',
        'engine_number',
        'color',
        'reg_date',
        'gross_weight',
        'no_of_prev_owners',
        'passengers',
        'tare_weight',
        'tax_class',
        'axies',
        'load_capacity',
        'previous_reg_country',
        'previous_registration',
        'duty',
        'paid',
    ];

    public function client(){
        return $ths->belongsTo(Client::class);
    }
    
    public function insurances(){
        return $this->hasMany(Insurance::class);
    }
}
