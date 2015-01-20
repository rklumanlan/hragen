function clickhere(){
	$("#refineRes").css('display','none');
	$("#results").css('display','none');
	$("#criteria").css('display','block');
}
function edt(vale){
	
	
	if(vale!="edttskills"){
	for(var x=0;x<=(($("."+vale).length)-1);x++)
	{
		$("."+vale).get(x).removeAttribute('readonly');
		$("."+vale).get(x).removeAttribute('disabled');
	}
	$("#"+$("."+vale+"btn").get(0).id).addClass('invi');
	$("#"+$("."+vale+"btn").get(1).id).removeClass('invi');
	$("#"+$("."+vale+"btn").get(2).id).removeClass('invi');
	
	$("#"+$("."+vale+"btn").get(3).id).removeClass('invi');
	$("#"+$("."+vale+"btn").get(4).id).removeClass('invi');
	}
	
	
	if(vale=="edttskills"){
		$("input.edttskills").prop("disabled", false);
		$("#"+$("."+vale+"btn").get(0).id).addClass('invi');
		$("#"+$("."+vale+"btn").get(1).id).removeClass('invi');
		$("#"+$("."+vale+"btn").get(2).id).removeClass('invi');
	}	
	
	
	
}


function cancel(value,val2){
	if(value!="canceltskills"){
	for(var y=0;y<=(($("."+val2).length)-1);y++){
	
		$("#"+$("."+val2).get(y).id).attr("readonly","readonly");
		$("#"+$("."+val2).get(y).id).attr("disabled","disabled");
	}
	
	$("#"+$("."+val2+"btn").get(0).id).removeClass('invi');
	$("#"+$("."+val2+"btn").get(1).id).addClass('invi');
	
	$("#"+$("."+val2+"btn").get(2).id).addClass('invi');
	
	
	$("#"+$("."+val2+"btn").get(3).id).addClass('invi');
	$("#"+$("."+val2+"btn").get(4).id).addClass('invi');
	}
	if(value=="canceltskills"){
		$("input.edttskills").prop("disabled", true);
		$("#"+$("."+val2+"btn").get(0).id).removeClass('invi');
		$("#"+$("."+val2+"btn").get(1).id).addClass('invi');
		
		$("#"+$("."+val2+"btn").get(2).id).addClass('invi');
	}	
	
}


$(document).ready(function(){
	$("#educ").css('display','none');
	$("#comp").css('display','none');
	
	
	//inserting position
	$("#addcomp").click(function(){
		$('#insertcomp').removeClass('invi');
		$('#addcomp').css('display','none');
		$('#cancelcomp').removeClass('invi');
		$("#comp").slideDown();
		
		
            
	});
	
	$("#insertcomp").click(function(){
			$('#case_update').val($("#insertcomp").attr('id'));
			
		});
		
	$("#cancelcomp").click(function(){
			$("#prevform")[0].reset();
			$("#comp").slideUp();
		});
		
	
	//inserting education
	$("#addeduc").click(function(){
		$('#inserteduc').removeClass('invi');
		$('#addeduc').css('display','none');
		$('#canceleduc').removeClass('invi');
		$("#educ").slideDown();
		
            
	});
	
	$("#inserteduc").click(function(){
			$('#case_update').val($("#inserteduc").attr('id'));
			
		});
		
	$("#canceleduc").click(function(){
			$("#prevform")[0].reset();
			$("#educ").slideUp();
		});
		
		
		
		
	var pref2;
	for(var pref=1;pref<=$(".pref").length;pref++)
	{
		if ($("#prname"+pref).val()==""){
			
			$("#pr"+pref).addClass('invi');
			
		}
	}
	$("#addpref").click(function(){
		
		pref2 = $(".pref:visible").length;
        	while(pref2<=3){
            	pref2++;
				$('#prefCTR').val(pref2);
				$("#pr"+pref2).slideDown();
                break;
              }
			
            
		});
	$("#rempref").click(function(){
		var pref3=pref2-1;
        	while(pref2>=2){
            	
            	$('#educCTR').val(pref3);
				$("#pr"+pref2).slideUp();
				pref2--;
                break;
              }
			
            
		});
	
	
	
	
	
	
	
		
		
		
		
		
		
	$("#Updateeduc").click(function(){
			$('#case_update').val('Updateeduc');
		});
	$("#Updatecomp").click(function(){
			$('#case_update').val('Updatecomp');
		});
	$("#Updatepref").click(function(){
			$('#case_update').val('Updatepref');
		});
	

	//admin view
	if ($("#results").is(':visible')){
	   $("#criteria").css('display','none');
	}
	if ($("#criteria").is(':visible')){
	   $("#refineRes").css('display','none');
	   $("#search")[0].reset();
	}
	
});