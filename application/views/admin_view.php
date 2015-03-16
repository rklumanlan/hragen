
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div id="criteria"  class="reg_form border  col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 top ">
            <?php echo form_open("user/search","id = 'search'");  ?>
            	<div class="form-group pads2">
                        <label for="name" class="control-label col-sm-1 ">Name:</label>
                        <div class="col-sm-3">
                        	<input type="text" id="name" name="name" class="form-control"
                             value="<?php echo  set_value('name'); ?>" />
                        </div>
                        <label for="sex" class="control-label col-sm-1">Sex:</label>
                        <div class="col-sm-3 ">
                            <?php $gender = array('-'=>'-','Male'=>'Male', 'Female'=>'Female'
                                );

                           echo form_dropdown('sex', $gender,set_value('sex'), 'id="sex" class="form-control"');
                            ?>
                        </div>
                        <label for="age" class="control-label col-sm-1">Age:</label>
                        <div class="col-sm-3 ">
                            <?php $ageb = array('-'=>'-','Newly Graduate'=>'Newly Graduate','22-25'=> '22-25', '26-30'=>'26-30');

                            echo form_dropdown('age', $ageb,set_value('age'), 'id="age" class="form-control"');
                            ?>
                        </div>
            	</div>
                 <div class="form-group pads2">

                    <label for="fname" class="  control-label col-sm-3">Languages:</label>
                    <div class="col-sm-9 form-group">
                        <?php foreach($language as $language)
                        {
            		echo "<div class=' col-xs-12 col-sm-6 col-md-4 col-lg-3 '>
            				<label class='checkbox-inline '><input type='checkbox' name='lang[]'
            				 class='edttskills'".set_checkbox('lang', $language->lang_desc)."
            				value='".$language->lang_desc."'>".$language->lang_desc."</label>
            			</div>";
            	}
            ?>
                    </div>
                </div>
                <div class="form-group pads2">
                    <label for="fname" class="control-label col-sm-3 col-md-3">Operating System:</label>
                     <div class="col-sm-9 form-group ">
                        <?php
            	foreach($os as $os)
            	{
            		echo "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 '>
            				<label class='checkbox-inline '><input type='checkbox' name='os[]'
            				 class='edttskills'".set_checkbox('os', $os->os_desc)."
            				value='".$os->os_desc."'>".$os->os_desc."</label>
            			</div>";
            		$os_array[]=$os->os_desc;
            	}

            	?>
                   </div>
                </div>
                <div class="form-group pads2">
                    <label for="fname" class="control-label col-sm-3">Framework:</label>
                   <div class="col-sm-9 form-group ">
                       <?php
               foreach($fwork as $fwork)
                        {
            		echo "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 '>
            				<label class='checkbox-inline '><input type='checkbox' name='fwork[]'
            			 class='edttskills'".set_checkbox('fwork', $fwork->fwork_desc)."
            				value='".$fwork->fwork_desc."'>".$fwork->fwork_desc."</label>
            			</div>";
            	}
            ?>
                    </div>
                </div>
                <div class="form-group" >

                	<div class="col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 ">
                    	<input type="submit" id="searchbtn" name="search" class="btn btn-primary" value="Search" />
                    </div>
                </div>
            <?php

            echo form_close(); ?>

            </div>
            <div id="refineRes" class=" reg_form border col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 top">
            To refine your search <span id="clickhere" >click here</span>
            </div>
            <?php echo form_open("user/view");
            if($results!=NULL){
            echo '<div id="results" class=" reg_form border col-xs-10 col-sm-10 col-md-10 col-lg-8
            	col-xs-offset-1 col-sm-offset-1 col-md-offset-1  ">
            		<div class="table-responsive">
            		<table  class="table table-hover table-condensed">
            			<thead>
            			<tr>
            				<th ></th>
            				<th >No.</th>
            				<th >Name</th>
            				<th >Sex</th>
            				<th >Age</th>
            				<th >Languages</th>
            				<th >Operating System</th>
            				<th >Frameworks</th>
            			</tr>
            			</thead>
            			<tbody>';
            		foreach($results as $data)
            		{
            			echo "<tr>
            			<td><input type='radio' name='viewCTR' value='".$data->uid."'/></td>
            			<td>".$data->pinfo_id."</td>
            			<td>".$data->fname." ".$data->mname." ".$data->lname ."</td>
            			<td>".$data->sex."</td>
            			<td>".$data->age."</td>
            			<td>".$data->lang_code."</td>
            			<td>".$data->os_code."</td>
            			<td>".$data->fwork_code."</td>";




            		}


            	   echo"
            		</tbody>
            	</table>
            	</div>
            	<div class='form-group text-center ' >

            		<div class='pagination centered'>".$links."</div>
            	</div>
            	<div class='form-group' >

            		<div class='col-xs-offset-6 col-sm-offset-8 col-md-offset-8 col-lg-offset-9 '>
            			<input type='submit' id='view' class='btn btn-primary' value='View' />
            		</div>
            	</div>
            </div>";
            }
            else if($results==NULL && $this->input->post('search')){
            echo '<div id="results" class=" reg_form border top col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xs-offset-1 col-sm-offset-1
            col-md-offset-1  ">
            <div class="form_title">No Match Found!</div>
            </div>';


            }

            echo form_close();
            ?>
        </div>
    </div>
