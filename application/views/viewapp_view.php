<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="reg_form border col-xs-10 col-sm-10 col-md-10 col-lg-12 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  ">
            <div class="update_pinfo1 col-lg-12">

                <?php
                foreach($pinfo as $pinfo){
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
                    }
                ?>

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


            <?php } ?>
            <div class=" col-lg-12">
                <div class='col-lg-12 form_title space bg'>
                    Educational Attainment
                </div>
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

                <?php
                }
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

                </div>
                <div class="col-lg-12 comp1  ">
                    <?php foreach($comp as $comp){ ?>

                        <div class="space col-lg-12 focus" id='comp<?php echo $comp->comp_id; ?>' tabindex='4'>
                            <div class="col-sm-12 bold">
                                <?php echo $comp->compname; ?>
                            </div>
                            <div class="col-sm-12">
                                <?php echo $comp->loc; ?>
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

                    <?php  } ?>

                </div>
            </div>
            <div class=" col-lg-12">
                  <div class='col-lg-12 form_title space bg'>
                      Professional Reference
                  </div >
                  <div class=" col-lg-12 pref1" >
                      <?php foreach($pref as $pref){ ?>
                      <div class="space col-lg-12 focus " id='pref<?php echo $pref->prefid; ?>' tabindex='5'>
                          <div class="col-lg-12 " ><?php echo $pref->pname; ?></div>
                          <div class="col-lg-12 "><?php echo $pref->cnum; ?></div>
                          <div class="col-lg-12 "><?php echo $pref->cemail; ?></div>
                      </div>
                      <?php } ?>
                  </div>
            </div>



        </div>

    </div>
</div>
