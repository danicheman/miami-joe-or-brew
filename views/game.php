<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Miami Brew vs. Brew</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/custom.css">    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="gameBoard">

    <header>
        <h1 id="question_text"></h1>
        <h2 id="question_hint"></h2>
    </header>

    <article class="versus-row">
        vs.
    </article>

    <article class="row">
        <section id="beer" class="col-md-6">
            <div class="row">
                <a href="#" class="answer"><img class="col-md-6 col-md-offset-4" src="../images/beer_awesome.jpg"></a>
            </div>
        </section>

        <section id="coffee" class="col-md-6">
            <div class="row">
                <a href="#" class="answer"><img class="col-md-6 col-md-offset-2" src="../images/coffee_awesome.png"></a>
            </div>
        </section>
    </article>

    <footer class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-1 col-md-offset-0" id="zombie"><img src="../images/zombie.png"></div>
        <div class="col-md-1 col-md-offset-7" id="elephant"><img src="../images/elephpant.png" style="margin-top: 60px;"></div>
        <div class="col-md-1">&nbsp;</div>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
    <script src="../dist/js/jquery-ui-shake.min.js"></script>
	<script src="../script.js"></script>

    <script type="text/javascript">
        $(function() {
            game.startGame();
        });

        function highlightAnswer(type, color)
        {
            var style = { border: 'solid 2px ' + color };
            var clear = { border: 'none' };

            var $elem = $('#' + type + ' img').css(style);

            setTimeout(function() { $elem.css(clear); }, 100); 
            setTimeout(function() { $elem.css(style); }, 200);

            setTimeout(function() { $elem.css(clear); }, 300);
            setTimeout(function() { $elem.css(style); }, 400);

            setTimeout(function() { $elem.css(clear); }, 500);
        }
    </script>

</body>
</html>
