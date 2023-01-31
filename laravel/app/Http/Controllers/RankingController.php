<?php

namespace App\Http\Controllers;


use App\Models\Result;
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
        // resultsを全件取得して、viewに渡す
        $results = Result::all();
        return view('ranking.index', ['results' => $results]);

    }

}
