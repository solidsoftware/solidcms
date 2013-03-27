$(document).ready(function(){

	$("#form-input").validate({
		rules:{
			app_code :"required",
			app_name :"required",
			app_desc :"required"
		}
	});
});