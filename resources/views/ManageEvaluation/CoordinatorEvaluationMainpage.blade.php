@extends('layouts.layout')
@section('content')
    <style>
      body{
         background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url(Image/background.png);
         height: 100vh;
         -webkit-background-size: cover;
         background-size: cover;
         background-position: center center;
         position: relative;
      }
      .card{
        width: 250px;
        height: 230px;
        display: inline-block;
        border-radius: 10px;
        border:3px solid black; 
        padding: 15px 25px;
        cursor: pointer;
        margin: 5px 10px;
        transition: transform 0.5;
    }
    .card:hover{
        transform: translateY(-10px);
    }
   </style>
    <body>
        <div class="container1">
            <h1 class="text-white text-center">Evaluation </h1>
            <p class="text-white text-center">Coordinator mainpage for evaluation </p>
            <p class="text-white text-center">The coordinator can view the evaluation mark for supervisee</p>
        </div>

        <!-- card for button navigation for view -->
        <div class="category text-center">
            <div class="card card1">
                <h5 class="card-title">View Evaluation Marks for Supervisee (PSM1/PTA1)</h5>
                <a href="ViewMarkSuperviseePSM1PTA1" button class="w-100 btn btn-primary">View</a>
            </div>

            <div class="card card2">
                <h5 class="card-title">View Evaluation Marks for Supervisee (PSM2/PTA2)</h5>
                <a href="ViewMarkSuperviseePSM2PTA2" button class="w-100 btn btn-primary">View</a>
            </div>


            <p class="text-white text-center">The coordinator also can view the evaluation mark for evaluatee</p>

            <div class="card card5">
                <h5 class="card-title">View Evaluation Marks for Evaluatee (PSM1/PTA1)</h5>
                <a href="ViewMarkEvaluateePSM1PTA1" button class="w-100 btn btn-success">View</a>
            </div>

            <div class="card card6">
                <h5 class="card-title">View Evaluation Marks for Evaluatee (PSM2/PTA2)</h5>
                <a href="ViewMarkEvaluateePSM2PTA2" button class="w-100 btn btn-success">View</a>
            </div>
        </div>
        <br>
        <div class="text-center">
        <a href="/coordinator" title="Back"><button class="btn btn-danger btn-sm " ><i class="bi bi-arrow-left"></i> Back</button></a>
        </div><br>
    </body>
@endsection