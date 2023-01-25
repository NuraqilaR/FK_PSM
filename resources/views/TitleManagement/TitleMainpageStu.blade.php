
    <x-slot name="header">
        <h2 class="font-semibold text xl text-gray-800 leading-tight">
            {{ __('PSM Title')}}
        </h2>
    </x-slot>

    <!-- css code -->
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <br><br>
    <div class="py-12">
        <div class="max-w-1xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div style="float:left">
                            <td><h4>Title Registration</h4></td>
                        </div>
                        <div style="float:right">
                            {{-- go to add registration page to apply as candidate --}}
                            <td><a href="{{url('RegisterTitle')}}" class="btn btn-primary">Apply</a></td>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

