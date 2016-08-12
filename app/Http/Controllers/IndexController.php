<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }
    public function task(Request $request){
        //name最大值不能超过255个字符；
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
        ]);
        if($validator->fails()){
            return redirect('/')->withInput()->withErrors($validator);
        }
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect('/');
    }
    public function delete(Request $request , $task){
        $this->authorize('delete', $task);
        //Task::findOrFail($id)->delete();
        $task->delete();
        return redirect('/');
    }
    public function test(){
        return "master test2";
    }
}
