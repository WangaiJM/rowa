<?php

namespace App\Http\Controllers;

use App\WorkerInsurance;
use App\User;
use App\Company;
use App\Worker;
use Illuminate\Http\Request;
use App\Http\Requests\WorkerInsuranceRequest;
use Illuminate\Support\Facades\Auth;

class WorkerInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Company $company, Worker $worker, WorkerInsurance $workerinsurance)
    {
        if(Auth::check()){
            return view('worker_insurance.create', compact('company', 'worker', 'workerinsurance'));
        }
        return route('login');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkerInsuranceRequest $request,User $user, Company $company, Worker $worker)
    {
        if(Auth::check()){
            $workerinsurance = New WorkerInsurance;

            $workerinsurance->company_id = $company->id;
            $workerinsurance->worker_id = $worker->id;
            $workerinsurance->amount = $request->amount;
            $workerinsurance->added_on = $request->added_on;
            $workerinsurance->expires_on = $request->expires_on;
     
            $workerinsurance->save();
            
             return redirect()->route('companies.workers.show', [$company, $worker])->with('success', 'Insurance has been added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkerInsurance  $workerInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Company $company, Worker $worker,WorkerInsurance $workerinsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkerInsurance  $workerInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Company $company, Worker $worker,WorkerInsurance $workerinsurance)
    {
        if(Auth::check()){
            return view('worker_insurance.edit', compact('company', 'worker', 'workerinsurance'));
        }
        return route('login'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkerInsurance  $workerInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(WorkerInsuranceRequest $request,User $user, Company $company, Worker $worker, WorkerInsurance $workerinsurance)
    {
        if(Auth::check()){
            $workerinsurance->company_id = $company->id;
            $workerinsurance->worker_id = $worker->id;
            $workerinsurance->amount = $request->amount;
            $workerinsurance->added_on = $request->added_on;
            $workerinsurance->expires_on = $request->expires_on;
     
            $workerinsurance->save();
            
            return redirect()->route('companies.workers.show', [$company, $worker])->with('success', 'Insurance has been updated successfully');
        }
        return route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkerInsurance  $workerInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,Company $company, Worker $worker, WorkerInsurance $workerinsurance)
    {
        if(Auth::check()){
            $workerinsurance->delete();

            return redirect()->route('companies.workers.show', [$company, $worker])->with('success', 'Insurance deleted succefully');
        }
        return route('login');
    }
}
