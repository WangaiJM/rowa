<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use carbon\Carbon;

class Worker extends Model
{
    protected $fillable = ['name', 'email', 'id_no', 'date_of_birth', 'contacts', 'box_code', 'postal_code','town','kra_pin', 'company_id'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function workerinsurances(){
        return $this->hasMany(WorkerInsurance::class);
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
}
