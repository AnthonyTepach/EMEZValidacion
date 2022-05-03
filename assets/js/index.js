firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    document.getElementById("user_div").style.display = "block";
    document.getElementById("login_div").style.display = "none";  
    //window.location.replace("https://intelligentforms.mx/ValidacionWeb/index.php/Welcome");
    var user = firebase.auth().currentUser;

    if(user != null){
      var email_id = user.email;
      var user_id = user.uid;
      document.getElementById("user_para").innerHTML = email_id+"\n"+user_id;
      
     // var url_a="https://computerforms.mx/ValidacionWeb/";
     // var url_b="https://computerforms.mx/ValidacionWeb/Principal";
     // var url_c=window.location.href;
      	
     // if (url_c==url_a) {
      //	window.location.replace("https://computerforms.com.mx/ValidacionWeb/Principal");
     // }else if(url_c==url_b){

      //}
      
    }

  } else {
    // No user is signed in.

    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block";
   	//if (window.location.href!="https://computerforms.com.mx/ValidacionWeb/") {
    	//window.location.replace("https://computerforms.com.mx/ValidacionWeb/");
    //}
  }
});

function login(){

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

 

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass)
  .then((user) => {
    const data = new FormData();
    data.append('user', user.email);
    data.append('UID', user.uid);
    
    fetch('C_Login/sessionOK', {
      method: 'POST',
      body: data
   	})
   	.then(function(response) {
    	if(response.ok) {
        	window.location.replace("https://computerforms.mx/ValidacionWeb/Principal");
      	} else {
        	throw "Error en la llamada Ajax";
      	}
   })
   .then(function(texto) {
      console.log(texto);
   })
   .catch(function(err) {
      console.log(err);
   });
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);
  });

}

function logout(){
  firebase.auth().signOut();
  fetch('logout', {
    method: 'POST'
 });
  location.reload();
}
