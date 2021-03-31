<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail single page</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><img class="logo" src="./image/mail.png" alt="gmail logo"></li> 
                <li>Gmail</li>
            </ul>
            <ul>
                <li><a href="#" aria-current="false">Pour les pros</a></li>
                <li><a href="#" aria-current="false" role="button">Connexion</a> </li>
                <li><a href="./inscription.php" aria-current="true" class="signIn">Créer un compte</a></li>
            </ul>
        </nav>
    </header>
    
    <main>

        <section id="connexionForm">
            <h1 class="welcome">Bienvenue dans votre espace</h1>
            <fieldset>     
                <legend>Connectez-vous à votre compte</legend>

            <form action="./src/checkLogIn.php" method="post" id="form">
                
                <label for="login">Mail ou login</label>
                <input type="email" id="login" name="mail" placeholder="Votre mail" aria-required="true">
              
                <label for="password">Mot de passe *</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true">
              
               <input type="submit" value="Connexion à votre compte" name="submit">
              </form>

            </fieldset> 
        </section>

    </main>
    <script src="./js/connexion.js"></script>
</body>
</html>