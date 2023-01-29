<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //Issueを全件取得
        return view('task');
    }

    public function show(int $id)
    {
        //Issueを1件取得
        $task = Issue::find($id);
        // task.show
        return view('task.show', ['task' => $task]);
    }
}
