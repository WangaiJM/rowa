<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plotinsurance extends Model
{
    protected $fillable = ['client_id', 'plot_id', 'premium','fire', 'floods', 'terrorism', 'added_on', 'expires_on'];

    public function plot(){
        return $this->belongsTo(Plot::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function setAddedOnAttribute($value)
    {
        $this->attributes['added_on'] = $value;       
        $this->attributes['expires_on'] = date('Y-m-d', strtotime($value . " +1 year"));
    }

    public function getTotalAttribute(){
        return $this->fire + $this->terrorism + $this->floods;
    }

    public function getBalanceAttribute(){
        return $this->premium - $this->total;
    }
}
