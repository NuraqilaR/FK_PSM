    <x-slot name="header">
        <h2 class="font-semibold text xl text-gray-800 leading-tight"><center>
            {{ __('PSM APPROVAL')}}
        </center>
        </h2>
    </x-slot>

    <!-- css code -->
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <br><br>

    <div class="container">
        <div class="row" style="padding:25px;background-color:#e2e9e9" >
            <div class="mx-auto" style="width: 100%;">
                <div class="card" style="background-color:#11ADA4;padding:10px;color:white;width:100%;" >
                
                <!-- Button back/ back to the view list activity -->
                <a href="{{ url('TitleMainpageStu') }}" title="Back"><button class="btn btn-danger float-end"><i class="bi bi-arrow-left"></i> Back  
                        
                </button></a>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SUPERVISOR NAME</th>
                                <th>PROJECT TITLE</th>
                                <th>STATUS</th>

                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($title as $item)
                            <tr>
                                <td>{{ $item->Stu_SVName }}</td>
                                <td>{{ $item->Stu_Title }}</td>
                                <td>{{ $item->Stu_Status }}</td>>
                                <td>
                                    <a href="{{ url('/TitleManagement/' . $item->Reg_id) }}" title="View Form"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/TitleManagement/' . $item->Reg_id . '/edit') }}" title="Edit Form"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>    
    </div>    