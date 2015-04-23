<?php echo form_open('user/change','id = "infos"'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 reg_form col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 top">
            <div class="panel panel-info" >
              <div class="panel-heading">
                  Change Password
              </div>
              <div style="padding-top:30px" class="panel-body form-horizontal">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Current Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" name="curr_pass" placeholder="Current Password">
                    <?php echo "<span class='error'>".$cpass_er."</span>"; ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">New Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" name="new_pass" placeholder="New Password">
                    <?php echo "<span class='error'>".form_error('new_pass')."</span>"; ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Confirm Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                    <?php echo "<span class='error'>".form_error('conf_pass')."</span>"; ?>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-4">
                      <input type="submit" name="change_pass"  class="btn btn-md btn-primary btn-block" value="Submit" />
                    </div>
                </div>

              </div>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(); ?>
<div class="modal modal fade" id="chpass" tabindex="-1" role="dialog" aria-labelledby="chpass" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
            <!--Modal Body-->
            <div class="modal-body">

                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">
                          Change Password Completed
                            <a href=""><i class="pull-right glyphicon glyphicon-remove" data-dismiss="modal"
                            aria-hidden="true"> </i></a>
                        </div>
                    </div>
                    <div style="padding-top:30px" class="panel-body" >
                        Password has been changed!
                    </div>
                </div>
            </div>
                <?php echo form_close(); ?>
            </div>

            <!--/Modal Body-->
      </div>
  </div>
</div>
