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
					<div class='form-group '>
						<label for='fname' class='control-label col-sm-3'>Time Period:</label>
						<div class='col-sm-9 '>
							<div class='col-sm-3 pad'>";
							$month1 = array('0'=>'Choose...','January'=>'January','Febrauary'=>'Febrauary',
								'March'=> 'March', 'April'=>'May', 'May'=>'May', 'June'=> 'June', 'July'=>'July',
								'August'=> 'August', 'September'=>'September', 'October'=>'October', 
								'November'=>'November', 'December'=>'December');
					
								echo form_dropdown('mon1'.$ctr.'', $month1,'', "class='form-control' id='mon1".$ctr."'");
							echo "
							</div>
							<div class='col-sm-2 pad'>
								<select name='TPy1".$ctr."".$ctr."' id='TPy1".$ctr."' class='form-control' >
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
								$month2 = array('0'=>'Choose...','January'=>'January','Febrauary'=>'Febrauary',
								'March'=> 'March', 'April'=>'May', 'May'=>'May', 'June'=> 'June', 'July'=>'July', 
								'August'=> 'August', 'September'=>'September', 'October'=>'October', 
								'November'=>'November', 'December'=>'December');
					
								echo form_dropdown('mon2'.$ctr.'', $month2,'', "class='form-control' id='mon2".$ctr."'");
								echo"
							</div>
							<div class='col-sm-2 pad'>
								<select name='TPy2".$ctr."' id='TPy2".$ctr."' class='form-control' >
								<option>-</option>";
								$year = date('Y')+1; 
								for ($y1 = 0; $y1 <= 100; $y1++) {
									$year--; echo '<option value="'.$year.'">'.$year.'</option>';
								}
							echo"
								</select>
							</div>
						</div>
						<div class='row'>
							<div class='col-sm-12 error text-center' id='derror2'>
							</div>
						</div>
					</div>
					<div class='form-group'>
						<label for='desc' class='control-label col-sm-3'>Description:</label>
						<div class='col-sm-9'>";
								$PEdes=set_value('PEdes').$ctr;
								$desc = Array ('name' => 'PEdes', 'cols' => '24','rows' => '5','value'=>$PEdes);
								
								echo Form_textarea($desc,'',"class='form-control'");
						echo"
						</div>
					</div>
								
				</div>
				
				";
			}
			?>