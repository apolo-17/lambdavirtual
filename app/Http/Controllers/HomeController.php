<?php

namespace App\Http\Controllers;
use App\StudentProfile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (StudentProfile::where('user_id',auth()->user()->id)->first() != null) {
            return view('home');
        }
        return redirect()->route('student-profile-create');
    }
}
