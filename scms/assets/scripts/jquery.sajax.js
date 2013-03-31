/**
* class ajax engine
* @author putera kahfi
* @depend jquery
*/


//init sajax
$(document).ready(function(){
	$("body").delegate('a','click',function(e){
		var s = $(this);
		var url =s.attr('href');
		if(s.hasClass("xhr")){
		e.preventDefault();
		url +=url+"&comp=true";
			$("#content").load(url);
		}

		});

	$("body").delegate("form","submit",function(){
		var th = $(this);
		var xhrClass = th.hasClass("xhr");
		if(xhrClass){
		if(th.attr('anctype')=='multipart/form-data'){
			th.ajaxSubmit({
				url:th.attr('action')+'comp=true',
				success:function(data){
				$("#content").html(data);
				}
			});
		}else{
			$.ajax({
				type:'POST',
				url:th.attr('action'),
				success:function(data){
					$("#content").html(data);
				}
			})
		}
		return false;
		}
	});


	});
