<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Http\Requests\TodoEditRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoCreateRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::user()->id;
        if ($request->image) {
            $imageName = time() . '.' . $request->file('image')->extension();

            $request->image->move(public_path('/images/todos/'), $imageName);
            $validated['image'] = 'images/todos/' . $imageName;
        }

        // dd($validated);

  
            $todos = Todo::create($validated);
            return redirect()->route('todos')->with('message', 'Successfully Created!!');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $todo = Todo::where('slug',$slug)->firstOrFail();

        return view('todos.view', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $todo = Todo::where('slug',$slug)->firstOrFail();
        if($todo->user_id == Auth::user()->id) {
         return view('todos.edit', compact('todo'));

        } else {
            return redirect()->back()->with('message','You Are Not authorized!!');
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TodoEditRequest $request, string $id)
    {
        $todo = Todo::findOrFail($id);

        $validated = $request->validated();

        if ($request->image) {

            if(File::exists($todo->image)) {
                File::delete($todo->image);
            }
            $imageName = time() . '.' . $request->file('image')->extension();

            $request->image->move(public_path('/images/todos/'), $imageName);
            $validated['image'] = 'images/todos/' . $imageName;
        }
        $todo->update($validated);

        return redirect()->route('todos')->with('message', 'Successfully Updated!!');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::findOrFail($id);

        if($todo->user_id == Auth::user()->id) {
            if(File::exists($todo->image)) {
                File::delete($todo->image);
            }
            $todo->delete();
            return redirect()->route('todos')->with('message', 'Successfully deleted!!');
   
           } else {
               return redirect()->back()->with('message','You Are Not authorized!!');
           }
      

    }
}
