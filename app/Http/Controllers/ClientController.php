<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = $this->validate(request(), [
            'name'          => 'required',
            'contact_name'  => 'required',
            'contact_phone' => 'required',
            'cost'          => 'numeric'
        ]);

        Client::create([
            'user_id'       => Auth::id(),
            'name'          => request('name'),
            'contact_name'  => request('contact_name'),
            'contact_phone' => request('contact_phone'),
            'contact_email' => request('contact_email'),
            'hosting'       => request('hosting'),
            'dashboard'     => request('dashboard'),
            'ssl'           => request('ssl'),
            'sslexpire'     => request('sslexpire'),
            'wordpress'     => request('wordpress'),
            'cost'          => request('cost'),
            'due_date'      => request('due_date')
        ]);

        //Client::create($client);

        return back()->with('success', 'Client added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
