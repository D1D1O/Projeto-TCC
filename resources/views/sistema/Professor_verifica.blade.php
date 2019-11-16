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

        .btn-fo {
            margin: 0px 10px 0px 10px;
        }

        .org {
            margin-left: 31%;
        }
        div.row{
            margin-left: -64px;
        }
        .card-title{
            text-align: center;
        }
    </style>

</head>

<body>



    <div class="principal">


        <div class="container">
            <div class="row">

                @foreach($users as $user)
                @foreach($user as $u)



                <form method="POST" action="{{ route('RespProfessor') }}">
                    {{ csrf_field() }}

                    <div class="col-sm comp">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="imagens/student.png" width="100px" alt="Representa aluno">
                            <div class="card-body">
                                <h5  class="card-title">{{$u->name}}</h5>
                                <INPUT TYPE="hidden" NAME="id_aluno" VALUE="{{$u->id}}">
                                <INPUT TYPE="hidden" NAME="id_professor" VALUE="{{Auth::id()}}">
                                <div class="row">
                                    <div class="org">
                                    <button class="btn btn-primary" name="resp1" value="1" type="submit">Aceitar</button>
                                    <button class="btn btn-primary" name="resp0" value="0" type="submit">Não aceitar</button>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <INPUT TYPE="hidden" NAME="id_auth" VALUE="{{ Auth::id() }}"> -->

                </form>

                @endforeach
                @endforeach




            </div>
        </div>

    </div>

</body>

</html>