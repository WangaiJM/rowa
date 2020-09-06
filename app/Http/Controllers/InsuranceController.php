<?php

namespace App\Http\Controllers;

use App\Insurance;
use App\Motor;
use App\Client;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\InsuranceRequest;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user,Client $client, Motor $motor)
    {
        if(Auth::check()){

        }
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Client $client, Motor $motor, Insurance $insurance)
    {
        if(Auth::check()){
            return view('insurance.create', compact('client', 'motor', 'insurance'));
        }
        return redirect()->route('login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsuranceRequest $request,User $user, Client $client, Motor $motor, Insurance $insurance)
    {
        if(Auth::check()){
            $motor->insurances()->create([
                'client_id' => $client->id,
                'motor_id' => $motor->id,
                'added_on' => $request->added_on,
                'expires_on' => $request->expires_on,
                'premium' => $request->premium,
                'amount' => $request->amount
            ]);
    
            return redirect()->route('clients.motors.show', [$client, $motor])->with('success', 'Cover Added Successfully');
        }
        return redirect()->route('login');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,Insurance $insurance)
    {
        if(Auth::check()){

        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,Client $client, Motor $motor, Insurance $insurance)
    {
        if(Auth::check()){
            return view('insurance.edit', compact('client', 'motor', 'insurance'));
        }
        return redirect()->route('login');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(InsuranceRequest $request,User $user,Client $client, Motor $motor, Insurance $insurance)
    {
        if(Auth::check()){
            $motor->insurances()->update([
                'client_id' => $client->id,
                'motor_id' => $motor->id,
                'added_on' => $request->added_on,
                'expires_on' => $request->expires_on,
                'premium' => $request->premium,
                'amount' => $request->amount
            ]);
    
            return redirect()->route('clients.motors.show', [$client, $motor])->with('success', 'Cover has been Updated Successfully');
        }
        return redirect()->route('login');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Client $client, Motor $motor, Insurance $insurance)
    {
        if(Auth::check()){
            $insurance->delete();

            return redirect()->route('clients.motors.show', [$client, $motor])->with('success', 'Car has been deleted successfully');
        }
        return redirect()->route('login');
    }
}
