<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text xl text-gray-800 leading-tight"><center>
            {{ __('PSM TITLE REGISTRATION')}}
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

    <body>
    
        {{-- Add registration of the Title to past to coordinator --}}    
        
        <div class="container">
            <div class="row" style="padding:25px;background-color:#e2e9e9" >
                <div class="mx-auto" style="width: 100%;">
                    <div class="card" style="background-color:#11ADA4;padding:10px;color:white;width:100%;" >
                    
                    <!-- Button back/ back to the view list activity -->
                    <a href="{{ url('TitleMainpageStu') }}" title="Back"><button class="btn btn-danger float-end"><i class="bi bi-arrow-left"></i> Back  
                            
                    </button></a>
                    
                    <center><h3><b>TITLE PROPOSAL FORM</b></h3></center><br>
                    <center><h4><b>BCC3012 UNDERGRADUATE I</b></h4></center><br>


                        <div class="card-body">
                            <form action="/titleregister/create" method="POST" >
                                {{csrf_field()}}                        

                                <h5><b>SECTION A: PROJECT DETAILS</b></h5><br>
                                
                                <!-- Supervisor's Name -->
                                <div class="mb-3">
                                    <label for="Stu_SVName" class="form-label"><b>SUPERVISOR NAME</b></label>
                                    <input name="Stu_SVName" type="text" class="form-control" id="Stu_SVName" placeholder="Enter Supervisor's Name">
                                </div>

                                <!-- Proposed Title -->
                                <div class="mb-3">
                                    <label for="Stu_Title" class="form-label"><b>PROJECT TITLE</b></label>
                                    <input name="Stu_Title" type="text" class="form-control" id="Stu_Title" placeholder="Enter Project Title">
                                </div>

                                <!-- Project Objective -->
                                <div class="mb-3">
                                    <label for="Stu_Objective" class="form-label"><b>OBJECTIVE</b></label>
                                    <input name="Stu_Objective" type="text" class="form-control" id="Stu_Objective" placeholder="Enter project objective">
                                </div>

                                <!-- Project Scope-->
                                <div class="mb-3">
                                    <label for="Stu_Scope" class="form-label"><b>PROJECT SCOPE</b></label>
                                    <input name="Stu_Scope" type="text" class="form-control" id="Stu_Scope" placeholder="Enter Project Scope">
                                </div>

                                <!-- Project Problem Background-->
                                <div class="mb-3">
                                    <label for="Stu_ProbStat" class="form-label"><b>PROBLEM BACKGROUND</b></label>
                                    <input name="Stu_ProbStat" type="text" class="form-control" id="Stu_ProbStat" placeholder="Enter Project Problem Background">
                                </div>

                                <br><br>

                                <h5><b>SECTION B: PROJECT NEEDS</b></h5><br>

                                <!-- Software Used on Project-->
                                <div class="mb-3">
                                    <label for="Stu_SoftUse" class="form-label"><b>SOFTWARE</b></label>
                                    <input name="Stu_SoftUse" type="text" class="form-control" id="Stu_SoftUse" placeholder="Enter Software that will be used">
                                </div>

                                <!-- Tools Used on Project-->
                                <div class="mb-3">
                                    <label for="Stu_ToolsUse" class="form-label"><b>TOOLS</b></label>
                                    <input name="Stu_ToolsUse" type="text" class="form-control" id="Stu_ToolsUse" placeholder="Enter Tools that will be use">
                                </div>

                                <!-- Technique/Approach/Algorithm on Project-->
                                <div class="mb-3">
                                    <label for="Stu_Approach" class="form-label"><b>TECHNIQUE/APPROACH/ALGORITHM</b></label>
                                    <input name="Stu_Approach" type="text" class="form-control" id="Stu_Approach" placeholder="Enter Project Approach">
                                </div>

                                <div class="mb-3">
                                    <label for="Stu_Status" class="form-label"><b>TECHNIQUE/APPROACH/ALGORITHM</b></label>
                                    <input name="Stu_Status" type="text" class="form-control" id="Stu_Status" placeholder="Approve by supervisor (Yes/No)">
                                </div>
                                
                                <button type="submit" class="btn btn-primary float-end">SUBMIT</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>   
</x-app-layout>