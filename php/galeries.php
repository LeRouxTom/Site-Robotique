<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Galerie - Club Robotique</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo_transparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/galeries.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,400;0,600;1,400&family=Roboto&family=Work+Sans&display=swap"
        rel="stylesheet">
</head>

<body class="galCont">
    <?php include('../html/navbar.html'); ?>
    <main>
        <!-- titre principale -->
        <div class="titreGal">
            <h1 class="titreH">Galeries</h1>
        </div>
        <!-- bloc qui contient 2 projets -->
        <div class="bigBlockGal">
            <!-- un bloc de projet -->
            <div class="blockGal">
                <!-- l'image du projet -->
                <div class="imageGal"><img class="imgGal" src="../assets/galerieA/claptrap.png" alt="Claptrap qui nous pointe avec une Fatale de Borderlands"></div>
                <!-- les boutons du projets -->
                <div class="miniBlockGal">
                    <a class="boutonGal" href="projetA.php">Projet</a>
                    <p class="projT">Projet Claptrap</p>
                    <a href="galerieA.php" class="boutonGal">Galerie</a>
                </div>
            </div>
            <!-- un bloc de projet -->
            <div class="blockGal">
                <!-- l'image du projet -->
                <div class="imageGal"><img class="imgGal" src="../assets/jeuArcade/reflexion.jpg" alt="Une équipe qui refléchit"></div>
                <!-- les boutons du projets -->
                <div class="miniBlockGal">
                    <a href="projetB.php" class="boutonGal">Projet</a>
                    <p class="projT">Projet Jeu d'arcade</p>
                    <a class="boutonGal" href="galerieB.php">Galerie</a>
                </div>
            </div>
        </div>
        <HR class="barreGal" WIDTH="35%">
        <!-- bloc qui contient 2 projets -->
        <div class="bigBlockGal">
            <!-- un bloc de projet -->
            <div class="blockGal">
                <!-- l'image du projet -->
                <div class="imageGal"><img class="imgGal" src="../assets/sumobot/sumobot_trois.jpg" alt="Photo des 3 sumobot construit lors de la semaine transverse"></div>
                <!-- les boutons du projets -->
                <div class="miniBlockGal">
                    <a href="projetC.php" class="boutonGal">Projet</a>
                    <p class="projT">Projet Sumobot</p>
                    <a class="boutonGal" href="galerieC.php">Galerie</a>
                </div>
            </div>
            <!-- un bloc de projet -->
            <div class="blockGal">
                <!-- l'image du projet -->
                <div class="imageGal"><img class="imgGal" src="../assets/Atelier_soudure/soudure_sumobot.jpg" alt="soudure pour un sumobot"></div>
                <!-- les boutons du projets -->
                <div class="miniBlockGal">
                    <a href="projetD.php" class="boutonGal">Projet</a>
                    <p class="projT">Atelier Soudure</p>
                    <a class="boutonGal" href="galerieD.php">Galerie</a>
                </div>
            </div>
        </div>
    </main>
    <?php include('../html/footer.html'); ?>
</body>
</html>