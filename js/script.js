$(document).ready(function(){
	$('#shout').on('click', function(){
		var name = $('#name').val();
		var shout = $('#shout-here').val();
		var date =  getDate();
		var dataString = "name= "+ name + "&shout= " + shout + "&date= " + date;

		if(name == "" || shout == ""){
			alert("please shout something");
		}else{
			$.ajax({
				type:"POST",
				url:"../jsshoutbox/shoutbox.php",
				data: dataString,
				cache: false,
				success: function(html){
					$('#shouts ul').prepend(html);
				}
			});
		}

		return false;
	});
});

function getDate(){
	return new Date();
}