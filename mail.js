$(document).ready(function() {
//change CAPTCHA on each click or on refreshing page
    $("#reload").click(function() {
	
        $("img#img").remove();
		var id = Math.random();
        $('<img id="img" src="captcha.php?id='+id+'"/>').appendTo("#imgdiv");
		 id ='';
    });

//validation function
    // $('#button').click(function() {
    //     var name = $("#username1").val();
    //     var email = $("#email1").val();
    //     var captcha = $("#captcha1").val();

    //     if (name == '' || email == '' || captcha == '')
    //     {
    //         alert("Fill All Fields");
    //     }

    //     else
    //     {	//validating CAPTCHA with user input text
    //         var dataString = 'captcha=' + captcha;
    //         $.ajax({
    //             type: "POST",
    //             url: "mail.php",
    //             data: dataString,
    //             success: function(response) {
    //                 console.log(response);
    //             }
    //         });
    //     }
    // });

    $("#mailForm").submit(function(e) {

            var url = "mail.php"; // the script where you handle the form input

            $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#mailForm").serialize(), // serializes the form's elements.
                   success: function(data)
                   {
                      

                      if(data == "wrong"){
                        $.notify("Verification is not correct", 'error');    
                      }else{
                        $.notify("Mail sent successfully", 'success');
                      }
                   }
                 });

            e.preventDefault(); // avoid to execute the actual submit of the form.
        });

});