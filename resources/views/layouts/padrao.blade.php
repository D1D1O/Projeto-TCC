<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html lang="pt-br">

<head>
	<meta charset="utf-8">


	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	

	<title>UniProjetos</title>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>


	<style type="text/css">
		body {
			background-image: url(imagens/azul.jpg);
            line-height: 15px;
		}

		.unip {

			font-family: 'Oswald', sans-serif;
			font-size: 30px;
			text-align: center;
			width: 180px;
			height: 80px;
			padding: 10px;
			background-color: #dcd7d4;
			position: relative;
			border-left: solid 10px white;
			margin: 0px 10px 10px 0px;
            border-radius: 10px;
		}

		.unip2 {

			
			font-size: 15px;
			text-align: center;
			width: 97%;
			height: 80px;
			padding: 10px;
			background-color: #dcd7d4;
			position: relative;
			margin-bottom: 10px;
			border-left: solid 10px black;
			margin-top: 15px;
            border-radius: 23px;

		}

		.unip2:hover {

			transform: scale(1.1);
			transition: all 0.15s linear;

		}

		.nav {
			width: 800px;
			height: 80px;
			background-color: #6692b3;
			position: relative;
			padding: 10px;
			left: 200px;


		}

		.nome {
			font-family: 'Oswald', sans-serif;
			font-size: 20px;
			color: white;
			text-align: left;
			padding: 10px;
			width: 480px;
			height: 65px;
			margin-left: 10px;
			background-color: #42474a;
			position: relative;
			border-top: solid 10px white;

		}

		.nome2 {
			width: 280px;
			height: 65px;
			background-color: #42474a;
			position: relative;
			border-top: solid 10px white;

		}

		.principal {
			max-width: 1000px;
			height: 1000px;
			margin: 0 auto 0 auto;
			position: relative;
		}

		
        .left1{
            background-color: #1670a7;
			width: 200px;
			height: 104px;
			padding: 10px;
			position: absolute;
			left: 0;
        }

        

		.chat3 {
			background-color: #959a9c;
			width: 986px;
			height: 721px;
			float: right;
			margin-top: 24px;
            border-radius: 23px;
		}
		

		.chat4 {
			background-color: white;
            border-radius: 23px;
			width: 960px;
			height: 690px;
			position: relative;
			left: 14px;
			top: 14px;

		}

		.text1 {
			background: #6692b3;
			width: 800px;
			height: 199px;
			position: relative;
			left: 102px;
			clear: both;

		}

		.mensagem {
			font-family: Andale Mono, monospace;
			font-size: 20px;
			color: white;
		}

		#sair {

			float: right;
		}

        /* css do chat*/
        /* css do chat*/
        /* css do chat*/

         /* width */
         ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
        }

        .user-wrapper,
        .message-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }

        .user-wrapper {
            height: 600px;
            border-radius: 23px;
        }

        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }

        .user:hover {
            background: #eeeeee;
        }

        .user:last-child {
            margin-bottom: 0;
        }

        .pending {
            position: absolute;
            left: 4px;
            top: 18px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .media-left {
            margin: 0 10px;
        }

        .media-left img {
            width: 64px;
            border-radius: 64px;
        }

        .media-body p {
            margin: 6px 0;
        }

        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }

        .messages .message {
            margin-bottom: 15px;
        }

        .messages .message:last-child {
            margin-bottom: 0;
        }

        .received,
        .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }

        .received {
            background: #ffffff;
        }

        .sent {
            background: #3bebff;
            float: right;
            text-align: right;
        }

        .message p {
            margin: 5px 0;
        }

        .date {
            color: #777777;
            font-size: 12px;
        }

        .active {
            background: #eeeeee;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }

        input[type=text]:focus {
            border: 1px solid #aaaaaa;
        }
	</style>

</head>


<body>
	<div class="principal">


		<div class="left1">

			<div class="unip">UniProjetos</div>


		</div>
 
		<div class="nav">
			<span class="nome">{{ Auth::user()->tipo }} : {{ Auth::user()->name }}</span>


			<span class="nome2">
				<!--<a href="index.html" class="btn btn-primary" id="sair">	
				Sair
			</a>-->

				<a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-primary" id="sair">
					Sair
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>

			</span>

		</div>

		<div class="chat3">
			<div class="chat4">
                @yield('content')
			</div>

		</div>

		<div class="text1">

			<center class="mensagem">Mensagem:</center>
			<center><textarea class="msg" cols="80" rows="3"></textarea></center>

			<center><input id="file" name="file" type="file" class="btn btn-light" />&nbsp;&nbsp;<button class="btn btn-light">Enviar</button></center>


		</div>



    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>

    <script>
        var receiver_id = '';
        var my_id = '{{ Auth::id() }}';

        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('56275eff46d25f1a6a99', {
                cluster: 'ap2',
                forceTLS: true
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                // alert(JSON.stringify(data));
                if (my_id == data.from) {
                    $('#' + data.to).click();
                } else if (my_id == data.to) {
                    if (receiver_id == data.from) {
                        // if receiver is selected, reload the selected user ...
                        $('#' + data.from).click();
                    } else {
                        // if receiver is not seleted, add notification for that user
                        var pending = parseInt($('#' + data.from).find('.pending').html());
                        if (pending) {
                            $('#' + data.from).find('.pending').html(pending + 1);
                        } else {
                            $('#' + data.from).append('<span class="pending">1</span>');
                        }
                    }
                }
            });

            $('.user').click(function() {
                $('.user').removeClass('active');
                $(this).addClass('active');
                $(this).find('.pending').remove();

                receiver_id = $(this).attr('id');
                /* alert(receiver_id); */

                $.ajax({
                    type: "get",
                    url: "message/" + receiver_id,
                    data: "",
                    cache: false,
                    success: function(data) {
                        $('#messages').html(data);
                        scrollToBottomFunc();
                    }
                });
            });

            $(document).on('keyup', '.input-text input', function(e) {

                var message = $(this).val();

                if (e.keyCode == 13 && message != '' && receiver_id != '') {

                    $(this).val('');

                    var datastr = "receiver_id=" + receiver_id + "&message=" + message;

                    $.ajax({
                        type: "post",
                        url: "message",
                        data: datastr,
                        cache: false,
                        success: function(data) {
                        

                        },
                        error: function(jqXHR, status, err) {

                        },
                        complete: function() {
                            scrollToBottomFunc();
                        }
                    })

                }
            });
        });

        function scrollToBottomFunc(){
            $('.message-wrapper').animate({
                scrollTop: $('.message-wrapper').get(0).scrollHeight
            },50);
        }

    </script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>










</body>



		