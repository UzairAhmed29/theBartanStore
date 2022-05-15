<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Contact;
use Session;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'About';
        $contact = Contact::find(1);
        return view('admin.contact.index', compact('title', 'contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = Contact::create([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'facebook' => isset($request->address) ? $request->facebook : null ,
            'code' => $request->code,
            'newsletter' => $request->newsletter,
            'mc_api_key' => isset($request->mc_api_key) ? $request->mc_api_key : null ,
            'mc_list_id' => isset($request->list_id) ? $request->list_id : null ,
        ]);
        Session::flash('success', 'Contact Updated Successfully');
        return redirect(route('contact.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $contact = Contact::find(1);
        // return view('admin.contact.index', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        if($contact) {
            $contact->update([
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'facebook' => isset($request->address) ? $request->facebook : null ,
                'code' => $request->code,
                'newsletter' => $request->newsletter,
                'mc_api_key' => isset($request->mc_api_key) ? $request->mc_api_key : null ,
                'mc_list_id' => isset($request->list_id) ? $request->list_id : null ,

            ]);
            Session::flash('success', 'Contact Updated Successfully');
            return redirect(route('contact.index'));
        }
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
