<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text xl text-gray-800 leading-tight"><center>
            {{ __('PSM RUBRIC')}}
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


    <style>
      .form-control{
            border:2px solid black;
        }
      .form-select{
            border:2px solid black;
        }
      .btn-primary:hover{
            border:3px solid #0000ff;
        }
        .btn-danger:hover{
            border:3px solid #800000;
        }
    </style> 

    <div class="row" style="padding:20px;background-color:#e2e9e9">
        <div class=" mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Add Rubric Homepage</b></h1>
            <form action="/rubricdata/create" method="POST">
                        {{csrf_field()}}    
                        <b>KEY IN THE RUBRIC:</b>
                        
                        <!-- Rubric ID -->
                        <div class="mb-3">
                            <label for="Rubric_id" class="form-label">RUBRIC ID</label>
                            <input name="Rubric_id" type="text" class="form-control" id="Rubric_id" placeholder="Enter Rubric ID">
                        </div>
                        
                        <!-- Competency -->
                        <div class="mb-3">
                            <label for="Competency" class="form-label">COMPETENCY</label>
                            <input name="Competency" type="text" class="form-control" id="Competency" placeholder="Enter Competency">
                        </div>
                        
                        <!-- excellent_grade -->
                        <div class="mb-3">
                            <label for="Excellent_grade" class="form-label">EXCELLENT GRADE</label>
                            <input name="Excellent_grade" type="text" class="form-control" id="Excellent_grade" placeholder="Enter Excellent Grade">
                            
                        </div>

                        <!-- Good Grade -->
                        <div class="mb-3">
                            <label for="Good_grade" class="form-label">GOOD GRADE </label>
                            <input name="Good_grade" type="text" class="form-control" id="Good_grade" placeholder="Enter Good Grade">
                        </div>

                        <!-- moderate_grade -->
                        <div class="mb-3">
                            <label for="Moderate_grade" class="form-label">MODERATE GRADE</label>
                            <input name="Moderate_grade" type="text" class="form-control" id="Moderate_grade" placeholder="Enter Moderate Grade">
                        </div>

                        <!-- weak_grade -->
                        <div class="mb-3">
                            <label for="VWeak_grade" class="form-label">WEAK GRADE</label>
                            <input name="Weak_grade"  type="text" class="form-control" id="Weak_grade"  placeholder="Enter Weak Grade">
                        </div>
                        
                        <!-- vweak_grade -->
                        <div class="mb-3">
                            <label for="VWeak_grade" class="form-label">VERY WEAK GRADE</label>
                            <input name="VWeak_grade" type="text" class="form-control" id="VWeak_grade"  placeholder="Enter Very Weak Grade">
                        </div>
                        
                            <!-- fail_grade -->
                        <div class="mb-3">
                            <label for="Fail_grade" class="form-label">Fail Grade</label>
                            <input name="Fail_grade"  type="text" class="form-control" id="Fail_grade" placeholder="Enter Fail Grade">
                        </div>
                        
                            <!-- weightage -->
                        <div class="mb-3">
                            <label for="Weightage" class="form-label">WEIGHTAGE</label>
                            <input name="Weightage"  type="text" class="form-control" id="Weightage"  placeholder="Enter Weightage">
                        </div>
                        
                        <!-- mark_given -->
                        <div class="mb-3">
                            <label for="Mark_given" class="form-label">MARK GIVEN</label>
                            <input name="Mark_given"  type="text" class="form-control" id="Mark_given"  placeholder="Enter Mark Given">
                        </div>
                        
                        <!-- final_percent -->
                        <div class="mb-3">
                            <label for="Final_percent" class="form-label">FINAL PERCENTAGE</label>
                            <input name="Final_percent"  type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Final Percent">
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>
</x-app-layout>
