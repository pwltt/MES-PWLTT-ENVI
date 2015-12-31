<!-- RightPANEL --> 
    <div class="col-xs-6 col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php
                if($this -> session -> userdata('logged_in')==TRUE)
                echo "Ostatnie logowanie ". $LastLogin;
                else echo"Panel użytkownika";
                ?>
            </div>
            <div class="panel-body">
                <p>Loool</p>
            </div>
            <div class="panel-footer">
                Panel Dolny
            </div>
        </div>
    </div>
    <!--KONIEC RightPANEL --> 
</div>
<!--KONIEC PAGE + rightPANEL -->
</body>
</html>
