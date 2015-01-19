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
	
	
	
	var comp2;
	for(var comp=1;comp<=$(".pexp").length;comp++)
	{
		if ($("#compname"+comp).val()==""){
			
			$("#pexp"+comp).addClass('invi');
			
		}
	}
	$("#addcomp").click(function(){
		
		comp2 = $(".pexp:visible").length;
        	while(comp2<=4){
            	comp2++;
				$('#compCTR').val(comp2);
				$("#pexp"+comp2).slideDown();
                break;
              }
			
            
		});
	$("#remcomp").click(function(){
		var comp3=comp2-1;
        	while(comp2>=2){
            	
            	$('#compCTR').val(comp3);
				$("#pexp"+comp2).slideUp();
				comp2--;
                break;
              }
			
            
		});
		
	var educ2;
	for(var educ=1;educ<=$(".educ").length;educ++)
	{
		if ($("#school"+educ).val()==""){
			
			$("#educ"+educ).addClass('invi');
			
		}
		/*$("#DAtty1"+educ).change(function(){ 
		  $("#DAtty1"+educ).val($("#DAtty1"+educ));
		});
		$("#DAtty2"+educ).change(function(){ 
		  $("#DAtty2"+educ).val($("#DAtty2"+educ));
		});
		$("#degree"+educ).change(function(){
		  $("#degree"+educ).val($("#degree"+educ));
		});*/
	}
	$("#addeduc").click(function(){
		$('#edteduc').css('display','none');
		$('#saveeduc').removeClass('invi');
		educ2 = $(".educ:visible").length;
		while(educ2<=4){
			educ2++;
			
			
			$('#educ'+educ2+' input[type="text"] ').removeAttr("readonly");
			$('select[id=DAtty1'+educ2+']').removeAttr("disabled");
			$('select[id=DAtty2'+educ2+']').removeAttr("disabled");
			$('select[id=degree'+educ2+']').removeAttr("disabled");
			$('#EAdes'+educ2+'').prop('readonly',false);
			
			
			$('#educCTR').val(educ2);
			
			$("#educ"+educ2).slideDown();
			
			break;
		  }
			
            
	});
		
		
		
	$("#remeduc").click(function(){
		
				
			var educ3= educ2-1;
        	while(educ2>=2){
            	$('#educ'+educ2+' input[type="text"]').val('');
            	$('#DAtty1'+educ2).val('-');
            	$('#DAtty2'+educ2).val('-');
            	$('#degree'+educ2).val('-');
            	$('#educCTR').val(educ3);
				$("#educ"+educ2).slideUp();
				educ2--;
                break;
              }
			
            
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
	
	$('#compCTR').val($(".pexp:visible").length);
	$('#prefCTR').val($(".pexp:visible").length);
	$('#educCTR').val($(".educ:visible" ).length);
	
	if ($("#results").is(':visible')){
	   $("#criteria").css('display','none');
	}
	if ($("#criteria").is(':visible')){
	   $("#refineRes").css('display','none');
	}
	
});