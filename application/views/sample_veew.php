<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo (isset($title)) ? $title : "HRAGEN" ?></title>

   
	<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/bootstrap/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
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
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
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
        <div class="reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-2 ">
        <div class="form_title">Personal Information</div>
		<div class="form-horizontal">    
        	
        	<div class="form-group">
        		<?php echo form_open("user/resume"); ?>
                <label for="fname" class="control-label col-sm-3  ">First Name:</label>
                <div class="col-sm-9">  
            		<input type="text" id="fname"  class="form-control" name="fname" value="<?php echo set_value('fname'); ?>" />
                </div>
            </div>
			<div class="form-group">
        		<label for="mname" class="control-label col-sm-3 ">Middle Name:</label>
                <div class="col-sm-9"> 
                	<input type="text" id="mname" name="mname" class="form-control" value="<?php echo set_value('mname'); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="lname" class="control-label col-sm-3">Last Name:</label>
                <div class="col-sm-9"> 
                	<input type="text" id="lname" name="lname" class="form-control" value="<?php echo set_value('lname'); ?>" />
                </div>
            </div>
            <div class="form-group">
				<label for="add" class="control-label col-sm-3">Address:</label>
				<div class="col-sm-9"> 
					<input type="text" id="add" name="add"  class="form-control" value="<?php echo set_value('add'); ?>" />
                </div>
            </div>
            <div class="form-group">
				<label for="prov_mun" class="control-label col-sm-3">Province/Muncipality:</label>
				<div class="col-sm-9 "> 
					<input type="text" id="prov_mun" name="prov_mun"  class="form-control" value="<?php echo set_value('prov_mun'); ?>" />
                </div>
            </div>
            <div class="form-group">
				<label for="sex" class="control-label col-sm-3">Sex:</label>
                <div class="col-sm-9 "> 
					<?php $gender = array('Male', 'Female'
                        );
        
                    echo form_dropdown('sex', $gender,'', 'class="form-control"');
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label for="age" class="control-label col-sm-3">Age:</label>
                <div class="col-sm-9 "> 
					<?php $ageb = array('Newly Graduate', '22-25', '26-30');
        
                    echo form_dropdown('age', $ageb,'', 'class="form-control"');
                    ?>
                </div>
            </div>
            
            <div class="form_title">Technical Skills</div>
            <div class="form-group">
                <label for="fname" class="control-label col-sm-3">Languages:</label>
                <div class="col-sm-9 "> 
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline "><input type="checkbox" name="tskills" value="Java">Java</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value="C">C</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value="C++">C++</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value="C#">C#</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value=".asp">.asp</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value=".net">.net</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value="HTML">HTML</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value="PHP">PHP</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" 
                        value="Javascript">Javacript</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value="SQL">SQL</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" 
                        value="Visual Basic">Visual Basic</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="tskills[]" value="Node js">Node js</label>
                    </div>
                </div>
            </div>
            <div class="form-group">           
                <label for="fname" class="control-label col-sm-3">Operating System:</label>
                <div class="col-sm-9 "> 
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="os[]" value="Windows">Windows</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="os[]" value="MAC OS">MAC OS</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="os[]" value="Linux">Linux</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="os[]" value="Android">Android</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="os[]" value="IOS">IOS</label>
                    </div>
               </div>
            </div>
            <div class="form-group"> 
                <label for="fname" class="control-label col-sm-3">Framework:</label>
                <div class="col-sm-9 "> 
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="fwork[]" value="AJAX">AJAX</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="fwork[]" value="Jquery">Jquery</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="fwork[]"
                         value="Code Igniter">Code Igniter</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="fwork[]" 
                        value="Cake PHP">Cake PHP</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="fwork[]" 
                        value="Ruby on Rails">Ruby on Rails</label>
                    </div>
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline"><input type="checkbox" name="fwork[]" 
                        value="Bootstrap">Bootstrap</label>
                    </div>
                </div>
            </div>
            <div class="form_title">Education and Awards</div>
            <div class="form-group"> 
                <label for="fname" class="control-label col-sm-3">School:</label>
                <div class="col-sm-9 ">
                	<input type="text" id="school" name="school" class="form-control" 
                    value="<?php echo set_value('school'); ?>" />
                </div>
            </div>
            <div class="form-group"> 
                <label for="fname"  class="control-label col-sm-3">Dates Attended:</label>
                <div class="col-sm-9">
                	<div class="col-sm-5">
                        <select name="DAtty1" class="form-control">
                            <option>-</option>
                            <?PHP
                            $year = date("Y")+1; 
                            for ($i = 0; $i <= 100; $i++) {
                                $year--; echo "<option>$year</option>";
                            }
                            ?>
                            </select>
                  	</div>
                    <div class="col-sm-2" style="text-align:center"> - </div>
                    <div class="col-sm-5">
                            <select name="DAtty2" class="form-control">
                            <option>-</option>
                            <?PHP
                            $year = date("Y")+1; 
                            for ($i = 0; $i <= 100; $i++) {
                                $year--; echo "<option>$year</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="fname" class="control-label col-sm-3">Feild of Study:</label>
                <div class="col-sm-9">
                	<input type="text" id="mjr" name="mjr" class="form-control" value="<?php echo set_value('mjr'); ?>" />
            	</div>
            </div>
            <div class="form-group">
                <label for="degree" class="control-label col-sm-3">Degree:</label>
                <div class="col-sm-9">
                    <select name="degree" class="form-control">
                        <option>-</option>
                        <option>High School</option>
                        <option>Associate's Degree</option>
                        <option>Bachelor's Degree</option>
                        <option>Master's Degree</option>
                    
                    </select>
            	</div>
            </div>
            <div class="form-group">
                <label for="desc" class="control-label col-sm-3">Descrption:</label>
                <div class="col-sm-9">
					<?php $desc = Array ("name" => "EAdes", "cols" => "24","rows" => "5");
                        echo Form_textarea($desc,'', 'class="form-control"');
                    ?>
                </div>
            </div>
            <div class="form_title">Professional Experience</div>
            <div class="form-group">
                <label for="fname" class="control-label col-sm-3">Company Name:</label>
                <div class="col-sm-9">
                	<input type="text" id="fname" name="fname" class="form-control"
                     value="<?php echo set_value('compName'); ?>" />
            	</div>
            </div>
            <div class="form-group">
                <label for="fname" class="control-label col-sm-3">Title:</label>
                <div class="col-sm-9">
                	<input type="text" id="fname" name="fname" class="form-control"
                     value="<?php echo set_value('title'); ?>" />
            	</div>
            </div>
            <div class="form-group">
                <label for="fname" class="control-label col-sm-3">Location:</label>
                <div class="col-sm-9">
                	<input type="text" id="fname" name="fname" class="form-control value="<?php echo set_value('loc'); ?>" />
            	</div>
            </div>
            <div class="form-group ">
                <label for="fname" class="control-label col-sm-3">Time Period:</label>
                <div class="col-sm-9 ">
                	<div class="mt">
						<?php $month1 = array('Choose...','January', 'Febrauary', 'March', 'April', 'May', 'June', 'July', 'August', 			
                        'September', 'October', 'November', 'December'
                            );
            
                        echo form_dropdown('mon1', $month1,'', 'class="form-control"');
                        ?>
                    </div>
                    <div class="mt">
                        <select name="TPy1" class="form-control">
                        <option>-</option>
                        <?PHP
                        $year = date("Y")+1; 
                        for ($i = 0; $i <= 100; $i++) {
                            $year--; echo "<option>$year</option>";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="mt2"> - </div>
                    <div class="mt">
                        <?php $month2 = array('Choose...','January', 'Febrauary', 'March', 'April', 'May', 'June', 'July', 'August', 			
                        'September', 'October', 'November', 'December'
                            );
            
                        echo form_dropdown('mon2', $month2,'', 'class="form-control"');
                        ?>
                    </div>
                    <div class="mt">
                        <select name="TPy2" class="form-control">
                        <option>-</option>
                        <?PHP
                        $year = date("Y")+1; 
                        for ($i = 0; $i <= 100; $i++) {
                            $year--; echo "<option>$year</option>";
                        }
                        ?>
                        </select>
                    </div>
            	</div>
            </div>
            <div class="form-group">
            	<label for="desc" class="control-label col-sm-3">Descrption:</label>
                <div class="col-sm-9">
					<?php $desc = Array ("name" => "PEdes", "cols" => "24","rows" => "5");
                        echo Form_textarea($desc,'','class="form-control"');
                    ?>
                </div>
            </div>
            <div class="form_title">Professional Reference</div>
            <div class="form-group">
            	<label for="fname" class="control-label col-sm-3">Name:</label>
                <div class="col-sm-9">
                	<input type="text" id="pr1" name="pr1" class="form-control" value="<?php echo set_value('pr1'); ?>" />
            	</div>
            </div>
            <div class="form-group">
            	<label for="desc" class="control-label col-sm-3">Contact Details:</label>
                <div class="col-sm-9">
                	<?php $con = Array ("name" => "conDet", "cols" => "24","rows" => "2");
						echo Form_textarea($con,'','class="form-control"');
					?>
                </div>
            </div>
            <div class="form-group">
            	<div class="col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 ">
                	<input type="submit" class="greenButton" value="Submit" />
                </div>
            </div>
      </div><!-- end -->
            
             
                
            <?php echo form_close(); ?>
        </div>
	</div>
            
        </header>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Human Resource Agency 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>css/bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
