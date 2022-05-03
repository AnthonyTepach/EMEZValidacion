<html>
<head>
  <title>ComputerForms Web Login</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>" />
</head>
<body>

  <div id="login_div" class="main-div">
    <img src="<?=base_url("assets/img/Logos/LOGO.png")?>" alt="logo-computerforms" width="70%">
    <h3>Web login</h3>
    <input type="email" placeholder="Email" id="email_field" />
    <input type="password" placeholder="Password" id="password_field" />

    <button onclick="login()">Iniciar Sesión</button>
  </div>

  
  <div id="user_div" class="loggedin-div">
    <h3>Welcome User</h3>
    <p id="user_para">Welcome to Firebase web login Example. You're currently logged in.</p>
    <button onclick="logout()">Logout</button>
  </div>




  <?php include APPPATH.'views/firebaseapp.php';?>
  

</body>
</html>
