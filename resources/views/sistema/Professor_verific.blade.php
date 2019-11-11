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
    </style>

</head>

<body>



    <div class="principal">


        <div class="container">
            <div class="row">

                <form method="POST" action="{{ route('RespProfessor') }}">
                    {{ csrf_field() }}
                    <div>

                        @foreach($users as $user)

                        @foreach($user as $u)

                        <div class="col">

                            <div class="shadow-lg p-3 mb-5 bg-white rounded">{{$u->name}}
                                <div class="shadow-lg p-3 mb-5 bg-white rounded">{{$u->id}}
                                    <?php
                                    $d = $u->id;
                                    $$d = $u->id;
                                    ?>
                                    {{$$d}}

                                    <INPUT TYPE="hidden" NAME="id_aluno" VALUE="{{$$d}}">

                                    <INPUT TYPE="hidden" NAME="id_professor" VALUE="{{Auth::id()}}">

                                    <button class="btn btn-primary" name="resp1" value="1" type="submit">Aceitar</button>
                                    <button class="btn btn-primary" name="resp0" value="0" type="submit">Não aceitar</button>
                                </div>
                            </div>

                            <br><br>

                            @endforeach
                            @endforeach
                        </div>
                </form>

            </div>
        </div>

    </div>
    <script>
        /* $('.btn-primary').click(function(obj) {
            var receiver_id = '';
            var my_id = '{{ Auth::id() }}'; */
        /* var receiver_id = $(this).attr('id'); */
        /* var prfe_id = obj.id;
        var ID = $(obj).attr("id");
        var receiver_id = $(this).data("id");


            console.log(my_id); */
        /* alert(receiver_id); */

        /*  $.ajax({
             type: "get",
             url: "message/" + receiver_id,
             data: "",
             cache: false,
             success: function(data) {
                 $('#messages').html(data);
                 scrollToBottomFunc();
             }
         }); */
        });
    </Script>


</body>

</html>