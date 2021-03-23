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
                <li><a href="#" aria-current="false">Connexion</a> </li>
                <li><a href="#signIn" aria-current="true" role="button">Créer un compte</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="signIn">
            <h1>Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareil</h1>
            <a class="btnConnexion" href="#connexion">Créer un compte</a>
            <a href="#connexion"><img src="./image/arrow.png" alt="arrow image" class="arrowBtn"></a>
        </section>

        <section id="connexion">
            <h2>Une boîte de réception entièrement repensée</h2>
            <p>Avec les nouveaux onglets personnalisables repérez immediatement les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité</p>
        </section>

        <section id="form">
            <fieldset>     
                <legend>Créer un compte</legend>
            <form action="./src/traitement.inc.php" method="post">
                <label for="nom">Nom *</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" aria-required="true">
     
                <label for="prenom">Prénom *</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prenom" aria-required="true">
              
                
                <label for="mail">Mail *</label>
                <input type="email" id="mail" name="mail" placeholder="Votre mail" aria-required="true">
              
                <label for="password">Choisir votre mot de passe *</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true">
              
               <input type="submit" value="Valider votre compte" name="send">
              </form>

            </fieldset> 
        </section>


    </main>

    <footer>
        
    </footer>

    <script src="./js/app.js"></script>
</body>
</html>