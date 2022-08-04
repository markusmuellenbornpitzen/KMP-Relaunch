
$( document ).ready(function() {

  $( "#loginaction" ).click(function() {

    var error=0;
    //Getting Values of Form Field
    var username = $('#benutzername').val();
    if(username==''){
        $(".error-login-error").text("Benutzername muss eingegeben werden");
        error=1;
        event.preventDefault();
    }
    var password = $('#pwd').val();
    if(password==''){
        $(".error-login-error").text("Passwort muss eingegeben werden");
        error=1;
        event.preventDefault();
    }

    //Ajax Call
if(error==0){
            $.ajax({
                type:"post",
                url:"../controler/loginaction.php",
                data:{"username": username,"password": password},
                success: function(response){

                  if(response=="useryes"){
                    window.location = "http://p619698.mittwaldserver.info/index-intern.php";
                  }
                  else{
                    // Case Incorrect Password
                    $(".error-login-error").text("Benutzername oder Passwort falsch !!!");
                  }

                }
            });
}

  });



});
