<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new user form') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row" style="padding: 10px">
            <div class="col-md-12" style="align:center; width: 100%">
                <div class="card" style="background-color:#e2e9e9 ; padding:50px; width: 100%">
                    <div class="card-body">
                        <center><h3><b>ADD NEW USER FORM</b></h3></center>
                        <form action="{{ url('userList') }}" method="post" style="padding: 5px; width: 100%">
                        {!! csrf_field() !!}
                        <!-- Matric ID -->
                        <label><b>Matric ID</b></label></br>
                        <input type="text" name="std_id" id="std_id" class="form-control" placeholder="Enter Matric ID"></br>
                        <!-- Title -->
                        <label><b>Title</b></label></br>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title"></br>
                        <!-- Name -->
                        <label><b>Name</b></label></br>
                        <input type="text" name="std_name" id="std_name" class="form-control" placeholder="Enter Name"></br>
                        <!-- Email -->
                        <label><b>Email</b></label></br>
                        <input type="text" name="std_email" id="std_email" class="form-control" placeholder="Enter Email"></br>
                        <!-- Contact -->
                        <label><b>Contact</b></label></br>
                        <input type="text" name="std_hp" id="std_hp" class="form-control" placeholder="Enter Contact No"></br>
                        <!-- Course -->
                        <label><b>Course</b></label></br>
                        <input type="text" name="course" id="course" class="form-control" placeholder="Enter Course"></br>
                        <center>
                        <input type="submit" value="Save" style="background-color:#007A39" class="btn btn-success"></br>
                        </center>
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
