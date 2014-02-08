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
      <div class="jumbotron" style="text-align: center;">

<?php if (empty($jumbotron_message)): ?>
        <h1 style="margin-top: 0;">Brew vs. Brew</h1>
        <p class="lead">Welcome to the Sunshine PHP 2014 Hackathon game Brew vs. Brew! Miami's favorite beer/coffee/bacon/zombie/ElePHPant online trivia game.</p>
	<p>Look at the map, read the hint, and try to guess if the Miami hotspot is a bar or a coffeehouse.</p>
	<ul class="col-md-7 col-md-offset-3 text-left" >
	  <li>Click on the coffee image or beer image to make your decision accordingly.</li>
	  <li>Look out! On the bottom of the screen the zombie is trying to catch the ElePHPant</li>
	  <li>If you can guess 10 answers correctly, ElePHPant will be able to <strong>escape</strong> </li>
	  <li>If you answer 3 questions incorrectly, ElePHPant will meet his <span class="text-danger">dooooom!</span></li>
	</ul>

        <br>
	<br>
        <p><a href="?page=game" class="btn btn-lg btn-success" href="#" role="button" style="margin-top:30px;font-size: 3em; padding: .2em 1.5em">Play!</a></p>

        <br>
        <div class="row">
            <div><img class="col-md-2 col-md-offset-4" src="images/beer-icon.gif"></div>
            <div><img class="col-md-2 col-md-offset-0" src="images/coffee_awesome.png"></div>
        </div>
<?php else:
    echo $jumbotron_message;
endif; ?>
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

      <!--<div class="footer">
        <p>&copy; Company 2014</p>
      </div>-->

    </div> <!-- /container -->

<!-- Latest compiled and minified JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<?=$js_include?>
<script src="script.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

