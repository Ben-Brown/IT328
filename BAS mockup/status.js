var main = function(){
	var $currentStudent = $('#current-student');
	var $sidLengthSpan = $('#sid-length');
	var $sid = $('#sid');
	var $sidLength = $('#sid-length');
	$('input[name="status"]').on('click', function(){
		if ($('input:checked').val() == "current"){

			$currentStudent.fadeIn(400).removeClass('hidden');
			$sid.val("");
			$('#singlebutton').addClass('disabled');
		}
		else {
			$currentStudent.fadeOut(400).addClass('hidden');
			$('#singlebutton').removeClass('disabled');
		}
	});

	$sid.on('input', function(){
		if ((parseInt($sid.val()) + "").length == 9){
			$('#singlebutton').removeClass('disabled');
			$sidLength.addClass('glyphicon-ok-sign');
			$sidLength.removeClass('glyphicon-remove-circle');
		}
		else{
			$('#singlebutton').addClass('disabled');
			$sidLength.removeClass('glyphicon-ok-sign');
			$sidLength.addClass('glyphicon-remove-circle');
		}
	});

}
$(document).ready(main);