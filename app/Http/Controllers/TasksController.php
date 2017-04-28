<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
   public function index()
   {
      
      $task = new Task;
         
      $untasks = $task::where('finished', '=', 0)->orderBy('created_at', 'desc')->get();
      $tasks = $task::where('finished', '=', 1)->orderBy('created_at', 'desc')->get();


       return view('tasks.index', compact('untasks','tasks'));
   }

   public function store()
   {
   	$this->validate(request(),[
   			'name' => 'required|max:255'
   			]);

 		
      $task = new Task;

      $task::create(['name'=> request()->name]);

      if($task)
         return redirect()->home();

   }

   public function delete($task)
   {

   	$task = Task::find($task)->delete();

   	return redirect()->home();
   }

   public function confirm($task)
   {        
      $task = Task::find($task);
      $task->finished = 1;
      $task->save();
      
      return redirect()->home();
   }

   public function unConfirm($task)
   {        

      $task = Task::find($task);
      $task->finished = 0;
      $task->save();

      return redirect()->home();
   }
}
