<?php

namespace App\Http\Controllers;

use App\Worker;
use App\User;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\WorkerRequest;


class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        if(Auth::check()){
            //
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Company $company, Worker $worker)
    {
        if(Auth::check()){
            return view('workers.create', compact('company', 'worker'));
        }
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkerRequest $request,User $user, Company $company)
    {
        if(Auth::check()){
            $worker = New Worker;

            $worker->company_id = $company->id;
            $worker->firstname = $request->firstname;
            $worker->middlename = $request->middlename;
            $worker->lastname = $request->lastname;
            $worker->email = $request->email;
            $worker->date_of_birth = $request->date_of_birth;
            $worker->contacts = $request->contacts;
            $worker->id_no = $request->id_no;
            $worker->box_code = $request->box_code;
            $worker->postal_code = $request->postal_code;
            $worker->town = $request->town;
            $worker->kra_pin = $request->kra_pin;
     
            $worker->save();
            
             return redirect()->route('companies.show', $company)->with('success', 'Employee has been added successfully');
        }
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Company $company, Worker $worker)
    {
        if(Auth::check()){
            return view('workers.show', compact('company', 'worker'));
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Company $company, Worker $worker)
    {
        if(Auth::check()){
            return view('workers.edit', compact('company', 'worker'));
        }
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(WorkerRequest $request,User $user, Company $company,Worker $worker)
    {
        if(Auth::check()){
            $worker->company_id = $company->id;
            $worker->firstname = $request->firstname;
            $worker->middlename = $request->middlename;
            $worker->lastname = $request->lastname;
            $worker->email = $request->email;
            $worker->date_of_birth = $request->date_of_birth;
            $worker->contacts = $request->contacts;
            $worker->id_no = $request->id_no;
            $worker->box_code = $request->box_code;
            $worker->postal_code = $request->postal_code;
            $worker->town = $request->town;
            $worker->kra_pin = $request->kra_pin;
     
            $worker->save();
            
            return redirect()->route('companies.show', $company)->with('success', 'Employee has been updated successfully');
        }
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Company $company, Worker $worker)
    {
        if(Auth::check()){
            $worker->delete();

            return redirect()->route('companies.show', $company)->with('success', 'Employee has been deleted successfully');
        }
        return redirect()->route('login');
    }
}
