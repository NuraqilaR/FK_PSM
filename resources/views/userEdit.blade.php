<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User Form') }}
        </h2>
    </x-slot>

<div class="container">
        <div class="row" style="padding: 10px">
            <div class="col-md-12" style="align:center; width: 100%">
                <div class="card" style="background-color:#e2e9e9 ; padding:50px; width: 100%">
                    <div class="card-body">
                        <center><h3><b>EDIT USER FORM</b></h3></center>
                        <form action="{{ url( 'userList') }}" method="post" style="padding: 5px; width: 100%">
                        {!! csrf_field() !!}
                        <!-- @method("PATCH")-->
                        <!-- Matric ID -->
                        <label><b>Matric ID</b></label></br>
                        <input type="text" name="std_id" id="std_id" value="{{$students->std_id}}" class="form-control"></br>
                        <!-- Title -->
                        <label><b>Title</b></label></br>
                        <input type="text" name="title" id="title" value="{{$students->title}}" class="form-control"></br>
                        <!-- Name -->
                        <label><b>Name</b></label></br>
                        <input type="text" name="std_name" id="std_name" value="{{$students->std_name}}" class="form-control"></br>
                        <!-- Email -->
                        <label><b>Email</b></label></br>
                        <input type="text" name="std_email" id="std_email" value="{{$students->std_email}}" class="form-control"></br>
                        <!-- Contact -->
                        <label><b>Contact</b></label></br>
                        <input type="text" name="std_hp" id="std_hp" value="{{$students->std_hp}}" class="form-control"></br>
                        <!-- Course -->
                        <label><b>Course</b></label></br>
                        <input type="text" name="course" id="course" value="{{$students->course}}" class="form-control"></br>
                        <center>
                        <input type="submit" value="Update" style="background-color:#007A39" class="btn btn-success"></br>
                        </center>
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</div>



    
</x-app-layout>