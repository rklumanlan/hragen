

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
        <div class="reg_form col-xs-10 col-sm-10 col-md-10 col-lg-12 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  ">
            <div class="form-horizontal col-lg-12">  
                <div class="text-right col-lg-9"> 
					<?php foreach($pinfo as $pinfo)
                    { 
                    echo "<div class='form_title  '>".$pinfo->fname." ".$pinfo->mname." ".$pinfo->lname ."</div >";
					echo "<div >".$pinfo->address." ".$pinfo->city."</div >"; 
					echo "<div >".$pinfo->sex."</div >"; 
		  echo "</div>";
          echo "<div class='col-centered col-lg-3'>
		  			<img src='". base_url()."uploads/".$pinfo->imgfname."' class='img-responsive' />
				</div >";        
                    } 
                    
                    ?> 
                <div class="col-lg-12"><hr class="lne"/></div>
                <div class="col-lg-12 ">
                	<p class="bg">Techincal Skills   </p>          
                </div>
                <div class="col-lg-12 ">
                    <div class="col-sm-4"><p>Languages:</p></div>
                    <div class="col-sm-8"> 
                        <?php 
                        foreach($tskills as $tskills)
                        { 
                        
                            echo $tskills->lang_code;
                       
                        
                        ?> 
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="col-sm-4"><p>Operating System:</p></div>
                    <div class="col-sm-8"> 
                    	<?php 
                        
                        
							echo $tskills->os_code;
                        
                        
                        ?> 
                       
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="col-sm-4"><p>Framework:</p></div>
                    <div class="col-sm-8"> 
                    	<?php 
                        
                        
							echo $tskills->fwork_code;
                        } 
                        
                        ?> 
                       
                    </div>
                </div>
                <div class="col-lg-12 ">
                	<p class="bg">Educational Attainment   </p>          
                </div>
                <div class="col-lg-12 ">
                   <?php 
                        foreach($educ as $educ)
                        { 
                        	echo "<div class='col-lg-12 '>";
                            	echo "<span class='bold'>".$educ->school."</span>";
                       		echo "</div>";
							echo "<div class='col-lg-12 '>";
                            	echo $educ->degree.", ".$educ->fstudy;
                       		echo "</div>";
							echo "<div class='col-lg-12 '>";
                            	echo $educ->yearFrom." - ".$educ->yearTo;
                       		echo "</div>";
							echo "<div class='col-lg-12 '>";
                            	echo $educ->desc." ";
                       		echo "</div>";
						}
                        ?> 
                </div>
                <div class="col-lg-12 ">
                	<p class="bg">Professional Experience</p>          
                </div>
                <div class="col-lg-12 ">
                   <?php 
                        foreach($comp as $comp)
                        { 
                        	echo "<div class='col-lg-12 '>";
                            	echo "<span class='bold'>".$comp->title."</span>";
                       		echo "</div>";
							echo "<div class='col-lg-12 '>";
                            	echo $comp->compname;
                       		echo "</div>";
							switch ($comp->month1) {
								case "1":
									$month1="January";
									break;
								case "2":
									$month1="Febrauary";
									break;
								case "3":
									$month1="March";
									break;
								case "4":
									$month1="April";
									break;
								case "5":
									$month1="May";
									break;
								case "6":
									$month1="June";
									break;
								case "7":
									$month1="July";
									break;
								case "8":
									$month1="August";
									break;
								case "9":
									$month1="September";
									break;
								case "10":
									$month1="October";
									break;
								case "11":
									$month1="November";
									break;
								case "12":
									$month1="December";
									break;
							}
							switch ($comp->month2) {
								case "1":
									$month2="January";
									break;
								case "2":
									$month2="Febrauary";
									break;
								case "3":
									$month2="March";
									break;
								case "4":
									$month2="April";
									break;
								case "5":
									$month2="May";
									break;
								case "6":
									$month2="June";
									break;
								case "7":
									$month2="July";
									break;
								case "8":
									$month2="August";
									break;
								case "9":
									$month2="September";
									break;
								case "10":
									$month2="October";
									break;
								case "11":
									$month2="November";
									break;
								case "12":
									$month2="December";
									break;
							}
			
						
							
							
							
							
							
							echo "<div class='col-lg-12 '>";
                            	echo $month1." ".$comp->year1." - ".$month2." ".$comp->year2;
                       		echo "</div>";
							echo "<div class='col-lg-12 '>";
                            	echo $comp->loc;
                       		echo "</div>";
							echo "<div class='col-lg-12 '>";
                            	echo $comp->prdesc." ";
                       		echo "</div>";
						}
                        ?> 
                </div>
                <div class="col-lg-12 ">
                	<p class="bg">Professional Reference</p>          
                </div>
                <div class="col-lg-12 ">
                   <?php 
                        foreach($pref as $pref)
                        { 
                        	echo "<div class='col-lg-12 '>";
                            	echo "<span class='bold'>".$pref->pname."</span>";
                       		echo "</div>";
							echo "<div class='col-lg-12 '>";
                            	echo $pref->cnum;
                       		echo "</div>";
							echo "<div class='col-lg-12 '>";
                            	echo $pref->cemail;
                       		echo "</div>";
						}
                        ?> 
                </div>
                
                
                
                
            </div>
        </div>
    </header>
</div>

<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation2.js"></script>
        