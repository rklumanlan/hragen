
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
        
        <div class="reg_form col-xs-10 col-sm-10 
        col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
        <div class="form_title">Sign Up</div>
        <div class="form_sub_title">It's free and anyone can join</div>
        <?php echo form_open("user/registration"); ?>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="user_name" class="control-label col-sm-4 ">User Name:</label>
                    <div class="col-sm-8">
                    	<input type="text" id="user_name" name="user_name" class="form-control"
                         value="<?php echo set_value('user_name'); ?>" />
                         <?php echo "<span class='error'>".form_error('user_name')."</span>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_address" class="control-label col-sm-4 ">Your Email:</label>
                    <div class="col-sm-8">
                    	<input type="text" id="email_address" name="email_address" class="form-control"
                    	value="<?php echo set_value('email_address'); ?>" />
                         <?php echo "<span class='error'>".form_error('email_address')."</span>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label col-sm-4 ">Password:</label>
                    <div class="col-sm-8">
                    	<input type="password" id="password" name="password" class="form-control"
                         value="<?php echo set_value('password'); ?>" />
                         <?php echo "<span class='error'>".form_error('password')."</span>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="con_password" class="control-label col-sm-4 ">Confirm Password:</label>
                    <div class="col-sm-8">
                        <input type="password" id="con_password" name="con_password" class="form-control"
                        value="<?php echo set_value('con_password'); ?>" />
                         <?php echo "<span class='error'>".form_error('con_password')."</span>"; ?>
                	</div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 ">
                        <input type="submit" class="greenButton" value="Submit" />
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
        
        
        
        
        
        </div>
	</div>
            
</header>












