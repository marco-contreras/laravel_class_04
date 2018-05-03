<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\MessageWasReceived;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactResult = Contact::create($request->all());
        $contact = Contact::findOrFail($contactResult->id);

        event(new MessageWasReceived($contact));

        //Guardar el Id de un usuario en un mensaje que ya fue guardado con anterioridad
        //Esto es para cuando un usuario puede o no estar autenticado
        auth()->user()->contacts()->save($contact);

        //We can use this line whe all the users are autenticated
        //auth()->user()->contacts()->create($request->all());

        //We can do it this too
        //$contact->user_id = auth()->id();
        //$contact->save();

        /* Service DATA */
        config('services.newservice.key');
        env('NEW_SERVICE_KEY');
        /**/

        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.edit', compact('contact'));
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
        Contact::findOrFail($id)->update($request->all());

        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();

        return redirect()->route('contacts.index');
    }
}
