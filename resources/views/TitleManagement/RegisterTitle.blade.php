<x-app-layout>
    <head>
      <!-- Bootstrap Font Icon CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
            <div class="row" style="padding:20px;background-color:#e2e9e9" >
                <div class="mx-auto" style="width: 1000px;">
                    <div class="card" style="background-color:#11ADA4;padding:10px;color:white;width:100%;" >
                        <center><h1><b>TITLE PROPOSAL FORM</b></h1></center><br>
                        <center><h2><b>BCC3012 UNDERGRADUATE I</b></h2></center><br>

                        {{-- <div class="card-body">
                            
                            <h3><b>SECTION A:STUDENT DETAILS</b></h3><br><br>

                            <center>
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
                            <form action="'/TitleMainpageStu/create'" method="POST">
                                {{csrf_field()}}                          

                                <h3><b>SECTION B:PROJECT DETAILS</b></h3><br><br>
                                
                                <!-- Supervisor's Name -->
                                <div class="mb-3">
                                    <label for="Stu_SVName" class="form-label">SUPERVISOR NAME</label>
                                    <input name="Stu_SVName" type="text" class="form-control" id="Stu_SVName" placeholder="Enter Supervisor's Name">
                                </div>

                                <!-- Proposed Title -->
                                <div class="mb-3">
                                    <label for="Stu_Title" class="form-label">PROJECT TITLE</label>
                                    <input name="Stu_Title" type="text" class="form-control" id="Stu_Title" placeholder="Enter Project Title">
                                </div>

                                <!-- Project Objective -->
                                <div class="mb-3">
                                    <label for="Stu_Objective" class="form-label">OBJECTIVE</label>
                                    <input name="Stu_Objective" type="text" class="form-control" id="Stu_Objective" placeholder="Enter project objective">
                                </div>

                                <!-- Project Scope-->
                                <div class="mb-3">
                                    <label for="Stu_Scope" class="form-label">PROJECT SCOPE</label>
                                    <input name="Stu_Scope" type="text" class="form-control" id="Stu_Scope" placeholder="Enter Project Scope">
                                </div>

                                <!-- Project Problem Background-->
                                <div class="mb-3">
                                    <label for="Stu_ProbStat" class="form-label">PROBLEM BACKGROUND</label>
                                    <input name="Stu_ProbStat" type="text" class="form-control" id="Stu_ProbStat" placeholder="Enter Project Problem Background">
                                </div>

                                <br><br>

                                <h3><b>SECTION C:PROJECT NEEDS</b></h3><br><br>

                                <!-- Software Used on Project-->
                                <div class="mb-3">
                                    <label for="Stu_SoftUse" class="form-label">SOFTWARE</label>
                                    <input name="Stu_SoftUse" type="text" class="form-control" id="Stu_SoftUse" placeholder="Enter Software that will be used">
                                </div>

                                <!-- Tools Used on Project-->
                                <div class="mb-3">
                                    <label for="Stu_ToolsUse" class="form-label">TOOLS</label>
                                    <input name="Stu_ToolsUse" type="text" class="form-control" id="Stu_ToolsUse" placeholder="Enter Tools that will be use">
                                </div>

                                <!-- Technique/Approach/Algorithm on Project-->
                                <div class="mb-3">
                                    <label for="Stu_Approach" class="form-label">TECHNIQUE/APPROACH/ALGORITHM</label>
                                    <input name="Stu_Approach" type="text" class="form-control" id="Stu_Approach" placeholder="Enter Project Approach">
                                </div>
                                
                                <button type="submit" class="btn btn-primary float-end text-dark">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>   

</x-app-layout>
