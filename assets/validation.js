$(document).ready(function () {
	$(".error").hide();
	$(".error").css('margin-bottom','0px');
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
var imgval;
var _URL = window.URL || window.webkitURL;

$("#userfile").change(function(a) {

    var image, file;

    if ((file = this.files[0])) {

        image = new Image();

        image.onload = function() {
            if(this.width>144){
				imgval='true';
			}
			else{
				imgval='false';
			}
        };

        image.src = _URL.createObjectURL(file);


    }

});
var Validator = function(form) {

    this.form = $(form);
    var handleError = function(element,message,dp1) {
		$('#'+element).text(message);
		$('#'+element).fadeIn(500);
		$('#'+dp1).focus();
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

			var a=0;
			while(a<=$(".school:visible").length-1){

				window["educctr" + a] =$(".school:visible").get(a).id;
				window["educctr" + a]= window["educctr" + a].match(/\d+$/);
				if($(".school:visible").get(a).value == "")
				{
					handleError("sch_err"+ window["educctr" + a],'School is required.',$(".school:visible").get(a).id);
					e.preventDefault();
				}
				if($(".mjr:visible").get(a).value == "")
				{
					handleError("major_err"+ window["educctr" + a],'Field of Study is required.',$(".mjr:visible").get(a).id);
					e.preventDefault();
				}
				if($(".deg:visible").get(a).value == "-")
				{
					handleError("dgree_err"+ window["educctr" + a],'Please select valid degree.',$(".deg:visible").get(a).id);
					e.preventDefault();
				}
				if($(".dateFrom:visible").get(a).value > $(".dateTo:visible").get(a).value)
				{
					handleError("date_err"+ window["educctr" + a],'Please be sure the start date is not after the end date.',
					$(".dateTo:visible").get(a).id);
					e.preventDefault();
				}

				else if(($(".dateFrom:visible").get(a).value == $(".dateTo:visible").get(a).value) ||
				($(".dateFrom:visible").get(a).value=="-" && $(".dateTo:visible").get(a).value=="-"))
				{
					handleError("date_err"+ window["educctr" + a],
					'Please be select valid date.',
					$(".dateTo:visible").get(a).id);
					e.preventDefault();
				}











				a=a+1;
			}




			var b=0;

			while(b<=$(".compname:visible").length-1){
				window["compctr" + b] =$(".compname:visible").get(b).id;
				window["compctr" + b]= window["compctr" + b].match(/\d+$/);
				if($(".compname:visible").get(b).value == "")
				{
					handleError("compname_err"+ window["compctr" + b],'Company Name is required.',$(".compname:visible").get(b).id);
					e.preventDefault();
				}
				if($(".title:visible").get(b).value == "")
				{
					handleError("title_err"+ window["compctr" + b],'Title is required.',$(".title:visible").get(b).id);
					e.preventDefault();
				}
				if($(".loca:visible").get(b).value == "")
				{
					handleError("loc_err"+ window["compctr" + b],'Location is required.',$(".loca:visible").get(b).id);					e.
					preventDefault();
				}


				if(($(".yearFrom:visible").get(b).value > $(".yearTo:visible").get(b).value) &&
				$(".monFrom:visible").get(b).value > $(".monTo:visible").get(b).value)
				{
					handleError("comTP_err"+ window["compctr" + b] ,
					'Please be sure the start date is not after the end date.',
					$(".yearTo:visible").get(b).id);
					e.preventDefault();
				}

				else if(($(".yearFrom:visible").get(b).value == $(".yearTo:visible").get(b).value) &&
				$(".monFrom:visible").get(b).value > $(".monTo:visible").get(b).value)
				{
					handleError("comTP_err"+ window["compctr" + b] ,
					'Please be sure the start date is not after the end date.',$(".monTo:visible").get(b).id);
					e.preventDefault();
				}

				else if(($(".yearFrom:visible").get(b).value > $(".yearTo:visible").get(b).value) &&
				$(".monFrom:visible").get(b).value == $(".monTo:visible").get(b).value)
				{
					handleError("comTP_err"+ window["compctr" + b] ,
					'Please be sure the start date is not after the end date.',$(".monTo:visible").get(b).id);
					e.preventDefault();
				}

				else if( $(".monFrom:visible").get(b).value=="0" || $(".monTo:visible").get(b).value=="0" ||
				$(".yearFrom:visible").get(b).value=="-" || $(".yearTo:visible").get(b).value =="-" )
				{
					handleError("comTP_err"+ window["compctr" + b] ,'Please select a valid date.',$(".yearTo:visible").get(b).id);
					e.preventDefault();
				}

				b=b+1;

			}


			var c=0;
			while(c<=$(".prname:visible").length-1){
				window["prefctr" + c] =$(".prname:visible").get(c).id;
				window["prefctr" + c]= window["prefctr" + c].match(/\d+$/);
				var numbers = /^[0-9]+$/;
				var emailVal = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if($(".prname:visible").get(c).value == ""){
					handleError("prname_err"+ window["prefctr" + c] ,'Name is required.',
					$(".prname:visible").get(c).id);
					e.preventDefault();
				}
				if(!numbers.test($(".cnum:visible").get(c).value)){
					handleError("cnum_err"+ window["prefctr" + c] ,'Contact Number is invalid.',
					$(".cnum:visible").get(c).id);
					e.preventDefault();
				}
				else if($(".cnum:visible").get(c).value.length!=11 ){
					handleError("cnum_err"+ window["prefctr" + c] ,'Contact Number is invalid.',
					$(".cnum:visible").get(c).id);
					e.preventDefault();
				}
				else if($(".cnum:visible").get(c).value==""){
					handleError("cnum_err"+ window["prefctr" + c] ,'Contact Number is required.',
					$(".cnum:visible").get(c).id);
					e.preventDefault();
				}
				if(!emailVal.test($(".cemail:visible").get(c).value)){
					handleError("cemail_err"+ window["prefctr" + c] ,'Email address is invalid.',
					$(".cemail:visible").get(c).id);
					e.preventDefault();
				}
				else if($(".cemail:visible").get(c).value==""){
					handleError("cemail_err"+ window["prefctr" + c] ,'Email Address is required.',
					$(".cemail:visible").get(c).id);
					e.preventDefault();
				}

				c=c+1;
			}


			if(imgval=='true'){
				handleError("img_err",'Image size must be 1.5 inches X 1.5 inches.',"userfile");
				e.preventDefault();

			}


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



			if($("#new_school").val() == "" && $(".educ_2").is(":visible"))
			{
				handleError("sch2",'School is required.',$("#new_school").attr('id'));
				e.preventDefault();
			}
			if($("#new_mjr").val() == "" && $(".educ_2").is(":visible"))
			{
				handleError("major2",'Field of Study is required.',$("#new_mjr").attr('id'));
				e.preventDefault();
			}
			if($("#new_degree").val() == "-" && $(".educ_2").is(":visible"))
			{
				handleError("dgree2",'Please select valid degree.',$("#new_degree").attr('id'));
				e.preventDefault();
			}
			if($("#new_DAtty1").val() > $("#new_DAtty2").val() && $(".educ_2").is(":visible"))
			{
				handleError("date2",'Please be sure the start date is not after the end date.',$("#new_DAtty2").attr('id'));
				e.preventDefault();
			}

			else if((($("#new_DAtty1").val() == $("#new_DAtty2").val()) ||
			($("#new_DAtty1").val()=="-" && $("#new_DAtty2").val()=="-"))
			&& $(".educ_2").is(":visible"))


			{
				handleError("date2",'Please be select valid date.',$("#new_DAtty2").attr('id'));
				e.preventDefault();
			}




			if($("#compname").val() == "" && $(".pexp").is(":visible"))
			{
				handleError("compname2_err",'Company Name is required.',$("#compname").attr('id'));
				e.preventDefault();
			}
			if($("#title").val() == "" && $(".pexp").is(":visible"))
			{
				handleError("title2_err",'Title is required.',$("#title").attr('id'));
				e.preventDefault();
			}
			if($("#loc").val() == "" && $(".pexp").is(":visible"))
			{
				handleError("loc2_err",'Location is required.',$("#loc").attr('id'));					e.
				preventDefault();
			}
			if((($("#year1").val()> $("#year2").val()) &&
			$("#mon1").val()> $("#mon2").val()) && $(".pexp").is(":visible"))
			{
				handleError("comTP2_err",'Please be sure the start date is not after the end date.',$("#year2").attr('id'));
				e.preventDefault();
			}
			else if((($("#year1").val() == $("#year2").val()) && $("#mon1").val() > $("#mon2").val())
			&& $(".pexp").is(":visible"))
			{
				handleError("comTP2_err",'Please be sure the start date is not after the end date.',$("#mon2").attr('id'));
				e.preventDefault();
			}

			else if(($("#mon1").val()=="0" || $("#mon2").val()=="0" ||
			$("#year1").val()=="-" || $("#year2").val() =="-") && $(".pexp").is(":visible") )
			{
				handleError("comTP2_err",'Please select a valid date.',$("#year2").attr('id'));
				e.preventDefault();
			}


			var numbers = /^[0-9]+$/;
			var emailVal = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
			if($("#new_prname").val() == "" && $(".new_pref").is(":visible")){
				handleError("prname2_err" ,'Name is required.',$("#new_prname").attr('id'));
				e.preventDefault();
			}

			if($("#new_cnum").val() == "" && $(".new_pref").is(":visible")){
				handleError("cnum2_err" ,'Number is required.',$("#new_cnum").attr('id'));
				e.preventDefault();
			}
			else if($("#new_cnum").val().length != "11" && $(".new_pref").is(":visible")){
				handleError("cnum2_err" ,'Number is invalid.',$("#new_cnum").attr('id'));
				e.preventDefault();
			}
			else if(!numbers.test($("#new_cnum").val()) && $(".new_pref").is(":visible")){
				handleError("cnum2_err",'Contact Number is invalid.',$("#new_cnum").attr('id'));

				e.preventDefault();
			}
			if($("#new_cemail").val() == "" && $(".new_pref").is(":visible")){
				handleError("cemail2_err" ,'Email address is required.',$("#new_cemail").attr('id'));
				e.preventDefault();
			}

			else if(!emailVal.test($("#new_cemail").val()) &&  $(".new_pref").is(":visible")){
				handleError("cemail2_err" ,'Email address is invalid.',$("#new_cemail").attr('id'));
				e.preventDefault();
			}















			return true;





        });

    };
};

var validator = new Validator('#infos');
validator.validate();
