<?php

namespace App\Http\Controllers;

use App\Motor;
use App\Client;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\MotorRequest;
use Illuminate\Support\Facades\Auth;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
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
    public function create(User $user,Client $client, Motor $motor)
    {
        if(Auth::check()){
            return view('motors.create', compact('client', 'motor'));
        }
        return redirect()->route('login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MotorRequest $request,User $user, Client $client, Motor $motor)
    {
        if(Auth::check()){
            $client->motors()->create([
                'client_id' => $client->id,
                'log_book_no' => $request->log_book_no,
                'registration' => $request->registration,
                'chassis' => $request->chassis,
                'make' => $request->make,
                'model' => $request->model,
                'type' => $request->type,
                'body' => $request->body,
                'fuel' => $request->fuel,
                'main_year' => $request->main_year,
                'rating' => $request->rating,
                'engine_number' => $request->engine_no,
                'color' => $request->color,
                'reg_date' => $request->reg_date,
                'gross_weight' => $request->gross_weight,
                'no_of_prev_owners' => $request->no_of_prev_owners,
                'passengers' => $request->passengers,
                'tare_weight' => $request->tare_weight,
                'tax_class' => $request->tax_class,
                'axies' => $request->axies,
                'load_capacity' => $request->load_capacity,
                'previous_reg_country' => $request->prev_reg_country,
                'previous_registration' => $request->previous_registration,
                'duty' => $request->duty,
                'paid' => $request->paid,
            ]);
    
    
    
            return redirect()->route('clients.show', $client)->with('success', 'The car has been added successfully!!');
        }
        return redirect()->route('login');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,Client $client, Motor $motor)
    {
        if(Auth::check()){
            return view('motors.show', compact('client', 'motor'));
        }
        return redirect()->route('login');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client, Motor $motor)
    {if(Auth::check()){
        return view('motors.edit', compact('client', 'motor'));
    }
    return redirect()->route('login');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function update(MotorRequest $request,User $user, Client $client, Motor $motor)
    {
        if(Auth::check()){
            $client->motors()->update([
                'log_book_no' => $request->log_book_no,
                'chassis' => $request->chassis,
                'make' => $request->make,
                'model' => $request->model,
                'type' => $request->type,
                'body' => $request->body,
                'fuel' => $request->fuel,
                'main_year' => $request->main_year,
                'rating' => $request->rating,
                'engine_number' => $request->engine_no,
                'color' => $request->color,
                'reg_date' => $request->reg_date,
                'gross_weight' => $request->gross_weight,
                'no_of_prev_owners' => $request->no_of_prev_owners,
                'passengers' => $request->passengers,
                'tare_weight' => $request->tare_weight,
                'tax_class' => $request->tax_class,
                'axies' => $request->axies,
                'load_capacity' => $request->load_capacity,
                'previous_reg_country' => $request->prev_reg_country,
                'previous_registration' => $request->previous_registration,
                'duty' => $request->duty,
                'paid' => $request->paid,
            ]);
    
            return redirect()->route('clients.show', [$client, $motor])->with('success', 'The car has been updated successfully!!');
        }
        return redirect()->route('login');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,Client $client, Motor $motor)
    {
        if(Auth::check()){
            $motor->delete();

            return redirect()->route('clients.show', $client)->with('success', 'Car has been deleted successfully');
        }
        return redirect()->route('login');
    }
}
