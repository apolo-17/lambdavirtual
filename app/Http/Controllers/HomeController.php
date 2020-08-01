<?php

namespace App\Http\Controllers;

use App\Exams;
use App\StudentProfile;
use Illuminate\Http\Request;
use Auth;

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
        if (auth()->user()->email == 'admin@grupolambda.com.pe') {
            return redirect()->route('homeAdmin');;

        } else {

            if (StudentProfile::where('user_id',auth()->user()->id)->first() != null) {
                $exams_enabled = Exams::where('active',true)->get();
                return view('home')->with(['exams' => $exams_enabled]);
            }
            return redirect()->route('student-profile-create');
        }
    }

}
