<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\DB;

class todoController extends Controller
{
    public function index() 
    {
        $user =todo::where('process','In Progress')->get();
        $users = todo::where('process','Completed')->get();
        return view('TodoTask.index',[
            'todotasks' => $user,
            'comtask' => $users
        ]);
    }
    public function create()
    {
        return view('TodoTask.create');
    }
    public function store(Request $request)
    {
        $todotask = new todo;
        $todotask->task = $request->task;
        $todotask->process = $request->process;
        $todotask->save();
        return redirect('/');
    }
    public function complete($id)
    {
        $untask = todo::findOrFail($id);
        $untask->process = "Completed";
        $untask->update();
        return redirect('/');
    }
    public function incomplete($id)
    {
        $intask = todo::findOrFail($id);
        $intask->process = "In Progress";
        $intask->update();
        return redirect('/');
    }
    public function destroy($id)
    {
        $deletetask = new todo;
        $deletetask->destroy($id);
        return redirect('/');
    }
    public function edit($id)
    {
        return view('TodoTask.edit',[
            'edittask' => todo::findOrFail($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        $uptask = todo::findOrFail($id);
        $uptask->task = $request->task;
        $uptask->process = $request->process;
        $uptask->update();
        return redirect('/');
    }
}
