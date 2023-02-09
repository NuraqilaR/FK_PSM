<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text xl text-gray-800 leading-tight"><center>
            {{ __('PSM RUBRIC HOMEPAGE')}}
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

    <!-- Page Content  -->
    <div style="padding:20px;background-color:#e2e9e9">
        <div class="text-center mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Rubric Homepage</b></h1>
        </div>
    <center>
        <div style="padding:10px;">
            <a id="customButton" href="/AddRubric"><b>Add Rubric</b></a>
            <a id="customButton" href="/rubricdata"><b>View Rubric</b></a>
        </div>
    </center>
        
    </div>
</x-app-layout>