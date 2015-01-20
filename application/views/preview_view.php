

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
        <div class="reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  ">
        <div class="form_title">Personal Information</div>
        <?php echo form_open('user/update_info','id = "prevform"'); ?>
        <input type="hidden" id="case_update" name="case_update" value=''/>
		<div class="form-horizontal">    
        	
        	<div class="form-group fname">
                <label for="fname" class="control-label col-sm-3  ">First Name:</label>
                <div class="col-sm-9">  
            		<input type="text" id="fname"  class="form-control edtpinfo" name="fname" readOnly="true" 
                    value="<?php echo set_value('fname'); ?>" />		
                    
                </div>
            </div>
			<div class="form-group">
        		<label for="mname" class="control-label col-sm-3 ">Middle Name:</label>
                <div class="col-sm-9"> 
                	<input type="text" id="mname" name="mname" class="form-control edtpinfo" readOnly="true" 
                    value="<?php echo set_value('mname'); ?>" />
                    
                </div>
            </div>
            <div class="form-group lname">
                <label for="lname" class="control-label col-sm-3">Last Name:</label>
                <div class="col-sm-9"> 
                	<input type="text" id="lname" name="lname" class="form-control edtpinfo" readOnly="true" value="<?php echo set_value('lname'); ?>" />
                    
                </div>
            </div>
			
            <div class="form-group add">
				<label for="add" class="control-label col-sm-3">Address:</label>
				<div class="col-sm-9"> 
					<input type="text" id="add" name="add"  class="form-control edtpinfo" readOnly="true" value="<?php echo set_value('add'); ?>" />
                </div>
            </div>
            <div class="form-group prov_mun">
				<label for="prov_mun" class="control-label col-sm-3">Province/Muncipality:</label>
				<div class="col-sm-9 "> 
					<input type="text" id="prov_mun" name="prov_mun"  class="form-control edtpinfo" readOnly="true" value="<?php echo 
					set_value('prov_mun'); ?>" />
                </div>
            </div>
            <div class="form-group sex">
				<label for="sex" class="control-label col-sm-3">Sex:</label>
                <div class="col-sm-9 "> 
					<?php $gender = array('-'=>'-','Male'=>'Male', 'Female'=>'Female'
                        );
        			echo"<input type='hidden' name='sex' id='sex' value='".set_value('sex')."'/>";
                    echo form_dropdown('sex', $gender,set_value('sex'), 'id="sex" class="form-control 
					edtpinfo" disabled="disabled"');
					
                    ?>
                </div>
            </div>
            <div class="form-group age">
                <label for="age" class="control-label col-sm-3">Age:</label>
                <div class="col-sm-9 "> 
					<?php 
					echo"<input type='hidden' name='age' id='age' value='".set_value('age')."'/>";
					$ageb = array('-'=>'-','Newly Graduate'=>'Newly Graduate','22-25'=> '22-25', '26-30'=>'26-30');
        
                    echo form_dropdown('age', $ageb,set_value('age'), 'id="age" class="form-control edtpinfo" disabled="disabled" '.set_select('age', $ageb, TRUE, 0).'');
					
                    ?>
                </div>
            </div>
            <div class="form-group" >
            	<div class="pull-right pads edtpinfo ">
                	<input type="button" id="edtpinfo"  class="greenButton edtpinfobtn " onclick="edt(this.id)" value="Edit" />
                	<?php echo form_submit('Updatepinfobtn','Update', 'id="Updatepinfo" class="greenButton edtpinfobtn invi"  ');?> 
                	<input type="button" id="cancelpinfo" name="edtpinfo" class="greenButton edtpinfobtn invi" 
                    onclick="cancel(this.id,this.name)" value="Cancel" />
                    <input type="hidden" value="Updatepinfo" name="UpdatepinfoCTR"/>
                    
                    
                </div>
                
            </div>
            <?php if(!$_POST == ''){ ?>
            <div class="form_title">Technical Skills</div>
            <div class="form-group">
            
                <label for="fname" class="control-label col-sm-3">Languages:</label>
                <div class="col-sm-9 "> 
                <?php foreach($language->result() as $language)
                    { 
						echo "<div class='col-sm-3 '>
								<label class='checkbox-inline '><input type='checkbox' name='lang[]' 
								disabled class='edttskills'".set_checkbox('lang', $language->lang_code)." 
								value='".$language->lang_desc."'>".$language->lang_desc."</label>
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
							disabled class='edttskills'".set_checkbox('os', $os->os_code)." 
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
							disabled class='edttskills'".set_checkbox('fwork', $fwork->fwork_code)." 
								value='".$fwork->fwork_desc."'>".$fwork->fwork_desc."</label>
							</div>";
					}
				?>   
               </div>
               <?php } ?>
            </div>
              <div class="form-group" >
            	<div class="pull-right pads edttskills ">
                	<input type="button" id="edttskills"  class="greenButton edttskillsbtn " onclick="edt(this.id)" value="Edit" />
                	<?php echo form_submit('Updatetskills','Update', 'id="Updatetskills" class="greenButton edttskillsbtn invi" ');?> 
                	<input type="button" id="canceltskills" name="edttskills" class="greenButton edttskillsbtn invi" 
                    onclick="cancel(this.id,this.name)" value="Cancel" />
                    <input type="hidden" value="Updatetskills" name="UpdatetskillsCTR"/>
                </div>
                
            </div>
            <div class="form_title">Education and Awards</div>
            <?php
			$num=1;
			foreach($educ->result() as $educ)
			{	
				
				echo"
				
				<div id='educ".$num."' class='educ '>
					<div class='form-group sch".$num."' > 
						<label for='fname' class='control-label col-sm-3'>School:</label>
						<div class='col-sm-9 '>
							<input type='hidden' id='educidCtr".$num."' name='educidCtr".$num."' value='".$num."'>
							<input type='text' id='school".$num."' name='school".$num."' class='form-control school edteduc'
							readOnly='true' value='".$educ->school."' />
						</div>
					</div>
					<div class='form-group date".$num."'> 
						<label for='fname'  class='control-label col-sm-3'>Dates Attended:</label>
						<div class='col-sm-9'>
							<div class='col-sm-5 pad'>
								<input type='hidden' name='DAtty1".$num."' id='DAtty1".$num."' 
								value='".$educ->yearFrom."'/>
								<select name='DAtty1".$num."' id='DAtty1".$num."' class='form-control dateFrom edteduc' 
								disabled>
									<option value='-'>-</option>";
									$yeard1 = date('Y')+1;
								
									for ($i = 0; $i <= 100; $i++) {
										$yeard1--; 
										if($yeard1 == $educ->yearFrom ){
											echo '<option value="'.$yeard1.'" selected="selected">'.$yeard1.'</option>';
										}
									}
							
							echo "</select> 
							
							</div>
							<div class='col-sm-2 pad'>-</div>
							<div class='col-sm-5 pad' >
									<input type='hidden' name='DAtty2".$num."' id='DAtty2".$num."' 
									value='".$educ->yearTo."'/>
									<select name='DAtty2".$num."' id='DAtty2".$num."' class='form-control dateTo edteduc' 
									disabled>
									<option value='-'>-</option>";
									$yeard2 = date('Y')+1; 
									if($educ->yearTo == $yeard2){ $sel2 = 'selected="selected"';}
									for ($j = 0; $j <= 100; $j++) {
										$yeard2--; 
										
										if($yeard2 == $educ->yearTo){
											echo '<option value="'.$yeard2.'" selected="selected">'.$yeard2.'</option>';
										}
									}
						
							echo "</select>
							
							</div>
						</div>
						
					</div>
					<div class='form-group major".$num."'>
						<label for='fname' class='control-label col-sm-3'>Feild of Study:</label>
						<div class='col-sm-9'>
							<input type='text' id='mjr".$num."' name='mjr".$num."' class='form-control mjr edteduc' 
							readOnly='true' value='".$educ->fstudy."' />
						</div>
					</div>
					<div class='form-group dgree".$num."'>
						<label for='degree' class='control-label col-sm-3'>Degree:</label>
						<div class='col-sm-9'>";
						
					$degree = array("-"=>"-","High School"=>"High School","Associate's Degree"=> "Associate's Degree", "Bachelor's Degree"=>"Bachelor's Degree", "Master's Degree"=>"Master's Degree");
        
                    echo'<input type="hidden" name="degree'.$num.'" id="degree'.$num.'" 
					value="'.$educ->degree.'"/>';		
					echo "<select name='degree".$num."' id='degree".$num."' class='form-control deg edteduc' disabled>";
					
					foreach($degree as $key => $value) {
						if($value == $educ->degree){
							echo'<option  value="'.$value.'" selected="selected">'.$value.'</option> ';
						}
						
						
					}
					
					echo"<select>"	;
					
					echo "</div>
					</div>
					<div class='form-group'>
						<label for='desc' class='control-label col-sm-3'>Description:</label>
						<div class='col-sm-9'>";
						$desc = Array ('id' => 'EAdes'.$num.'','name' => 'EAdes'.$num.'', 'cols' => '24','rows' => '5','class'=>'form-control edteduc',
						'readOnly'=>'true');
								echo Form_textarea($desc);
						echo "	
						
						</div>
					</div>
									
					
				</div>";
				$num++;
			}
			
			echo "<input type='hidden' id='addeducCtr' name='addeducCtr' value='".$num."'>";
			
			
			
			
			?>
            <div id='educ' class='educ'>
                <div class='form-group sch' > 
                    <label for='fname' class='control-label col-sm-3'>School:</label>
                    <div class='col-sm-9 '>
                        <input type='text' id='school' name='school' class='form-control school edteduc'
                          />
                    </div>
                </div>
                <div class='form-group date'> 
                    <label for='fname'  class='control-label col-sm-3'>Dates Attended:</label>
                    <div class='col-sm-9'>
                        <div class='col-sm-5 pad'>
                            <input type='hidden' name='DAtty1' id='DAtty1' 
                            value='".$educ->yearFrom."'/>
                            <select name='DAtty1' id='DAtty1' class='form-control dateFrom edteduc' 
                           >
                                <option value='-'>-</option>
                                <?php
                                $yeard1 = date('Y')+1;
                            
                                for ($i = 0; $i <= 100; $i++) {
                                    $yeard1--; 
                                    echo '<option value="'.$yeard1.'" >'.$yeard1.'</option>';
                                }
                        		?>
                        </select> 
                        
                        </div>
                        <div class='col-sm-2 pad'>-</div>
                        <div class='col-sm-5 pad' >
                                <input type='hidden' name='DAtty2' id='DAtty2' 
                                value='".$educ->yearTo."'/>
                                <select name='DAtty2' id='DAtty2' class='form-control dateTo edteduc' 
                                >
                                <option value='-'>-</option>
                                <?php
                                $yeard2 = date('Y')+1; 
                               
                                for ($j = 0; $j <= 100; $j++) {
                                    $yeard2--; 
                                    echo '<option value="'.$yeard2.'" >'.$yeard2.'</option>';
                                }
                    			?>
                        </select>
                        
                        </div>
                    </div>
                    
                </div>
                <div class='form-group major'>
                    <label for='fname' class='control-label col-sm-3'>Feild of Study:</label>
                    <div class='col-sm-9'>
                        <input type='text' id='mjr' name='mjr' class='form-control mjr edteduc' />
                    </div>
                </div>
                <div class='form-group dgree'>
                    <label for='degree' class='control-label col-sm-3'>Degree:</label>
                    <div class='col-sm-9'>
                 <?php   
                $degree = array("-"=>"-","High School"=>"High School","Associate's Degree"=> "Associate's Degree", "Bachelor's Degree"=>"Bachelor's Degree", "Master's Degree"=>"Master's Degree");
    			?>
                <select name='degree' id='degree' class='form-control edteduc' >
                <?php
                foreach($degree as $key => $value) {
                        echo'<option  value="'.$value.'" >'.$value.'</option> ';
                    
                    
                }
                ?>
                <select>
                
                	</div>
                </div>
                <div class='form-group'>
                    <label for='desc' class='control-label col-sm-3'>Description:</label>
                    <div class='col-sm-9'>
                    <?php
                    $desc = Array ('id' => 'EAdes'.$num.'','name' => 'EAdes', 'cols' => '24','rows' => '5','class'=>'form-control edteduc');
                            echo Form_textarea($desc);
                    ?>
                    
                    </div>
                </div>
                                
                
            </div>
            <div class="form-group" >
            	<div class="pull-right pads edteduc ">
                	
                    <input type="button" id="addeduc" class="greenButton edteducbtn" value="Add Education" />
                    <?php echo form_submit('inserteduc','Save Education', 'id="inserteduc" 
					class="greenButton edteducbtn invi" ');?> 
                    <input type="button" id="canceleduc" class="greenButton edteducbtn invi" value="Cancel" />
                </div>
                
            </div>
            <div class="form_title">Professional Experience</div>
             <?php $class="";
			$ctr=1;
			foreach($comp->result() as $comp)
			{	
				
				echo"
				<div id='pexp".$ctr."' class='pexp'>
					<div class='form-group comp".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Company Name:</label>
						<div class='col-sm-9'>
							<input type='hidden' id='compidCtr".$ctr."' name='compidCtr".$ctr."'  value='".$ctr."'>
							<input type='text' id='compname".$ctr."' name='compname".$ctr."' 
							class='form-control compname edtcomp '
							readOnly='true' value='".$comp->compname."' />
						</div>
					</div>
					<div class='form-group tit".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Title:</label>
						<div class='col-sm-9'>
							<input type='text' id='title".$ctr."' name='title".$ctr."' class='form-control title edtcomp'
							readOnly='true' value='".$comp->title."' />
						</div>
					</div>
					<div class='form-group location".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Location:</label>
						<div class='col-sm-9'>
							<input type='text' id='loc".$ctr."' name='loc".$ctr."' class='form-control loca edtcomp' 
							readOnly='true' value='".$comp->loc."' />
						</div>
					</div>
					<div class='form-group comTP".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Time Period:</label>
						<div class='col-sm-9 '>
							<div class='col-sm-3 pad'>
								<input type='hidden' name='mon1".$ctr."' id='mon1".$ctr."' 
								value='".$comp->month1."'/>";
								$month1 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
								'3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
								'8'=> 'August', '9'=>'September', '10'=>'October', 
								'11'=>'November', '12'=>'December');
					
								echo form_dropdown('mon1'.$ctr.'', $month1,$comp->month1, 
								"disabled class='form-control monFrom edtcomp' id='mon1".$ctr."'");
							echo "</div>
							<div class='col-sm-2 pad'>
								<input type='hidden' name='TPy1".$ctr."' id='TPy1".$ctr."' 
								value='".$comp->year1."'/>
								<select name='TPy1".$ctr."' id='year1".$ctr."' class='form-control yearFrom edtcomp' 
								disabled >
								<option>-</option>";
								$year = date('Y')+1; 
								for ($y1 = 0; $y1 <= 100; $y1++) {
									
									$year--; 
									if($yeard2 == $comp->year1){
										echo '<option value="'.$year.'" selected="selected">'.$year.'</option>';
									}
								}
								echo"
								</select>
								
							</div>
							<div class='col-sm-2 pad'> - </div>
							<div class='col-sm-3 pad'>
								<input type='hidden' name='mon2".$ctr."' id='mon2".$ctr."' 
								value='".$comp->month2."'/>";
								$month2 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
								'3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
								'8'=> 'August', '9'=>'September', '10'=>'October', 
								'11'=>'November', '12'=>'December');
					
								echo form_dropdown('mon2'.$ctr.'', $month2,$comp->month2, 
								"disabled class='form-control monTo edtcomp' id='mon2".$ctr."'");
							echo"</div>
							<div class='col-sm-2 pad'>
								<input type='hidden' name='TPy2".$ctr."' id='TPy2".$ctr."' 
								value='".$comp->year2."'/>
								<select name='TPy2".$ctr."' id='year2".$ctr."'  class='form-control yearTo edtcomp' 
								disabled >
								<option>-</option>";
								$year = date('Y')+1; 
								for ($y1 = 0; $y1 <= 100; $y1++) {
									$year--; 
									if($year == $comp->year2){
										echo '<option value="'.$year.'" selected="selected">'.$year.'</option>';
									}
								}
							echo"
								</select>
								
								
							</div>
						</div>
						
					</div>
					<div class='form-group'>
						<label for='desc' class='control-label col-sm-3'>Description:</label>
						<div class='col-sm-9'>";
								$desc = Array ('name' => 'PEdes', 'id'=>'PEdes', 'cols' => '24','rows' => '5');
								
								echo Form_textarea($desc,""," readOnly='true'
								 class='form-control edtcomp'");
						echo"
						</div>
					</div>
								
				</div>
				
				";
				$ctr++;
				
			}
			echo "<input type='hidden' id='addcompCtr' name='addcompCtr' value='".$ctr."'>";
			?>
            
            
            <div id='comp' class='pexp'>
                <div class='form-group comp'>
                    <label for='fname' class='control-label col-sm-3'>Company Name:</label>
                    <div class='col-sm-9'>
                        <input type='text' id='compname' name='compname' 
                        class='form-control compname edtcomp '  />
                    </div>
                </div>
                <div class='form-group tit'>
                    <label for='fname' class='control-label col-sm-3'>Title:</label>
                    <div class='col-sm-9'>
                        <input type='text' id='title' name='title' class='form-control title edtcomp'/>
                    </div>
                </div>
                <div class='form-group location'>
                    <label for='fname' class='control-label col-sm-3'>Location:</label>
                    <div class='col-sm-9'>
                        <input type='text' id='loc' name='loc' class='form-control loca edtcomp'  />
                    </div>
                </div>
                <div class='form-group comTP'>
                    <label for='fname' class='control-label col-sm-3'>Time Period:</label>
                    <div class='col-sm-9 '>
                        <div class='col-sm-3 pad'>
                            <?php
                            $month1 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                            '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
                            '8'=> 'August', '9'=>'September', '10'=>'October', 
                            '11'=>'November', '12'=>'December');
                
                            echo form_dropdown('mon1', $month1,'', 
                            "class='form-control monFrom edtcomp' id='mon1'");
                            ?>
                        	</div>
                        <div class='col-sm-2 pad'>
                            <select name='TPy1' id='year1' class='form-control yearFrom edtcomp'>
                            <option>-</option>
                            <?php
                            $year = date('Y')+1; 
                            for ($y1 = 0; $y1 <= 100; $y1++) {
                                
                                $year--; 
                                echo '<option value="'.$year.'" >'.$year.'</option>';
                            }
                           ?>
                            </select>
                            
                        </div>
                        <div class='col-sm-2 pad'> - </div>
                        <div class='col-sm-3 pad'>
                            <?php
                            $month2 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                            '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
                            '8'=> 'August', '9'=>'September', '10'=>'October', 
                            '11'=>'November', '12'=>'December');
                
                            echo form_dropdown('mon2', $month2,'', 
                            "class='form-control monTo edtcomp' id='mon2'");
                            ?>
                        	</div>
                        <div class='col-sm-2 pad'>
                            <select name='TPy2' id='year2'  class='form-control yearTo edtcomp'>
                            <option>-</option>
                            <?php
                            $year = date('Y')+1; 
                            for ($y1 = 0; $y1 <= 100; $y1++) {
                                $year--; 
                                echo '<option value="'.$year.'">'.$year.'</option>';
                            }
							?>
                            </select>
                            
                            
                        </div>
                    </div>
                    
                </div>
                <div class='form-group'>
                    <label for='desc' class='control-label col-sm-3'>Description:</label>
                    <div class='col-sm-9'>
                    <?php
						$desc = Array ('name' => 'PEdes'.$ctr.'', 'id'=>'PEdes'.$ctr.'', 'cols' => '24','rows' => '5',
						'class'=>'form-control edtcomp');
						
						echo Form_textarea($desc);
					?>
                    </div>
                </div>
                            
            </div>
            
            
            
           
           	
            <div class="form-group" >
            	<div class="pull-right pads edtcomp ">
                	<input type="button" id="addcomp" class="greenButton edtcompbtn" value="Add Position" />
                    <?php echo form_submit('insertcomp','Save Position', 'id="insertcomp" 
					class="greenButton edtcompbtn invi" ');?> 
                    <input type="button" id="cancelcomp" class="greenButton edtcompbtn invi" value="Cancel" />
                    
                </div>
                
            </div>
            <div class="form_title">Professional Reference</div>
            <?php 
			foreach($pref->result() as $pref)
			{	
				
				echo"
				<div id='pr".$ctr."' class='pref'>
					<div class='form-group'>
						<label for='fname' class='control-label col-sm-3'>Name:</label>
						<div class='col-sm-9'>
							<input type='text' id='prname".$ctr."' name='prname".$ctr."' class='form-control edtpref' 
							value='".set_value('prname'.$ctr)."' readOnly='true' />
							<input type='hidden' id='pr' name='pr' value='".$ctr."' />
						</div>
					</div>
					<div class='form-group'>
						<label for='cnum' class='control-label col-sm-3  '>Contact Number:</label>
						<div class='col-sm-9'>  
							<input type='text' id='cnum".$ctr."'  class='form-control edtpref' name='cnum".$ctr."'
							 value='".set_value('cnum'.$ctr)."' readOnly='true' />
						</div>
					</div>
					<div class='form-group'>
						<label for='cemail' class='control-label col-sm-3  '>Email Anddress:</label>
						<div class='col-sm-9'>  
							<input type='text' id='cemail".$ctr."'  class='form-control edtpref' name='cemail".$ctr."' 
							value='".set_value('cemail'.$ctr)."' readOnly='true' />
						</div>
					
					</div>
					
				</div>
				";
			}
            ?>
            <div class="form-group" >
            	<div class="pull-right pads edtpref ">
                	<input type="button" id="addpref" class="greenButton edtprefbtn" value="Add Position" />
                    <?php echo form_submit('insertpref','Save Reference', 'id="insertpref" 
					class="greenButton edtprefbtn invi" ');?> 
                    <input type="button" id="cancelpref" class="greenButton edtprefbtn invi" value="Cancel" />
                    
                    
                    
                </div>
                
            </div>
            <?php echo form_close(); ?>
            
		</div><!-- end -->
            
             
            
		</div>
            
        </header>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation2.js"></script>
