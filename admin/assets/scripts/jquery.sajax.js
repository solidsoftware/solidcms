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
		url +=url+"&comp=true"
		$.ajax({
			type:'get',
			url :url,
			success:function(data){
			  $("#content").html(data);
			}
		});

		}
	});

});

