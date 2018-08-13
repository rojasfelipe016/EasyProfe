
    
      const config ={
       apiKey: "AIzaSyDJlEVZCu-h5DtaNp9bI_0o5wsMEDIvrz8",
    authDomain: "easyprofe-ef8f5.firebaseapp.com",
    databaseURL: "https://easyprofe-ef8f5.firebaseio.com",
    projectId: "easyprofe-ef8f5",
    storageBucket: "easyprofe-ef8f5.appspot.com",
    messagingSenderId: "447803332272"
    };

     firebase.initializeApp(config);
    firebase.auth().onAuthStateChanged(function(user){
      
      if(user){
          $("#btnLogout").click(function () {

            firebase.auth().signOut().then(function() {
         // Sign-out successful.
           location.href ="/";
          }).catch(function(error) {
        // An error happened.

          });

        });

      } else{
     
      }

    });

