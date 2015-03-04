
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
			$("#refineRes").hide();
			$("#results").hide();
			$("#criteria").fadeIn(500);
		});



	if ($("#results").is(':visible')){
	   $("#criteria").hide();
	}
	else if ($("#criteria").is(':visible')){
	   $("#refineRes").hide();

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
		$('#'+editid).hide();

		if($('#page_update').val()=="main_page"){
			var editctr = "2"+editid;
		}
		else{
			var editctr=editid;
		}
		$('#'+editctr).fadeIn(500);
		$('#'+editctr).find('*').removeAttr('disabled');
		$('#'+editctr).find('*').attr('readonly',false);
		$('#'+editctr).find('*').fadeIn(500);
		if ($("#"+$(".cbox").attr('id')).is(':checked')) {
			var cbox = $(".cbox").attr('id');
			var cbox = cbox.replace(/\D/g, "");
			$("#"+ cbox).hide();
			$("#to"+ cbox).hide();
			$("#idTo"+ cbox).show();
			$("#present"+ cbox).prop('readonly', true);
		}
		else{alert('dd');
			var cbox = $(".cbox").attr('id');
			var cbox = cbox.replace(/\D/g, "");
			$("#"+ cbox).show();
			$("#to"+ cbox).show();
			$("#idTo"+ cbox).hide();


		}

		$('#ctr_update').val(editid.match(/\d+$/));
		var editid  = editid.replace(editid.match(/\d+$/), '');
		$('#case_update').val($("#Update"+editid).attr('id'));


	});

	//cancel update company/educ/pref
	$(".cancelupdate").click(function(cupd){
			$("#infos")[0].reset();
			cupd.preventDefault();
			var updcupdid = this.id;
			if($('#page_update').val()=="main_page"){
				var updcupdctr = "2"+updcupdid;
				$('#'+updcupdctr).hide();
				$('#'+updcupdid).fadeIn(500);
			}
			else{
				var updcupdctr=updcupdid;
			}
			$('#'+updcupdctr).find('*').attr('disabled','disabled');
			$('#'+updcupdctr).find('*').prop('readonly', true);
			$('.updbuttons').hide();



			if ($(".cbox").is(':checked')) {

				var cbox = $(".cbox").attr('id');
				var cbox = cbox.replace(/\D/g, "");
				$("#"+ cbox).hide();
				$("#to"+ cbox).hide();
				$("#idTo"+ cbox).show();
			}
			else{
				var cbox = $(".cbox").attr('id');
				var cbox = cbox.replace(/\D/g, "");
				$("#"+ cbox).show();
				$("#to"+ cbox).show();
				$("#idTo"+ cbox).hide();


			}


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




});
