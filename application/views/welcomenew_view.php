

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
            <div class=" col-lg-12">  
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
						
				echo anchor("user/edit_mpage", "<input type='button' id='editpinfo_mpage' name='editpinfo_mpage' 
						class='greenButton' value='Edit Informations' />")."</div >"; 
                echo "</div>";
                ?> 
                 <div class="col-lg-12"><hr class="lne" /></div>
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

        