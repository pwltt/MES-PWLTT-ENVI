<?php include("head.php"); ?>
<body>
    <div class="container" >
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8">
                    .col-xs-12 .col-sm-6 .col-md-8
                </div>
                <div class="col-xs-6 col-md-4">
                    <?php echo validation_errors();
                          echo form_open('page');
                    ?>
                    </br>
                    </br>
                        <div class="form-group form-inline">
                                <input type="login" class="form-control" placeholder="Login" name="login">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Haslo"<?php echo set_value('password'); ?>>
                        <button type="submit" class="btn btn-default">Zaloguj</button>
                        </div>
                    <?php
                    echo form_close(); 
                    ?>
                   
                   
                </div>
            </div>
        </div>
</body>
</html>
