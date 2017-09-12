<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $taskObj  = new Task();
        $task     = $taskObj->get();
        return view('home', ['tasks' => $task]);
    }

    public function addTask(){
        return view('new');
    }

    public function postTask(Request $request){
        $name               = $request->name;
        $description        = $request->description;

        $task                   = new Task();
        $task->name             = $name;
        $task->description      = $description;

        $task->save();

        return redirect()->route('home');

    }

    public function editTask($id){
        $taskObj     = new Task();
        $task        = $taskObj->find($id);


        return view('new', ['task' => $task]);
    }

    public function updateTask(Request $request, $id){
        $name               = $request->name;
        $description        = $request->description;

        $taskObj     = new Task();
        $task        = $taskObj->find($id);

        $task->name             = $name;
        $task->description      = $description;

        $task->save();

        return redirect()->route('home');

    }

    public function deleteTask($id)
    {
        $taskObj     = new Task();
        $task        = $taskObj->find($id);

        $task->delete();

        return redirect()->route('home');
    }
}
