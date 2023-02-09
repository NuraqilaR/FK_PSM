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

    <br><br>
   


    <div class="container">
        <div class="row" style="padding:25px;background-color:#e2e9e9" >
            <div class="mx-auto" style="width: 100%;">
                <div class="card" style="background-color:#11ADA4;padding:10px;color:white;width:100%;" >
                    <div style="float:left">
                        <td><h4>Title Registration</h4></td>
                    </div>
                    <div style="float:right">
                        {{-- go to add registration page to apply as candidate --}}
                        <td><a href="{{url('RegisterTitle')}}" class="btn btn-primary float-end">Apply</a></td><br><br>
                    </div>

                    <div style="float:right">
                        {{-- go to add registration page to apply as candidate --}}
                        <td><a href="{{url('ViewRegisterStatus')}}" class="btn btn-danger float-end">View Status</a></td>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</x-app-layout>
