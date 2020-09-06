<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable = ['plot_name', 'plot_no', 'size', 'location', 'value', 'client_id'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function plotinsurances(){
        return $this->hasMany(Plotinsurance::class);
    }
}