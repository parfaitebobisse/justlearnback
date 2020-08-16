<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="../sources/images/4916petit_logo.ico" />
    <link rel="stylesheet" href="Sources/bootstrap-4.4.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Sources/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main_dashbord.css">
    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>
    <main>
        <div>
            <div class="wrapper fadeInDown">
                <div id="formContent">
                  <!-- Tabs Titles -->
              
                  <!-- Icon -->
                  <div class="fadeIn first">
                      <div class="contain-logo">
                         <a href="#"><img src="Sources/Images/logo.png" id="icon" alt="logo" /></a>
                      </div>
                  </div>
              
                  <!-- Login Form -->
                  <h1>Connectez-vous!</h1>
                  <form>
                      <div>                          
                          <input type="text" id="login" class="fadeIn second" name="login" placeholder="Nom d'utilisateur">
                          <input type="password" id="password" class="fadeIn third" name="login" placeholder="Mot de passe">
                      </div>
                      <span class="erreur">Nom d'utilisateur ou mot de passe Incorrect!</span>
                      <div class="bloc_boutons">
                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Connexion</button>
                      </div>
                  </form>
              
                  <!-- Remind Passowrd -->
                  <div id="formFooter">
                    <a class="" href="#">Mot de passe oublié ?</a>
                  </div>
              
                </div>
              </div>
        </div>
    </main>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="Sources/bootstrap-4.4.1/js/dist/util.js"></script>
<script type="text/javascript" src="Sources/bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
</html> 