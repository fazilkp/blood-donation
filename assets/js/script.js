var config = {
   apiKey: "AIzaSyC_7nkoKQjOBQO7a7oXAeYf7wT5KkXLNyQ",
   authDomain: "blood-donate-5bb33.firebaseapp.com",
   databaseURL: "https://blood-donate-5bb33.firebaseio.com",
   storageBucket: "blood-donate-5bb33.appspot.com",
   messagingSenderId: "354169837690"
 };
 firebase.initializeApp(config);



  var i=0;
  var $form = $('.js-form');
  var $name = $('#firstName');
  var $email = $('#email');
  var $age = $('#age');
  var $bgrp = $('#bgrp');
  var $gender = "";
  var $mNo= $('#mNo');
  var $pincode= $('#pincode');

  $form.on('submit', function (event){
    event.preventDefault();
    i++;
    var nameValue = $name.val();
    var emailValue = $email.val();
    var ageValue = $age.val();
    var bgrpValue = $bgrp.val();
    var mNoValue = $mNo.val();
    var pincodeValue = $pincode.val();
    if(document.getElementById('maleRadio').checked) {
        var genderValue = "male";
    }else if(document.getElementById('femaleRadio').checked) {
        var genderValue = "female";
    }

    writeUserData(i, nameValue, emailValue, ageValue, bgrpValue, genderValue, mNoValue, pincodeValue);
    console.log(nameValue, emailValue, ageValue, bgrpValue, genderValue, mNoValue, pincodeValue);
  });



  function writeUserData(userId, nameValue, emailValue, ageValue, bgrpValue, genderValue, mNoValue, pincodeValue) {
    console.log("hai");
  firebase.database().ref('users/' + userId).set({
    name: nameValue,
    email: emailValue,
    dob: ageValue,
    blood_grp: bgrpValue,
    gender: genderValue,
    phone_no: mNoValue,
    pincode: pincodeValue
  });
}
