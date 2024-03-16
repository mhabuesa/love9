@extends('layouts.admin')
@section('content')
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Quiz Score</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Score</th>
                    </tr>
                    @foreach ($quizes as $quiz )
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$quiz->name}}</td>
                            <td>{{$quiz->score}}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header text-center">
                <h3>Quiz Visitors</h3>
            </div>
            <div class="card-body text-center">
                <div class="">
                    <h4 class="badge bg-success fs-5 px-5">{{$quizVisitor}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card table-responsive">
            <div class="card-header">
                <h4 class="text-center">Quiz Full List</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Ans 1</th>
                        <th>Ans 2</th>
                        <th>Ans 3</th>
                        <th>Ans 4</th>
                        <th>Ans 5</th>
                        <th>Ans 6</th>
                        <th>Ans 7</th>
                        <th>Ans 8</th>
                        <th>Ans 9</th>
                    </tr>
                    @foreach ($quizes as $quiz )
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$quiz->name}}</td>
                            <td>{{$quiz->phone}}</td>
                            <td>{{$quiz->qs1}}</td>
                            <td>{{$quiz->qs2}}</td>
                            <td>{{$quiz->qs3}}</td>
                            <td>{{$quiz->qs4}}</td>
                            <td>{{$quiz->qs5}}</td>
                            <td>{{$quiz->qs6}}</td>
                            <td>{{$quiz->qs7}}</td>
                            <td>{{$quiz->qs8}}</td>
                            <td>{{$quiz->qs9}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
