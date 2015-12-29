    <div class="container">
        <?php 
          if ($this->session->flashdata('msg')) echo $this->session->flashdata('msg');
          else 
              if($this -> session -> userdata('logged_in')==TRUE)
              echo "Co słychać ".$this -> session -> userdata('user_name').' ? ';
        ?>            

    </div>
 

</body>
</html>
