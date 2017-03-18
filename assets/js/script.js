var config = {
   apiKey: "AIzaSyC_7nkoKQjOBQO7a7oXAeYf7wT5KkXLNyQ",
   authDomain: "blood-donate-5bb33.firebaseapp.com",
   databaseURL: "https://blood-donate-5bb33.firebaseio.com",
   storageBucket: "blood-donate-5bb33.appspot.com",
   messagingSenderId: "354169837690"
 };
 firebase.initializeApp(config);




  var $form = $('.js-form');
  var $name = $('#firstName');
  var $email = $('#email');
  var $age = $('#age');
  var $bgrp = $('#bgrp');
  var $gender = $('#gender');
  var $mNo= $('#mNo');
  var $pincode= $('#pincode');

  $form.on('submit', function (event){
    event.preventDefault();

    var nameValue = $name.val();
    var emailValue = $email.val();
    var ageValue = $age.val();
    var bgrpValue = $bgrp.val();
    var genderValue =$gender.val();
    var mNoValue = $mNo.val();
    var pincodeValue = $pincode.val();
    console.log(nameValue, emailValue, ageValue, bgrpValue, genderValue, mNoValue, pincodeValue);
  });
