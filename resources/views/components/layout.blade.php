<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .container{
            width: 900px;
        }

        .btn{
            width: 100px;
            margin-bottom: 2px;
        }
        .titulo_principal{
            text-align: center;
        }
    </style>
</head>
<body>
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('create.biblioteca')}}">Cadastrar</a>
        </li>
      </ul>
    @if(session('message'))
    <div class="alert alert-success" role="alert">
        {{session('message')}}
      </div>
    @endif
    <h1 class="titulo_principal">{{$title}}</h1>
   
    {{$slot}}
</body>
</html>