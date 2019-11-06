<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">



    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Login_aluno</title>

    <style>
        body {
            margin: 0;
            background-image: url(imagens/azul.jpg);
            width: 100%;
            height: 100%;
        }

        .centertext {
            margin: 0 auto 0 auto;
        }

        #fonte {
            font-family: FreeMono, monospace;
            font-size: 20px;
            color: white;
            text-align: center;
        }

        #fonte2 {
            font-family: FreeMono, monospace;
            font-size: 20px;
            color: white;
            margin-left: 15px;
        }

        .nav {
            background-color: ;
            width: 100%;
            height: 120px;
        }

        .divform {
            align-items: center;
            background-image: url(imagens/azul2.jpg);
            width: 400px;
            height: 529px;
            margin: 0 auto 0 auto;
            border-radius: 25px;

        }

        .divuni {
            margin: 0 auto 0 auto;
        }

        .Ctext {
            margin-left: 15px;
            margin-right: 15px;
        }

        .drop {
            left: 15px;
            margin-bottom: 10px;
            width: 366px;
        }

        .input-group {
            width: 92%;
            margin-left: 15px;
        }

        /*  */

        .principal {
            margin-top: 20px;
        }

        .comp {
            padding: 20px;
        }

        .card-img-top {
            height: 190px;
        }
        .btn-fo{
            margin: 0px 10px 0px 10px;
        }
        .org{
            margin-left: 31%;
        }
    </style>

</head>

<body>



    <div class="principal">


        <div class="container">
            <div class="row">

            @foreach($users as $user)


            @if (($user->id_sexo) == 1)
                @php
                    $url = 'imagens/professor.png'
                @endphp
            @elseif (($user->id_sexo) == 2)
                @php
                    $url = 'imagens/professora.png'
                @endphp
            @else
                @php
                    $url = 'imagens/professora.png'
                @endphp
            @endif
            
                <div class="col-sm comp">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{$url}}" width="100px" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">{{$user->nome}}</h5>
                            <p class="card-text">{{$user->descricao}}</p>
                            <div class="row">
                                <div class="org">
                                    <a href="#" class="btn btn-primary btn-fo">Solicitar</a>
                               
                                    <!-- <a href="#" class="btn btn-primary">Visitar</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


                

            </div>
        </div>

    </div>


</body>

</html>