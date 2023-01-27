@extends('layouts.layout')
@section('content')
<head>
    <title>Edit Evaluation Marks </title>
</head>

<body> 
    <div class="container">
        <div class="row">
            <div class="mx-auto" style="width: 1000px;">
                <div class="card " style="border:1px solid black">
                    <div class="card-header text-center" style="color: black"><h1>Edit Evaluation Marks <br>(Evaluatee)</h1>
            
                    <!-- Button back/ back  -->
                    <a href="/ViewMarkEvaluatee" title="Back"><button class="btn btn-danger btn-sm float-end"><i class="bi bi-arrow-left"></i> Back  
                    </button></a>
                    </div>

                    <div class="card-body">

                        <!-- form for add the data -->
                        <form action="/ViewMarkEvaluatee/{{$evaluateeevaluation->id}}/updateEva" method="post">
                        {!! csrf_field() !!}

                        <b> Please key in the students details below: </b><br>
                        <!-- Student ID -->
                        <div class="form-group" >
                            <label for="StudentID" class="form-label">Student ID:</label>
                            <input type="text" class="form-control" name="StudentID" id="StudentID" value="{{$evaluateeevaluation->StudentID}}">
                        </div>
                        <!-- Student Name -->
                        <div class="form-group" >
                            <label for="StudentName" class="form-label">Student Name:</label>
                            <input type="text" class="form-control" name="StudentName" id="StudentName" value="{{$evaluateeevaluation->StudentName}}">
                        </div>
                        <!-- Project Title -->
                        <div class="form-group" >
                            <label for="ProjectTitle" class="form-label">Project Title:</label>
                            <input type="text" class="form-control" name="ProjectTitle" id="ProjectTitle" value="{{$evaluateeevaluation->ProjectTitle}}">
                        </div>
                        <!-- Student Category -->
                        <div class="form-group">
                            <label for="StudentCategory">Student Category:</label>
                            <select name="StudentCategory" id="StudentCategory" class="form-select" aria-label="StudentCategory" >
                                            <option selected value="{{$evaluateeevaluation->StudentCategory}}">Choose Student Category</option>
                                            <option value="PSM1">PSM1</option>
                                            <option value="PTA1">PTA1</option>
                                            <option value="PSM2">PSM2</option>
                                            <option value="PTA2">PTA2</option>
                            </select>
                            </div><br>
                        
                        <b> Please key in the Second Evaluation marks details below: </b>
                        <!-- Table to enter data for second evaluation -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead style="background-color: #74CED2">
                                <tr>
                                  <th scope="col">CONTENT</th>
                                  <th scope="col">MARK IN %</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                  <td>TOTAL MARK FOR EVALUATION 2 </td>
                                  <td><input type="text" class="form-control" name="TotalEva2" id="TotalEva2" value="{{$evaluateeevaluation->TotalEva2}}"></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- Comment -->
                        <div class="form-group" >
                            <label for="Comment" class="form-label">Comment:</label>
                            <input type="text" class="form-control" name="Comment" id="Comment" placeholder="Enter comments" value="{{$evaluateeevaluation->Comment}}">
                        </div><br>
                        <button type="submit" class="btn btn-primary float-end">Submit</button>

                            </form><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection