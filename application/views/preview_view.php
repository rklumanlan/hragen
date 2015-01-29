

            <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" 
                data-target="#bs-example-navbar-collapse-1">
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
        <div class="reg_form  col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 ">
        <div class="form_title">Personal Information</div>
        <?php echo form_open('user/update_info','id = "infos"');?>
        <input type="hidden" id="case_update" name="case_update" value=''/>
        <input type='hidden' id='ctr_update' name='ctr_update' value=''>
		<div class="form-horizontal" tabindex='1'>    
        	
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
        			echo"<input type='hidden' name='sex' id='sex2' value='".set_value('sex')."'/>";
                    echo form_dropdown('sex', $gender,set_value('sex'), 'id="sex" class="form-control 
					edtpinfo" disabled="disabled"');
					
                    ?>
                </div>
            </div>
            <div class="form-group age">
                <label for="age" class="control-label col-sm-3">Age:</label>
                <div class="col-sm-9 "> 
					<?php 
					echo"<input type='hidden' name='age' id='age2' value='".set_value('age')."'/>";
					$ageb = array('-'=>'-','Newly Graduate'=>'Newly Graduate','22-25'=> '22-25', '26-30'=>'26-30');
        
                    echo form_dropdown('age', $ageb,set_value('age'), 'id="age" class="form-control edtpinfo" disabled="disabled" '.set_select('age', $ageb, TRUE, 0).'');
					
                    ?>
                </div>
            </div>
            <div class="form-group" >
            	<div class="pull-right pads edtpinfo ">
                	<input type="button" id="edtpinfo"  class="greenButton edtpinfobtn " 
                    onclick="edt(this.id)" value="Edit" />
                	<?php echo form_submit('Updatepinfo','Save', 'id="Updatepinfo" 
					class="greenButton edtpinfobtn invi"  ');?> 
                	<input type="button" id="cancelpinfo" name="edtpinfo" class="greenButton edtpinfobtn invi" 
                    onclick="cancel(this.id,this.name)" value="Cancel" />
                    
                    
                    
                </div>
                
            </div>
		</div>
		<?php if(!$_POST == ''){ ?>
        <div class="form_title">Technical Skills</div>
        <div class="tskills focus" id="tskills" tabindex='2'>
            <div class="form-group">
            
                <label for="fname" class="control-label col-sm-3">Languages:</label>
                <div class="col-sm-9 "> 
                <?php 
                if(count($tskills)>0){
                    foreach($tskills as $tskills){ 
                        $sel_lang_list=$tskills->lang_code;
                        $sel_os_list=$tskills->os_code;
                        $sel_fwork_list=$tskills->fwork_code;
                    }
                }
                else{
                    $sel_lang_list="";
                    $sel_os_list="";
                    $sel_fwork_list="";
                }
                if(count($language)>0){
                    foreach($language as $language){ 
                            if (strpos($sel_lang_list,$language->lang_desc) !== false) {
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
            <div class="form-group">           
                <label for="fname" class="control-label col-sm-3">Operating System:</label>
                <div class="col-sm-9 "> 
                <?php 
                if(count($os)>0){
                    foreach($os as $os){ 
                            if (strpos($sel_os_list,$os->os_desc) !== false) {
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
        </div>
        <div class="form-group"> 
           <label for="fname" class="control-label col-sm-3">Framework:</label>
           <div class="col-sm-9 "> 
           <?php 
            if(count($fwork)>0){
                foreach($fwork as $fwork){ 
                        if (strpos($sel_fwork_list,$fwork->fwork_desc) !== false) {
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
           <?php } ?>
        </div>
          <div class="form-group" >
            <div class="pull-right pads edttskills ">
                <input type="button" id="edttskills"  class="greenButton edttskillsbtn " onclick="edt(this.id)" 
                value="Edit" />
                <?php echo form_submit('Updatetskills','Save', 'id="Updatetskills" 
                class="greenButton edttskillsbtn invi" ');?> 
                
                <input type="button" id="canceltskills" name="edttskills" class="greenButton edttskillsbtn invi" 
                onclick="cancel(this.id,this.name)" value="Cancel" />
            </div>
            
        </div>
        <div class="form_title">Education and Awards</div>
        <?php
        foreach($educ as $educ)
        {	
            
            echo"
            
            <div id='educ".$educ->educ_id."' class='educ focus' tabindex='3'>
                <div class='form-group sch".$educ->educ_id."' > 
                    
                    <label for='fname' class='control-label col-sm-3 ' >
                        <span class='glyphicon glyphicon-edit editeduc click' id='educ".$educ->educ_id."'></span> 
                        School:
                    </label>
                    <div class='col-sm-9 '>
                        <input type='text' id='school".$educ->educ_id."' name='school".$educ->educ_id."' 
                        class='form-control school editeduc' readOnly='true' value='".$educ->school."' />
                    </div>
                    <div name='sch_err".$educ->educ_id."' id='sch_err".$educ->educ_id."' 
                    class='col-sm-12 invi error text-center'></div>
                </div>
                <div class='form-group date".$educ->educ_id."' id='date".$educ->educ_id."'> 
                    <label for='fname'  class='control-label col-sm-3'>
                        <span class='glyphicon glyphicon-edit editeduc click' id='educ".$educ->educ_id."'></span> 
                        Dates Attended:
                    </label>
                    <div class='col-sm-9'>
                        <div class='col-sm-5 pad'>
                            <input type='hidden' name='DAtty1".$educ->educ_id."' id='DAtty1".$educ->educ_id."' 
                            value='".$educ->yearFrom."'/>
                            <select name='DAtty1".$educ->educ_id."' id='DAtty1".$educ->educ_id."' 
                            class='form-control dateFrom editeduc' 
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
                                <input type='hidden' name='DAtty2".$educ->educ_id."' id='DAtty2".$educ->educ_id."' 
                                value='".$educ->yearTo."'/>
                                <select name='DAtty2".$educ->educ_id."' id='DAtty2".$educ->educ_id."' class='form-control dateTo editeduc' 
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
                    class='col-sm-12 invi error text-center'></div>
                </div>
                <div class='form-group major".$educ->educ_id."'>
                    <label for='fname' class='control-label col-sm-3'>
                        <span class='glyphicon glyphicon-edit editeduc click' id='educ".$educ->educ_id."'></span> 
                        Feild of Study:
                    </label>
                    <div class='col-sm-9'>
                        <input type='text' id='mjr".$educ->educ_id."' name='mjr".$educ->educ_id."' 
                        class='form-control mjr editeduc' readOnly='true' value='".$educ->fstudy."' />
                    </div>
                    <div name='major_err".$educ->educ_id."' id='major_err".$educ->educ_id."' 
                    class='col-sm-12 invi error text-center'></div>
                </div>
                <div class='form-group dgree".$educ->educ_id."'>
                    <label for='degree' class='control-label col-sm-3'>
                        <span class='glyphicon glyphicon-edit editeduc click' id='educ".$educ->educ_id."'></span>
                        Degree:
                    </label>
                    <div class='col-sm-9'>";
                    
                $degree = array("-"=>"-","High School"=>"High School","Associate's Degree"=> "Associate's Degree",
                 "Bachelor's Degree"=>"Bachelor's Degree", "Master's Degree"=>"Master's Degree");
    
                echo'<input type="hidden" name="degree'.$educ->educ_id.'" id="degree'.$educ->educ_id.'" 
                value="'.$educ->degree.'"/>';		
                echo "<select name='degree".$educ->educ_id."' id='degree".$educ->educ_id."'
                 class='form-control deg editeduc' disabled>";
                
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
                    class='col-sm-12 invi error text-center'></div>
                </div>
                <div class='form-group'>
                    <label for='desc' class='control-label col-sm-3'>
                        <span class='glyphicon glyphicon-edit editeduc click' id='educ".$educ->educ_id."'></span> 
                        Description:
                    </label>
                    <div class='col-sm-9'>";
                    $desc = Array ('id' => 'EAdes'.$educ->educ_id.'','name' => 'EAdes'.$educ->educ_id.'', 'cols' => '24','rows' => '5',
                    'class'=>'form-control editeduc',
                    'readOnly'=>'true');
                            echo Form_textarea($desc,$educ->desc);
                    echo '</div>
                </div>
                <div class="form-group invi updbuttons"  >
                    <div class="pull-right pads edteduc" >';
                    echo form_submit('Updateeduc','Save', 'id="Updateeduc" 
                    class="greenButton edteducbtn " ');
                    echo'<input type="button" id="educ'.$educ->educ_id.'" class="cancelupdateeduc greenButton edteducbtn" value="Cancel" />
                    </div>
                    
                </div>
                <div class="form-group invi updbuttons" >
                    <div class="pull-right pads edteduc" >';
                    echo form_submit('Removeeduc','Remove this school', 'id="Remeduc'.$educ->educ_id.'" 
                    class="remeduc rembtn" ').'
                    
                    
                    
                    </div>
                </div>';
    echo "</div>";
				
		}
		?>
        <div id='educ' class='educ invi'>
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
                $desc = Array ('id' => 'EAdes','name' => 'EAdes', 'cols' => '24','rows' => '5','class'=>'form-control edteduc');
                        echo Form_textarea($desc);
                ?>
                
                </div>
            </div>
                            
            
        </div>
        <div class="form-group" >
            <div class="pull-right pads edteduc ">
                
                <input type="button" id="addeduc" class="greenButton edteducbtn" value="Add Education" />
                <?php echo form_submit('inserteduc','Save ', 'id="inserteduc" 
                class="greenButton edteducbtn invi" ');?> 
                <input type="button" id="canceleduc" class="greenButton edteducbtn invi" value="Cancel" />
            </div>
            
        </div>
        <div class="form_title">Professional Experience</div>
         <?php $class="";
        foreach($comp as $comp)
        {	
            
            echo"
            <div id='com".$comp->comp_id."' class='com".$comp->comp_id." focus' tabindex='4'>
                <div class='form-group comp".$comp->comp_id."'>
                    <label for='fname' class='control-label col-sm-3'>
                        <span class='glyphicon glyphicon-edit editcomp click' id='com".$comp->comp_id."'></span>
                        Company Name: 
                    </label>
                    <div class='col-sm-9'>
                        <input type='hidden' id='compidCtr".$comp->comp_id."' name='compidCtr".$comp->comp_id."'  value='".$comp->comp_id."'>
                        <input type='text' id='compname".$comp->comp_id."' name='compname".$comp->comp_id."' 
                        class='form-control compname editcomp '
                        readOnly='true' value='".$comp->compname."' />
                    </div>
                    <div name='compname_err".$comp->compname."' id='compname_err".$comp->compname."' 
                    class='col-sm-12 invi error text-center'></div>
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
                    class='col-sm-12 invi error text-center'></div>
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
                    class='col-sm-12 invi error text-center'></div>
                </div>
                <div class='form-group comTP".$comp->comp_id."'>
                    <label for='fname' class='control-label col-sm-3'>
                        <span class='glyphicon glyphicon-edit editcomp click' id='com".$comp->comp_id."'></span>
                        Time Period:
                    </label>
                    <div class='col-sm-9 '>
                        <div class='col-sm-3 pad'>
                            <input type='hidden' name='mon1".$comp->comp_id."' id='mon1".$comp->comp_id."' 
                            value='".$comp->month1."'/>";
                            $month1 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                            '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
                            '8'=> 'August', '9'=>'September', '10'=>'October', 
                            '11'=>'November', '12'=>'December');
                
                            echo form_dropdown('mon1'.$comp->comp_id.'', $month1,$comp->month1, 
                            "disabled class='form-control monFrom editcomp' id='mon1".$comp->comp_id."'");
                        echo "</div>
                        <div class='col-sm-2 pad'>
                            <input type='hidden' name='TPy1".$comp->comp_id."' id='TPy1".$comp->comp_id."' 
                            value='".$comp->year1."'/>
                            <select name='TPy1".$comp->comp_id."' id='year1".$comp->comp_id."' class='form-control yearFrom editcomp' 
                            disabled >
                            <option>-</option>";
                            $year1 = date('Y')+1; 
                            for ($y1 = 0; $y1 <= 100; $y1++) {
                                
                                $year1--; 
                                if($year1 == $comp->year1){
                                    echo '<option value="'.$year1.'" selected="selected">'.$year1.'</option>';
                                }
                            }
                            echo"
                            </select>
                            
                        </div>
                        <div class='col-sm-2 pad'> - </div>
                        <div class='col-sm-3 pad'>
                            <input type='hidden' name='mon2".$comp->comp_id."' id='mon2".$comp->comp_id."' 
                            value='".$comp->month2."'/>";
                            $month2 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                            '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
                            '8'=> 'August', '9'=>'September', '10'=>'October', 
                            '11'=>'November', '12'=>'December');
                
                            echo form_dropdown('mon2'.$comp->comp_id.'', $month2,$comp->month2, 
                            "disabled class='form-control monTo editcomp' id='mon2".$comp->comp_id."'");
                        echo"</div>
                        <div class='col-sm-2 pad'>
                            <input type='hidden' name='TPy2".$comp->comp_id."' id='TPy2".$comp->comp_id."' 
                            value='".$comp->year2."'/>
                            <select name='TPy2".$comp->comp_id."' id='year2".$comp->comp_id."'  
                            class='form-control yearTo editcomp' 
                            disabled >
                            <option>-</option>";
                            $year2 = date('Y')+1; 
                            for ($y1 = 0; $y1 <= 100; $y1++) {
                                $year2--; 
                                if($year2 == $comp->year2){
                                    echo '<option value="'.$year2.'" selected="selected">'.$year2.'</option>';
                                }
                            }
                        echo"
                            </select>
                            
                            
                        </div>
                    </div>
                    <div name='comTP_err".$comp->comp_id."' id='comTP_err".$comp->comp_id."' 
                    class='col-sm-12 invi error text-center'></div>
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
                    class="greenButton edtcompbtn " ');
                    echo'<input type="button" id="com'.$comp->comp_id.'" 
                    class="cancelupdatecomp greenButton edtcompbtn" value="Cancel" />
                    </div>
                    
                </div>
                <div class="form-group invi updbuttons" >
                        <div class="pull-right pads edtcomp" >';
                        echo form_submit('Removecomp','Remove this Position', 'id="Remcomp'.$comp->comp_id.'" 
                        class="remcomp rembtn" ').'
                        
                        
                        
                        </div>
                    </div>
                            
            </div>
            
            ';
            
        }
        ?>
        
        
        <div id='comp' class='pexp invi'>
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
                    $desc = Array ('name' => 'PEdes', 'id'=>'PEdes', 'cols' => '24','rows' => '5',
                    'class'=>'form-control edtcomp');
                    
                    echo Form_textarea($desc);
                ?>
                </div>
            </div>
                        
        </div>
        
        
        
       
        
        <div class="form-group" >
            <div class="pull-right pads edtcomp ">
                <input type="button" id="addcomp" class="greenButton edtcompbtn" value="Add Position" />
                <?php echo form_submit('insertcomp','Save ', 'id="insertcomp" 
                class="greenButton edtcompbtn invi" ');?> 
                <input type="button" id="cancelcomp" class="greenButton edtcompbtn invi" value="Cancel" />
                
            </div>
            
        </div>
        <div class="form_title">Professional Reference</div>
        <?php 
        if(count($pref)>0){
            foreach($pref as $pref)
            {	
                
                echo"
                <div id='pref".$pref->prefid."' class='pref focus' tabindex='5'>
                    <div class='form-group prnamedv".$pref->prefid."'>
                        <label for='fname' class='control-label col-sm-3'>
                            <span class='glyphicon glyphicon-edit editpref click' id='pref".$pref->prefid."'></span> Name:
                        </label>
                        <div class='col-sm-9'>
                            <input type='hidden' name='prefCTR".$pref->prefid."' id='prefCTR".$pref->prefid."' class='prefCTR'
                            value='".$pref->prefid."'/>
                            <input type='text' id='prname".$pref->prefid."' name='prname".$pref->prefid."' 
                            class='form-control editpref prname' value='".$pref->pname."' readOnly='true' />
                        </div>
                        <div name='prname_err".$pref->prefid."' id='prname_err".$pref->prefid."' 
                        class='form-group invi error text-center'>
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
                        class='form-group invi error text-center'>
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
                         class='form-group invi error text-center'>
                        </div>
                    
                    </div>
                    <div class='form-group invi updbuttons'  >
                        <div class='pull-right pads edtpref' >";
                        echo form_submit('Updatepref','Save', 'id="Updatepref" 
                        class="greenButton edtprefbtn " ');
                        echo'<input type="button" id="pref'.$pref->prefid.'" 
                        class="cancelupdatepref greenButton edtprefbtn" value="Cancel" />
                        
                        </div>
                        
                    </div>
                    <div class="form-group invi updbuttons" >
                        <div class="pull-right pads edtpref" >';
                        echo form_submit('Removepref','Remove this reference', 'id="Rempref'.$pref->prefid.'" 
                        class="rempref rembtn" ').'
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                ';
            }
        }
        ?>
        <div id='pref' class='pref invi'>
                <div class='form-group'>
                    <label for='fname' class='control-label col-sm-3'>Name:</label>
                    <div class='col-sm-9'>
                        <input type='text' id='prname' name='prname' class='form-control edtpref'  />
                    </div>
                </div>
                <div class='form-group'>
                    <label for='cnum' class='control-label col-sm-3  '>Contact Number:</label>
                    <div class='col-sm-9'>  
                        <input type='text' id='cnum'  class='form-control edtpref' name='cnum' />
                    </div>
                </div>
                <div class='form-group'>
                    <label for='cemail' class='control-label col-sm-3  '>Email Anddress:</label>
                    <div class='col-sm-9'>  
                        <input type='text' id='cemail'  class='form-control edtpref' name='cemail'/>
                    </div>
                
                </div>
                
            </div>
        
        
        
        <div class="form-group" >
            <div class="pull-right pads edtpref ">
                <input type="button" id="addpref" class="greenButton edtprefbtn" value="Add Reference" />
                <?php echo form_submit('insertpref','Save', 'id="insertpref" 
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
<script type="text/javascript" src="<?php echo base_url();?>assets/validation.js"></script>
<script type='text/javascript'> 
	$(document).ready(function(){
	<?php
		if($this->input->post('Removepref')||$this->input->post('insertpref')||$this->input->post('Updatepref')){
			echo"alert($('.editpref').attr('id'));";
			echo"$('#'+$('.pref').attr('id')).focus();";
		}
		if($this->input->post('Removecomp')||$this->input->post('insertcomp')||$this->input->post('Updatecomp')){
			echo"$('#'+$('.com').attr('id')).focus();";
		}
		if($this->input->post('Removeeduc')||$this->input->post('inserteduc')||$this->input->post('Updateeduc')){
			echo"$('#'+$('.educ').attr('id')).focus();";
		}
		if($this->input->post('Updatetskills')){
			echo"alert('fdgdf');";
			echo"$('#'+$('.tskills').attr('id')).focus();";
		}
	?>
	});
</script>
