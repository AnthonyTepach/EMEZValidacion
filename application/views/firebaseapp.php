  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-auth.js"></script>


<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBGN65ie_83oWoermeNUga4omj4HUYUHxQ",
    authDomain: "logincf-90d11.firebaseapp.com",
    projectId: "logincf-90d11",
    storageBucket: "logincf-90d11.appspot.com",
    messagingSenderId: "256371081473",
    appId: "1:256371081473:web:9c72b291442e63c265db00",
    measurementId: "G-5KL93ETZ7S"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  firebase.auth();
</script>

<script src="<?=base_url("assets/js/index.js")?>"></script>