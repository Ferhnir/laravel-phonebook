<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Group;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::orderBy('name','asc')->get();
        return view('contacts.index',compact('contacts'));
    }

    public function show(Contact $contact) {
        $group = Group::where('id','=',$contact->id)->value('name');
        return view('contacts.show',compact('contact','group'));
    }

    public function create(){
        $groups = Group::all();
        return view('contacts.create',compact('groups'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:7',
            'group_id' => 'required'
        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->group_id = $request->group_id;
        $contact->save();
        return redirect('contacts')->with('success','Contact added successfully');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('groups')->with('success','Contact deleted successfully');
    }
}
