
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright text-center">Nemoto Technical Brain Phil. Co. Inc. 2014</span>
            </div>
        </div>
    </div>
</footer>

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>css/bootstrap/js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>



  <!-- Custom Theme JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>css/bootstrap/js/agency.js"></script>

  <?php
  if($this->input->post('regbtn')){

    echo "<script type='text/javascript'>
      $('#login2').modal('show');
    </script>";
  }
  if($title=="Nemoto Technical Brain Phil Co. Inc."){
    echo '
    <script type="text/javascript" src="'.base_url().'assets/validation.js"></script>
    <script type="text/javascript"  src="'.base_url().'css/bootstrap/js/jquery.easing.min.js"></script>
    <script type="text/javascript"  src="'.base_url().'css/bootstrap/js/classie.js"></script>
    <script type="text/javascript"  src="'.base_url().'css/bootstrap/js/cbpAnimatedHeader.js"></script>

    ';

  }
  else if($title=="Welcome"){
    echo '<script type="text/javascript">
        $(document).ready(function(){
            $("#nav").addClass("navbar-shrink");
        });
    </script>';

    echo '<script type="text/javascript" src="'.base_url().'assets/validation.js">
    </script>';
  }
  else if($title=="Preview" || $title=="Profile"){

      echo '<script type="text/javascript">
          $(document).ready(function(){
              $("#nav").addClass("navbar-shrink");
          });
      </script>';

      echo '
      <script type="text/javascript" src="'.base_url().'assets/validation2.js"></script>
      <script type="text/javascript" src="'.base_url().'assets/validation.js"></script>
      ';
      echo"
      <script type='text/javascript'>
      	$(document).ready(function(){";
            if($this->input->post('Removepref')||$this->input->post('Updatepref')){
        			echo "var res =".$this->input->post('ctr_update').";";
        			echo"$('#pref'+res).focus();";
        		}
            if($this->input->post('insertpref')){
        			echo"$('#'+$('.pref').attr('id')).focus();";
        		}
        		if($this->input->post('Removecomp')||$this->input->post('Updatecomp')){
        			echo "var res =".$this->input->post('ctr_update').";";
        			echo"$('#comp'+res).focus();";
        		}
        		if($this->input->post('insertcomp')){
        			echo"$('#'+$('.comp').attr('id')).focus();";
        		}
        		if($this->input->post('Removeeduc')||$this->input->post('Updateeduc')){
        			echo "var res =".$this->input->post('ctr_update').";";
        			echo"$('#educ'+res).focus();";
        		}
        		if($this->input->post('inserteduc')){
        			echo"$('#'+$('.educ').attr('id')).focus();";
        		}
        		if($this->input->post('Updatetskills')){
        			echo"$('#'+$('.tskills').attr('id')).focus();";
        		}



      echo '
        });
      </script>
      ';
  }

  else if($title=='Admin'||$title=='Search'||$title=='View Applicant'){
    echo '<script type="text/javascript">
        $(document).ready(function(){
            $("#nav").addClass("navbar-shrink");
            $("#results").css("margin-top","0px");
        });
    </script>';

    echo '<script type="text/javascript" src="'.base_url().'assets/validation2.js"></script>';

  }
  ?>






</body>

</html>
