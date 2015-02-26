


            <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo anchor('user/profile', 'Human Resource Agency','class="navbar-brand"'); ?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			<ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php echo anchor('user/logout', 'Logout'); ?>
                    </li>
                    
                </ul>
                        
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class=" jumbotron hero-spacer col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
        <h2>Welcome Back, <?php 
            foreach($results as $data) {
                echo "<p>".$data->os_code ."</p><br>";
            }
               echo "<p id='pagi'>". $links." </p>"; 
        ?><?php echo $this->session->userdata('name'); ?>!</h2>
        
        <div id="criteria"  class="  reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  ">
        
    <div id="refineRes" class=" reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 ">
    To refine your search <span id="clickhere" >click here</span>
        
    </div>
	<?php echo form_open("user/view"); 
			/*
			if($this->input->post('search')){*/
				
				/*if($search>0){
				
					
					echo '<div id="results" class=" reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 
					col-xs-offset-1 col-sm-offset-1 
								col-md-offset-1  ">
						<div class="table-responsive">
						<table  class="table table-hover table-condensed">
							<thead>
							<tr>
								<th ></th>
								<th >No.</th>
								<th >Name</th>
								<th >Sex</th>
								<th >Age</th>
								<th >Languages</th>
								<th >Operating System</th>
								<th >Frameworks</th>
							</tr>
							</thead>
							<tbody>';
						$ctr =1;
						$ctr2=0;
						foreach($search as $search)
						{ 
							echo "<tr>
							<td><input type='radio' name='viewCTR' value='".$search->uid."'/></td>
							<td>".$ctr ."</td>
							<td>".$search->fname." ".$search->mname." ".$search->lname ."</td>
							<td>".$search->sex."</td>
							<td>".$search->age."</td>
							<td>".$search->lang_code."</td>
							<td>".$search->os_code."</td>
							<td>".$search->fwork_code."</td>";
							
							
							
							$ctr++;
							
						
						
						}
							
						
					   echo" 
						</tbody>
					</table>
					</div>
					<div class='form-group' >
						
						<div class='col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 '>
							<input type='submit' id='view' class='greenButton' value='View' />
						</div>
					</div>
				</div>";
        	}*/
			/*else{
			echo '<div id="results" class=" reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 
				col-md-offset-1  ">
					<div class="form_title">No Match Found!</div>
					</div>';
			
			
			}
		}*/
		
		echo form_close();
		?>    
        </header>
        
    </div>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/script.js"></script>  

	
