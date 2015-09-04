<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PwlTT</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

        <!---Górny pasek navigacyjny-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
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
                <li class="btn-primary"><a href="https://www.facebook.com/pawelwygral"> FaceBook </a></li>
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
        <br>
        <br>
        <br>

        <!--Alert zielony-->
        <div role="alert" class="alert alert-success">
          <strong>Udalo Ci sie mnie znaleźć!</strong> Strona jest w przebudowie i czeka na wypozycjonowanie
        </div>
        <!--Koniec Alert-->


        <!---SLIDER-->
        <div data-ride="carousel" class="carousel slide" id="carousel-example-generic" >
              <ol class="carousel-indicators">
                <li class="" data-slide-to="0" data-target="#carousel-example-generic"></li>
                <li data-slide-to="1" data-target="#carousel-example-generic" class=""></li>
                <li data-slide-to="2" data-target="#carousel-example-generic" class="active"></li>
              </ol>
              <div role="listbox" class="carousel-inner">
                <div class="item">
                  <img alt="First slide [1140x500]" data-src="holder.js/1140x500/auto/#777:#555/text:First slide" src="http://pawellukasiak.pl/images/image1.jpg" data-holder-rendered="true">
                </div>
                <div class="item">
                  <img alt="Second slide [1140x500]" data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" src="http://pawellukasiak.pl/images/image2.jpg" data-holder-rendered="true">
                </div>
                <div class="item active">
                  <img alt="Third slide [1140x500]" data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" src="http://pawellukasiak.pl/images/image3.jpg" data-holder-rendered="true">
                </div> 
              </div>
              <a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control">
                <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">
                <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
        <!---KONIEC SLIDER-->
<!-- KONIEC GLOWNY BLOK STRONY-->
        

      </div>
          <div class="container">
          <?php echo form_open('HomeController/index');?>
                '<input class="btn btn-default" name="submit" type="submit" value="Zobacz">';
                </form>
          </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>