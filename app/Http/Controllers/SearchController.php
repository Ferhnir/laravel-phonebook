<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Contact;

class SearchController extends Controller
{
    public function index(Request $request) {
        
        $contacts = Contact::where('name','like','%'.$request->get('search').'%')->get();
        $groups = Group::where('name','like','%'.$request->get('search').'%')->get();
        $search = $request->get('search');
        return view('search.index', compact('search','contacts','groups'));
    }
}
