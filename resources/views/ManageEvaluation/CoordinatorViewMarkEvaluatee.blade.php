@extends('layouts.layout')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header text-center" style="color:#800000;">
                            <h2>View Mark Evaluatee</h2>
                            <a href="CoordinatorEvaluationMainpage" title="Back"><button class="btn btn-danger btn-sm float-end" ><i class="bi bi-arrow-left"></i> Back</button></a>
                        </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Project Title</th>
                                            <th>Student Category</th>
                                            <th>Total Mark Evaluation 2</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($evaluateeevaluation as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->StudentID }}</td>
                                            <td>{{ $item->StudentName }}</td>
                                            <td>{{ $item->ProjectTitle }}</td>
                                            <td>{{ $item->StudentCategory}}</td>
                                            <td>{{ $item->TotalEva2}}</td>
                                            <td>{{ $item->Comment}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection