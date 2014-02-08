<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Miami Brew vs. Brew</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/custom.css">    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <!--<div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted">Miami Brew vs. Brew</h3>
      </div>
    -->
<<<<<<< HEAD
      <div class="jumbotron" style="text-align: center;">
        <h1 style="margin-top: 0;">Brew vs. Brew</h1>
        <p class="lead">Welcome to Brew vs. Brew!  Miami's favorite online trivia game.  Don't let the ZOMBIE eat the PHPELLEPHANT!</p>

        <br>
        <p><a href="?page=game" class="btn btn-lg btn-success" href="#" role="button" style="font-size: 3em; padding: .2em 1.5em">Play!</a></p>

        <br>
        <div class="row">
            <div><img class="col-md-2 col-md-offset-4" src="images/beer-icon.gif"></div>
            <div><img class="col-md-2 col-md-offset-0" src="images/coffee_awesome.png"></div>
        </div>
      </div>

      <!--<div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>-->
=======
      <div class="jumbotron">
        <h1>Brew vs. Brew</h1>
        <? if(empty($jumbotron_message)):?>
	<p class="lead">Welcome to Brew vs. Brew!  Miami's favorite online trivia game.  Don't let the ZOMBIE eat the PHPELLEPHANT!</p>
        <p><a href="?page=game" class="btn btn-lg btn-success start" role="button">Start now!</a></p>
        <? else:
            echo $jumbotron_message;
           endif; ?>
      </div>

>>>>>>> e8d6144d95474188598f26301eb14d3107dfa8dd

      <!--<div class="footer">
        <p>&copy; Company 2014</p>
      </div>-->

    </div> <!-- /container -->

<!-- Latest compiled and minified JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
<script src="script.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<?=$js_include?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
