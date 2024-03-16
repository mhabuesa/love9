<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\QuizAnswer;
use App\Models\QuizModel;
use App\Models\QuizStartEndTimeModel;
use App\Models\QuizVisitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizCOntroller extends Controller
{
    // quiz
    function quiz(Request $request){
        $currentTime = Carbon::now()->format('H:i');
        $currentDate = Carbon::now()->format('Y.m.d');

        $startTime = QuizStartEndTimeModel::find(1)->start_time;
        $startDate = QuizStartEndTimeModel::find(1)->start_date;

        $endTime = QuizStartEndTimeModel::find(1)->end_time;
        $endDate = QuizStartEndTimeModel::find(1)->end_date;

        $dateTime = QuizStartEndTimeModel::find(1);



        if($currentDate <= $startDate){
            if($currentTime < $startTime){
                return view('quiz.start_count',[
                    'dateTime'=>$dateTime,
                ]);
            }
            else{
                if($currentDate <= $endDate){

                    if($currentTime >= $endTime){
                        return view('quiz.time_up');
                    }
                    else{
                        $ip = $request->ip();
                        QuizVisitor::Create(['ip' => $ip]);

                        return view('quiz.quiz',[
                            'dateTime'=>$dateTime,
                        ]);
                    }


                }
                else{
                    return view('quiz.time_up');
                }
            }
        }
        else{
            if($currentDate <= $endDate){

                if($currentTime >= $endTime){
                    return view('quiz.time_up');
                }
                else{
                    $ip = $request->ip();
                    QuizVisitor::Create(['ip' => $ip]);

                    return view('quiz.quiz',[
                        'dateTime'=>$dateTime,
                    ]);
                }


            }
            else{
                return view('quiz.time_up');
            }
        }
    }

    function quiz_store(Request $request){
        $ans = QuizAnswer::find(1);
        $score = 0;
        if($request->qs1 == $ans->ans1){
            $score += 1;
        }
        if($request->qs2 == $ans->ans2){
            $score += 1;
        }
        if($request->qs3 == $ans->ans3){
            $score += 1;
        }
        if($request->qs4 == $ans->ans4){
            $score += 1;
        }
        if($request->qs5 == $ans->ans5){
            $score += 1;
        }
        if($request->qs6 == $ans->ans6){
            $score += 1;
        }
        if($request->qs7 == $ans->ans7){
            $score += 1;
        }
        if($request->qs8 == $ans->ans8){
            $score += 1;
        }
        if($request->qs9 == $ans->ans9){
            $score += 1;
        }

        QuizModel::insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'qs1'=>$request->qs1,
            'qs2'=>$request->qs2,
            'qs3'=>$request->qs3,
            'qs4'=>$request->qs4,
            'qs5'=>$request->qs5,
            'qs6'=>$request->qs6,
            'qs7'=>$request->qs7,
            'qs8'=>$request->qs8,
            'qs9'=>$request->qs9,
            'score'=>$score,
            'created_at'=>Carbon::now(),
        ]);





        return redirect()->route('quiz.success',[
            'name'=>$request->name,
        ]);

    }

    function quiz_success($name){

        if($name == null){
            return redirect()->route('quiz');
        }
        else{
            return view('quiz.quiz_success',[
                'name'=>$name,
            ]);
        }

    }


    function quiz_back(){
        return redirect()->route('quiz');
    }

    function quiz_list(){
        $quizes = QuizModel::all();
        $quizVisitor = QuizVisitor::count();
        return view('quiz.quiz_list',[
            'quizes'=>$quizes,
            'quizVisitor'=>$quizVisitor,
        ]);
    }

    function quiz_time(){
        $time = QuizStartEndTimeModel::find(1);
        return view('quiz.quiz_time',[
            'time'=>$time,
        ]);
    }

    function quiz_time_update(Request $request){
        QuizStartEndTimeModel::find(1)->update([
            'start_date'=>$request->start_date,
            'start_time'=>$request->start_time,
            'end_date'=>$request->end_date,
            'end_time'=>$request->end_time,
        ]);
        return back()->with('update', 'Quiz Date & Time Update');
    }








}
