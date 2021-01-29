<?php

namespace App\Http\Controllers;

use App\Models\staf;
use App\Models\mechanisms;
use Illuminate\Http\Request;
use App\Models\Project_Complete;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        $projectcomplete = Project_Complete::where('type', 1)->take(9)->orderBy('id', 'DESC')->get();
        $projectcomplete_not = Project_Complete::where('type', 0)->take(9)->get();
        $projectcompletelast = Project_Complete::where('type', 1)->get();
        $stafs = staf::all();
        $mechanisms = mechanisms::all();

        return view('index', compact('projectcomplete', 'projectcomplete_not', 'stafs', 'mechanisms', 'projectcompletelast'));
    }
}