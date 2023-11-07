<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Membres - Club Robotique</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="assets/Logo_transparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/membres_club.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&family=Roboto&display=swap" rel="stylesheet" media="all"> <!--police d'écriture "Roboto" et "Public-sans" -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body class="membreCont">
    <?php include('../html/navbar.html'); ?> <!-- php pour inclure le header à la page -->
    <main class="flex align-items flex-column">
        <div class="width-80">
            <div class="titreMembre"> <!-- Titre principale de la page -->
                <h1 class="titreH">Membres Club</h1>
            </div>
            <div class="verticale"> <!-- première zone de texte avec l'image en horizontal-->
                <div class="horizontal first-presentation" id="first">
                    <div class="box">
                        <H3>Equipe</H3> <!-- titre du paragraphe -->
                        <p class="membreTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nunc
                        purus, scelerisque et lorem a, vulputate luctus arcu. Nunc massa diam, egestas ut elementum at,
                        posuere non lacus.</p>
                    </div>
                    <div class="ImageMembre"> <!-- ajout de l'image -->
                        <img class="imgMembre" src="../assets/equipe.jpg" alt="Photo non contractuel des membres du club">
                    </div>
                </div>

                <div class="horizontal background" id="second"> <!-- Deuxième zone de texte avec l'image en horizontal -->
                    <div class="ImageMembre"> <!-- ajout de l'image -->
                        <img class="imgMembre" src="../assets/directeur.jpeg" alt="Photo non contractuel du président du club">
                    </div>
                    <div class="box">
                        <H3>Direction</H3> <!-- titre du paragraphe -->
                        <p class="membreTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nunc
                        purus, scelerisque et lorem a, vulputate luctus arcu. Nunc massa diam, egestas ut elementum at,
                        posuere non lacus.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('../html/footer.html'); ?> <!-- php pour inclure le footer à la page -->
</body>

</html>