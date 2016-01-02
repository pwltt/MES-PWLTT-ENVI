<!-- RightPANEL --> 
    <div class="col-xs-6 col-md-4">
        <?php
        if($this -> session -> userdata('logged_in')==TRUE)
        { ?>
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php
                echo "Ostatnie logowanie ". $LastLogin;
                ?>
            </div>
            <div class="panel-body">
                <p>Loool</p>
            </div>
            <div class="panel-footer">
                Panel Dolny
            </div>
        </div>
        
        <?php } else { ?>
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php
                echo"Panel użytkownika";
                ?>
            </div>
            <div class="panel-body">
                <p>Loool</p>
            </div>
            <div class="panel-footer">
                Panel Dolny
            </div>
        </div>
        <?php }?>
    </div>
    <!--KONIEC RightPANEL --> 
</div>
<!--KONIEC PAGE + rightPANEL -->
</body>
</html>
