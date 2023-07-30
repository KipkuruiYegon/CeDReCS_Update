document.addEventListener("DOMContentLoaded", function() {
    var btn = document.getElementById('btn');
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      var first_name = document.getElementById('first_name').value;
      var last_name = document.getElementById('last_name').value;
      var email = document.getElementById('email').value;
      var subject = document.getElementById('subject').value;
      var message = document.getElementById('message').value;
      var body = 'First Name: ' + first_name + '<br/> Last Name: ' + last_name + '<br/> Email: ' + email + '<br/> Subject: ' + subject + '<br/> Message: ' + message;
  
      Email.send({
        SecureToken: "0869617a-a1ef-42da-981d-f199f8e05cfb",
        To: 'kevinyegon2015@gmail.com',
        From: "kevinkipkurui1@gmail.com",
        Subject: "Contact Message Inquiry from Cedrecs Website",
        Body: body
      }).then(function(message) {
        alert(message);
      });
    });
  });
  