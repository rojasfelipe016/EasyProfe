(function() {

    const config ={
       apiKey: "AIzaSyDJlEVZCu-h5DtaNp9bI_0o5wsMEDIvrz8",
    authDomain: "easyprofe-ef8f5.firebaseapp.com",
    databaseURL: "https://easyprofe-ef8f5.firebaseio.com",
    projectId: "easyprofe-ef8f5",
    storageBucket: "easyprofe-ef8f5.appspot.com",
    messagingSenderId: "447803332272"
    };
     firebase.initializeApp(config);

     


     const txtEmail = document.getElementById('txtEmail');
     const txtPassword = document.getElementById('txtPassword');
     const btnLogin = document.getElementById('btnLogin');
     const btnSignUp = document.getElementById('btnSignUp');
     const btnLogout = document.getElementById('btnLogout');

     btnLogin.addEventListener('click', e => {
        const email = txtEmail.value;
        const pass = txtPassword.value;
        const auth = firebase.auth();

        const promise = auth.signInWithEmailAndPassword(email,pass);
        promise.catch(e => console.log(e.message));

     });


     firebase.auth().onAuthStateChanged(firebaseUser => {
        if(firebaseUser){
            console.log(firebaseUser);
             location.href =("/materiales");
            btnLogout.classList.remove('hide');
        }
     });
} ());

