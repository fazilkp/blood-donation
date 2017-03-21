

//
// // firebase
//
// var lengthOfArray = this.lengthOf;
// var config = {
//    apiKey: "AIzaSyC_7nkoKQjOBQO7a7oXAeYf7wT5KkXLNyQ",
//    authDomain: "blood-donate-5bb33.firebaseapp.com",
//    databaseURL: "https://blood-donate-5bb33.firebaseio.com",
//    storageBucket: "blood-donate-5bb33.appspot.com",
//    messagingSenderId: "354169837690"
//  };
//  firebase.initializeApp(config);
//
//
//
//      //create reference
//     var dbRefObject = firebase.database().ref();
//     var fullData = [];
//     var faheem = 0;
//      // sync object changes
//
//   dbRefObject.on('value', snap=>{
//      fullData = snap.val();
//   })
//   function lengthData(){
//     console.log(fullData.users.length)
//      lengthOfArray = fullData.users.length;
//   }
//
//
//
//   console.log(lengthOfArray)
//   var i=lengthOfArray|0;
//   var $form = $('.js-form');
//   var $name = $('#firstName');
//   var $email = $('#email');
//   var $age = $('#age');
//   var $bgrp = $('#bgrp');
//   var $gender = "";
//   var $mNo= $('#mNo');
//   var $pincode= $('#pincode');
//
//   $form.on('submit', function (event){
//     event.preventDefault();
//     var nameValue = $name.val();
//     var emailValue = $email.val();
//     var ageValue = $age.val();
//     var bgrpValue = $bgrp.val();
//     var mNoValue = $mNo.val();
//     var pincodeValue = $pincode.val();
//     if(document.getElementById('maleRadio').checked) {
//         var genderValue = "male";
//     }else if(document.getElementById('femaleRadio').checked) {
//         var genderValue = "female";
//     }
//
//     writeUserData(i, nameValue, emailValue, ageValue, bgrpValue, genderValue, mNoValue, pincodeValue);
//     // console.log(nameValue, emailValue, ageValue, bgrpValue, genderValue, mNoValue, pincodeValue);
//   });
//
//
//
//   function writeUserData(userId, nameValue, emailValue, ageValue, bgrpValue, genderValue, mNoValue, pincodeValue) {
//     // console.log("hai");
//   firebase.database().ref('users/' + userId).set({
//     name: nameValue,
//     email: emailValue,
//     dob: ageValue,
//     blood_grp: bgrpValue,
//     gender: genderValue,
//     phone_no: mNoValue,
//     pincode: pincodeValue
//   });
//   i++;
//
//
//     // sync list changes
//     // dbRefList.on('child_added', snap => console.log(snap.val()));
//
//   }

// firebase ends

  // map


  function initMap() {
         var uluru = {lat: 11.0445974, lng: 75.9097158};
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 15,
           center: uluru
         });
         var marker = new google.maps.Marker({
           position: uluru,
           map: map,
           draggable:true
         });


         google.maps.event.addListener(marker, 'dragend', function (event) {
             var lat = event.latLng.lat();
             var lng = event.latLng.lng();
             var latlng = ''+lat+','+lng+'';
             var url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+latlng+'&key=AIzaSyDyAn0b7enEaVz1zVojwb2-b9nB-AFo8GU';
             console.log(url);
             getPin(url);

         });



       }


  function getPin(url){


    $.getJSON( url, function( data ) {

      var pin = data.results[0].address_components[data.results[0].address_components.length - 1].long_name;
      // console.log(data.results[0].address_components[data.results[0].address_components.length - 1].long_name);
      $("#pincode_search").val(pin);

  });

  }



  function setLength(lenn){
    curLength = lenn;
  }



// fetch from db
