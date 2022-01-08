<?php

namespace App\Http\Controllers;

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
}
