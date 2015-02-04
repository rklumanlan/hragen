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
	
	//update values
	$("#Updatepinfo").click(function(){
		$('#case_update').val($("#Updatepinfo").attr('id'));
		
	});
	$("#Updatetskills").click(function(){
		$('#case_update').val($("#Updatetskills").attr('id'));
		
	});
		
	
	//inserting position
	$("#addcomp").click(function(){
		$('#insertcomp').removeClass('invi');
		$('#addcomp').addClass('invi');
		$('#cancelcomp').removeClass('invi');
		$("#comp").slideDown();
		
	});
	
	$("#insertcomp").click(function(){
			$('#case_update').val($("#insertcomp").attr('id'));
			
		});
		
	$("#cancelcomp").click(function(){
			$("#infos")[0].reset();
			$("#comp").slideUp();
			$("#cancelcomp").addClass('invi');
			$("#insertcomp").addClass('invi');
			$("#addcomp").removeClass('invi');
			$('.error').text('');
		});
		
	
	//inserting education
	$("#addeduc").click(function(){
		$('#inserteduc').removeClass('invi');
		$('#addeduc').addClass('invi');
		$('#canceleduc').removeClass('invi');
		$("#educ").slideDown();
		
		
            
	});
	
	$("#inserteduc").click(function(){
			$('#case_update').val($("#inserteduc").attr('id'));
			
		});
		
	$("#canceleduc").click(function(){
			$("#infos")[0].reset();
			$("#educ").slideUp();
			$("#canceleduc").addClass('invi');
			$("#inserteduc").addClass('invi');
			$("#addeduc").removeClass('invi');
			$('.error').text('');
		});
		
		
	//inserting reference
	$("#addpref").click(function(){
		$('#insertpref').removeClass('invi');
		$('#addpref').addClass('invi');
		$('#cancelpref').removeClass('invi');
		$("#pref").slideDown();
		
            
	});
	
	$("#insertpref").click(function(){
			$('#case_update').val($("#insertpref").attr('id'));
			
		});
		
	$("#cancelpref").click(function(){
			$("#infos")[0].reset();
			$("#pref").slideUp();
			$("#cancelpref").addClass('invi');
			$("#insertpref").addClass('invi');
			$("#addpref").removeClass('invi');
			$('.error').text('');
		});
		
		
	
	//update education
		
	$(".editeduc").click(function(educ){
		educ.preventDefault();
		var educid = this.id;
		$('#'+educid).find('*').removeAttr('disabled');
		$('#'+educid).find('*').attr('readonly',false);
		$('#'+educid).find('*').removeClass('invi');
		$('#case_update').val($("#Updateeduc").attr('id'));
		$('#ctr_update').val(educid.match(/\d+$/));	
	});
	$(".cancelupdateeduc").click(function(educ){
			educ.preventDefault();
			var updeducid = this.id;
			$('#'+updeducid).find('*').attr('disabled','disabled');
			$('#'+updeducid).find('*').prop('readonly', true);
			$('.updbuttons').addClass('invi');
			
		});
	
	
		
		
	//update company
	$(".editcomp").click(function(comp){
		comp.preventDefault();
		var compid = this.id;
		$('#'+compid).find('*').removeAttr('disabled');
		$('#'+compid).find('*').attr('readonly',false);
		$('#'+compid).find('*').removeClass('invi');
		$('#case_update').val($("#Updatecomp").attr('id'));
		$('#ctr_update').val(compid.match(/\d+$/));		
        
	});
	$(".cancelupdatecomp").click(function(comp){
			comp.preventDefault();
			var updcompid = this.id;
			$('#'+updcompid).find('*').attr('disabled','disabled');
			$('#'+updcompid).find('*').prop('readonly', true);
			$('.updbuttons').addClass('invi');
			
			
		});
		
	//update reference
	$(".editpref").click(function(pref){
		pref.preventDefault();
		var prefid = this.id;
		$('#'+prefid).find('*').removeAttr('disabled');
		$('#'+prefid).find('*').attr('readonly',false);
		$('#'+prefid).find('*').removeClass('invi');
		$('#case_update').val($("#Updatepref").attr('id'));
		$('#ctr_update').val(prefid.match(/\d+$/));	
	});
	
	$(".cancelupdatepref").click(function(pref){
			pref.preventDefault();
			var updprefid = this.id;
			$('#'+updprefid).find('*').attr('disabled','disabled');
			$('#'+updprefid).find('*').prop('readonly', true);
			$('.updbuttons').addClass('invi');
			
			
		});
		
	//remove reference
	
	$(".rempref").click(function(pref){
			var remprefid = this.id;
			$('#ctr_update').val(remprefid.match(/\d+$/));
			$('#case_update').val("Rempref");
			
		});		
	//remove comp
	
	$(".remcomp").click(function(pref){
			var remcompid = this.id;
			$('#ctr_update').val(remcompid.match(/\d+$/));
			$('#case_update').val("Remcomp");
		});
			
	//remove edeuc
	
	$(".remeduc").click(function(pref){
			var remeducid = this.id;
			$('#ctr_update').val(remeducid.match(/\d+$/));
			$('#case_update').val("Remeduc");
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