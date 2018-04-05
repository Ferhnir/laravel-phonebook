<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function index() {
        $groups = Group::orderBy('name','asc')->get();
        return view('group.index',compact('groups'));
    }

    public function show(Group $group) {
        return view('group.show',compact('group'));
    }

    public function create() {
        return view('group.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3'
        ]);
        Group::create(request(['name']));
        return redirect('groups')->with('success','Group added successfully');
    }

    public function edit($id){
        $group = Group::find($id);
        return view('group.edit',compact('group','id'));
    }

    public function update(Request $request, $id)
    {
        $group = Group::find($id);
        $group->name = $request->get('name');
        $group->save();
        return redirect('groups')->with('success','Group deleted successfully');
    }

    public function destroy($id){
        $group = Group::find($id);
        $group->delete();
        return redirect('groups')->with('success','Group deleted successfully');
    }
}
