<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'industry', 'email', 'contacts', 'box_code', 'postal_code','town','kra_pin' ];

    public function workers(){
        return $this->hasMany(Worker::class);
    }

    public function workerinsurances(){
        return $this->hasMany(WorkerInsurance::class);
    }
}
