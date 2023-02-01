<?php

namespace App\Http\Controllers;


use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  @return View
     */
    public function show(int $id): View
    {
        return view('result.show');
    }

    public function store(Request $request)
    {
        $result = new Result();
        $result->user_id = $request->user()->id;
        $result->issue_id = $request->issue_id;
        $result->answer = 1;
        $result->save();
        return redirect()->route('task.index');
    }
}
