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
        $tasks = Issue::all();
        // task.index
        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create(): View
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     *
     */
    public function store(Request $request)
    {
        //Issueを作成
        $task = new Issue();

        $task->title = $request->title;
        $task->overview = $request->overview;
        $task->image_path = $request->image_path;
        $task->content = $request->content;
        $task->category_id = $request->category_id;

        $task->save();

        return redirect()->route('task.index');
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
    public function edit(int $id): View
    {
        // taskを1件取得
        $task = Issue::find($id);
        // task.edit
        return view('task.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     *
     *
     */
    public function update(Request $request, int $id)
    {
        // taskを1件アップデート
        $task = Issue::find($id);

        $task->title = $request->title;
        $task->overview = $request->overview;
        $task->image_path = $request->image_path;
        $task->content = $request->content;
        $task->category_id = $request->category_id;

        $task->save();
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     *
     */
    public function destroy(int $id)
    {
        // taskを1件削除
        $task = Issue::find($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}
