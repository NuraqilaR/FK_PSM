<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View User') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row" style="padding: 10px">
            <div class="col-md-12" style="align:center; width: 100%">
                <div class="card" style="background-color:#e2e9e9 ; padding:50px; width: 100%">
                    <div class="card-body">
                        <center><h3><b>USER DETAIL</b></h3></center>
                        <tr>
                            <td><b>Matric ID<b></td>
                            <td>{{ $students->std_id }}</td>
                        </tr><br>
                        <tr>
                            <td><b>Title<b></td>
                            <td>{{ $students->title }}</td>
                        </tr><br>
                        <tr>
                            <td><b>Name<b></td>
                            <td>{{ $students->std_name }}</td>
                        </tr><br>
                        <tr>
                            <td><b>Email<b></td>
                            <td>{{ $students->std_email }}</td>
                        </tr><br>
                        <tr>
                            <td><b>Contact No<b></td>
                            <td>{{ $students->std_hp }}</td>
                        </tr><br>
                        <tr>
                            <td><b>Course<b></td>
                            <td>{{ $students->course }}</td>
                        </tr><br>
                        <br>

                        <a href="{{ url('userList') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>