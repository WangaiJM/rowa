<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        if(Auth::check()){
            $companies =  Company::latest()->paginate(10);

            return view('companies.index', compact('companies'));
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
            $company = New Company;

            return view('companies.create', compact('company'));
        }
        return redirect()->route('login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request, User $user)
    {
        if(Auth::check()){
            $company = New Company;

            $company->name = $request->name;
            $company->email = $request->email;
            $company->industry = $request->industry;
            $company->contacts = $request->contacts;
            $company->box_code = $request->box_code;
            $company->postal_code = $request->postal_code;
            $company->town = $request->town;
            $company->kra_pin = $request->kra_pin;
    
            $company->save();
           
            return redirect()->route('companies.index')->with('success', 'Company has been added successfully');
        }
        return redirect()->route('login');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Company $company)
    {
        if(Auth::check()){
            return view('companies.show', compact('company'));
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Company $company)
    {
        if(Auth::check()){
            return view('companies.edit', compact('company'));
        }
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, User $user, Company $company)
    {
        if(Auth::check()){
            $company->update([
                'name' => $request->name,
                'email' => $request->email,
                'industry' => $request->industry,
                'contacts' => $request->contacts,
                'box_code' => $request->box_code,
                'postal_code' => $request->postal_code,
                'town' => $request->town,
                'kra_pin' => $request->kra_pin,
            ]);
    
            return redirect()->route('companies.index')->with('success', 'Company has been updated successfully');
        }
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Company $company)
    {
        if(Auth::check()){
            $company->delete();

            return redirect()->route('companies.index')->with('success', 'Company has been deleted successfully');
        }
        return redirect()->route('login');
    }
}
