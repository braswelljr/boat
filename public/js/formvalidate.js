(function() {
  'use strict';
  window.addEventListener('load', function() {
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');

    //password validation
    // var password = document.getElementById('Password');
    // var repeatPassword = document.getElementById('repeatPassword');

    // password.addEventListener('input',function (pass) {
    //   if (length() < 8) {
    //     pass.preventDefault('keydown');
    //   }else if(password === repeatPassword){
    //     pass.preventDefault('keydown');
    //   }
    // });

    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();