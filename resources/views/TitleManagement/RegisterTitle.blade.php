
    <head>
      <!-- Bootstrap Font Icon CSS -->
      <link rel="stylesheet" href="css/app.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>

    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('PSM Title') }}
      </h2>
    </x-slot><br><br>

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
                        <a href="{{ url('/TitleMainpageStu') }}" title="Back"><button class="btn btn-danger float-end"><i class="bi bi-arrow-left"></i> Back  
                        </button></a>
                        </div>

                        <center><h3><b>TITLE PROPOSAL FORM</b></h3></center><br>
                        <center><h4><b>BCC3012 UNDERGRADUATE I</b></h4></center><br>

                        {{-- <div class="card-body"> --}}
                            
                            <h5><b>SECTION A: STUDENT DETAILS</b></h5><br><br>

                            {{-- <center>
                            <tr>
                                <th class="card-text"><b>NAME </b>{{ $activities->Activity_name }}</p>
                                <th class="card-text"><b>MATRIC ID </b>{{ $activities->Activity_info }}</p>
                                <th class="card-text"><b>IC/PASSPORT </b>{{ $activities->Activity_category }}</p>
                                <th class="card-text"><b>PHONE NUMBER </b>{{ $activities->Activity_date }}</p>
                                <th class="card-text"><b>E-MAIL </b>{{ $activities->Activity_time }}</p>
                                <th class="card-text"><b>COURSE</b>{{ $activities->Activity_time }}</p>
                            </tr>
                            </center>
                        </div> --}}

                        <div class="card-body">
                            <form action="'TitleMainpageStu/create'" method="POST">
                                {{csrf_field()}}                          

                                <h5><b>SECTION B: PROJECT DETAILS</b></h5><br><br>
                                
                                <!-- Supervisor's Name -->
                                <div class="mb-3">
                                    <label for="Stu_SVName" class="form-label"><b>SUPERVISOR NAME</b></label>
                                    <input name="Stu_SVName" type="text" class="form-control" id="Stu_SVName" placeholder="Enter Supervisor's Name"><br><br>
                                </div>

                                <!-- Proposed Title -->
                                <div class="mb-3">
                                    <label for="Stu_Title" class="form-label"><b>PROJECT TITLE</b></label>
                                    <input name="Stu_Title" type="text" class="form-control" id="Stu_Title" placeholder="Enter Project Title"><br><br>
                                </div>

                                <!-- Project Objective -->
                                <div class="mb-3">
                                    <label for="Stu_Objective" class="form-label"><b>OBJECTIVE</b></label>
                                    <input name="Stu_Objective" type="text" class="form-control" id="Stu_Objective" placeholder="Enter project objective"><br><br>
                                </div>

                                <!-- Project Scope-->
                                <div class="mb-3">
                                    <label for="Stu_Scope" class="form-label"><b>PROJECT SCOPE</b></label>
                                    <input name="Stu_Scope" type="text" class="form-control" id="Stu_Scope" placeholder="Enter Project Scope"><br><br>
                                </div>

                                <!-- Project Problem Background-->
                                <div class="mb-3">
                                    <label for="Stu_ProbStat" class="form-label"><b>PROBLEM BACKGROUND</b></label>
                                    <input name="Stu_ProbStat" type="text" class="form-control" id="Stu_ProbStat" placeholder="Enter Project Problem Background"><br><br>
                                </div>

                                <br><br>

                                <h5><b>SECTION C: PROJECT NEEDS</b></h5><br><br>

                                <!-- Software Used on Project-->
                                <div class="mb-3">
                                    <label for="Stu_SoftUse" class="form-label"><b>SOFTWARE</b></label>
                                    <input name="Stu_SoftUse" type="text" class="form-control" id="Stu_SoftUse" placeholder="Enter Software that will be used"><br><br>
                                </div>

                                <!-- Tools Used on Project-->
                                <div class="mb-3">
                                    <label for="Stu_ToolsUse" class="form-label"><b>TOOLS</b></label>
                                    <input name="Stu_ToolsUse" type="text" class="form-control" id="Stu_ToolsUse" placeholder="Enter Tools that will be use"><br><br>
                                </div>

                                <!-- Technique/Approach/Algorithm on Project-->
                                <div class="mb-3">
                                    <label for="Stu_Approach" class="form-label"><b>TECHNIQUE/APPROACH/ALGORITHM</b></label>
                                    <input name="Stu_Approach" type="text" class="form-control" id="Stu_Approach" placeholder="Enter Project Approach"><br><br>
                                </div>
                                
                                <button type="submit" class="btn btn-primary float-end">SUBMIT</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>   
