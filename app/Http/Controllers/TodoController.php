<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    //
    public function index()
    {
    	$todos = Todo::all();	
    	return view('todo.master')->with('todos',$todos);
    }

    public function create()
    {
    	return view('todo.create');
    }
    public function store(Request $request)
    {	
		 $validatedData = $request->validate([
        'name' => 'required|min:6|max:255',
        'description' => 'required',
    ]);    	
    	$todos = new Todo;
    	$todos->name = $request->name;
    	$todos->description = $request->description;
    	$todos->completed = $request->completed;
    	$todos->save();

    	return redirect('/todos');
    }
    public function detail($id)
    {
    	$todos = Todo::find($id);
		return view('todo.detail',compact('todos'));

    }

    public function edit($id)
    {
    	$todos = Todo::find($id);
		return view('todo.edit',compact('todos'));
    	
    }
    public function update(Request $request,$id)
    {	

		 $validatedData = $request->validate([
        'name' => 'required|min:6|max:255',
        'description' => 'required',
    ]);
    	$data = request()->all();
    	$todos = Todo::find($id);
    	$todos->name = $request->name;
    	$todos->description = $request->description;
    	$todos->completed = $request->completed;
		$todos->update();    	
    	return redirect('/todos');
    }
    public function delete($id)
    {
    	$todos = Todo::find($id);
    	$todos->delete();
   		return redirect('/todos');
    	
    }
}
