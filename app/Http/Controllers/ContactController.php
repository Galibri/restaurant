<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->mark_as_read = $request->get('mark_as_read');
        if($contact->save()) {
            return redirect()->back()->with('success', 'Marked as read.');
        } else {
            return redirect()->back()->with('error', 'Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        if($contact->delete()) {
            return redirect()->back()->with('success', 'Contact deleted');
        } else {
            return redirect()->back()->with('error', 'Please try again.');
        }
    }
}
