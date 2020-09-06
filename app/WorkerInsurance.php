<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkerInsurance extends Model
{
    protected $fillable = ['company_id', 'worker_id', 'amount', 'added_on', 'expires_on'];

    public function worker(){
        return $this->belongsTo(Worker::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
