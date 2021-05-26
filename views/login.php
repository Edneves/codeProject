<?php
	session_start();
	//include_once 'head.html';
	include_once '../App/Controller/ClienteController.php';

	$user = new ClienteController();

	$result = $user->isLoggedIn();
	if($result){
		header('Location: home.php');
	} 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <title>Cadastro | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./styleProfile.css" />


  
</head>
<body>
 
  <div class="container" >
   
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <?php
          include_once("form-login.php")
        ?>    
      </div>
    </div>
  </div>  
</body>
</html>