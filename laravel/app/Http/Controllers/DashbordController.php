<?php

namespace App\Http\Controllers;


use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  @return View
     */
    public function index(Request $request): View
    {
        // userのidを取得して、そのidに紐づくresultsを取得して、クリア数を計算して、viewに渡す
        $user_id = $request->user()->id;
        $results = Result::where('user_id', $user_id)->get();
        $clear_count = 0;
        foreach ($results as $result) {
            if ($result->clear_flag) {
                $clear_count++;
            }
        }
        return view('dashbord.index', ['clear_count' => $clear_count]);
    }
}
