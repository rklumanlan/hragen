
            <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Human Resource Agency</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2" aria-expanded="false">
                
                 <?php echo form_open("user/login",'class="navbar-form navbar-right"'); ?>
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" value="" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="pass" name="pass"  class="form-control" value="" placeholder="Password" />
				    </div>
                    <input type="submit"  class="form-control" value="Sign in" />
                <?php echo form_close(); ?>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">
        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
        <h2>Thank you!</h2>
        <div class="reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  ">
        	
            
        </div>
	</div>
            
        </header>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/validation.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/script.js"></script>  

	