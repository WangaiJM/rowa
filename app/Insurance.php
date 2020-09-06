<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use Carbon\Carbon;

class Insurance extends Model
{
    protected $fillable = ['client_id', 'motor_id', 'added_on', 'expires_on', 'premium', 'amount'];

    protected $dates = [ "expires_on", "added_on" ];

    public function motor(){
        return $this->belongsTo(Motor::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function scopeSearch($query, $value){
        dd( $query->where('id', 'like', '%' .$value. '%'));
    }

    public function getBalanceAttribute(){
        return $this->premium - $this->amount;
    }
    // public function setAddedOnAttribute($value)
    // {
    //     $this->attributes['added_on'] = $value;       
    //     $this->attributes['expires_on'] = date('Y-m-d', strtotime($value . " +1 year") );;
    // }

    

}