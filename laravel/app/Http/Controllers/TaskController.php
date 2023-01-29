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

    public function show($id)
    {
        //idからIssueを取得
        $task = Issue::find($id);
        //viewに渡す
        return view('task', ['task' => $task]);
    }
}
