<x-app-layout>
    <head>
      <!-- Bootstrap Font Icon CSS -->
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

    