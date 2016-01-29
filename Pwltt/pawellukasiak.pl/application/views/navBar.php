<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>Pwltt </strong>PHPortfolio</a>
            </div>

          <!-- SOCIAL BUTTONS -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="https://github.com/pwltt/MES-PWLTT-ENVI/tree/master/Pwltt/pawellukasiak.pl" 
                           class="fa fa-github-square text-center" style="font-size: xx-large; cursor: pointer"></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/pawelwygral" 
                           class="fa fa-facebook-square text-center" style="font-size: xx-large; cursor: pointer"></a>
                    </li>    
                </ul>

                <!-- PASEK SEARCH ----------------------------------- -->
                <form class="navbar-form navbar-left text-center" role="search">
                    <div class="form-group ">
                        <input type="text" class="form-control" placeholder="Wpisz słowo">
                    </div>
                        <button type="submit" class="btn btn-default">Szukaj</button>
                </form>
                <!-- KONIEC PASEK SEARCH --------------------------- -->

                <ul class="nav navbar-nav navbar-right">
                <?php 
                if ($this->session->userdata('logged_in') == TRUE)
                        { ?>
                    <ul class="nav navbar-nav">
                    <li><a href="" class="text-center" style="font-size: large; cursor: pointer"><?php echo $this->session->userdata('user_name') ?></a></li>
                    </ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span> 
                            <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: x-large; " ></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="glyphicon glyphicon-cog" aria-hidden="true" style="font-size: medium; cursor: pointer"> Ustawienia </a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="glyphicon glyphicon-log-out" href="login/logout" aria-hidden="true" style="font-size: medium; cursor: pointer; "> Logout </a></li>
                        </ul>
                    </li>
                </ul>
                <?php
                } else{   ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span> 
                            <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: x-large; " ></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a id="login_button" style="cursor: pointer">Zaloguj</a></li>
                            <li><a id="register" style="cursor: pointer">Zarejestruj</a></li>
<!--                            <li role="separator" class="divider"></li>-->
                        </ul>
                    </li> 
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
 <!---->
  <div class="container">
      <?php
      echo form_error('login'); 
      echo form_error('password'); 
      echo form_error('login1');
      echo form_error('email');
      echo form_error('password1'); 
      echo form_error('con_password'); 
      ?>
    <div id="register_dialog" title="Zarejestruj">
        <div class="form-group">
        <?php echo form_open('registration');
        
            echo form_input('login1',set_value('login1'),'class="form-control" placeholder="Login"'); 
            
            echo form_input('email',set_value('email'),'class="form-control" placeholder="Email" id="inputEmail3"'); 
            
            echo form_password('password1',set_value('password1'),'class="form-control" placeholder="Haslo" id="exampleInputPassword1"'); 
            
            echo form_password('con_password',set_value('con_password'),'class="form-control" placeholder="Potwierdź hasło" id="exampleInputPassword1"'); 
            
            echo form_submit('submit','Zarejestruj','class="btn btn-default"'); 
        echo form_close(); 
        ?>
        </div>
    </div>
  </div>

   <div class="container">
    <div id="login_dialog" title="Zaloguj">
        <div class="form-group">
        <?php 
         
        echo form_open('login');
            echo form_input('login',set_value('login'),'class="form-control" placeholder="Login"'); 
            
            echo form_password('password',set_value('password'),'class="form-control" placeholder="Haslo" id="exampleInputPassword1"'); 

            echo form_submit('submit','Zaloguj','class="btn btn-default"'); 
        echo form_close(); 
        ?>
        </div>
    </div>
   </div>
