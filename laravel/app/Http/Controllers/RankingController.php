<?php

namespace App\Http\Controllers;


use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  @return View
     */
    public function index(Request $request): View
    {
        // resultsを全件取得して、クリア数を計算して、viewに渡す
        $users = User::all();
        $ranking = [];
        foreach ($users as $user) {
            $results = Result::where('user_id', $user->id)->get();
            $clear_count = 0;
            foreach ($results as $result) {
                if ($result->answer) {
                    $clear_count++;
                }
            }
            $ranking[] = [
                'user_id' => $user->id,
                'name' => $user->name,
                'clear_count' => $clear_count,
            ];
        }
        return view('ranking.index', ['ranking' => $ranking]);
    }
}
