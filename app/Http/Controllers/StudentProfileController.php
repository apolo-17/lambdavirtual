<?php

namespace App\Http\Controllers;

use App\AcademicDegree;
use App\Country;
use App\EnglishLevel;
use App\SchoolCycle;
use App\StudentProfile;
use App\University;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = StudentProfile::where('user_id',auth()->user()->id)->with(['country','university','schoolCycle','academicDegree','englishLevel'])->first();
        //dd($student);
        if ($student) {
            return view('studentprofile_index')->with(['student' => $student]);
        }
        return redirect()->route('student-profile-create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        $universities = University::get();
        $school_ciclies = SchoolCycle::get();
        $academic_degrees = AcademicDegree::get();
        $english_levels = EnglishLevel::get();

        return view('studentprofile_create')->with(['countries' => $countries, 'universities' => $universities, 'school_ciclies' => $school_ciclies,
        'academic_degrees' => $academic_degrees, 'english_levels' => $english_levels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_profile = new StudentProfile;
        $student_profile->user_id = auth()->user()->id;
        $student_profile->name = $request->name;
        $student_profile->last_name = $request->last_name;
        $student_profile->phone_number = $request->phone_number;
        $student_profile->country_id = $request->country_id;
        $student_profile->department = $request->department;
        $student_profile->province = $request->province;
        $student_profile->district = $request->district;
        $student_profile->born_date = $request->born_date;
        $student_profile->gender = $request->gender;
        $student_profile->dni = $request->dni;
        $student_profile->university_id = $request->university_id;
        $student_profile->school_cycle_id = $request->school_cycle_id;
        $student_profile->academic_degree_id = $request->academic_degree_id;
        $student_profile->english_level_id = $request->english_level_id;
        $student_profile->work = $request->work;
        $student_profile->save();


        return redirect()->route('student-profile-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function show(StudentProfile $studentProfile)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentProfile $studentProfile)
    {
        $studient = auth()->user()->studentProfile;
        dd($studient);
        //return view('studientprofile_edit')->with(['studient' => $studient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentProfile $studentProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentProfile $studentProfile)
    {
        //
    }
}
