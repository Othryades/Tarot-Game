<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>


    <body>

        <header>
            <h1>Welcome to Tarot of Marseille</h1>
        </header>


        <h4>
            <button id="btn" type="button" onclick="the_function()">Click me again to get another answer</button>
        </h4>

        <section>
            <div class="cards">
                <div class="col-md-3 col-lg-3 col-xs-1" id="card1">
                    <img src="{{ $cards[$rand_keys[0]]['img']  }}" />
                    <div class="text">
                        {{ $cards[$rand_keys[0]]['description'] }}
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-1" id="card2">
                    <img src="{{ $cards[$rand_keys[1]]['img']  }}" />
                    <div class="text">
                        {{ $cards[$rand_keys[1]]['description'] }}
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xs-1" id="card3">
                    <img src="{{ $cards[$rand_keys[2]]['img']  }}" />
                    <div class="text">
                        {{ $cards[$rand_keys[2]]['description'] }}
                    </div>
                </div>
            </div>
        </section>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
{{--        <script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}


        <script>

            function the_function () {
                var path = '{{ url('/again') }}';

                $.ajax({
                    url:path ,
                    type: "GET", //request type
                    success:function(result){
                        $('.cards').html(result);
//                        $('.cards').append(result);
                    }
                });

//                $("#btn").click(function () {
//                    $(".cards").show();
//                });
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>


</html>