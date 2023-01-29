<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  @return View
     */
    public function index(): View
    {
        //Issueを全件取得
        return view('task');
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     */
    public function show(int $id): View
    {
        //Issueを1件取得
        $task = Issue::find($id);
        // task.show
        return view('task.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     *
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     *
     *
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     *
     */
    public function destroy()
    {
        //
    }
}
