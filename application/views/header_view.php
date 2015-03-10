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
    <link  href="<?php echo base_url();?>/css/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>/css/bootstrap/css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/tecbico.png">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap/css/main.css" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <?php echo anchor('user/index', '<div><img src="'.base_url().'/assets/images/tecblogo.png" height="10%" class="img-responsive" alt="NTECB"  />
              Nemoto Technical Brain Phil. Co. Inc.</div>','class="navbar-brand"'); ?>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="hidden">
                <a href="#page-top"></a>
              </li>
              <li>
                <a class="page-scroll" href="#services">Home</a>
              </li>
              <li>
                <a class="page-scroll" href="#portfolio">About Us</a>
              </li>
              <li>
                <a class="page-scroll" href="#contact">Contact</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>
                <i class="glyphicon glyphicon-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li ><a data-toggle="modal" data-target="#login" href="">Login</a></li>
                </ul>
              </li>
            </ul>
          </div>
        <!-- /.navbar-collapse -->
        </div>
    <!-- /.container-fluid -->
    </nav>
    <!--  Login form -->
    <div class="modal modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <!--Modal Body-->
                <div class="modal-body">
                    <?php echo form_open("user/login",'class="form-horizontal" role="form"'); ?>
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">
                              Sign In
                                <a href=""><i class="pull-right glyphicon glyphicon-remove" data-dismiss="modal"
                                aria-hidden="true"> </i></a>
                          </div>
                        </div>
                        <div style="padding-top:30px" class="panel-body" >
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="email" name="email" class="form-control" value=""
                                placeholder="Email" />
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                 <input type="password" id="pass" name="pass"  class="form-control" value=""
                                 placeholder="Password" />
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                  <input type="submit"  class="btn btn-md btn-primary btn-block" value="Sign in" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account!
                                    <a onclick="reg()" href="#" >Register here.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php echo form_close(); ?>
                </div>

                <!--/Modal Body-->
          </div>
      </div>
    </div>
    <!--  /Login form -->
    <!--  Register form -->
    <div class="modal modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">

      <div class="modal-dialog">
          <div class="modal-content">
                <!--Modal Body-->
                <div class="modal-body">
                    <?php echo form_open("user/registration",'id="regform"'); ?>
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                          <div class="panel-title">
                              Sign Up
                                <a href=""><i class="pull-right glyphicon glyphicon-remove" data-dismiss="modal"
                                aria-hidden="true"> </i></a>
                          </div>
                        </div>
                        <div style="padding-top:30px" class="panel-body" >
                          <div class="form-horizontal">
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
                                      <input type="submit" class="greenButton" name="submit" value="Submit" />
                                  </div>
                              </div>

                          </div>

                        </div>
                    </div>
                  </div>
                      <?php echo form_close(); ?>
                      <!--/Modal Body-->
              </div>
          </div>
      </div>
    <!--  /Register form -->
