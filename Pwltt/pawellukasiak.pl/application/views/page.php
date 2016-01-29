<div class="container show-grid">
    <!-- PAGE MAIN CENTER --> 
    <div class="col-xs-12 col-sm-6 col-md-8">
        <?php 
            
            if($this -> session -> userdata('logged_in')==FALSE){
                
                echo $this->session->flashdata('msg');
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3>Portfolio</h3>
                    </div>
                    <div class="panel-body text-center">
                        Strona została zrobiona za pomocą frameworka <strong>Codeigniter</strong>.</br>
                        
                        <a href="https://github.com/pwltt/MES-PWLTT-ENVI/tree/master/Pwltt/pawellukasiak.pl" 
                           class="fa fa-github-square text-center" style="font-size: xx-large; cursor: pointer"></a> </br>
                           Źródło
                        
                    </div>
                </div>
            <?php
            }  
            else if($this -> session -> userdata('logged_in')==TRUE){
                if($this -> session -> userdata('email_approved') == 0)
                {
                    echo '<div class="alert alert-info text-center">Sprawdź skrzynkę email, w celu weryfikacji adresu <strong> '. $this -> session -> userdata('user_email').'</strong></div>';
                }
                echo $this->session->flashdata('msg');
                    echo '<div class="alert alert-info text-center"> Co słychać <strong>'.$this -> session -> userdata('user_name').'</strong> ? </div>';
        ?> 
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>Całe dane sesji i użytkownika</h3>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Dene</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($this->session->all_userdata() as $key => $value) 
                                echo "<tr>
                                    <td>".$key."</td>
                                    <td>".$value."</td>
                                </tr>"
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
        <?php   } ?>
    </div>