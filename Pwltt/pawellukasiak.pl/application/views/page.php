    <div class="container">
        <?php 
          if ($this->session->userdata('logged_in') == TRUE) echo $title.' '. $this->session->userdata('user_name');
          else echo "SIEMA ! ";
        ?>
    </div>
</body>
</html>
