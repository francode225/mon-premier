<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prefixed/style-contact.css">
    <link rel="icon" type="image/ico" href="../img/favicon3.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <title>AgroSchool - Nous contacter</title>
</head>
<body>

    <div id="top"></div>
    <header class="entete">
        <p class="entete__logo-agroschool"><a href="index.html"><img src="../img/logo_agroschool2.png" alt="Logo AgroSchool"></a></p>
        <p class="entete__logo-descartes"><a href="https://www.lyceeinternationaldescartes.com/" target="_blank"><img src="../img/logo_descartes.png" alt="Logo Descartes"></a></p>
    </header>
    
      <section class="bloc">
          <nav class="menu">
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="infos.html">Informations</a></li>
                <li><a href="produits.html">Nos Produits</a></li>
                <li><a href="contact.html">Nous contacter</a></li>
            </ul>
        </nav>
        </section>

        <div class="container">
            <div class="container__box">
                <div class="left"></div>
                <div class="right">
                    <form method="post" action="">
                        <h2>Nous contacter</h2>
                        <input type="text" name="nom_prenoms" class="champ" placeholder="Votre nom">
                        <input type="email" name="email" class="champ" placeholder="Votre email">
                        <input type="text" name="objet" class="champ" placeholder="Objet">
                        <textarea name="message" class="champ champ--zone" placeholder="Message"></textarea>
                        <button class="btn"><span>Envoyer</span></button>
                    </form>
                </div>
            </div>
        </div>
   
    <?php 
    
        if(isset($_POST) && !empty($_POST['nom_prenoms']) && !empty($_POST['email']) && !empty($_POST['objet']) && !empty($_POST['message'])){
            extract($_POST);
            $destinataire = 'agrodescartes2020@gmail.com';
            $expediteur = $nom_prenoms . ' (email : ' . $email . ') a envoyé de Agroschool.com :';
            $mail = mail($destinataire, $objet, $message, $expediteur);
            if($mail){
            ?>
                <p class="send">Email envoyé avec succès</p> 
            
            <?php
            } 
             else {
            ?>
                <p class="send">Formulaire non soumis ou des champs vides</p> 
            
            <?php
            } 
        }
        ?>

</body>
</html>