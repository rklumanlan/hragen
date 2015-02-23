

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
                foreach($pinfo as $pinfo)
                { 
                echo "<div class='col-centered col-lg-3'>
                        <img src='". base_url()."uploads/".$pinfo->imgfname."' class='img-responsive' />
                    </div >"; 
                echo "<div class='col-centered col-lg-9'> 
						<div class='form_title'>".
						$pinfo->fname." ".$pinfo->mname." ".$pinfo->lname ."</div >
						<div >".$pinfo->address." ".$pinfo->city."</div >
						<div >".$pinfo->sex."</div >
						<div >".$pinfo->age."</div >
					</div >";
				}?> 
                 
    		</div>
            <div class="col-lg-12 update_pinfo1 "><hr class="lne" /></div>
            
            
            <?php 
			foreach($tskills as $tskills){     
			?>
            <div class=" col-lg-12 form-horizontal"> 
            	<div class='col-lg-12 form_title space bg'>Technical Skills</div >
                <div class="col-lg-12 space">
                    <div class="col-lg-12 ">
                        <div class="col-sm-4 bold">
                           Languages:
                        </div>
                        <div class="col-sm-8 tskills1 "> 
                            <?php echo $tskills->lang_code; ?>
                        </div>
                        
                    </div>
                    <div class="col-lg-12 ">
                        <div class="col-sm-4 bold">
                           Operating Systems:
                        </div>
                        <div class="col-sm-8 tskills1"> 
                            <?php echo $tskills->os_code; ?>
                        </div>
                        
                    </div>
                    <div class="col-lg-12 ">
                        <div class="col-sm-4 bold ">
                            Frameworks:
                        </div>
                        <div class="col-sm-8 tskills1"> 
                            <?php echo $tskills->fwork_code; ?>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <?php
			}
			?>
            <div class=" col-lg-12"> 
                <div class='col-lg-12 form_title space bg'>
                	Educational Attainment 
                
                </div >
                <?php foreach($educ as $educ){ ?>
                <div class="col-lg-12 educ1 space">
                    <div class="col-lg-12 focus" id="educ<?php echo $educ->educ_id; ?>" tabindex='3'>
                        <div class="col-sm-12 bold">
                            <?php echo $educ->school; ?>
                        </div>
                        <div class="col-sm-12">
                           <?php echo $educ->yearFrom." - ".$educ->yearTo; ?>
                        </div>
                        <div class="col-sm-12">
                            <?php echo $educ->fstudy; ?>
                        </div>
                        <div class="col-sm-12">
                           <?php echo $educ->desc; ?>
                        </div>
                    </div>
                </div>
                
                <?php }?>
            	
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
                	Professional Experience
                	
                </div >
                <div class="col-lg-12 comp1  ">
                <?php foreach($comp as $comp){ ?>
                
                    <div class="space col-lg-12 focus" id='comp<?php echo $comp->comp_id; ?>' tabindex='4'>
                        <div class="col-sm-12 bold">
                            <?php $comp->compname; ?>
                        </div>
                        <div class="col-sm-12">
                            <?php $comp->loc; ?>
                        </div>
                        <div class="col-sm-12">
                            <?php  month($comp->month1); echo " ".$comp->year1." - "; month($comp->month2); echo " "
                            .$comp->year2; ?>
                        </div>
                        <div class="col-lg-12 comp1">
                            <?php echo $comp->title; ?>
                        </div>
                        <div class="col-lg-12 comp1 ">
                            <?php echo $comp->prdesc; ?>
                        </div>
                    </div> 
                </div>
                <?php  } ?>
                <div class="col-lg-12 comp2 form-horizontal  ">
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
                
                </div>
            </div>
            
            
            
            
            
            <div class=" col-lg-12"> 
                <div class='col-lg-12 form_title space bg'>
                	Professional Reference
                </div >
                <div class=" col-lg-12 pref1" >
                    <?php foreach($pref as $pref){ ?>
                    <div class="space col-lg-12 focus " id='pref<?php echo $pref->prefid; ?>' tabindex='5'> 
                        <div class="col-lg-12 " >
							<?php echo $pref->pname; ?>
                        </div>
                        <div class="col-lg-12 ">
							<?php echo $pref->cnum; ?>
                        </div>
                        <div class="col-lg-12 ">
							<?php echo $pref->cemail; ?>
                        </div>
                    </div>
                    <?php } ?>
				</div>
                        
					
            </div>
        </div>
    </header>       
