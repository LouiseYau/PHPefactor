// Initialize Firebase

var config = {
    apiKey: "AIzaSyALtxmn0pR02-cIStgZ-podDIk-XTgFkr0",
    authDomain: "e-factor-learning.firebaseapp.com",
    databaseURL: "https://e-factor-learning.firebaseio.com",
    projectId: "e-factor-learning",
    storageBucket: "e-factor-learning.appspot.com",
    messagingSenderId: "270681090608"
};
firebase.initializeApp(config);

var uiConfig = {
    signInSuccessUrl: 'about.php',
    signInOptions: [
        // Leave the lines as is for the providers you want to offer your users.
        firebase.auth.GoogleAuthProvider.PROVIDER_ID,
        // firebase.auth.FacebookAuthProvider.PROVIDER_ID,
        // firebase.auth.TwitterAuthProvider.PROVIDER_ID,
        // firebase.auth.GithubAuthProvider.PROVIDER_ID,
        firebase.auth.EmailAuthProvider.PROVIDER_ID,
        // firebase.auth.PhoneAuthProvider.PROVIDER_ID,
        // firebaseui.auth.AnonymousAuthProvider.PROVIDER_ID
    ],
    // tosUrl and privacyPolicyUrl accept either url string or a callback
    // function.
    // Terms of service url/callback.
    tosUrl: '<your-tos-url>',
    // Privacy policy url/callback.
    privacyPolicyUrl: function () {
        window.location.assign('<your-privacy-policy-url>');
    }
};

// Initialize the FirebaseUI Widget using Firebase.
var ui = new firebaseui.auth.AuthUI(firebase.auth());
// The start method will wait until the DOM is loaded.
ui.start('#firebaseui-auth-container', uiConfig);

//   the after after your logged in 
