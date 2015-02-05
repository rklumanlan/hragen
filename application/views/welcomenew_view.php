

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
                foreach($pinfo as $pinfo)
                { 
                echo "<div class='col-centered col-lg-3'>
                        <img src='". base_url()."uploads/".$pinfo->imgfname."' class='img-responsive' />
                    </div >"; 
                echo "<div class='col-centered col-lg-9'> 
						<div class='form_title'>".$pinfo->fname." ".$pinfo->mname." ".$pinfo->lname ."</div >
						<div >".$pinfo->address." ".$pinfo->city."</div >
						<div >".$pinfo->sex."</div >
						<div >";
				echo "<input type='button' id='editpinfo_mpage' name='editpinfo_mpage' 
						class='greenButton' value='Edit Informations' /></div >"; 
                echo "</div>";
                ?> 
                 <div class="col-lg-12"><hr class="lne" /></div>
    		</div>
            <div class="update_pinfo2 col-lg-12"> 
           		<input type="hidden" id="case_update" name="case_update" value=''/>
                <input type='hidden' id='ctr_update' name='ctr_update' value=''>
                <input type='hidden' id='page_update' name='page_update' value=''>
                <div class="form-horizontal focus" tabindex='1'>    
                    
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
                            <input type="button" id="edtpinfo"  class="greenButton edtpinfobtn " 
                            onclick="edt(this.id)" value="Edit" />
                            <?php echo form_submit('Updatepinfo','Save', 'id="Updatepinfo" 
                            class="greenButton edtpinfobtn invi"  ');?> 
                            <input type="button" id="cancelpinfo" name="edtpinfo" class="greenButton edtpinfobtn invi" 
                            onclick="cancel(this.id,this.name)" value="Cancel" />
                            
                            
                            
                        </div>
                        
                    </div>
            	</div>
            
            
            
            
            </div>
            
            
            
            <?php }?>
           
            <?php foreach($tskills as $tskills){ ?>
            <div class=" col-lg-12"> 
            	<div class='col-lg-12 form_title space bg'>Technical Skills</div >
            	<div class="col-lg-12 space">
                	<div class="col-sm-4 bold">
                		Languages:
                        
                    </div>
                    <div class="col-sm-8 tskills_old "> 
                    	<?php echo $tskills->lang_code; ?>
                    </div>
                </div>
            	<div class="col-lg-12 space">
                	<div class="col-sm-4 bold">
                		Operating Systems:
                    </div>
                    <div class="col-sm-8 tskills_old "> 
                    	<?php echo $tskills->os_code; ?>
                    </div>
                </div>
            	<div class="col-lg-12 space">
                	<div class="col-sm-4 bold">
                		Frameworks:
                    </div>
                    <div class="col-sm-8  tskills_old"> 
                    	<?php echo $tskills->fwork_code; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
             
            <div class=" col-lg-12"> 
            	<div class='col-lg-12 form_title space bg'>Educational Attainment</div >
                <?php foreach($educ as $educ){ ?>
            	<div class="col-lg-12 ">
                	<div class="col-sm-12 form_title">
                    	<?php echo $educ->school; ?>
                    </div>
                </div>
            	<div class="col-lg-12 ">
                	<div class="col-sm-12">
                    	<?php echo $educ->yearFrom." - ".$educ->yearTo; ?>
                    </div>
                </div>
            	<div class="col-lg-12 ">
                	<div class="col-sm-12">
                    	<?php echo $educ->degree.", ".$educ->fstudy; ?>
                    </div>
                </div>
            	<div class="col-lg-12 space">
                	<div class="col-sm-12">
                    	<?php echo $educ->desc; ?>
                    </div>
                </div>
                <?php }?>
            </div>
            
            
            
            
            
            <div class=" col-lg-12"> 
            	<div class='col-lg-12 form_title space bg'>Professional Experience</div >
                <?php foreach($comp as $comp){ ?>
                <div class="col-lg-12 comp_old">
                	<div class="col-sm-12 bold">
                    	<?php echo $comp->compname; ?>
                    </div>
                 </div>
                <div class="col-lg-12 comp_old">
                	<div class="col-sm-12">
						<?php echo $comp->loc; ?>
                    </div>
                 </div>
                <div class="col-lg-12 comp_old">
                	<div class="col-sm-12">
                		<?php month($comp->month1); echo " ".$comp->year1." - "; month($comp->month2); echo " ".$comp->year2; ?>
                    </div>
                </div>
                <div class="col-lg-12 comp_old">
                	<div class="col-sm-12">
                		<?php echo $comp->title; ?>
                    </div>
                 </div>
                <div class="col-lg-12 comp_old space">
                	<div class="col-sm-12">
                		<?php echo $comp->prdesc; ?>
                    </div>
                 </div>
                
             <?php }?>
                 
            </div>
            
            <div class=" col-lg-12"> 
            	<div class='col-lg-12 form_title space bg'>Professional Reference</div >
                <?php foreach($pref as $pref){ ?>
            	<div class="col-lg-12 ">
                	<div class="col-sm-12 form_title">
                    	<?php echo $pref->pname; ?>
                    </div>
                </div>
            	<div class="col-lg-12 ">
                	<div class="col-sm-12">
                    	<?php echo $pref->cnum; ?>
                    </div>
                </div>
            	<div class="col-lg-12 space">
                	<div class="col-sm-12">
                    	<?php echo $pref->cemail; ?>
                    </div>
                </div>
                <?php }?>
            </div>
             
             
             
             
             
             
             
             
             
             
             
			 
             <?php
			 echo form_close();
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
    </header>       
               

<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation.js"></script>
<script type='text/javascript' >
<?php
if($title=='View Applicant'){
	echo "$('#editpinfo_mpage').hide();";
}
else echo "$('#editpinfo_mpage').show();";
?>
</script>

        