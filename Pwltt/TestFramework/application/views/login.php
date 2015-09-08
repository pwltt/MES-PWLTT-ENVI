<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PwlTT</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
<!---Górny pasek navigacyjny-->
        <nav class="navbar navbar-static-top navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">PHP Develeper PwLtt</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#">Contact</a></li>
                <li class="btn-info"><a href="https://www.facebook.com/pawelwygral"> FaceBook </a></li>
                <li class="dropdown">
                  <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">More <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Test 1</a></li>
                    <li><a href="#">Test 2</a></li>
                    <li><a href="#">Test 3</a></li>
                    <li class="divider" role="separator"></li>
                    <li class="dropdown-header">PHP Instruction</li>
                    <li><a href="#">Instruction 1 </a></li>
                    <li><a href="#">Instruction 2 </a></li>
                    <li><a href="#">Instruction 3 </a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
<!---KONIEC paska navigacyjnego-->
      
      

<!--GLOWNY BLOK STRONY-->
        <div class="container">

        <!--Alert zielony-->
        <div role="alert" class="alert alert-success">
          <strong>Udalo Ci sie zalogowac</strong>
        </div>
<!--Koniec Alert-->


        </div>
<!-- KONIEC GLOWNY BLOK STRONY-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  </body>
</html>
