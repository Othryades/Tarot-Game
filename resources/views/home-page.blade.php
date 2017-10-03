<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
		

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <h1>audentes fortuna iuvat</h1>
        <p>please relax take a few deep breaths, concentrate on your question or issue. when ready, click below to choose the cards.</p>

        <div>
            <a href="{{ url('game') }}"><img  id="container" src="{{ asset('photos/tarot3.jpg') }}" alt="" /></a>
        </div>

        {{--<audio autoplay loop="loop"  style="display:none">--}}
            {{--<source src="{{ asset('song/TheCollective.mp3') }}" type="audio/ogg">--}}
            {{--<source src="{{ asset('song/TheCollective.mp3') }}" type="audio/mpeg">--}}
            {{--Your browser does not support the audio element.--}}
        {{--</audio>--}}



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{--<script src="js/bootstrap.min.js"></script>--}}



    </body>


</html>