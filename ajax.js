jQuery(document).ready(function() {
	jQuery(".add").click(function(){
		math("add");
});
	jQuery(".subs").click(function(){
		math("subs");
});
	jQuery(".mul").click(function(){
		math("mul");
});
	jQuery(".div").click(function(){
		math("div");
});

	function math($cal){
		var input1= jQuery("#input1").val();
		var input2= jQuery("#input2").val();

		$.ajax({
			url:"process.php",
			type: "POST",
			data:{
				'mydata1' : input1,
				'mydata2' : input2,
				'check'	: $cal
			},

			success: function(res) {
				jQuery("#result").val(res);
			}
		});
	}


});