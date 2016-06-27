$(document).ready(function(){

	

	
	
  var ip =null;
	var myNum=null


    $("#Enter").click(function(){
		
		//alert("F");
		 ip = null;
			$.getJSON("http://jsonip.com/",
			function(data){
		ip = data.ip;
		var n = ip.toString();
		var res = n.substring(0, 15);
		//alert(ip); //return ip address correctly
		alert(res);
		 
		
                     
		//alert("You have been entered into the queue");
		//alert(res);
		
		//alert(x);
		//myNum = queue[0];
		 //array.splice(0, 1);
	
		//var i = queue.shift();
			//alert(i); 
		  });
		//undefined or null
		// queue is now [5]
		
		
		
			//if (el == undefined) 
			//{
			//	alert("Fail");
			//} else 
			//{
			//$("#myNum").attr('src', 'redPc.jpg');
				
			//document.getElementById(myNum).src="redPc.jpg";
			//alert("Success "+ myNum + " is present ");
			//document.getElementById("myNum").src== img.src.replace("pc", "redPc");
		
				//}
	  
});
	$("form").submit(function() { 

		  alert("D");
		  //alert("F");
		 ip = null;
			$.getJSON("http://jsonip.com/",
			function(data){
		ip = data.ip;
		var n = ip.toString();
		var res = n.substring(0, 15);
		//alert(ip); //return ip address correctly
		alert(res);
		 
		  document.getElementById("NumRows").value = res;
		  alert("S");
});
	$("#Leave").click(function(){
		
		
		
		 ip = null;
			$.getJSON("http://jsonip.com/",
			function(data){
		ip = data.ip;
		var n = ip.toString();
		var res = n.substring(0, 13);
		//alert(ip); //return ip address correctly
		//alert(res);
		//var num =queue.indexOf(res);
		// removes 1 element from index 3
		//removed = myFish.splice(3, 1);
		//removed = myFish.splice(num, 1);
		//var i = queue.shift();
			//alert(i); 
		  });
		
		
		queue.push(res);
		myNum = queue.shift();
		el = document.getElementById(myNum);
		//var i = queue.shift();
			//alert(i); 
		  });
		
			
	  

		var sec = 0
		var min = 3

	
	
	
		 $("#Attending").click(function(){
				myNum = queue[0];
				var x = queue.length;  
				alert(x);
				document.getElementById(myNum).src="redPc.jpg";
				 queue.splice(0, 1);
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
	//queue.push(ip); 
//var i = queue.shift(); // queue is now [5]
//	alert(i);              // displays 2
        // queue is now [2]

//var i = queue.shift(); // queue is now [5]
//alert(i);              // displays 2

//var queue = new Queue();

// enqueue an item
//queue.enqueue('item');

// dequeue an item
//var item = queue.dequeue();

// get the item at the front of the queue
//var item = queue.peek();

// determine the number of items in the queue
//var length = queue.getLength();

// determine whether the queue is empty
//var isEmpty = queue.isEmpty();