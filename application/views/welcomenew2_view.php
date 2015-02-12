

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
    <header class="jumbotron hero-spacer col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
        <div class="reg_form col-xs-10 col-sm-10 col-md-10 col-lg-12 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  ">
            <div class="update_pinfo1 col-lg-12">
            	
				<?php 
				echo form_open('user/update_info','id = "infos"');
				echo "<input type='hidden' id='case_update' name='case_update' value=''/>
				<input type='hidden' id='ctr_update' name='ctr_update' value=''>
				<input type='hidden' id='page_update' name='page_update' value=''>  ";
                foreach($pinfo as $pinfo)
                { 
                echo "<div class='col-centered col-lg-3'>
                        <img src='". base_url()."uploads/".$pinfo->imgfname."' class='img-responsive' />
                    </div >"; 
                echo "<div class='col-centered col-lg-9'> 
						<div class='form_title'>
						<span class='glyphicon glyphicon-edit editpinfo click' id='pinfo'></span> ".
						$pinfo->fname." ".$pinfo->mname." ".$pinfo->lname ."</div >
						<div ><span class='glyphicon glyphicon-edit editpinfo click' id='pinfo'></span> "
						.$pinfo->address." ".$pinfo->city."</div >
						<div ><span class='glyphicon glyphicon-edit editpinfo click' id='pinfo'></span> 
						 ".$pinfo->sex."</div >
						<div ><span class='glyphicon glyphicon-edit editpinfo click' id='pinfo'></span> ".$pinfo->age."</div >
					</div >";
                ?> 
                 
    		</div>
            <div class="col-lg-12 update_pinfo1 "><hr class="lne" /></div>
            <div class="update_pinfo2 col-lg-12 invi" id="update_pinfo2"> 
           		
                <div class=" update_pinfo2 form-horizontal focus" tabindex='1'>    
                    
                    <div class="form-group fname">
                        <label for="fname" class="control-label col-sm-3  ">First Name:</label>
                        <div class="col-sm-9">  
                            <input type="text" id="fname"  class="form-control edtpinfo" name="fname" readOnly="true" 
                            value="<?php echo $pinfo->fname; ?>" />		
                        </div>
                        <div name='fname_err' id='fname_err' class='col-sm-12 invi error text-center'></div>
                    </div>
                    <div class="form-group">
                        <label for="mname" class="control-label col-sm-3 ">Middle Name:</label>
                        <div class="col-sm-9"> 
                            <input type="text" id="mname" name="mname" class="form-control edtpinfo" readOnly="true" 
                            value="<?php echo $pinfo->mname; ?>" />
                            
                        </div>
                    </div>
                    <div class="form-group lname">
                        <label for="lname" class="control-label col-sm-3">Last Name:</label>
                        <div class="col-sm-9"> 
                            <input type="text" id="lname" name="lname" class="form-control edtpinfo" readOnly="true" 
                            value="<?php echo $pinfo->lname; ?>" />
                        </div>
                        <div name='lname_err' id='lname_err' class='col-sm-12 invi error text-center'></div>
                    </div>
                    
                    <div class="form-group add">
                        <label for="add" class="control-label col-sm-3">Address:</label>
                        <div class="col-sm-9"> 
                            <input type="text" id="add" name="add"  class="form-control edtpinfo" readOnly="true" 
                            value="<?php echo $pinfo->address; ?>" />
                        </div>
                        <div name='add_err' id='add_err' class='col-sm-12 invi error text-center'></div>
                    </div>
                    <div class="form-group prov_mun">
                        <label for="prov_mun" class="control-label col-sm-3">Province/Muncipality:</label>
                        <div class="col-sm-9 "> 
                            <input type="text" id="prov_mun" name="prov_mun"  class="form-control edtpinfo" readOnly="true" 
                            value="<?php echo $pinfo->city; ?>" />
                        </div>
                        <div name='prov_mun_err' id='prov_mun_err' class='col-sm-12 invi error text-center'></div>
                    </div>
                    <div class="form-group sex">
                        <label for="sex" class="control-label col-sm-3">Sex:</label>
                        <div class="col-sm-9 "> 
                            <?php $gender = array('-'=>'-','Male'=>'Male', 'Female'=>'Female');
                            echo form_dropdown('sex', $gender,$pinfo->sex, 'id="sex" class="form-control 
                            edtpinfo" disabled="disabled"');
                            
                            ?>
                        </div>
                        <div name='sex_err' id='sex_err' class='col-sm-12 invi error text-center'></div>
                    </div>
                    <div class="form-group age">
                        <label for="age" class="control-label col-sm-3">Age:</label>
                        <div class="col-sm-9 "> 
                            <?php 
                            $ageb = array('-'=>'-','Newly Graduate'=>'Newly Graduate','22-25'=> '22-25', '26-30'=>'26-30');
                            echo form_dropdown('age', $ageb,$pinfo->age, 'id="age" class="form-control edtpinfo" 
                            disabled="disabled" '.set_select('age', $ageb, TRUE, 0).'');
                            
                            ?>
                        </div>
                        <div name='age_err' id='age_err' class='col-sm-12 invi error text-center'></div>
                    </div>
                    <div class="form-group" >
                        <div class="pull-right pads edtpinfo ">
                            <?php echo form_submit('Updatepinfo','Save', 'id="Updatepinfo" 
                            class="greenButton edtpinfobtn invi"  ');?> 
                           <input type="button" id="cancelpinfo_mpage" name="edtpinfo" 
                           class="greenButton edtpinfobtn invi"value="Cancel" />
                        </div>
                    </div>
            	</div>            
            </div>
            
            <?php }?>
            <?php 
			$sel_lang_list="";
			$sel_os_list="";
			$sel_fwork_list="";
			foreach($tskills as $tskills){ 
				$sel_lang_list=$tskills->lang_code;
				$sel_os_list=$tskills->os_code;
				$sel_fwork_list=$tskills->fwork_code;
                            
						
                    
			?>
            <div class=" col-lg-12 form-horizontal"> 
            	<div class='col-lg-12 form_title space bg'>Technical Skills</div >
                <div class="col-lg-12 space">
            	<div class="col-lg-12 ">
                	<div class="col-sm-4 bold">
                		<span class='glyphicon glyphicon-edit edittskills click' id='edittskills'></span> Languages:
                        
                    </div>
                    <div class="col-sm-8 tskills1 "> 
                    	<?php echo $tskills->lang_code; ?>
                    </div>
                    <div class="col-sm-8 tskills2 invi"> 
                    <?php 
                    if(count($language)>0){
                        foreach($language as $language){ 
								$string_lang = explode(",", $sel_lang_list);
								if (in_array($language->lang_desc, $string_lang)) {
								   $select="checked";
                                }
                                else{
                                    $select="";
                                }
								echo "<div class='col-sm-3 '>
                                    <label class='checkbox-inline '><input type='checkbox' name='lang[]' 
                                    disabled class='edttskills'".$select." 
                                    value='".$language->lang_desc."'>".$language->lang_desc."</label>
                                </div>";
						
                        }
                        
                        
                    }
                    ?>
                    </div>
                </div>
            	<div class="col-lg-12 ">
                	<div class="col-sm-4 bold">
                		<span class='glyphicon glyphicon-edit edittskills click' id='edittskills'></span> Operating Systems:
                    </div>
                    <div class="col-sm-8 tskills1"> 
                    	<?php echo $tskills->os_code; ?>
                    </div>
                    <div class="col-sm-8 tskills2 invi"> 
                    <?php 
                    if(count($os)>0){
                        foreach($os as $os){ 
                                $string_os = explode(",", $sel_os_list);
								if (in_array($os->os_desc, $string_os)) {
								   $select="checked";
                                }
                                else{
                                    $select="";
                                }
                                echo "<div class='col-sm-3 '>
                                    <label class='checkbox-inline '><input type='checkbox' name='os[]' 
                                    disabled class='edttskills'".$select." 
                                    value='".$os->os_desc."'>".$os->os_desc."</label>
                                </div>";
                        }
					}
                    ?>
                   </div>
                </div>
            	<div class="col-lg-12 ">
                	<div class="col-sm-4 bold ">
                		<span class='glyphicon glyphicon-edit edittskills click' id='edittskills'></span> Frameworks:
                    </div>
                    <div class="col-sm-8 tskills1"> 
                    	<?php echo $tskills->fwork_code; ?>
                    </div>
                    <div class="col-sm-8 tskills2 invi"> 
                   <?php 
                    if(count($fwork)>0){
                        foreach($fwork as $fwork){ 
                                $string_fwork = explode(",", $sel_fwork_list);
                                    if (in_array($fwork->fwork_desc, $string_fwork)) {
                                       $select="checked";
                                    }
                                    else{
                                        $select="";
                                    }
                                echo "<div class='col-sm-3 '>
                                    <label class='checkbox-inline '><input type='checkbox' name='fwork[]' 
                                    disabled class='edttskills' ".$select." 
                                    value='".$fwork->fwork_desc."'>".$fwork->fwork_desc."</label>
                                </div>";
                        }
                        
                        
                    }
                    ?>   
                   </div>
                </div>
                <div class="pull-right pads edttskills space ">
                    <?php echo form_submit('Updatetskills','Save', 'id="Updatetskills" 
                    class="greenButton edttskillsbtn invi" ');?> 
                    <input type="button" id="canceltskills_mpage" name="edttskills" class="greenButton edttskillsbtn invi"
                    value="Cancel" />
                </div>
                </div>
            </div>
            <?php
			}
			?>
            <div class=" col-lg-12"> 
                <div class='col-lg-12 form_title space bg'>
                	<span class="glyphicon glyphicon-plus click" id="addeduc_mpage"></span> Educational Attainment 
                
                </div >
                <?php foreach($educ as $educ){ ?>
                <div class="col-lg-12 educ1 space">
                    <div class="col-lg-12" id="<?php echo $educ->educ_id; ?>">
                        <div class="col-sm-12 bold">
                            <?php echo "<span class='glyphicon glyphicon-edit editeduc_mpage click' 
							id='".$educ->educ_id."'></span>
							".$educ->school; ?>
                        </div>
                        <div class="col-sm-12">
                           <?php echo "<span class='glyphicon glyphicon-edit editeduc_mpage click' 
						   id='".$educ->educ_id."'></span>
							".$educ->yearFrom." - ".$educ->yearTo; ?>
                        </div>
                        <div class="col-sm-12">
                            <?php echo "<span class='glyphicon glyphicon-edit editeduc_mpage click' 
							id='".$educ->educ_id."'></span>
							".$educ->degree.", ".$educ->fstudy; ?>
                        </div>
                        <div class="col-sm-12">
                           <?php if($educ->desc!=""){echo "<span class='glyphicon glyphicon-edit editeduc_mpage click' 
						   id='".$educ->educ_id."'></span>
							".$educ->desc;} ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 educ2 form-horizontal ">
                	<?php
					echo"
					
					<div id='educ".$educ->educ_id."' class='educ focus invi' tabindex='3'>
						<div class='form-group sch".$educ->educ_id."' > 
							
							<label for='fname' class='control-label col-sm-3 ' >
								<span class='glyphicon glyphicon-edit  click' id='educ".$educ->educ_id."'></span> 
								School:
							</label>
							<div class='col-sm-9 '>
								<input type='text' id='school".$educ->educ_id."' name='school".$educ->educ_id."' 
								class='form-control school ' readOnly='true' value='".$educ->school."' />
							</div>
							<div name='sch_err".$educ->educ_id."' id='sch_err".$educ->educ_id."' 
							class='col-sm-12  error text-center'></div>
						</div>
						<div class='form-group date".$educ->educ_id."' id='date".$educ->educ_id."'> 
							<label for='fname'  class='control-label col-sm-3'>
								<span class='glyphicon glyphicon-edit  click' id='educ".$educ->educ_id."'></span> 
								Dates Attended:
							</label>
							<div class='col-sm-9'>
								<div class='col-sm-5 pad'>
									<select name='1DAtty".$educ->educ_id."' id='1DAtty".$educ->educ_id."' 
									class='form-control dateFrom ' 
									disabled>
										<option value='-'>-</option>";
										$yeard1 = date('Y')+1;
									
										for ($i = 0; $i <= 100; $i++) {
											$yeard1--; 
											$sel_yeard1 ="";
											if($yeard1 == $educ->yearFrom ){
												$sel_yeard1 = 'selected="selected"';
											}
											echo '<option value="'.$yeard1.'" '.$sel_yeard1.' >'.$yeard1.'</option>';
										}
								
								echo "</select> 
								
								</div>
								<div class='col-sm-2 pad'>-</div>
								<div class='col-sm-5 pad' >
										<select name='2DAtty".$educ->educ_id."' id='2DAtty".$educ->educ_id."' class='form-control dateTo ' 
										disabled>
										<option value='-'>-</option>";
										$yeard2 = date('Y')+1; 
										if($educ->yearTo == $yeard2){ $sel2 = 'selected="selected"';}
										for ($j = 0; $j <= 100; $j++) {
											$yeard2--; 
											$sel_yeard2 ="";
											if($yeard2 == $educ->yearTo){
												
												$sel_yeard2 = 'selected="selected"';
											}
											echo '<option value="'.$yeard2.'"'.$sel_yeard2.' >'.$yeard2.'</option>';
										}
							
								echo "</select>
								
								</div>
							</div>
							<div name='date_err".$educ->educ_id."' id='date_err".$educ->educ_id."' 
							class='col-sm-12  error text-center'></div>
						</div>
						<div class='form-group major".$educ->educ_id."'>
							<label for='fname' class='control-label col-sm-3'>
								<span class='glyphicon glyphicon-edit  click' id='educ".$educ->educ_id."'></span> 
								Feild of Study:
							</label>
							<div class='col-sm-9'>
								<input type='text' id='mjr".$educ->educ_id."' name='mjr".$educ->educ_id."' 
								class='form-control mjr ' readOnly='true' value='".$educ->fstudy."' />
							</div>
							<div name='major_err".$educ->educ_id."' id='major_err".$educ->educ_id."' 
							class='col-sm-12  error text-center'></div>
						</div>
						<div class='form-group dgree".$educ->educ_id."'>
							<label for='degree' class='control-label col-sm-3'>
								<span class='glyphicon glyphicon-edit  click' id='educ".$educ->educ_id."'></span>
								Degree:
							</label>
							<div class='col-sm-9'>";
							
						$degree = array("-"=>"-","High School"=>"High School","Associate's Degree"=> "Associate's Degree",
						 "Bachelor's Degree"=>"Bachelor's Degree", "Master's Degree"=>"Master's Degree");
						echo "<select name='degree".$educ->educ_id."' id='degree".$educ->educ_id."'
						 class='form-control deg ' disabled>";
						
						foreach($degree as $key => $value) {
							$sel_degree="";
							if($value == $educ->degree){
								$sel_degree='selected="selected"';
							}
							echo'<option  value="'.$value.'" '.$sel_degree.'>'.$value.'</option> ';
							
						}
						
						echo"<select>"	;
						
						echo "</div>
							<div name='dgree_err".$educ->educ_id."' id='dgree_err".$educ->educ_id."' 
							class='col-sm-12  error text-center'></div>
						</div>
						<div class='form-group'>
							<label for='desc' class='control-label col-sm-3'>
								<span class='glyphicon glyphicon-edit  click' id='educ".$educ->educ_id."'></span> 
								Description:
							</label>
							<div class='col-sm-9'>";
							$desc = Array ('id' => 'EAdes'.$educ->educ_id.'','name' => 'EAdes'.$educ->educ_id.'', 'cols' => '24','rows' => '5',
							'class'=>'form-control ',
							'readOnly'=>'true');
									echo Form_textarea($desc,$educ->desc);
							echo '</div>
						</div>
						<div class="form-group invi updbuttons"  >
							<div class="pull-right pads edteduc" >';
							echo form_submit('Updateeduc','Save', 'id="Updateeduc" 
							class="greenButton edteducbtn " ');
							echo'<input type="button" id="educ'.$educ->educ_id.'" class="cancelupdateeduc_mpage greenButton edteducbtn" value="Cancel" />
							</div>
							
						</div>
						<div class="form-group invi updbuttons" >
							<div class="pull-right pads edteduc" >';
							echo form_submit('Removeeduc','Remove this school', 'id="Remeduc'.$educ->educ_id.'" 
							class="remeduc rembtn" ').'
							
							
							
							</div>
						</div>';
					
										
						
				echo "</div>";
				
				
				?>
                
                
                </div>
                
                <?php }?>
            	<div id='educ' class='col-lg-12 educ_2 invi form-horizontal'>
                    <div class='form-group sch' > 
                        <label for='fname' class='control-label col-sm-3'>School:</label>
                        <div class='col-sm-9 '>
                            <input type='text' id='new_school' name='school' class='form-control school edteduc'
                              />
                        </div>
                        <div name='sch2' id='sch2' class='col-sm-12  error text-center'></div>
                    </div>
                    <div class='form-group date'> 
                        <label for='fname'  class='control-label col-sm-3'>Dates Attended:</label>
                        <div class='col-sm-9'>
                            <div class='col-sm-5 pad'>
                                <select name='DAtty1' id='new_DAtty1' class='form-control dateFrom edteduc' 
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
                                    <select name='DAtty2' id='new_DAtty2' class='form-control dateTo edteduc' 
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
                        <div name='date2' id='date2' class='col-sm-12  error text-center'></div>
                    </div>
                    <div class='form-group major'>
                        <label for='fname' class='control-label col-sm-3'>Feild of Study:</label>
                        <div class='col-sm-9'>
                            <input type='text' id='new_mjr' name='mjr' class='form-control mjr edteduc' />
                        </div>
                        <div name='major2' id='major2' class='col-sm-12  error text-center'></div>
                    </div>
                    <div class='form-group dgree'>
                        <label for='degree' class='control-label col-sm-3'>Degree:</label>
                        <div class='col-sm-9'>
                     <?php   
                    $degree = array("-"=>"-","High School"=>"High School","Associate's Degree"=> "Associate's Degree", "Bachelor's Degree"=>"Bachelor's Degree", "Master's Degree"=>"Master's Degree");
                    ?>
                    <select name='degree' id='new_degree' class='form-control edteduc' >
                    <?php
                    foreach($degree as $key => $value) {
                            echo'<option  value="'.$value.'" >'.$value.'</option> ';
                        
                        
                    }
                    ?>
                    </select>
                    
                        </div>
                        <div name='dgree2' id='dgree2' class='col-sm-12  error text-center'></div>
                    </div>
                    <div class='form-group'>
                        <label for='desc' class='control-label col-sm-3'>Description:</label>
                        <div class='col-sm-9'>
                        <?php
                        $desc = Array ('id' => 'EAdes','name' => 'EAdes', 'cols' => '24','rows' => '5','class'=>'form-control edteduc');
                                echo Form_textarea($desc);
                        ?>
                        
                        </div>
                    </div>
				</div>
            
            <div class=" col-lg-12" >
            	<div class="pull-right pads edteduc space">
                	
                    <?php echo form_submit('inserteduc','Save ', 'id="inserteduc2" 
					class="greenButton edteducbtn invi" ');?> 
                    <?php echo form_submit('Updatetskills','Save', 'id="Updatetskills" 
                    class="greenButton edteducbtn2 invi" ');?> 
                    <input type="button" id="canceleduc_mpage" class="greenButton edteducbtn2 invi"
                    value="Cancel" />
            	</div>
            </div>
            
            
             
           
            
            
            
            
            
          
           
             
             
             
             
             
             
             
             
			 
             <?php
			
             function month($mon){
				 switch ($mon) {
					case "1":
						echo 'January';
						break;
					case "2":
						echo 'Febuary';
						break;
					case "3":
						echo 'March';
						break;
					case "4":
						echo 'April';
						break;
					case "5":
						echo 'May';
						break;
					case "6":
						echo 'June';
						break;
					case "7":
						echo 'July';
						break;
					case "7":
						echo 'Aigust';
						break;
					case "9":
						echo 'September';
						break;
					case "10":
						echo 'October';
						break;
					case "11":
						echo 'November';
						break;
					case "12":
						echo 'December';
						break;
					 }
			}
			
			?>
             
    		</div>
            <div class=" col-lg-12"> 
                <div class='col-lg-12 form_title space bg'>
                	<span class="glyphicon glyphicon-plus click" id="addcomp_mpage"></span>
                	Professional Experience
                	
                </div >
                <div class="col-lg-12 comp1  ">
                <?php foreach($comp as $comp){ ?>
                
                    <div class="space col-lg-12" id='<?php echo $comp->comp_id; ?>'>
                        <div class="col-sm-12 bold">
                            <?php echo "<span class='glyphicon glyphicon-edit editcomp_mpage click' id='".$comp->comp_id."'>
                            </span> ".$comp->compname; ?>
                        </div>
                        <div class="col-sm-12">
                            <?php echo "<span class='glyphicon glyphicon-edit editcomp_mpage click' id='".$comp->comp_id."'>
                            </span> ".$comp->loc; ?>
                        </div>
                        <div class="col-sm-12">
                            <?php echo "<span class='glyphicon glyphicon-edit editcomp_mpage click' id='".$comp->comp_id."'>
                            </span> "; month($comp->month1); echo " ".$comp->year1." - "; month($comp->month2); echo " "
                            .$comp->year2; ?>
                        </div>
                        <div class="col-lg-12 comp1">
                            <?php echo "<span class='glyphicon glyphicon-edit editcomp_mpage click' id='".$comp->comp_id."'>
                            </span> ".$comp->title; ?>
                        </div>
                        <div class="col-lg-12 comp1 ">
                            <?php if ($comp->prdesc!="")echo "<span class='glyphicon glyphicon-edit editcomp_mpage click' id='".$comp->comp_id."'>
                            </span> ".$comp->prdesc; ?>
                        </div>
                    </div> 
                </div>
                
                <div class="col-lg-12 comp2 form-horizontal ">
                <?php echo"
                    <div id='com".$comp->comp_id."' class='com focus invi' tabindex='4'>
                        <div class='form-group comp".$comp->comp_id."'>
                            <label for='fname' class='control-label col-sm-3'>
                                <span class='glyphicon glyphicon-edit editcomp click' id='com".$comp->comp_id."'></span>
                                Company Name: 
                            </label>
                            <div class='col-sm-9'>
                                <input type='text' id='compname".$comp->comp_id."' name='compname".$comp->comp_id."' 
                                class='form-control compname editcomp '
                                readOnly='true' value='".$comp->compname."' />
                            </div>
                            <div name='compname_err".$comp->comp_id."' id='compname_err".$comp->comp_id."' 
                            class='col-sm-12  error text-center'></div>
                        </div>
                        <div class='form-group tit".$comp->comp_id."'>
                            <label for='fname' class='control-label col-sm-3'>
                                <span class='glyphicon glyphicon-edit editcomp click' id='com".$comp->comp_id."'></span>
                                Title:
                            </label>
                            <div class='col-sm-9'>
                                <input type='text' id='title".$comp->comp_id."' name='title".$comp->comp_id."' 
                                class='form-control title editcomp'
                                readOnly='true' value='".$comp->title."' />
                            </div>
                            <div name='title_err".$comp->comp_id."' id='title_err".$comp->comp_id."'
                            class='col-sm-12  error text-center'></div>
                        </div>
                        <div class='form-group location".$comp->comp_id."'>
                            <label for='fname' class='control-label col-sm-3'>
                                <span class='glyphicon glyphicon-edit editcomp click' id='com".$comp->comp_id."'></span>
                                Location:
                            </label>
                            <div class='col-sm-9'>
                                <input type='text' id='loc".$comp->comp_id."' name='loc".$comp->comp_id."' 
                                class='form-control loca editcomp' readOnly='true' value='".$comp->loc."' />
                            </div>
                            <div name='loc_err".$comp->comp_id."' id='loc_err".$comp->comp_id."' 
                            class='col-sm-12  error text-center'></div>
                        </div>
                        <div class='form-group comTP".$comp->comp_id."'>
                            <label for='fname' class='control-label col-sm-3'>
                                <span class='glyphicon glyphicon-edit editcomp click' id='com".$comp->comp_id."'></span>
                                Time Period:
                            </label>
                            <div class='col-sm-9 '>
                                <div class='col-sm-3 pad'>";
                                    $month1 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                                    '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
                                    '8'=> 'August', '9'=>'September', '10'=>'October', 
                                    '11'=>'November', '12'=>'December');
                        
                                    echo form_dropdown('1mon'.$comp->comp_id.'', $month1,$comp->month1, 
                                    "disabled class='form-control monFrom editcomp' id='1mon".$comp->comp_id."'");
                                echo "</div>
                                <div class='col-sm-2 pad'>
                                    <select name='1TPy".$comp->comp_id."' id='1year".$comp->comp_id."' 
                                    class='form-control yearFrom editcomp' 
                                    disabled >
                                    <option>-</option>";
                                    $year1 = date('Y')+1; 
                                    for ($y1 = 0; $y1 <= 100; $y1++) {
                                        
                                        $year1--; 
                                        $yrsel1="";
                                        if($year1 == $comp->year1){
                                            $yrsel1='selected="selected"';
                                        }
                                        echo '<option value="'.$year1.'" '.$yrsel1.'>'.$year1.'</option>';
                                    }
                                    echo"
                                    </select>
                                    
                                </div>
                                <div class='col-sm-2 pad'> - </div>
                                <div class='col-sm-3 pad'>";
                                    $month2 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                                    '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
                                    '8'=> 'August', '9'=>'September', '10'=>'October', 
                                    '11'=>'November', '12'=>'December');
                        
                                    echo form_dropdown('2mon'.$comp->comp_id.'', $month2,$comp->month2, 
                                    "disabled class='form-control monTo editcomp' id='2mon".$comp->comp_id."'");
                                echo"</div>
                                <div class='col-sm-2 pad'>
                                    <select name='2TPy".$comp->comp_id."' id='2year".$comp->comp_id."'  
                                    class='form-control yearTo editcomp' 
                                    disabled >
                                    <option>-</option>";
                                    $year2 = date('Y')+1; 
                                    for ($y1 = 0; $y1 <= 100; $y1++) {
                                        $year2--; 
                                        $yrsel2="";
                                        if($year2 == $comp->year2){
                                            $yrsel2 =  'selected="selected"';
                                        }
                                        echo '<option value="'.$year2.'" '.$yrsel2.'>'.$year2.'</option>';
                                    }
                                echo"
                                    </select>
                                    
                                    
                                </div>
                            </div>
                            <div name='comTP_err".$comp->comp_id."' id='comTP_err".$comp->comp_id."' 
                            class='col-sm-12  error text-center'></div>
                        </div>
                        <div class='form-group'>
                            <label for='desc' class='control-label col-sm-3'>
                                <span class='glyphicon glyphicon-edit editcomp click' id='com".$comp->comp_id."'></span>
                                Description:
                            </label>
                            <div class='col-sm-9'>";
                                    $desc = Array ('name' => 'PEdes'.$comp->comp_id.'', 'id'=>'PEdes'.$comp->comp_id.'', 
                                    'cols' => '24','rows' => '5');
                                    echo Form_textarea($desc,$comp->prdesc," readOnly='true'class='form-control editcomp'");
                            echo"
                            </div>
                        </div>
                        <div class='form-group invi updbuttons'  >
                            <div class='pull-right pads edtcomp' >";
                            echo form_submit('Updatecomp','Save', 'id="Updatecomp" 
                            class="greenButton edtcompbtn2 " ');
                            echo'<input type="button" id="com'.$comp->comp_id.'" 
                            class="cancelupdatecomp_mpage greenButton edtcompbtn2" value="Cancel" />
                            </div>
                            
                        </div>
                        <div class="form-group invi updbuttons" >
                            <div class="pull-right pads edteduc" >';
                            echo form_submit('Removecomp','Remove this position', 'id="Remcomp'.$comp->comp_id.'" 
                            class="remcomp rembtn"');
                            echo '
                            </div>
                        </div>
                                    
                    </div>
                    
                    ';
                    
                }
                ?>
                </div>
                <div class="col-lg-12 comp2  ">
                	<div id='comp' class='comp invi form-horizontal'>
                        <div class='form-group comp'>
                            <label for='fname' class='control-label col-sm-3'>Company Name:</label>
                            <div class='col-sm-9'>
                                <input type='text' id='compname' name='compname' 
                                class='form-control edtcomp '  />
                            </div>
                            <div name='compname2_err' id='compname2_err' class='col-sm-12  error text-center'></div>
                        </div>
                        <div class='form-group tit'>
                            <label for='fname' class='control-label col-sm-3'>Title:</label>
                            <div class='col-sm-9'>
                                <input type='text' id='title' name='title' class='form-control edtcomp'/>
                            </div>
                            <div name='title2_err' id='title2_err' class='col-sm-12  error text-center'></div>
                        </div>
                        <div class='form-group location'>
                            <label for='fname' class='control-label col-sm-3'>Location:</label>
                            <div class='col-sm-9'>
                                <input type='text' id='loc' name='loc' class='form-control edtcomp'  />
                            </div>
                            <div name='loc2_err' id='loc2_err' class='col-sm-12  error text-center'></div>
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
                                    "class='form-control edtcomp' id='mon1'");
                                    ?>
                                    </div>
                                <div class='col-sm-2 pad'>
                                    <select name='TPy1' id='year1' class='form-control edtcomp'>
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
                                    "class='form-control edtcomp' id='mon2'");
                                    ?>
                                    </div>
                                <div class='col-sm-2 pad'>
                                    <select name='TPy2' id='year2'  class='form-control edtcomp'>
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
                            <div name='comTP2_err' id='comTP2_err' class='col-sm-12  error text-center'></div>
                        </div>
                        <div class='form-group'>
                            <label for='desc' class='control-label col-sm-3'>Description:</label>
                            <div class='col-sm-9'>
                            <?php
                                $desc = Array ('name' => 'PEdes', 'id'=>'PEdes', 'cols' => '24','rows' => '5',
                                'class'=>'form-control edtcomp');
                                
                                echo Form_textarea($desc);
                            ?>
                            </div>
                        </div>
                                    
                    </div>
                    
                    
                    
                   
                    
                    <div class="form-group" >
                        <div class="pull-right pads edtcomp ">
                            <?php echo form_submit('insertcomp','Save ', 'id="insertcomp" 
                            class="greenButton edtcompbtn2 invi" ');?> 
                            <input type="button" id="cancelcomp_mpage" class="greenButton edtcompbtn2  invi" value="Cancel" />
                            
                        </div>
                        
                    </div>
                
                </div>
            </div>
            
            
            
            
            
            <div class=" col-lg-12"> 
                <div class='col-lg-12 form_title space bg'>
                	<span class="glyphicon glyphicon-plus click" id="addpref_mpage"></span> Professional Reference
                </div >
                <div class=" col-lg-12 pref1">
                    <?php foreach($pref as $pref){ ?>
                    <div class="space col-lg-12 " id='<?php echo $pref->prefid; ?>'>
                        <div class="col-lg-12 " >
							<?php echo "<span class='glyphicon glyphicon-edit editpref_mpage click' 
                            id='".$pref->prefid."'></span> ".$pref->pname; ?>
                        </div>
                        <div class="col-lg-12 ">
							<?php echo "<span class='glyphicon glyphicon-edit editpref_mpage click' 
                            id='".$pref->prefid."'></span> ".$pref->cnum; ?>
                        </div>
                        <div class="col-lg-12 ">
							<?php echo "<span class='glyphicon glyphicon-edit editpref_mpage click' 
                            id='".$pref->prefid."'></span> ".$pref->cemail; ?>
                        </div>
                    </div>
				</div>
                <div class=" col-lg-12 form-horizontal">
					<?php echo"
                    <div id='pref".$pref->prefid."' class='pref focus invi' tabindex='5'>
                        <div class='form-group prnamedv".$pref->prefid."'>
                            <label for='fname' class='control-label col-sm-3'>
                                <span class='glyphicon glyphicon-edit editpref click' id='pref".$pref->prefid."'></span> Name:
                            </label>
                            <div class='col-sm-9'>
                                <input type='text' id='prname".$pref->prefid."' name='prname".$pref->prefid."' 
                                class='form-control editpref prname' value='".$pref->pname."' readOnly='true' />
                            </div>
                            <div name='prname_err".$pref->prefid."' id='prname_err".$pref->prefid."' 
                            class='form-group error text-center'>
                            </div>
                        </div>
                        
                        <div class='form-group cnumdv".$pref->prefid."'>
                            <label for='cnum' class='control-label col-sm-3  '>
                                <span class='glyphicon glyphicon-edit editpref click' id='pref".$pref->prefid."'></span>
                                Contact Number:
                            </label>
                            <div class='col-sm-9'>  
                                <input type='text' id='cnum".$pref->prefid."'  class='form-control cnum editpref' 
                                name='cnum".$pref->prefid."' value='".$pref->cnum."' readOnly='true' size='11'/>
                            </div>
                            <div name='cnum_err".$pref->prefid."' id='cnum_err".$pref->prefid."' 
                            class='form-group error text-center'>
                            </div>
                        </div>
                        <div class='form-group cemaildv".$pref->prefid."'>
                            <label for='cemail' class='control-label col-sm-3  '>
                                <span class='glyphicon glyphicon-edit editpref click' id='pref".$pref->prefid."'></span>
                                Email Anddress:
                            </label>
                            <div class='col-sm-9'>  
                                <input type='text' id='cemail".$pref->prefid."'  class='cemail form-control editpref' 
                                name='cemail".$pref->prefid."' value='".$pref->cemail."' readOnly='true' />
                            </div>
                            <div name='cemail_err".$pref->prefid."' id='cemail_err".$pref->prefid."'
                             class='form-group error text-center'>
                            </div>
                        
                        </div>
                        <div class='form-group invi updbuttons'  >
                            <div class='pull-right pads edtpref' >";
                            echo form_submit('Updatepref','Save', 'id="Updatepref" 
                            class="greenButton edtprefbtn " ');
                            echo'<input type="button" id="pref'.$pref->prefid.'" 
                            class="cancelupdatepref_mpage greenButton edtprefbtn" value="Cancel" />
                            
                            </div>
                            
                        </div>
                        <div class="form-group invi updbuttons" >
                            <div class="pull-right pads edtpref" >';
                            echo form_submit('Removepref','Remove this reference', 'id="Rempref'.$pref->prefid.'" 
                            class="rempref rembtn" ').'
                            
                            
                            
                            </div>
                        </div>
                        
                    </div>';
                    }?>
                    <div id='pref' class='new_pref invi'>
                        <div class='form-group'>
                            <label for='fname' class='control-label col-sm-3'>Name:</label>
                            <div class='col-sm-9'>
                                <input type='text' id='new_prname' name='prname' class='prname form-control edtpref'  />
                            </div>
                            <div name='prname2_err' id='prname2_err' class='col-sm-12 error text-center'></div>
                        </div>
                        <div class='form-group'>
                            <label for='cnum' class='control-label col-sm-3  '>Contact Number:</label>
                            <div class='col-sm-9'>  
                                <input type='text' id='new_cnum'  class='cnum form-control edtpref' name='cnum' />
                            </div>
                            <div name='cnum2_err' id='cnum2_err' class='col-sm-12 error text-center'></div>
                        </div>
                        <div class='form-group'>
                            <label for='cemail' class='control-label col-sm-3  '>Email Anddress:</label>
                            <div class='col-sm-9'>  
                                <input type='text' id='new_cemail'  class='cenail form-control edtpref' name='cemail'/>
                            </div>
                            <div name='cemail2_err' id='cemail2_err' class='col-sm-12 error text-center'></div>
                            
                        
                        </div>
                    </div>
                
                
                
                    <div class="form-group" >
                        <div class="pull-right pads edtpref ">
                            <?php echo form_submit('insertpref','Save', 'id="insertpref" 
                            class="greenButton edtprefbtn2 invi" ');?> 
                            <input type="button" id="cancelpref_mpage" class="greenButton edtprefbtn2 invi" value="Cancel" />
                            
                            
                            
                        </div>
                        
                    </div>
                </div>
                        
					
            </div>
            <?php echo form_close();?>
        </div>
    </header>       
               

<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation.js"></script>

        