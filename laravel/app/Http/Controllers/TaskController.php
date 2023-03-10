<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  @return View
     */
    public function index(Request $request): View
    {
        //Issueを全件取得
        //クエリパラメーターを取得
        $category_id = $request->query('category');
        if ($category_id) {
            $tasks = Issue::where('category_id', $category_id)->get();
        } else {
            $tasks = Issue::where('category_id', 1)->get();
        }

        // resultを全件取得
        $results = Result::where('user_id', $request->user()->id)->get();

        // クリアしたissueは配列から削除
        foreach ($results as $result) {
            if ($result->answer) {
                foreach ($tasks as $key => $task) {
                    if ($task->id === $result->issue_id) {
                        unset($tasks[$key]);
                    }
                }
            }
        }

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
        $dir = 'sample';
        //Issueを作成
        $task = new Issue();

        $task->title = $request->title;
        $task->overview = $request->overview;

        $save_file = $request->file('image_path')->store('public/' . $dir);
        $task->image_path = 'storage/' . $dir . '/' . basename($save_file);
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

        // 新しいissueから4件取得
        $new_issues = Issue::orderBy('created_at', 'desc')->take(4)->get();

        // task.show
        return view('task.show', ['task' => $task], ['new_issues' => $new_issues]);
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

        $dir = 'sample';
        // taskを1件アップデート
        $task = Issue::find($id);

        $task->title = $request->title;
        $task->overview = $request->overview;
        $save_file = $request->file('image_path')->store('public/' . $dir);
        $task->image_path = 'storage/' . $dir . '/' . basename($save_file);

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
