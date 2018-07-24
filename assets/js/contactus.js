(function(){
  
    
    $('#contact').delegate('form', 'submit', function (e) {
        console.log("dfhskhf");  
		$('#contactsubmit').text("Message sent");
setTimeout(1000);
    });
    
})()