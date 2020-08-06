<?php

namespace App\Http\Controllers;

use App\Exams;
use App\ExamStudent;
use App\Exports\ExamStudentExport;
use App\StudentProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
        $exam = Exams::find($exam_id);
        $message = false;
        $exam_student = ExamStudent::where([['student_profile_id',$student->id],['exam_id',$exam_id]])->first();

        if ($exam_student == null) {

            return view('exam')->with([
                'exam_id' => $exam_id,
                'message' => $message,
                'exam_questions' => $exam->number_questions,
                'exam_title' => $exam->name
            ]);
        }

        if ($exam_student->done == null) {

            return view('exam')->with([
                'exam_id' => $exam_id,
                'message' => $message,
                'exam_questions' => $exam->number_questions,
                'exam_title' => $exam->name
            ]);
        }

        if ($exam_student->done == 1) {
            $message = true;
            return view('exam')->with([
                'exam_id' => $exam_id,
                'message' => $message,
                'exam_questions' => $exam->number_questions,
                'exam_title' => $exam->name
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($exam_id,$start)
    {
        $student = auth()->user()->studentProfile;
        $exam = Exams::find($exam_id);

        $exam_student = ExamStudent::where([['student_profile_id',$student->id],['exam_id',$exam_id],['done',''],['start' ,'!=', null]])->first();

        if ($exam_student == null) {
            $questionary = $this->structuringExam($exam->questionary);

            $exam_created = ExamStudent::create([
                'student_profile_id' => $student->id,
                'exam_id' => $exam_id,
                'questionary' => $questionary,
                'start' => Carbon::createFromFormat('D M d Y H:i:s e+', $start),
                'finish' => Carbon::createFromFormat('D M d Y H:i:s e+', $start)->addMinutes($exam->duration),
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
            return response()->json([
                'questions' => $questions,
                'start' => $start_parse,
                'finish' => $finish_parse,
                'question_solved' => count($question_solved),
                'total_questions' => count($questionary)
            ]);

        } else {


            $exam_update = ExamStudent::where([['student_profile_id',$student->id],['exam_id',$exam_id],['done','']])->first();
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

                return response()->json([
                    'questions' => $questions,
                    'start' => $start_parse,
                    'finish' => $finish_parse,
                    'question_solved' => count($question_solved),
                    'total_questions' => count($questionary)
                ]);
            }

            return redirect()->route('/home');
        }

    }

    public function examRuningReload($exam_id)
    {
        return $this->index($exam_id);

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
    public function show($examStudent)
    {
        $exam_student = ExamStudent::find($examStudent);
        $exam = Exams::find($exam_student->exam_id);
        $exam_questionary = json_decode($exam->questionary);
        $exam_student_questionary = json_decode($exam_student->questionary);
        $answerselected = [];
        $answercorrect = [];
        foreach ($exam_questionary as $value) {
            array_push($answercorrect,$value->answer_correct);
        }

        foreach ($exam_student_questionary as $value) {
            array_push($answerselected,$value->answer_selected);
        }

        $answer_correct = 0;
        for ($i=0; $i < count($answercorrect); $i++) {
            ($answercorrect[$i] == $answerselected[$i]) ? ++$answer_correct : null ;
        }

        $answer_incorrect = count($answercorrect) - $answer_correct;

        return view('exam-show-result')->with([
            'answer_correct' => $answer_correct,
            'answer_incorrect' => $answer_incorrect,
            'questions_total' => count($answercorrect),
            'total_score' => 20*$answer_correct
        ]);
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
        $exam_student = ExamStudent::where([['student_profile_id',$student->id],['exam_id',$request->exam_id],['done',false]])->first();

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

        return response()->json(['route_finish' => true, 'exam_studient_id' => $exam_student->id]);

    }

    public function overTime($exam_id)
    {
        ExamStudent::where([['student_profile_id',auth()->user()->studentProfile->id],['exam_id',$exam_id]])->update(['done'=> 1]);
        return true;
    }

    public function downloadExam($id)
    {
        return Excel::download((new ExamStudentExport($id)), 'Exam_Students.xlsx');
        /* \Excel::download('ExamStudents', function($excel) use ($id){
            $exam_student = ExamStudent::where('exam_id',$id)->get();

            $excel->sheet('ExamStudents', function($sheet) use ($exam_student){
                $sheet->fromArray($exam_student);
            });
        })->download('xlsx'); */
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
        return $time = ExamStudent::where([['student_profile_id',auth()->user()->id],['exam_id',$id]])->first()->created_at;
    } */
}
