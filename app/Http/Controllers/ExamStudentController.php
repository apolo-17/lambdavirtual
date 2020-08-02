<?php

namespace App\Http\Controllers;

use App\Exams;
use App\ExamStudent;
use App\StudentProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($exam_id)
    {
        $student = StudentProfile::where('user_id',auth()->user()->id)->first();

        $message = false;
        $exam_student = ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',true]])->first();
        if ($exam_student != null) {
            $message = true;
            return view('exam')->with(['exam_id' => $exam_id, 'message' => $message]);
        }
        return view('exam')->with(['exam_id' => $exam_id, 'message' => $message]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($exam_id,$start)
    {
        $student = StudentProfile::where('user_id',auth()->user()->id)->first();
        $exam = Exams::find($exam_id);
        $exam_student = ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',false]])->first();

        if ($exam_student == null) {
            $questionary = $this->structuringExam($exam->questionary);
            $finish = Carbon::createFromFormat('D M d Y H:i:s e+', $start)->addMinutes(30);
            $exam_created = ExamStudent::create([
                'student_id' => $student->id,
                'exam_id' => $exam_id,
                'questionary' => $questionary,
                'start' => Carbon::createFromFormat('D M d Y H:i:s e+', $start),
                'finish' => $finish,
                'done' => false
            ]);

            $questionary = json_decode($exam_created->questionary);

            $question_out_solved = [];
            $question_solved = [];

            foreach ($questionary as $key => $question) {
                $question->question_solved ? array_push($question_solved,$key) : array_push($question_out_solved,$key);
            }

            $alter = array_rand($question_out_solved);

            $question = $questionary[$question_out_solved[$alter]];
            $questions = json_encode($question);

            $finish_parse = Carbon::parse($exam_created->finish)->format('Y-m-d H:i:s');
            $start_parse = Carbon::parse($exam_created->start)->format('Y-m-d H:i:s');
            return response()->json(['questions' => $questions,'start' => $start_parse, 'finish' => $finish_parse, 'question_solved' => count($question_solved), 'total_questions' => count($questionary)]);

        } else {

            $exam_update = ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',false]])->first();
            $questionary = json_decode($exam_update->questionary);

            $question_out_solved = [];
            $question_solved = [];

            foreach ($questionary as $key => $question) {
                $question->question_solved ? array_push($question_solved,$key) : array_push($question_out_solved,$key);
            }

            if (count($question_out_solved) > 0) {
                $alter = array_rand($question_out_solved);

                $question = $questionary[$question_out_solved[$alter]];
                $questions = json_encode($question);

                $finish_parse = Carbon::parse($exam_update->finish)->format('Y-m-d H:i:s');
                $start_parse = Carbon::parse($exam_update->start)->format('Y-m-d H:i:s');

                return response()->json(['questions' => $questions,'start' => $start_parse, 'finish' => $finish_parse, 'question_solved' => count($question_solved), 'total_questions' => count($questionary)]);
            }

            return redirect()->route('/home');
        }

    }

    public function updateExam($exam_student)
    {
        /* $exam_student->update([
            'questionary' =>
        ]); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function show(ExamStudent $examStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamStudent $examStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $student = StudentProfile::where('user_id',auth()->user()->id)->first();
        $exam_student = ExamStudent::where([['student_id',$student->id],['exam_id',$request->exam_id],['done',false]])->first();

        $exam = json_decode($exam_student->questionary);

        $question_solved = [$request->question_solved['id']-1 => $request->question_solved];
        $exam_question_replace = array_replace($exam,$question_solved);
        $exam_student->update([
            'questionary' => json_encode($exam_question_replace)
        ]);
        $exam_student->fresh();

        $question_out_solved = [];
        $question_answer_solved = [];
        $update_exam = json_decode($exam_student->questionary);
        foreach ($update_exam as $key => $question) {

            $question->question_solved ? array_push($question_answer_solved,$key) : array_push($question_out_solved,$key);
        }

        if (count($question_out_solved) > 0) {
            $alter = array_rand($question_out_solved);

            $question = $update_exam[$question_out_solved[$alter]];
            $questions = json_encode($question);

            return response()->json(['questions' => $questions, 'question_solved' => count($question_answer_solved)]);
        }
        $exam_student->update(['done' => true]);
        return response()->json(['route_finish' => true]);

    }

    public function overTime($exam_id)
    {
        ExamStudent::where([['student_id',auth()->user()->studentProfile->id],['exam_id',$exam_id]])->update(['done'=> true]);
        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamStudent $examStudent)
    {
        //
    }

    public function structuringExam($exam)
    {
        $exam = json_decode($exam);
        foreach ($exam as $question) {
            $question->answer_correct = null;
            foreach ($question->answers as $answer) {
                $answer->value = false;
            }
        }

        return json_encode($exam);
    }

    /* public function starExam($id)
    {
        return $time = ExamStudent::where([['student_id',auth()->user()->id],['exam_id',$id]])->first()->created_at;
    } */
}
