<div class="container show-grid">
    <!-- PAGE MAIN CENTER --> 
    <div class="col-xs-12 col-sm-6 col-md-8">
        <?php 
            if($this -> session -> userdata('logged_in')==TRUE)
                if($this->session->flashdata('msg')) echo $this->session->flashdata('msg');
                else  echo '<div class="alert alert-info text-center"> Co słychać <strong>'.$this -> session -> userdata('user_name').'</strong> ? </div>';
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
                                <?php foreach($this->session->all_userdata() as $key => $value) 
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
    <?php    ?>
           
    </div>

