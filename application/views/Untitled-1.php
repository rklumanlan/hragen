for ($b=1;$b<=4;$b++)
		{
			switch ($this->input->post('mon1'.$b)) {
				case "1":
					${"tpm1" . $b}="January";
					break;
				case "2":
					${"tpm1" . $b}="Febrauary";
					break;
				case "3":
					${"tpm1" . $b}="March";
					break;
				case "4":
					${"tpm1" . $b}="April";
					break;
				case "5":
					${"tpm1" . $b}="May";
					break;
				case "6":
					${"tpm1" . $b}="June";
					break;
				case "7":
					${"tpm1" . $b}="July";
					break;
				case "8":
					${"tpm1" . $b}="August";
					break;
				case "9":
					${"tpm1" . $b}="September";
					break;
				case "10":
					${"tpm1" . $b}="October";
					break;
				case "11":
					${"tpm1" . $b}="November";
					break;
				case "12":
					${"tpm1" . $b}="December";
					break;
				default:
       			 	${"tpm1" . $b}=0;
			}
			
			switch ($this->input->post('mon2'.$b)) {
				case "1":
					${"tpm2" . $b}="January";
					break;
				case "2":
					${"tpm2" . $b}="Febrauary";
					break;
				case "3":
					${"tpm2" . $b}="March";
					break;
				case "4":
					${"tpm2" . $b}="April";
					break;
				case "5":
					${"tpm2" . $b}="May";
					break;
				case "6":
					${"tpm2" . $b}="June";
					break;
				case "7":
					${"tpm2" . $b}="July";
					break;
				case "8":
					${"tpm2" . $b}="August";
					break;
				case "9":
					${"tpm2" . $b}="September";
					break;
				case "10":
					${"tpm2" . $b}="October";
					break;
				case "11":
					${"tpm2" . $b}="November";
					break;
				case "12":
					${"tpm2" . $b}="December";
					break;
				default:
       			 	${"tpm2" . $b}=0;
					
			}			
			
			
			${"tpy1" . $b}=$this->input->post('TPy1'.$b);
			${"tpy2" . $b}=$this->input->post('TPy2'.$b);
			
			${"tpdate" . $b}=${"tpm1" . $b}." ".${"tpy1" . $b}." - ".${"tpm2" . $b}." ".${"tpy2" . $b};