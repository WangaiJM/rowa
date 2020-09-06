<?php

namespace App\Http\Controllers;

use App\Plotinsurance;
use App\Client;
use App\Plot;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PlotInsuranceRequest;

class PlotinsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user,Client $client, Plot $plot, Plotinsurance $plotinsurance)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user,Client $client, Plot $plot, Plotinsurance $plotinsurance)
    {
        return view('plotinsurance.create', compact('client', 'plot', 'plotinsurance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlotInsuranceRequest $request,User $user, Client $client, Plot $plot, Plotinsurance $plotinsurance)
    {
        $plot->plotinsurances()->create([
            'client_id' => $client->id,
            'plot_id' => $plot->id,
            'premium' => $request->premium,
            'fire' => $request->fire,
            'floods' => $request->floods,
            'terrorism' => $request->terrorism,
            'added_on' => $request->added_on,
        ]);

        return redirect()->route('clients.plots.show', [$client, $plot])->with('success', 'Plot insurance Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plotinsurance  $plotinsurance
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,Client $client, Plot $plot, Plotinsurance $plotinsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plotinsurance  $plotinsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,Client $client, Plot $plot, Plotinsurance $plotinsurance)
    {
        return view('plotinsurance.edit', compact('client', 'plot', 'plotinsurance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plotinsurance  $plotinsurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user, Client $client, Plot $plot, Plotinsurance $plotinsurance)
    {
        $plot->plotinsurances()->update([
            'client_id' => $client->id,
            'plot_id' => $plot->id,
            'premium' => $request->premium,
            'fire' => $request->fire,
            'floods' => $request->floods,
            'terrorism' => $request->terrorism,
            'added_on' => $request->added_on,
        ]);

        return redirect()->route('clients.plots.show', [$client, $plot])->with('success', 'Plot insurance UPdated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plotinsurance  $plotinsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,Client $client, Plot $plot, Plotinsurance $plotinsurance)
    {
        $plotinsurance->delete();

        return redirect()->route('clients.plots.show', [$client, $plot])->with('success', 'Plot Insurance has been deleted successfully');
    }
}
