<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
    .form-control{
        border:1px solid black;
    }
    .form-select{
        border:1px solid black;
    }
    .btn-warning:hover{
        border:3px solid #8B8000;
    }
    .btn-success:hover{
        border:3px solid #024b30;
    }
    .btn-primary:hover{
        border:3px solid #0000ff;
    }
    .btn-danger:hover{
        border:3px solid #800000;
    }
    /* .btn-light{
        border:3px solid black;
        margin-top: auto;
    }
    .btn-light:hover{
        border:3px solid #0000ff;
    } */
    .table{
        border:1px solid black;
    }
    .category{
        position: relative;
    }
    .card1{
        background-color: #93CAED;
    }
    .card2{
        background-color: #93CAED;
    }
    .card3{
        background-color: #93CAED;
    }
    .card4{
        background-color: #93CAED;
        }
    .card5{
        background-color: #ACD1AF;
    }
    .card6{
        background-color: #ACD1AF;
    }
    .card7{
        background-color: #ACD1AF;
    }
    .card8{
        background-color: #ACD1AF;
    }
</style>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>