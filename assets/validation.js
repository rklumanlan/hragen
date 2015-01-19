
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
				pr--;
                break;
              }
			
            
		});
        $("#addeduc").click(function(){
        	while(educ<=4){
            	
            	educ++;
				$("#educ"+educ).slideDown();
				$("#count").val(educ);
				
                break;
              }
			
            
		});
		 $("#remeduc").click(function(){
			 if(educ==5){
				educ=4;
			 }
        	while(educ>=2){
            	
            	
				$("#educ"+educ).slideUp();
				$("#count").val(educ);
				educ--;
                break;
              }
			
            
		});
		
        $("#addpexp").click(function(){
        	while(comp<=4){
            	
            	comp++;
				$("#pexp"+comp).slideDown();
				$("#ctr").val(comp);
                break;
              }
			
            
		});
		$("#rempexp").click(function(){
			 if(comp==5){
				comp=4;
			 }
        	while(comp>=2){
            	
            	
				$("#pexp"+comp).slideUp();
				$("#ctr").val(comp);
				comp--;
                break;
              }
			
            
		});
		
		
		
	});
	
	

	
	
var Validator = function(form) {
    
    this.form = $(form);
	
		
    var handleError = function(element,message,dp1) {
		var error = $('<div name="err" class="col-sm-12 error text-center"></div>').text(message);
		error.appendTo('.'+element);
		$("#"+dp1).change(function() {
			$(error).fadeOut(500, function() {
               err.removeClass('error');
            });
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
				handleError("fname",'First Name is required.',"fname");
					e.preventDefault();
			}
			if(lname == "")
			{
				handleError("lname",'Last Name is required.',"lname");
					e.preventDefault();
			}
			if(add == "")
			{
				handleError("add",'Address is required.',"add");
					e.preventDefault();
			}
			if(prov_mun == "")
			{
				handleError("prov_mun",'Province/Municipality is required.',"prov_mun");
					e.preventDefault();
			}
			if(sex == "-")
			{
				handleError("sex",'Please select valid sex.',"sex");
					e.preventDefault();
			}
			if(age == "-")
			{
				handleError("age",'Please select valid age.',"age");
					e.preventDefault();
			}
			
			for(var a=0; a<=4; a++)
			{
				var x = $(".dateFrom").get(a).value;
				var y = $(".dateTo").get(a).value;
				var sch = $(".school").get(a).value;
				var mjor = $(".mjr").get(a).value;
				var degree = $(".deg").get(a).value;
				
				
				if(sch == "")
				{
					handleError("sch"+ parseInt(a + 1),'School is required.',$(".school").get(a).id);
						e.preventDefault();
				}
				if(mjor == "")
				{
					handleError("major"+ parseInt(a + 1),'Field of Study is required.',$(".mjr").get(a).id);
						e.preventDefault();
				}
				if(degree == "-")
				{
					handleError("dgree"+ parseInt(a + 1),'Please select valid degree.',$(".deg").get(a).id);
						e.preventDefault();
				}
				
				
				if(x>y)
				{ 
					handleError("date"+ parseInt(a + 1),'Please be sure the start date is not after the end date.',
					$(".dateTo").get(a).id);
					e.preventDefault();
				}
				if( x=="-" || y=="-" || (x==y) )
				{
					
					handleError("date"+ parseInt(a + 1),'Please select a valid date.',$(".dateTo").get(a).id);
					e.preventDefault();
				}
			
				
				var com = $(".comp").get(a).value;
				var tle = $(".title").get(a).value;
				var loc = $(".loca").get(a).value;
				var j = $(".monFrom").get(a).value;
				var k = $(".monTo").get(a).value;
				
				var l = $(".yearFrom").get(a).value;
				var m = $(".yearTo").get(a).value;
				
				if(com == "")
				{
					handleError("comp"+ parseInt(a + 1),'Company name is required.',$(".comp").get(a).id);
						e.preventDefault();
				}
				if(tle == "")
				{
					handleError("tit"+ parseInt(a + 1),'Title is required.',$(".title").get(a).id);
						e.preventDefault();
				}
				if(loc == "")
				{
					handleError("location"+ parseInt(a + 1),'Location is required.',$(".loca").get(a).id);
						e.preventDefault();
				}
				
				
				
				if(l>m)
				{
					handleError("comTP"+ parseInt(a + 1) ,'Please be sure the start date is not after the end date.',
					$(".yearTo").get(a).id);
					e.preventDefault();
				}
				else if(l==m && j<k)
				{
					handleError("comTP"+ parseInt(a + 1) ,'Please be sure the start date is not after the end date.',
					$(".yearTo").get(a).id);
					e.preventDefault();
				}
				else if( j=="0" || k=="0" || l=="-" || m=="-" )
				{
					
					handleError("comTP"+ parseInt(a + 1) ,'Please select a valid date.',
					$(".yearTo").get(a).id);
					e.preventDefault();
				}
				else
				{	
					return true;
				}
					
				
			}
			
        });

    };
};

var validator = new Validator('#info');
validator.validate();
