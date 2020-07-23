<?php

namespace App\Http\Controllers;

use App\Exams;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminexam.adminExamindex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminexam.adminExamshow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'deploy_exam' => ['required'],
            'finish_exam' => ['required'],
            'duration' => ['required'],
            'number_questions' => ['required'],
            'number_subsections' => ['required']
        ]);

        $exam = new Exams;
        $exam->name = $request->name;
        $exam->deploy_exam = $request->deploy_exam;
        $exam->finish_exam = $request->finish_exam;
        $exam->duration = $request->duration;
        $exam->number_questions = $request->number_questions;
        $exam->number_subsections = $request->number_subsections;
        $exam->description = $request->description;
        $exam->questionary = json_encode($request->questionary);
        $exam->user_id = auth()->user()->id;
        $exam->save();

        return $exam;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function show(Exams $exams, Request $request)
    {
        dd($request->all());
        //dd($exams);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function edit(Exams $exams)
    {
        return view('adminexam.adminExamshow')->with(['exams' => $exams->all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exams $exams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exams $exams)
    {
        //
    }
}
