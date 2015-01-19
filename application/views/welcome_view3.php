

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
				echo form_open("user/resume",'id = "info"'); ?>
                
				
                <label for="fname" class="control-label col-sm-3  ">First Name:</label>
                <div class="col-sm-9">  
            		<input type="text" id="fname"  class="form-control" name="fname" value="<?php echo set_value('fname'); ?>" />		
                    <br/><?php echo form_error('fname'); ?>
                </div>
            </div>
			<div class="form-group">
        		<label for="mname" class="control-label col-sm-3 ">Middle Name:</label>
                <div class="col-sm-9"> 
                	<input type="text" id="mname" name="mname" class="form-control" value="<?php echo set_value('mname'); ?>" />
                    <br/><?php echo form_error('mname'); ?>
                </div>
            </div>
            <div class="form-group lname">
                <label for="lname" class="control-label col-sm-3">Last Name:</label>
                <div class="col-sm-9"> 
                	<input type="text" id="lname" name="lname" class="form-control" value="<?php echo set_value('lname'); ?>" />
                    <br/><?php echo form_error('lname'); ?>
                </div>
            </div>
            <div class="form-group add">
				<label for="add" class="control-label col-sm-3">Address:</label>
				<div class="col-sm-9"> 
					<input type="text" id="add" name="add"  class="form-control" value="<?php echo set_value('add'); ?>" />
                    <br/><?php echo form_error('add'); ?>
                </div>
            </div>
            <div class="form-group prov_mun">
				<label for="prov_mun" class="control-label col-sm-3">Province/Muncipality:</label>
				<div class="col-sm-9 "> 
					<input type="text" id="prov_mun" name="prov_mun"  class="form-control" value="<?php echo 
					set_value('prov_mun'); ?>" /><br/><?php echo form_error('prov_mun'); ?>
                </div>
            </div>
            <div class="form-group sex">
				<label for="sex" class="control-label col-sm-3">Sex:</label>
                <div class="col-sm-9 "> 
					<?php $gender = array('-'=>'-','Male'=>'Male', 'Female'=>'Female'
                        );
        
                    echo form_dropdown('sex', $gender,'', 'class="form-control"');
                    ?>
                    <br/><?php echo form_error('sex'); ?>
                </div>
            </div>
            <div class="form-group age">
                <label for="age" class="control-label col-sm-3">Age:</label>
                <div class="col-sm-9 "> 
					<?php $ageb = array('-'=>'-','Newly Graduate'=>'Newly Graduate','22-25'=> '22-25', 22-25=>22-25);
        
                    echo form_dropdown('age', $ageb,'', 'class="form-control"');
                    ?>
                </div>
            </div>
            
            <div class="form_title">Technical Skills</div>
            <div class="form-group">
            
                <label for="fname" class="control-label col-sm-3">Languages:</label>
                <div class="col-sm-9 "> 
                    <div class="col-sm-3 ">
                    	<label class="checkbox-inline "><input type="checkbox" name="tskills[]" value="Java">Java</label>
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
							<input type='text' id='school".$count."' name='school".$count."' class='form-control school' 
							value='".set_value(".'school".$count."'.")."' />
							<br/>";
							echo form_error('school'.$count)."
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
					<div class='form-group'>
						<label for='fname' class='control-label col-sm-3'>Feild of Study:</label>
						<div class='col-sm-9'>
							<input type='text' id='mjr".$count."' name='mjr".$count."' class='form-control' 
							value='".set_value(".'mjr".$count."'.")."' />
						</div>
					</div>
					<div class='form-group'>
						<label for='degree' class='control-label col-sm-3'>Degree:</label>
						<div class='col-sm-9'>
							<select name='degree' class='form-control'>
								<option>-</option>
								<option value='High School'>High School</option>
								<option value='Associate's Degree'>Associate's Degree</option>
								<option value='Bachelor's Degree'>Bachelor's Degree</option>
								<option value='Master's Degree'>Master's Degree</option>
							
							</select>
						</div>
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
                </div>
            </div>
            <div class="form_title">Professional Experience</div>
             <?php $class="";
			for($ctr=1;$ctr<=3;$ctr++)
			{	
				
				if($ctr>1)
				{$class = "class='invi'";}
					
				echo"
				<div ".$class." id='pexp".$ctr."'>
					<div class='form-group'>
						<label for='fname' class='control-label col-sm-3'>Company Name:</label>
						<div class='col-sm-9'>
							<input type='text' id='compname".$ctr."' name='compname".$ctr."' class='form-control'
							 value='".set_value(".'compName".$ctr."'.")."' />
						</div>
					</div>
					<div class='form-group'>
						<label for='fname' class='control-label col-sm-3'>Title:</label>
						<div class='col-sm-9'>
							<input type='text' id='title".$ctr."' name='title".$ctr."' class='form-control'
							 value='".set_value(".'title".$ctr."'.")."' />
						</div>
					</div>
					<div class='form-group'>
						<label for='fname' class='control-label col-sm-3'>Location:</label>
						<div class='col-sm-9'>
							<input type='text' id='loc".$ctr."' name='loc".$ctr."' class='form-control 
							value='".set_value(".'loc".$ctr."'.")."' />
						</div>
					</div>
					<div class='form-group comTP".$ctr."'>
						<label for='fname' class='control-label col-sm-3'>Time Period:</label>
						<div class='col-sm-9 '>
							<div class='col-sm-3 pad'>";
							$month1 = array('0'=>'Choose...','1'=>'January','2'=>'Febrauary',
								'3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
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
								'3'=> 'March', '4'=>'May', '5'=>'May', '6'=> 'June', '7'=>'July', 
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
							value='".set_value(".'prname".$ctr."'.")."' />
						</div>
					</div>
					<div class='form-group'>
						<label for='cnum' class='control-label col-sm-3  '>Contact Number:</label>
						<div class='col-sm-9'>  
							<input type='text' id='cnum".$ctr."'  class='form-control' name='cnum".$ctr."'
							 value='".set_value(".'cnum".$ctr."'.")."' />
						</div>
					</div>
					<div class='form-group'>
						<label for='cemail' class='control-label col-sm-3  '>Email Anddress:</label>
						<div class='col-sm-9'>  
							<input type='text' id='cemail".$ctr."'  class='form-control' name='cemail".$ctr."' 
							value='".set_value(".'cemail".$ctr."'.")."' />
						</div>
					
					</div>
					
				</div>
				";
			}
            ?>
            <div class="form-group" >
            	<div class="col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 ">
                	<input type="button" id="addref" class="greenButton" value="Add Another" />
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
<script type="text/javascript">
	$(document).ready(function(){
		
		
		
    	var ctr=1;
		
		
		
		
		$("#addref").click(function(){
        	if(ctr==1){
				$("#pr2").slideDown();
                ctr=2;
            }
            else{
				$("#pr3").slideDown();
            } 
		});
		 $("#addeduc").click(function(){
				$("#educ1").append("<div id='e1'>Appended item</div>");
				var myDiv = document.getElementById("e1");

				//Create array of options to be added
				var array = ["Volvo","Saab","Mercades","Audi"];
				
				//Create and append select list
				var selectList = document.createElement("select");
				selectList.setAttribute("id", "mySelect");
				selectList.setAttribute("class", "form-control");
				myDiv.appendChild(selectList);
				
				//Create and append the options
				for (var i = 0; i < array.length; i++) {
					var option = document.createElement("option");
					option.setAttribute("value", array[i]);
					option.text = array[i];
					selectList.appendChild(option);
				}
		  });
		  
		  
        /*$("#addeduc").click(function(){
        	while(ctr<=4){
            	
            	ctr++;
				$("#educ"+ctr).slideDown();
                break;
              }
			
            
		});*/
		var ctr2 = ctr;
		$("#remeduc").click(function(){
        	while(ctr2>=1){
            	ctrnew=parseInt(ctr - 1);
            	ctrnew--;
				$("#educ"+ctr).slideUp();
                break;
              }
			
            
		});
		
        $("#addpexp").click(function(){
        	while(ctr<=4){
            	
            	ctr++;
				$("#pexp"+ctr).slideDown();
                break;
              }
			
            
		});
		
		
	});
var Validator = function(form) {
    
    this.form = $(form);
	
		
    var handleError = function(element,message,dp1) {
		var error = $('<div name="err" class="col-sm-12 error text-center"></div>').text(message);
		error.appendTo('.'+element);
		$("#"+dp1).change(function() {
			$(error).fadeOut(500, function() {
               err.removeClass('error');
            });
		});
    };

    this.validate = function() {

        this.form.submit(function(e) {
			var fname = $("#fname").val() 
			var lname = $("#lname").val() 
			var add = $("#add").val() 
			var prov_mun = $("#add").val() 
			var sex = $("#sex").val() 
			var age = $("#age").val() 
			
			if(fname == "")
			{
				handleError("fname",'First Name is required.',"fname");
					e.preventDefault();
			}
			if(lname == "")
			{
				handleError("lname",'Last Name is required.',"lname");
					e.preventDefault();
			}
			if(add == "")
			{
				handleError("add",'Address is required.',"add");
					e.preventDefault();
			}
			if(prov_mun == "")
			{
				handleError("prov_mun",'Province/Municipality is required.',"prov_mun");
					e.preventDefault();
			}
			if(sex == "-")
			{
				handleError("sex",'Please select valid sex.',"sex");
					e.preventDefault();
			}
			if(age == "-")
			{
				handleError("age",'Please select valid age.',"age");
					e.preventDefault();
			}
			
			
			for(var a=0; a<=3; a++)
			{
				var x = $(".dateFrom").get(a).value;
				var y = $(".dateTo").get(a).value;
				var sch = $(".school").get(a).value;
				
				alert($(".school").get(a).id);
				
				if(sch == "")
				{
					handleError("sch"+ parseInt(a + 1),'School is required.',$(".school").get(a).id);
						e.preventDefault();
				}
				
				
				
				if(x>y)
				{ 
					handleError("date"+ parseInt(a + 1),'Please be sure the start date is not after the end date.',
					$(".dateTo").get(a).id);
					e.preventDefault();
				}
				else if( x=="-" || y=="-" || (x==y) )
				{
					
					handleError("date"+ parseInt(a + 1),'Please select a valid date.',$(".dateTo").get(a).id);
					e.preventDefault();
				}
				else
				{
					return true;
				}
			}
			for(var b=0; b<=4; b++)
			{
			
				var j = $(".monFrom").get(b).value;
				var k = $(".monTo").get(b).value;
				
				var l = $(".yearFrom").get(b).value;
				var m = $(".yearTo").get(b).value;
				
				
				if(l>m)
				{
					handleError("comTP"+ parseInt(b + 1) ,'Please be sure the start date is not after the end date.',
					$(".yearTo").get(b).id);
					e.preventDefault();
				}
				else if(l==m && j>k)
				{
					handleError("comTP"+ parseInt(b + 1) ,'Please be sure the start date is not after the end date.',
					$(".yearTo").get(b).id);
					e.preventDefault();
				}
				else if( j=="0" || k=="0" || l=="-" || m=="-" )
				{
					
					handleError("comTP"+ parseInt(b + 1) ,'Please select a valid date.',
					$(".yearTo").get(b).id);
					e.preventDefault();
				}
				else
				{
					return true;
				}
					
				
			}
			
        });

    };
};

var validator = new Validator('#info');
validator.validate();


</script>
        