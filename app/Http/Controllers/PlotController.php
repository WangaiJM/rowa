<?php

namespace App\Http\Controllers;

use App\Plot;
use App\Client;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PlotRequest;

class PlotController extends Controller
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
    public function create(User $user,Client $client,Plot $plot)
    {
        return view('plots.create', compact('client', 'plot'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlotRequest $request,User $user, Client $client, Plot $plot)
    {
        $client->plots()->create([
            'client_id' => $client->id,
            'plot_name' => $request->plot_name,
            'plot_no' => $request->plot_no,
            'location' => $request->location,
            'size' => $request->size,
            'value' => $request->value,
        ]);



        return redirect()->route('clients.show', $client)->with('success', 'The car has been added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client, Plot $plot)
    {
        return view('plots.show', compact('client', 'plot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,Client $client,Plot $plot)
    {
        return view('plots.edit', compact('client', 'plot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function update(PlotRequest $request,User $user, Client $client, Plot $plot)
    {
        $client->plots()->update([
            'plot_name' => $request->plot_name,
            'location' => $request->location,
            'size' => $request->size,
            'value' => $request->value,
        ]);



        return redirect()->route('clients.show', $client)->with('success', 'The plot has been updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,Client $client, Plot $plot)
    {
        $plot->delete();

        return redirect()->route('clients.show', $client)->with('success', 'Plot has been deleted successfully');
    }
}
