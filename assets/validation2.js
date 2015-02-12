
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
	//admin view
	$("#clickhere").click(function(){
			$('input:text').val('');
			$('select').val('-');
			$('input:checkbox').removeAttr('checked');
			$("#refineRes").css('display','none');
			$("#results").css('display','none');
			$("#criteria").css('display','block');
		});
	
	
	
	if ($("#results").is(':visible')){
	   $("#criteria").css('display','none');
	}
	if ($("#criteria").is(':visible')){
	   $("#refineRes").css('display','none');
	   
	}
	
	
	
	//update values
	$("#Updatepinfo").click(function(){
		$('#case_update').val($("#Updatepinfo").attr('id'));
		
	});
	$("#Updatetskills").click(function(){
		$('#case_update').val($("#Updatetskills").attr('id'));
		
	});
		
	

	
	//inserting education/comp/pref
	$(".addbtn").click(function(){
		var addctr=this.id;
		$('#insert'+addctr).fadeIn(500);
		$('#c'+addctr).fadeIn(500);
		$("#"+addctr+"_new").slideDown();
		$('#'+addctr).hide();
		$('#case_update').val($("#insert"+addctr).attr('id'));
            
	});
	//cancel inserting education/comp/pref	
	$(".cancelbtn").click(function(){
			var canctr = this.id;
			var canctr = canctr.replace('c', '');
			$("#infos")[0].reset();
			$('#insert'+canctr).hide();
			$('#c'+canctr).hide();
			$("#"+canctr+"_new").slideUp();
			$("#"+canctr).fadeIn(500);
			$('#case_update').val("");
			$('.error').text('');
		});
		
	//update education/comp/pref
	$(".edit").click(function(edit){
		edit.preventDefault();
		var editid = this.id;
		alert(editid);
		$('#'+editid).find('*').removeAttr('disabled');
		$('#'+editid).find('*').attr('readonly',false);
		$('#'+editid).find('*').fadeIn(500);
		$('#case_update').val($("#Updateeduc").attr('id'));
		$('#ctr_update').val(editid.match(/\d+$/));	
		var editid  = editid.replace(editid.match(/\d+$/), '');
		$('#'+editid).hide();
	});
	
	//cancel update company/educ/pref
	$(".cancelupdate").click(function(cupd){
			cupd.preventDefault();
			var updcupdid = this.id;
			$('#'+updcupdid).find('*').attr('disabled','disabled');
			$('#'+updcupdid).find('*').prop('readonly', true);
			$('.updbuttons').hide();
			var updcupdid  = updcupdid.replace(updcupdid.match(/\d+$/), '');
			$('#'+updcupdid).fadeIn(500);
			
		});
		
	//remove reference/educ/comp
	$(".remove").click(function(pref){
			var remprefid = this.id;
			$('#ctr_update').val(remprefid.match(/\d+$/));
			var remprefid = remprefid.replace(remprefid.match(/\d+$/), '');
			$('#case_update').val(remprefid);
			
			
		});	
		
		
		
		
		
	$(".editpinfo").click(function(){
		$('.update_pinfo2').fadeIn(500);
		$('.update_pinfo2').find('*').removeAttr('disabled');
		$('.update_pinfo2').find('*').prop('readonly', false);
		$('.update_pinfo2').find('*').removeClass('invi');
		$('.update_pinfo1').hide();
		$('#page_update').val("main_page");
		
	});
	$("#cancelpinfo_mpage").click(function(){
		$('.update_pinfo1').fadeIn(500);
		$('.update_pinfo2').hide();
		$('.update_pinfo2').find('*').attr('readonly', true);;
		$('.update_pinfo2').find('*').prop("disabled", true);
		
	});
	
	$(".edittskills").click(function(){
		
		$('.tskills1').hide();
		$('.tskills2').fadeIn(500);
		$('#page_update').val("main_page");
		$('#case_update').val($("#Updatetskills").attr('id'));
		$("#edttskills"	).hide();
		$(".edttskillsbtn").show();
		$("input.edttskills").prop("disabled", false);
		
	});
	
	
	$("#canceltskills_mpage").click(function(){	
		$("input.edttskills").prop("disabled", true)
		$("#infos")[0].reset();
		$('.tskills2').hide();
		$('.tskills1').fadeIn(500);
		$("#edttskills").show();
		$(".edttskillsbtn").hide();
		
	
	});
	
	$(".editeduc_mpage").click(function(){
		var educid = this.id;
		$('#'+educid).hide();
		$('#educ'+educid).fadeIn(500);
		$('#educ'+educid).find('*').removeAttr('disabled');
		$('#educ'+educid).find('*').attr('readonly',false);
		$('#educ'+educid).find('*').removeClass('invi');
		$('#case_update').val($("#Updateeduc").attr('id'));
		$('#ctr_update').val(educid.match(/\d+$/));	
		$('#addeduc').addClass('invi');
		$('#page_update').val("main_page");
	});
	$(".cancelupdateeduc_mpage").click(function(){
		var updeducid = this.id;
		$('#'+updeducid).find('*').attr('disabled','disabled');
		$('#'+updeducid).find('*').prop('readonly', true);
		$('.updbuttons').addClass('invi');
		$('#'+updeducid).hide();
		$('#'+updeducid.match(/\d+$/)).fadeIn(500);
		$('#addeduc').removeClass('invi');
	});
	$("#canceleduc_mpage").click(function(){
		$("#infos")[0].reset();
		$("#educ").hide();
		$('#addeduc_mpage').fadeIn(500);
		$('.edteducbtn2').hide();
		$('#case_update').val("");
		
	});
	$("#addeduc_mpage").click(function(){
		$('#canceleduc_mpage').fadeIn(500);
		$('#inserteduc').fadeIn(500);
		$('#addeduc_mpage').hide();
		$('.edteducbtn2').show();
		$("#educ").slideDown();
		$('#page_update').val("main_page");
		$('#case_update').val("inserteduc");
		
            
	});
	
	
	
	$(".editcomp_mpage").click(function(){
		var compid = this.id;
		$('#'+compid).hide();
		$('#com'+compid).fadeIn(500);
		$('#com'+compid).find('*').removeAttr('disabled');
		$('#com'+compid).find('*').attr('readonly',false);
		$('#com'+compid).find('*').removeClass('invi');
		$('#case_update').val($("#Updatecomp").attr('id'));
		$('#ctr_update').val(compid.match(/\d+$/));	
		$('#addcomp').addClass('invi');
		$('#page_update').val("main_page");
	});
	$(".cancelupdatecomp_mpage ").click(function(){
		var updcompid = this.id;
		$('#'+updcompid).find('*').attr('disabled','disabled');
		$('#'+updcompid).find('*').prop('readonly', true);
		$('.updbuttons').addClass('invi');
		$('#'+updcompid).hide();
		$('#'+updcompid.match(/\d+$/)).fadeIn(500);
		$('#addcomp').removeClass('invi');
		
	});
	$("#addcomp_mpage").click(function(){
		$('#cancelcomp_mpage').fadeIn(500);
		$('#insertcomp').fadeIn(500);
		$('#addcomp_mpage').hide();
		$('.edtcompbtn2').show();
		$("#comp").slideDown();
		$('#page_update').val("main_page");
		$('#case_update').val("insertcomp");
            
	});
	$("#cancelcomp_mpage").click(function(){
		$("#infos")[0].reset();
		$("#comp").hide();
		$('#addcomp_mpage').fadeIn(500);
		$('.edtcompbtn2').hide();
		$('#case_update').val("");
		
	});



	$(".editpref_mpage").click(function(){
		var prefid = this.id;
		$('#'+prefid).hide();
		$('#pref'+prefid).fadeIn(500);
		$('#pref'+prefid).find('*').removeAttr('disabled');
		$('#pref'+prefid).find('*').attr('readonly',false);
		$('#pref'+prefid).find('*').removeClass('invi');
		$('#case_update').val($("#Updatepref").attr('id'));
		$('#ctr_update').val(prefid.match(/\d+$/));	
		$('#addpref').addClass('invi');
		$('#page_update').val("main_page");
	});
	
	$(".cancelupdatepref_mpage ").click(function(){
		var updprefid = this.id;
		$('#'+updprefid).find('*').attr('disabled','disabled');
		$('#'+updprefid).find('*').prop('readonly', true);
		$('.updbuttons').addClass('invi');
		$('#'+updprefid).hide();
		$('#'+updprefid.match(/\d+$/)).fadeIn(500);
		$('#addpref').removeClass('invi');
		
	});
	$("#addpref_mpage").click(function(){
		$('#cancelpref_mpage').fadeIn(500);
		$('#insertpref').fadeIn(500);
		$('#addpref_mpage').hide();
		$('.edtprefbtn2').show();
		$("#pref").slideDown();
		$('#page_update').val("main_page");
		$('#case_update').val("insertpref");
            
	});
	
	$("#cancelpref_mpage").click(function(){
		$("#infos")[0].reset();
		$("#pref").hide();
		$('#addpref_mpage').fadeIn(500);
		$('.edtprefbtn2').hide();
		$('#case_update').val("");
		
	});
	
	
});