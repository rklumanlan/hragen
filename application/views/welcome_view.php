


            <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Human Resource Agency</a>
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
        <header class="jumbotron hero-spacer col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
        <h2>Welcome Back, <?php echo $this->session->userdata('user_name'); ?>!</h2>
        <div class="reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  ">
        <div class="form_title">Personal Information</div>
        
		<div class="form-horizontal">    
        	
        	<div class="form-group fname">
   
        		<?php  
				echo form_open_multipart("user/preview",'id = "info"'); ?>
                
				
                <label for="fname" class="control-label col-sm-3  ">First Name:</label>
                <div class="col-sm-9">  
            		<input type="text" id="fname"  class="form-control" name="fname" value="<?php echo set_value('fname'); ?>" />		
                    
                </div>
            </div>
			<div class="form-group">
        		<label for="mname" class="control-label col-sm-3 ">Middle Name:</label>
                <div class="col-sm-9"> 
                	<input type="text" id="mname" name="mname" class="form-control" 
                    value="<?php echo set_value('mname'); ?>" />
                </div>
            </div>
            <div class="form-group lname">
                <label for="lname" class="control-label col-sm-3">Last Name:</label>
                <div class="col-sm-9"> 
                	<input type="text" id="lname" name="lname" class="form-control" 
                    value="<?php echo set_value('lname'); ?>" />
                </div>
            </div>
            <div class="form-group add">
				<label for="add" class="control-label col-sm-3">Address:</label>
				<div class="col-sm-9"> 
					<input type="text" id="add" name="add"  class="form-control" value="<?php echo set_value('add'); ?>" />
                    <br/>
                </div>
            </div>
            <div class="form-group prov_mun">
				<label for="prov_mun" class="control-label col-sm-3">Province/Muncipality:</label>
				<div class="col-sm-9 "> 
					<input type="text" id="prov_mun" name="prov_mun"  class="form-control" value="<?php echo 
					set_value('prov_mun'); ?>" />
                </div>
            </div>
            <div class="form-group sex">
				<label for="sex" class="control-label col-sm-3">Sex:</label>
                <div class="col-sm-9 "> 
					<?php $gender = array('-'=>'-','Male'=>'Male', 'Female'=>'Female'
                        );
        
                   echo form_dropdown('sex', $gender,set_value('sex'), 'id="sex" class="form-control"');
                    ?>
                </div>
            </div>
            <div class="form-group age">
                <label for="age" class="control-label col-sm-3">Age:</label>
                <div class="col-sm-9 "> 
					<?php $ageb = array('-'=>'-','Newly Graduate'=>'Newly Graduate','22-25'=> '22-25', '26-30'=>'26-30');
        
                    echo form_dropdown('age', $ageb,'', 'id="age" class="form-control"');
                    ?>
                </div>
            </div>
            <div class="form-group pic">
				<label for="add" class="control-label col-sm-3">Image:</label>
				<div class="col-sm-9"> 
                    
                    <input type="file" id="userfile" name="userfile" size="20" required="required" />
					<div name="err" class="col-sm-12 error text-center"></div>
                </div>
            </div>
            
            <div class="form_title">Technical Skills</div>
            <div class="form-group">
            
                <label for="fname" class="control-label col-sm-3">Languages:</label>
                <div class="col-sm-9 "> 
                <?php foreach($lang->result() as $lang)
                    { 
						echo "<div class='col-sm-3 '>
								<label class='checkbox-inline '><input type='checkbox' name='lang[]' 
								value='".$lang->lang_desc."'>".$lang->lang_desc."</label>
							</div>";
					}
				?>
                
                
                
                </div>
            </div>
            <div class="form-group">           
                <label for="fname" class="control-label col-sm-3">Operating System:</label>
                <div class="col-sm-9 "> 
                <?php foreach($os->result() as $os)
                    { 
						echo "<div class='col-sm-3 '>
								<label class='checkbox-inline '><input type='checkbox' name='os[]' 
								value='".$os->os_desc."'>".$os->os_desc."</label>
							</div>";
					}
				?>
                
                
                
                   
               </div>
            </div>
            <div class="form-group"> 
                <label for="fname" class="control-label col-sm-3">Framework:</label>
                <div class="col-sm-9 ">
                <?php foreach($fwork->result() as $fwork)
                    { 
						echo "<div class='col-sm-3 '>
								<label class='checkbox-inline '><input type='checkbox' name='fwork[]' 
								value='".$fwork->fwork_desc."'>".$fwork->fwork_desc."</label>
							</div>";
					}
				?>
                </div>
            </div>
            <div class="form_title">Education and Awards</div>
            <?php 
			for($count=1;$count<=4;$count++)
			{	
				$class="";
				if($count>1)
				{$class = "invi";}
					
				echo"
				<div id='educ".$count."' class='educ".$count." ".$class."'>
					<div class='form-group sch".$count."' > 
						<label for='fname' class='control-label col-sm-3'>School:</label>
						<div class='col-sm-9 '>
							<input type='hidden' id='educidCtr".$count."' name='educidCtr".$count."' value='".$count."'>
							<input type='text' id='school".$count."' name='school".$count."' class='form-control school' 
							value='".set_value('school'.$count)."' />
						</div>
					</div>
					<div class='form-group date".$count."'> 
						<label for='fname'  class='control-label col-sm-3'>Dates Attended:<br/>
						
						
						</label>
						<div class='col-sm-9'>
							<div class='col-sm-5 pad'>
								<select name='DAtty1".$count."' id='DAtty1".$count."' class='form-control dateFrom'>
									<option value='-'>-</option>";
									$yeard1 = date('Y')+1; 
									for ($i = 0; $i <= 100; $i++) {
										$yeard1--; 
										echo "<option value='".$yeard1."'>".$yeard1."</option>";
									}
							echo "</select>
							</div>
							<div class='col-sm-2 pad'>-</div>
							<div class='col-sm-5 pad' >
									<select name='DAtty2".$count."' id='DAtty2".$count."' class='form-control dateTo' >
									<option value='-'>-</option>";
									$yeard2 = date('Y')+1; 
									for ($j = 0; $j <= 100; $j++) {
										$yeard2--; echo '<option value="'.$yeard2.'">'.$yeard2.'</option>';
									}
						
							echo "</select>
							</div>
						</div>
						
					</div>
					<div class='form-group major".$count."'>
						<label for='fname' class='control-label col-sm-3'>Feild of Study:</label>
						<div class='col-sm-9'>
							<input type='text' id='mjr".$count."' name='mjr".$count."' class='form-control mjr' 
							value='".set_value('mjr'.$count)."' />
						</div>
					</div>
					<div class='form-group dgree".$count."'>
						<label for='degree' class='control-label col-sm-3'>Degree:</label>
						<div class='col-sm-9'>";
						
					$degree2 = array('-'=>'-','High School'=>'High School', 'Associate\'s Degree'=>'Associate\'s Degree', 
					'Bachelor\'s Degree'=>'Bachelor\'s Degree', 'Master\'s Degree'=>'Masters\'s Degree');
        			echo "<select name='degree".$count."' id='degree".$count."' class='form-control edteduc'>";
					foreach($degree2 as $key => $value) {
						echo "<option>".$value." </option> ";
					}
					echo"<select>"	;
					echo "</div>
					</div>
					<div class='form-group'>
						<label for='desc' class='control-label col-sm-3'>Description:</label>
						<div class='col-sm-9'>";
						$desc = Array ('name' => 'EAdes'.$count.'', 'cols' => '24','rows' => '5','class'=>'form-control');
								echo Form_textarea($desc);
						echo "	
						</div>
					</div>
									
					
				</div>
									
									
									
									
						";
			}
			?>
            <div class="form-group" >
            	<div class="col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 ">
                	<input type="button" id="addeduc" class="greenButton" value="Add Another" />
                   	<input type="button" id="remeduc" class="greenButton" value="Remove" />
                    
                </div>
            </div>
            <div class="form_title">Professional Experience</div>
             <?php $class="";
			for($ctr=1;$ctr<=4;$ctr++)
			{	
				
				if($ctr>1)
				{$class = "class='invi'";}
					
				echo"
				<div ".$class." id='pexp".$ctr."'>
					<div class='form-group comp".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Company Name:</label>
						<div class='col-sm-9'>
							<input type='text' id='compname".$ctr."' name='compname".$ctr."' class='form-control comp'
							value='".set_value('compname'.$ctr)."' />
						</div>
					</div>
					<div class='form-group tit".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Title:</label>
						<div class='col-sm-9'>
							<input type='text' id='title".$ctr."' name='title".$ctr."' class='form-control title'
							value='".set_value('title'.$ctr)."' />
						</div>
					</div>
					<div class='form-group location".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Location:</label>
						<div class='col-sm-9'>
							<input type='text' id='loc".$ctr."' name='loc".$ctr."' class='form-control loca' 
							value='".set_value('loc'.$ctr)."' />
						</div>
					</div>
					<div class='form-group comTP".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Time Period:</label>
						<div class='col-sm-9 '>
							<div class='col-sm-3 pad'>";
							$month1 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
								'3'=> 'March', '4'=>'April', '5'=>'May', '6'=> 'June', '7'=>'July', 
								'8'=> 'August', '9'=>'September', '10'=>'October', 
								'11'=>'November', '12'=>'December');
					
								echo form_dropdown('mon1'.$ctr.'', $month1,'', "class='form-control monFrom' id='mon1".$ctr."'");
							echo "
							</div>
							<div class='col-sm-2 pad'>
								<select name='TPy1".$ctr."' id='year".$ctr."' class='form-control yearFrom' >
								<option>-</option>";
								$year = date('Y')+1; 
								for ($y1 = 0; $y1 <= 100; $y1++) {
									$year--; echo '<option value="'.$year.'">'.$year.'</option>';
								}
								echo"
								</select>
							</div>
							<div class='col-sm-2 pad'> - </div>
							<div class='col-sm-3 pad'>";
								$month2 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
								'3'=> 'March', '4'=>'April', '5'=>'May', '6'=> 'June', '7'=>'July', 
								'8'=> 'August', '9'=>'September', '10'=>'October', 
								'11'=>'November', '12'=>'December');
					
								echo form_dropdown('mon2'.$ctr.'', $month2,'', "class='form-control monTo' id='mon2".$ctr."'");
								echo"
							</div>
							<div class='col-sm-2 pad'>
								<select name='TPy2".$ctr."' id='year".$ctr."' class='form-control yearTo' >
								<option>-</option>";
								$year = date('Y')+1; 
								for ($y1 = 0; $y1 <= 100; $y1++) {
									$year--; echo '<option value="'.$year.'">'.$year.'</option>';
								}
							echo"
								</select>
							</div>
						</div>
						
					</div>
					<div class='form-group'>
						<label for='desc' class='control-label col-sm-3'>Description:</label>
						<div class='col-sm-9'>";
								$PEdes=set_value('PEdes'.$ctr.'');
								$desc = Array ('name' => 'PEdes'.$ctr.'', 'cols' => '24','rows' => '5','value'=>$PEdes);
								
								echo Form_textarea($desc,'',"class='form-control'");
						echo"
						</div>
					</div>
								
				</div>
				
				";
			}
			?>
           
           
            <div class="form-group" >
            	<div class="col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 ">
                	<input type="button" id="addpexp" class="greenButton" value="Add Another" />
                    <input type="button" id="rempexp" class="greenButton" value="Remove" />
                </div>
            </div>
            <div class="form_title">Professional Reference</div>
            <?php 
			for($ctr=1;$ctr<=3;$ctr++)
			{	
				$class="";
				if($ctr>1)
				{$class = "class='invi'";}
					
				echo"
				<div ".$class." id='pr".$ctr."'>
					<div class='form-group'>
						<label for='fname' class='control-label col-sm-3'>Name:</label>
						<div class='col-sm-9'>
							<input type='text' id='prname".$ctr."' name='prname".$ctr."' class='form-control' 
							value='".set_value('prname'.$ctr)."' />
						</div>
					</div>
					<div class='form-group'>
						<label for='cnum' class='control-label col-sm-3  '>Contact Number:</label>
						<div class='col-sm-9'>  
							<input type='text' id='cnum".$ctr."'  class='form-control' name='cnum".$ctr."'
							 value='".set_value('cnum'.$ctr)."' />
						</div>
					</div>
					<div class='form-group'>
						<label for='cemail' class='control-label col-sm-3  '>Email Anddress:</label>
						<div class='col-sm-9'>  
							<input type='text' id='cemail".$ctr."'  class='form-control' name='cemail".$ctr."' 
							value='".set_value('cemail'.$ctr)."' />
						</div>
					
					</div>
					
				</div>
				";
			}
            ?>
            <div class="form-group" >
            	<div class="col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 ">
                	<input type="button" id="addref" class="greenButton" value="Add Another" />
                    <input type="button" id="remref" class="greenButton" value="Remove" />
                </div>
            </div>
            <div class="form-group" >
            	
            	<div class="col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 ">
                	<input type="submit" class="greenButton" value="Submit" />
                </div>
            </div>
      </div><!-- end -->
            
             
                
            <?php echo form_close(); ?>
        </div>
	</div>
            
        </header>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/script.js"></script>  

	