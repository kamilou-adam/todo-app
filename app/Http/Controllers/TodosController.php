<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    //

    public function index()
    {
        $todos =Todo::all();
        return view('todos.index')->with('todos',Todo::all());
    }
    //=============================================================
    public function show($todoId)
    {  
      //  $todo = Todo::find($todoId);
        return view('todos.show')->with('todo',Todo::find($todoId));
    }
    //=============================================================
    public function create()
    {
        return view('todos.create');
    }
    //=============================================================
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:20',
            'description' => 'required',
        ]);

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }
    //===============================================================
    public function destroy($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();
        return redirect('/todos');
    }
    
 //===============================================================
    public function edit($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todos.edit')->with('todo',$todo);
    }
 //===============================================================
    public function update($todoId)
    {
       

        $data = request()->all();
        $todo = Todo::find($todoId);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/todos');

    }

}
