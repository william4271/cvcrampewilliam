//   EMAIL
  

function sendEmail(){
    var nom = $("#nom");
    var email = $("#email");
    var message = $("#message");

    if(isNotEmpty(nom) && isNotEmpty(email) && isNotEmpty(message)){
          $.ajax({
                url: 'form.php',
                method: 'POST',
                dataType:'json',
                data:{
                      nom: nom.val(),
                      email: email.val(),
                      message: message.val()
                }, success: function(response){
                      $('#formulaire')[0].reset();
                      $('.notif').text("Message bien envoyer.");
                }
                
          });
    }

    function isNotEmpty(caller){
          if(caller.val()= ""){
              caller.css('border', '1px solid red');
              return false;  
          }
          else
          {
                caller.css('border', '');
                return true;
          }
    }
}