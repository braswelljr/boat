(function() {
  'use strict';
  window.addEventListener('load', function() {
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    
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

// var firstname = document.getElementsByClassName('firstname');
// var surname = document.getElementsByClassName('surname');
// var username = document.getElementsByClassName('username');
// var email = document.getElementsByClassName('email');
// var phone = document.getElementsByClassName('phone');
// var password = document.getElementsByClassName('password');
// var repeatPassword = document.getElementsByClassName('repeatPassword');

// const green = '#4CAF50';
// const red = '#F44336';

// function validateFirstname() {
//   //check if empty
//   if (checkIfEmpty(firstname)) 
//     return ;

//   //check if only letters
//   if (ifOnlyLetters(firstname))
//     return ;

//   return true;
// }

// function checkIfEmpty(field){
//   if (isEmpty(field.value.trim())) {
//     //set field as invalid 
//     setInvalid(field, `${field.name} must not be empty`)

//     return true;
//   }else{
//     //set field valid 
//     setValid(field)
//     return false;
//   }
// }

// function isEmpty(value) {
//   if (value ==='') {
//     return true;
//   }
// }

// function setInvalid(field, message){
//   field.className = 'invalid-feedback';
//   field.nextElementSibbling.innerHTML = message ;
//   field.nextElementSibbling.style.color = red ; 
// }

// function setInvalid(field){
//   field.className = 'valid-feedback';
//   field.nextElementSibbling.innerHTML = '' ;
//   //field.nextElementSibbling.style.color = green ; 
// }

// function ifOnlyLetters(field){
//   if (/^[a-zA-Z]+$/.test(field.value)) {
//     setValid(field) ;
//     return true ;
//   }else{
//     setInvalid(field, `${field.name} the value should contain letters only`)
//     return false;
//   }
// }

