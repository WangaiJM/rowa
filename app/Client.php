<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use carbon\Carbon;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'id_no', 'date_of_birth', 'contacts', 'box_code', 'postal_code','town','kra_pin'];

    public function motors(){
        return $this->hasMany(Motor::class);
    }

    public function insurances(){
        return $this->hasMany(Insurance::class);
    }

    public function setCreatedAtAtrribute($value){
        $this->attributes['created_at'] = now();
        $this->attributes['created_at'] = $value;
    }

    public function setUpdatedAtAtrribute($value){
        $this->attributes['updated_at'] = now();
        $this->attributes['updated_at'] = $value;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date_of_birth'] = Carbon::parse($value)->format('m/d/Y');
    }

    public function getNameAttribute(){
        return "{$this->firstname} {$this->middlename} {$this->lastname}";
    }

    public function getDobAttribute(){
        return Carbon::parse($this->date_of_birth)->format('m/d/Y');
    }

    public function scopeSearch($query, $value){
        return $query->where('id_no', 'like', '%' .$value. '%');
    }

    public function plots(){
        return $this->hasMany(Plot::class);
    }

    public function plotinsurances(){
        return $this->hasMany(Plotinsurance::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
