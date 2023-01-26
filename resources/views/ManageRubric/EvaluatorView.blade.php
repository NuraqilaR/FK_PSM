<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text xl text-gray-800 leading-tight"><center>
            {{ __('PSM RUBRIC VIEW')}}
        </center>
        </h2>
    </x-slot>

    <!-- css code -->
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

    <head>
      <!-- Bootstrap Font Icon CSS -->
      <link rel="stylesheet" href="css/app.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>

    <!-- Page Content  -->
    <div class="container rounded bg-white">
        <div class="row">
           <center>
            <div class="col-12"style="background-color:#11ADA4;padding:10px;color:white;width:100%;">

            <div style="padding:2px; background-color:#e2e9e9">
            <a id="customButton" href="eviewPSM1"><b>PSM 1</b></a>
            <a id="customButton" href="eviewPSM2"><b>PSM 2</b></a>
            <a id="customButton" href="eviewPTA"><b>PTA</b></a>

        </div>

          
                
                <h1>Rubric Information</h1><br>
               

                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-hover table-success table-striped" width="100%">
                        <tr>
                            <th>RUBRIC ID</th>
                            <th>COMPETENCY</th>
                            <th>EXCELLENT GRADE</th>
                            <th>GOOD GRADE</th>
                            <th>MODERATE GRADE</th>
                            <th>WEAK GRADE</th>
                            <th>VERY WEAK GRADE</th>
                            <th>FAIL GRADE</th>
                            <th>WEIGHTAGE</th>
                            <th>MARK GIVEN</th>
                            <th>FINAL PRECENTAGE</th>
                           
                        </tr>
                        @foreach($data_rubric as $rubric)
                        <tr>
                            <td>{{$rubric->Rubric_id}}</td>
                            <td>{{$rubric->Competency}}</td>
                            <td>{{$rubric->Excellent_grade}}</td>
                            <td>{{$rubric->Good_grade}}</td>
                            <td>{{$rubric->Moderate_grade}}</td>
                            <td>{{$rubric->Weak_grade}}</td>
                            <td>{{$rubric->VWeak_grade}}</td>
                            <td>{{$rubric->Fail_grade}}</td>
                            <td>{{$rubric->Weightage}}</td>
                            <td>{{$rubric->Mark_given}}</td>
                            <td>{{$rubric->Final_percent}}</td>
                        </tr> 
                    @endforeach 
                    </table>
                </div><br>

            </div>
        </div>

    </div>

</x-app-layout>