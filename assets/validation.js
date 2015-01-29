$(document).ready(function () {
	var pr=1;
	var educ=1;
	var comp=1;
	
	$("#addref").click(function(){
		while(pr<=3){
			
			pr++;
			$("#pr"+pr).slideDown();
			break;
		  }
	});
	
	$("#remref").click(function(){
		
		 if(pr==4){
			pr=3;
		 }
		while(pr>=2){
			$("#pr"+pr).slideUp();
			$('#pr'+pr).find('input:text').val('');
			pr--;
			break;
		  }
		
		
	});
	$("#addedu").click(function(){
		while(educ<=4){
			
			educ++;
			$("#educ"+educ).slideDown();
			break;
		  }
		
		
	});
	 $("#remedu").click(function(){
		 if(educ==5){
			educ=4;
		 }
		while(educ>=2){
			$("#educ"+educ).slideUp();
			$("#educ"+educ).find('input:text,textarea').val('');
			$("#educ"+educ).find('select').val('-');
			educ--;
			break;
		  }
		
		
	});
	
	$("#addpexp").click(function(){
		while(comp<=4){
			
			comp++;
			$("#com"+comp).slideDown();
			$("#ctr").val(comp);
			break;
		  }
		
		
	});
	$("#rempexp").click(function(){
		 if(comp==5){
			comp=4;
		 }
		while(comp>=2){
			
			
			$("#com"+comp).slideUp();
			$("#com"+comp).find('input:text,textarea').val('');
			$("#com"+comp).find('select').val('-');
			comp--;
			break;
		  }
		
		
	});
	
	
	
});
var Validator = function(form) {
    
    this.form = $(form);
    var handleError = function(element,message,dp1) {
		$('#'+element).text(message);
		$('#'+element).fadeIn(500);
		/*var error = $('<div name="err" id="err" class="col-sm-12 error text-center"></div>').text(message);
		error.appendTo('.'+element);*/
		$('#'+dp1).change(function() {
			$('#'+element).fadeOut(500);
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
				handleError("fname_err",'First Name is required.',"fname");
				e.preventDefault();
			
			}
			if(lname == "")
			{
				handleError("lname_err",'Last Name is required.',"lname");
				e.preventDefault();
			}
			if(add == "")
			{
				handleError("add_err",'Address is required.',"add");
				e.preventDefault();
			}
			if(prov_mun == "")
			{
				
				handleError("prov_mun_err",'Province/Municipality is required.',"prov_mun");
				e.preventDefault();
			}
			if(sex == "-")
			{
				handleError("sex_err",'Please select valid sex.',"sex");
				e.preventDefault();	
			}
			if(age == "-")
			{
				handleError("age_err",'Please select valid age.',"age");
				e.preventDefault();
			}
			
			
			var a=0;
			while(a<=$(".school:visible").length-1){
				
				window["educctr" + a] =$(".school").get(a).id;
				window["educctr" + a]= window["educctr" + a].match(/\d+$/);	
				if($(".school").get(a).value == "")
				{
					handleError("sch_err"+ window["educctr" + a],'School is required.',$(".school").get(a).id);
					e.preventDefault();
				}
				if($(".mjr").get(a).value == "")
				{	
					alert("ADSFA");
					alert("major_err"+ window["educctr" + a]);
					handleError("major_err"+ window["educctr" + a],'Field of Study is required.',$(".mjr").get(a).id);
					e.preventDefault();
				}
				if($(".deg").get(a).value == "-")
				{
					handleError("dgree_err"+ window["educctr" + a],'Please select valid degree.',$(".deg").get(a).id);
					e.preventDefault();
				}
				if($(".dateFrom").get(a).value > $(".dateTo").get(a).value)
				{ 
					handleError("date_err"+ window["educctr" + a],'Please be sure the start date is not after the end date.',
					$(".dateTo").get(a).id);
					e.preventDefault();
				}
				
				if(($(".dateFrom").get(a).value == $(".dateTo").get(a).value) || 
				($(".dateFrom").get(a).value=="-" && $(".dateTo").get(a).value=="-"))
				{ 
					handleError("date_err"+ window["educctr" + a],
					'Please be select valid date.',
					$(".dateTo").get(a).id);
					e.preventDefault();
				}
				
				
				
				
				
				
				
				
				
				
				
				a=a+1;
			}
			
			var b=0;
			
			while(b<=$(".compname:visible").length-1){
				window["compctr" + b] =$(".compname").get(b).id;
				window["compctr" + b]= window["compctr" + b].match(/\d+$/);	
				if($(".compname").get(b).value == "")
				{
					handleError("compname_err"+ window["compctr" + b],'Company Name is required.',$(".compname").get(b).id);
					e.preventDefault();
				}
				if($(".title").get(b).value == "")
				{
					handleError("title_err"+ window["compctr" + b],'Title is required.',$(".title").get(b).id);
					e.preventDefault();
				}
				if($(".loca").get(b).value == "")
				{
					handleError("loc_err"+ window["compctr" + b],'Location is required.',$(".loca").get(b).id);					e.			
					preventDefault();
				}
				
				
				if(($(".yearFrom").get(b).value > $(".yearTo").get(b).value) && 
				$(".monFrom").get(b).value > $(".monTo").get(b).value)
				{
					handleError("comTP_err"+ window["compctr" + b] ,
					'Please be sure the start date is not after the end date.',
					$(".yearTo").get(b).id);
					e.preventDefault();
				}
				
				else if(($(".yearFrom").get(b).value == $(".yearTo").get(b).value) && 
				$(".monFrom").get(b).value > $(".monTo").get(b).value)
				{
					handleError("comTP_err"+ window["compctr" + b] ,
					'Please be sure the start date is not after the end date.',$(".monTo").get(b).id);
					e.preventDefault();
				}
				
				else if( $(".monFrom").get(b).value=="0" || $(".monTo").get(b).value=="0" || 
				$(".yearFrom").get(b).value=="-" || $(".yearTo").get(b).value =="-" )
				{
					handleError("comTP_err"+ window["compctr" + b] ,'Please select a valid date.',$(".yearTo").get(b).id);
					e.preventDefault();
				}
				
				b=b+1;
				
			}
			
			
			var c=0;
			
			while(c<=$(".prname:visible").length-1){
				window["prefctr" + c] =$(".compname").get(c).id;
				window["prefctr" + c]= window["prefctr" + c].match(/\d+$/);	
				var numbers = /^[0-9]+$/;
				var emailVal = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if($(".prname").get(c).value == ""){
					handleError("prname_err"+ window["prefctr" + c] ,'Name is required.',
					$(".prname").get(c).id);
					e.preventDefault();
				}
				
				if($(".cnum").get(c).value == ""){
					handleError("cnum_err"+ window["prefctr" + c] ,'Name is required.',
					$(".cnum").get(c).id);
					e.preventDefault();
				}
				else if(!numbers.test($(".cnum").get(c).value)){
					handleError("cnum_err"+ window["prefctr" + c] ,'Contact Number is invalid.',
					$(".cnum").get(c).id);
					e.preventDefault();
				}
				if($(".cemail").get(c).value == ""){
					handleError("cemail_err"+ window["prefctr" + c] ,'Email address is required.',
					$(".cemail").get(c).id);
					e.preventDefault();
				}
				
				
				else if(!emailVal.test($(".cemail").get(c).value)){
					handleError("cemail_err"+ window["prefctr" + c] ,'Email address is invalid.',
					$(".cemail").get(c).id);
				
					e.preventDefault();
				}
				
				c=c+1;
			}
			
			
			
			return true;
			
			
			
			
			
        });

    };
};

var validator = new Validator('#infos');
validator.validate();

	
	


