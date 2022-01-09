<?php

namespace App\Http\Controllers;
// ** Need these things to create item.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Input, Redirect;


use App\Models\Todo;

class HomeController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('id', 'asc')->get();

        // Send content to welcome view.
        return view('/home/index', [
            'todos' => $todos, 'listname' => 'My Todo List'
        ]);
    }


    // Shows detail for single item.
    public function detail($id)
    {
        $todo = Todo::where('id', $id)->first();
        return view('home/detail', [
            'todo' => $todo
        ]);
    }


    // Displays form to create object.
    public function create()
    {
        return view('/home/create', []);
    }

    // Creates new item. 
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'description' => 'required|max:255',
        // ]);

        // // Go to list page and show error.
        // if ($validator->fails()) {
        //     return redirect('/home')
        //         ->withInput()
        //         ->withErrors($validator);
        // }

        // Create new Todo object and save it to the database.
        $todo = new Todo;
        $todo->description = $request->description;
        $todo->save();

        // Gets last item that was inserted into the database.
        $id = DB::getPdo()->lastInsertId();
        $path = '/home/detail/' . $id;
        return redirect($path); // Show detail of new item.
    }

    // Enables deletion. 
    public function delete(Request $request)
    {
        // Extract id from the web request
        $id = $request->id;

        // Find the Todo object by id and delete it.
        Todo::findOrFail($id)->delete();

        // Redirect to the list view.
        return redirect('/');
    }
}
