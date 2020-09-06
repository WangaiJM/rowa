<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user)
    {
        if(Auth::check()){
            $value = $request->input('id_no');

            $clients = Client::latest()->search($value)->paginate(10);
    
            return view('clients.index', compact('user', 'clients', 'value'));
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        if(Auth::check()){
            $client = New Client;

            return view('clients.create', compact('client'));
        }

        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request, User $user)
    {
        if(Auth::check()){
            $client = New Client;

            $client->firstname = $request->firstname;
            $client->middlename = $request->middlename;
            $client->lastname = $request->lastname;
            $client->email = $request->email;
            $client->date_of_birth = $request->date_of_birth;
            $client->contacts = $request->contacts;
            $client->id_no = $request->id_no;
            $client->box_code = $request->box_code;
            $client->postal_code = $request->postal_code;
            $client->town = $request->town;
            $client->kra_pin = $request->kra_pin;
     
            $client->save();
            
             return redirect()->route('clients.index')->with('success', 'Client has been added successfully');
        }

        return redirect()->route('login');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(USer $user, Client $client)
    {
        // $value = Client::searchCar($request->input('registration'));
        if(Auth::check()){
            return view('clients.show', compact('user', 'client'));
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Client $client)
    {
        if(Auth::check()){
            return view('clients.edit', compact('client'));
        }
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, User $user, Client $client)
    {
        if(Auth::check()){
            $client->firstname = $request->firstname;
            $client->middlename = $request->middlename;
            $client->lastname = $request->lastname;
            $client->email = $request->email;
            $client->date_of_birth = $request->date_of_birth;
            $client->contacts = $request->contacts;
            $client->id_no = $request->id_no;
            $client->box_code = $request->box_code;
            $client->postal_code = $request->postal_code;
            $client->town = $request->town;
            $client->kra_pin = $request->kra_pin;

            $client->save();
        
            return redirect()->route('clients.index')->with('success', 'Client has been updated successfully');
        }
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Client $client)
    {
        if(Auth::check()){
            $client->delete();

            return redirect()->route('clients.index')->with('success', 'Client has been deleted successfully');
            return redirect()->route('login');
        }
    }
}
