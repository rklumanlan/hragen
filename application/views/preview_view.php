
<div class="container">
    <div class="row">
        <div class="col-lg-12 reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 top">
            <div class="panel panel-info" >
              <div class="panel-heading">
                <?php
                echo form_open('user/update_info','id = "infos"');
            		if(count($pinfo)>0){
            			foreach($pinfo as $pinfo)
            			{
            		?>
                <input type="hidden" id="case_update" name="case_update" value=''/>
                <input type='hidden' id='ctr_update' name='ctr_update' value=''>
                <input type='hidden' id='page_update' name='page_update' value=''>
                <div class="panel-title">
                    Personal Information
                </div>
              </div>
              <div style="padding-top:30px" class="panel-body form-horizontal focus" tabindex='1'>
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
                     <input type="text" id="mname" name="mname" class="form-control edtpinfo" readOnly="true" value="<?php echo $pinfo->mname; ?>" />
                   </div>
                </div>
                <div class="form-group lname">
                  <label for="lname" class="control-label col-sm-3">Last Name:</label>
                  <div class="col-sm-9">
                    <input type="text" id="lname" name="lname" class="form-control edtpinfo" readOnly="true" value="<?php echo $pinfo->lname; ?>" />
                  </div>
                  <div name='lname_err' id='lname_err' class='col-sm-12 invi error text-center'></div>
                </div>
                <div class="form-group add">
                  <label for="add" class="control-label col-sm-3">Address:</label>
                  <div class="col-sm-9">
                    <input type="text" id="add" name="add"  class="form-control edtpinfo" readOnly="true" value="<?php echo $pinfo->address; ?>" />
                  </div>
                  <div name='add_err' id='add_err' class='col-sm-12 invi error text-center'></div>
                </div>
                <div class="form-group prov_mun">
    				      <label for="prov_mun" class="control-label col-sm-3">Province/Muncipality:</label>
    				      <div class="col-sm-9 ">
    					      <input type="text" id="prov_mun" name="prov_mun"  class="form-control edtpinfo" readOnly="true" value="<?php echo $pinfo->city; ?>" />
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
                    	 <input type="button" id="edtpinfo"  class="btn btn-primary edtpinfobtn "
                        onclick="edt(this.id)" value="Edit" />
                    	  <?php echo form_submit('Updatepinfo','Save', 'id="Updatepinfo"
    					          class="btn btn-primary edtpinfobtn invi"  ');?>
                    	  <input type="button" id="cancelpinfo" name="edtpinfo" class="btn btn-primary edtpinfobtn invi"
                        onclick="cancel(this.id,this.name)" value="Cancel" />
                    </div>

                </div>



              </div>
              <?php }
        			}
        			?>
            </div>


            <div class="panel panel-info" >
              <div class="panel-heading">
                <div class="panel-title">
                    Technical Skills
                </div>
              </div>
              <div style="padding-top:30px" class="panel-body form-horizontal focus" id="tskills" tabindex='2' >
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
                <div class="form-group">
                    <label for="fname" class="control-label col-sm-3">Operating System:</label>
                    <div class="col-sm-9 ">
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
                <div class="form-group">
                   <label for="fname" class="control-label col-sm-3">Framework:</label>
                   <div class="col-sm-9 ">
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
                <div class="form-group" >
              	   <div class="pull-right pads edttskills ">
                      <input type="button" id="edttskills"  class="btn btn-primary edttskillsbtn " onclick="edt(this.id)"
                      value="Edit" />
                      <?php echo form_submit('Updatetskills','Save', 'id="Updatetskills"
                      class="btn btn-primary edttskillsbtn invi" ');?>
                      <input type="button" id="canceltskills" name="edttskills" class="btn btn-primary edttskillsbtn invi"
                      onclick="cancel(this.id,this.name)" value="Cancel" />
                  </div>

                </div>



              </div>
            </div>
            <div class="panel panel-info" >
              <div class="panel-heading">
                <div class="panel-title">
                  Education and Awards
                </div>
              </div>
              <div style="padding-top:30px" class="panel-body form-horizontal" >
                <?php
          			foreach($educ as $educ)
          			{

          				echo"

          				<div id='educ".$educ->educ_id."' class='educ focus' tabindex='3'>
          					<div class='form-group sch".$educ->educ_id."' >

          						<label for='fname' class='control-label col-sm-3 ' >
          							<span class='glyphicon glyphicon-edit edit click' id='educ".$educ->educ_id."'></span>
          							School:
          						</label>
          						<div class='col-sm-9 '>
          							<input type='text' id='school".$educ->educ_id."' name='school".$educ->educ_id."'
          							class='form-control school editeduc' readOnly='true' value='".$educ->school."' />
          						</div>
          						<div name='sch_err".$educ->educ_id."' id='sch_err".$educ->educ_id."'
          						class='col-sm-12  error text-center'></div>
          					</div>
          					<div class='form-group date".$educ->educ_id."' id='date".$educ->educ_id."'>
          						<label for='fname'  class='control-label col-sm-3'>
          							<span class='glyphicon glyphicon-edit edit click' id='educ".$educ->educ_id."'></span>
          							Dates Attended:
          						</label>
          						<div class='col-sm-9'>
          							<div class='col-sm-5 pad'>
          								<select name='1DAtty".$educ->educ_id."' id='1DAtty".$educ->educ_id."'
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
          									<select name='2DAtty".$educ->educ_id."' id='2DAtty".$educ->educ_id."' class='form-control dateTo editeduc'
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
          							<span class='glyphicon glyphicon-edit edit click' id='educ".$educ->educ_id."'></span>
          							Feild of Study:
          						</label>
          						<div class='col-sm-9'>
          							<input type='text' id='mjr".$educ->educ_id."' name='mjr".$educ->educ_id."'
          							class='form-control mjr editeduc' readOnly='true' value='".$educ->fstudy."' />
          						</div>
          						<div name='major_err".$educ->educ_id."' id='major_err".$educ->educ_id."'
          						class='col-sm-12  error text-center'></div>
          					</div>
          					<div class='form-group dgree".$educ->educ_id."'>
          						<label for='degree' class='control-label col-sm-3'>
          							<span class='glyphicon glyphicon-edit edit click' id='educ".$educ->educ_id."'></span>
          							Degree:
          						</label>
          						<div class='col-sm-9'>";

          					$degree = array("-"=>"-","High School"=>"High School","Associate's Degree"=> "Associate's Degree",
          					 "Bachelor's Degree"=>"Bachelor's Degree", "Master's Degree"=>"Master's Degree");
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
          						class='col-sm-12  error text-center'></div>
          					</div>
          					<div class='form-group'>
          						<label for='desc' class='control-label col-sm-3'>
          							<span class='glyphicon glyphicon-edit edit click' id='educ".$educ->educ_id."'></span>
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
          						class="btn btn-primary edteducbtn " ');
          						echo'<input type="button" id="educ'.$educ->educ_id.'" class="cancelupdate btn btn-primary edteducbtn" value="Cancel" />
          						</div>

          					</div>
          					<div class="form-group invi updbuttons" >
          						<div class="pull-right pads edteduc" >';
          						echo form_submit('Removeeduc','Remove this school', 'id="Remeduc'.$educ->educ_id.'"
          						class="remove rembtn" ').'



          						</div>
          					</div>';
          		  echo "</div>";
          			}
          			?>
                <div id='educ_new' class='educ_2 invi'>
                    <div class='form-group sch' >
                        <label for='fname' class='control-label col-sm-3'>School:</label>
                        <div class='col-sm-9 '>
                            <input type='text' id='new_school' name='school' class='form-control edteduc'
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
                <div class="form-group" >
                	<div class="pull-right pads edteduc ">
                        <input type="button" id="educ" class="addbtn btn btn-primary edteducbtn" value="Add Education" />
                        <?php echo form_submit('inserteduc','Save ', 'id="inserteduc"
    					               class="btn btn-primary edteducbtn invi" ');?>
                        <input type="button" id="ceduc" class="cancelbtn btn btn-primary edteducbtn invi" value="Cancel" />
                  </div>

                </div>


              </div>
            </div>
            <div class="panel panel-info" >
              <div class="panel-heading">
                <div class="panel-title">
                    Professional Experience
                </div>
              </div>
              <div style="padding-top:30px" class="panel-body form-horizontal" >
                <?php
                foreach($comp as $comp)
                {

                  echo"
                  <div id='comp".$comp->comp_id."' class='com focus' tabindex='4'>
                    <div class='form-group comp".$comp->comp_id."'>
                      <label for='fname' class='control-label col-sm-3'>
                        <span class='glyphicon glyphicon-edit edit click' id='comp".$comp->comp_id."'></span>
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
                        <span class='glyphicon glyphicon-edit edit click' id='com".$comp->comp_id."'></span>
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
                        <span class='glyphicon glyphicon-edit edit click' id='comp".$comp->comp_id."'></span>
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
                        <span class='glyphicon glyphicon-edit edit click' id='comp".$comp->comp_id."'></span>
                        Time Period:
                      </label>
                      <div class='col-sm-9 '>
                        <div class='col-sm-3 pad'>";
                          $month1 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                          '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July',
                          '8'=> 'August', '9'=>'September', '10'=>'October',
                          '11'=>'November', '12'=>'December');

                          echo form_dropdown('mon1'.$comp->comp_id.'', $month1,$comp->month1,
                          "disabled class='form-control monFrom editcomp' id='mon1".$comp->comp_id."'");
                          if($comp->month2 == 13){
                            echo"
                            <script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
                            <script>
                            $(document).ready(function () {
                            if($('#mon2".$comp->comp_id."').val()==13){
                              $('#year2".$comp->comp_id."').css('display','none');
                              $('#mTo".$comp->comp_id."').removeClass('col-sm-3');
                              $('#yTo".$comp->comp_id."').removeClass('col-sm-2');
                              $('#mTo".$comp->comp_id."').addClass('col-sm-5');
                            }
                            else{
                              $('#year2".$comp->comp_id."').css('display','block');
                              $('#mTo".$comp->comp_id."').removeClass('col-sm-5');
                              $('#mTo".$comp->comp_id."').addClass('col-sm-3');
                              $('#yTo".$comp->comp_id."').addClass('col-sm-2');
                            }
                            });
                            </script>
                            ";
                          }
                        echo "</div>
                        <div class='col-sm-2 pad'>
                          <select name='TPy1".$comp->comp_id."' id='year1".$comp->comp_id."'
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
                        <div class='col-sm-3 pad' id='mTo".$comp->comp_id."'>";
                          $month2 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                          '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July',
                          '8'=> 'August', '9'=>'September', '10'=>'October',
                          '11'=>'November', '12'=>'December', '13'=>'Present');

                          echo form_dropdown('mon2'.$comp->comp_id.'', $month2,$comp->month2,
                          "disabled class='form-control monTo editcomp' id='mon2".$comp->comp_id."'");
                        echo"</div>
                        <div class='col-sm-2 pad' id='yTo".$comp->comp_id."'>
                          <select name='TPy2".$comp->comp_id."' id='year2".$comp->comp_id."'
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
                        <span class='glyphicon glyphicon-edit edit click' id='comp".$comp->comp_id."'></span>
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
                      class="btn btn-primary edtcompbtn " ');
                      echo'<input type="button" id="comp'.$comp->comp_id.'"
                      class="cancelupdate btn btn-primary edtcompbtn" value="Cancel" />
                      </div>

                    </div>
                    <div class="form-group invi updbuttons" >
                      <div class="pull-right pads edteduc" >';
                      echo form_submit('Removecomp','Remove this position', 'id="Remcomp'.$comp->comp_id.'"
                      class="remove rembtn"');
                      echo '
                      </div>
                    </div>

                  </div>

                  ';

                }
                ?>
                <div id='comp_new' class='pexp invi'>
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

                                echo form_dropdown('monA', $month1,'',
                                "class='form-control edtcomp' id='monA'");
                                ?>
                            	</div>
                            <div class='col-sm-2 pad'>
                                <select name='TPyA' id='yearA' class='form-control edtcomp'>
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
                            <div class='col-sm-3 pad' id='mTo'>
                                <?php
                                $month2 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
                                '3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July',
                                '8'=> 'August', '9'=>'September', '10'=>'October',
                                '11'=>'November', '12'=>'December', '13'=>'Present');

                                echo form_dropdown('monB', $month2,'',
                                "class='monTo form-control edtcomp' id='monB'");
                                ?>
                            	</div>
                            <div class='col-sm-2 pad' id='yTo'>
                                <select name='TPyB' id='yearB'  class='yearTo form-control edtcomp'>
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
                    	<input type="button" id="comp" class="addbtn btn btn-primary edtcompbtn" value="Add Position" />
                      <?php echo form_submit('insertcomp','Save ', 'id="insertcomp"
    					               class="btn btn-primary edtcompbtn invi" ');?>
                      <input type="button" id="ccomp" class="cancelbtn btn btn-primary edtcompbtn invi" value="Cancel" />
                    </div>
                </div>

              </div>
            </div>
            <div class="panel panel-info" >
              <div class="panel-heading">
                <div class="panel-title">
                    Professional Reference
                </div>
              </div>
              <div style="padding-top:30px" class="panel-body form-horizontal" >
                <?php
          			if(count($pref)>0){
          				foreach($pref as $pref)
          				{

          					echo"
          					<div id='pref".$pref->prefid."' class='pref focus' tabindex='5'>
          						<div class='form-group prnamedv".$pref->prefid."'>
          							<label for='fname' class='control-label col-sm-3'>
          								<span class='glyphicon glyphicon-edit edit click' id='pref".$pref->prefid."'></span> Name:
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
          								<span class='glyphicon glyphicon-edit edit click' id='pref".$pref->prefid."'></span>
          								Contact Number:
          							</label>
          							<div class='col-sm-9'>
          								<input type='text' id='cnum".$pref->prefid."'  class='form-control cnum editpref'
          								name='cnum".$pref->prefid."' value='".$pref->cnum."' readOnly='true' maxlength='11'/>
          							</div>
          							<div name='cnum_err".$pref->prefid."' id='cnum_err".$pref->prefid."'
          							class='form-group error text-center'>
          							</div>
          						</div>
          						<div class='form-group cemaildv".$pref->prefid."'>
          							<label for='cemail' class='control-label col-sm-3  '>
          								<span class='glyphicon glyphicon-edit edit click' id='pref".$pref->prefid."'></span>
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
          							class="btn btn-primary edtprefbtn " ');
          							echo'<input type="button" id="pref'.$pref->prefid.'"
          							class="cancelupdate btn btn-primary edtprefbtn" value="Cancel" />

          							</div>

          						</div>
          						<div class="form-group invi updbuttons" >
          							<div class="pull-right pads edtpref" >';
          							echo form_submit('Removepref','Remove this reference', 'id="Rempref'.$pref->prefid.'"
          							class="remove rembtn" ').'



          							</div>
          						</div>

          					</div>
          					';
          				}
          			}
                ?>
                <div id='pref_new' class='new_pref invi'>
                    <div class='form-group'>
                        <label for='fname' class='control-label col-sm-3'>Name:</label>
                        <div class='col-sm-9'>
                            <input type='text' id='new_prname' name='prname' class=' form-control edtpref'  />
                        </div>
                        <div name='prname2_err' id='prname2_err' class='col-sm-12 error text-center'></div>
                    </div>
                    <div class='form-group'>
                        <label for='cnum' class='control-label col-sm-3  '>Contact Number:</label>
                        <div class='col-sm-9'>
                            <input type='text' id='new_cnum'  class='cnum form-control edtpref' name='cnum' maxlength="11" />
                        </div>
                        <div name='cnum2_err' id='cnum2_err' class='col-sm-12 error text-center'></div>
                    </div>
                    <div class='form-group'>
                        <label for='cemail' class='control-label col-sm-3  '>Email Anddress:</label>
                        <div class='col-sm-9'>
                            <input type='text' id='new_cemail'  class='cemail form-control edtpref' name='cemail'/>
                        </div>
                        <div name='cemail2_err' id='cemail2_err' class='col-sm-12 error text-center'></div>
                    </div>
                </div>
                <div class="form-group" >
                	<div class="pull-right pads edtpref ">
                    	<input type="button" id="pref" class="addbtn btn btn-primary edtprefbtn" value="Add Reference" />
                      <?php echo form_submit('insertpref','Save', 'id="insertpref"
    					           class="btn btn-primary edtprefbtn invi" ');?>
                      <input type="button" id="cpref" class="cancelbtn btn btn-primary edtprefbtn invi" value="Cancel" />
                    </div>
                </div>
              </div>
            </div>



          <?php echo form_close(); ?>
        </div>
    </div>
</div>
