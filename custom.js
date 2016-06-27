$(document).ready(function(){
 
		var test=null;
		var address=null;
		
	$("form").submit(function() { 
		 
	
		
		$.ajax({
				  url: 'http://jsonip.com/',
				  async: false,
				  dataType: 'json',
				  success: function (response) {
					// do stuff with response.
				
				address=response.ip.substring(0, 13);
			
					
					
				  }
			});
			
	document.getElementById("NumRows").value=address;
});

		var sec = 0
		var min = 3
	
		 $("#Attending").click(function(){
				
			
			
			
			var timer = setInterval(function() { 
		    if(sec == 0)
	   {
			if(min==0 && sec==0)
			{
				$('#hideMsg').fadeOut('fast');
				clearInterval(timer);
			}
			
			$('#hideMsg span.minutes').text(min--);
			
			sec=60
		}
			
	   
		
	   $('#hideMsg span.seconds').text(sec--);
	  $('#hideMsg span.minutes').text(min);
	 
	  
	
	}, 1000);
	
	
	});


	
});
