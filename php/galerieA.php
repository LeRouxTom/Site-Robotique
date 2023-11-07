<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans&family=Raleway&family=Work+Sans&display=swap">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/galerieA.css">
    <title>Galerie Claptrap - Club Robotique</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo_transparent.png">
</head>

<body>
    <?php include('../html/navbar.html'); ?>

    <main>
        <!-- div pour le titre de la galerie -->
        <div class="titrePart"> 
            <h1 class="titreH">Galerie Claptrap</h1>
        </div>
        <!-- div pour le carrousel a image -->
        <div class="carrousel">  
            <!-- div avec les grandes images    -->
            <div class="slider"> 
                <!-- div image -->
                <div class="slide">
                    <!-- div background flou  -->
                    <div id="slide1" class="blurry-bg"></div>
                    <img src="../assets/galerieA/claptrap.png" alt="Claptrap qui nous pointe avec une Fatale de Borderlands">
                </div>
                <!-- div image -->
                <div class="slide">
                    <!-- div background flou  -->
                    <div id="slide2" class="blurry-bg"></div>
                    <img src="../assets/galerieA/claptrap_pose.jpeg" alt="Claptrap qui fait le beau">
                </div>
                <!-- div image -->
                <div class="slide">
                    <!-- div background flou  -->
                    <div id="slide3" class="blurry-bg"></div>
                    <img src="../assets/galerieA/claptrap_home.jpg" alt="Claptrap en bas du bloc">
                </div>
                <!-- div image -->
                <div class="slide">
                    <!-- div background flou  -->
                    <div id="slide4" class="blurry-bg"></div>
                    <img src="../assets/galerieA/claptrap_freehugs.jpg" alt="Claptrap en convention Manga">
                </div>
                <!-- div image -->
                <div class="slide">
                    <!-- div background flou  -->
                    <div id="slide5" class="blurry-bg"></div>
                    <img src="../assets/galerieA/claptrap_drunk.jpg" alt="Claptrap qui boit de l'alcool">
                </div>
                    <!-- boutton pour slide -->
                <button class="btn btn-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <button class="btn btn-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                <span class="photos-counter">0/0</span>
            </div>
            <!-- div avec les images en dessous du carrousel -->
            <div class="gallery">
            <!-- div miniature  selectionnée-->
                <div class="minia selected">
                    <img src="../assets/galerieA/claptrap.png" alt="Claptrap qui nous pointe avec une Fatale de Borderlands">
                </div>
            <!-- div miniature  -->
                <div class="minia">
                    <img src="../assets/galerieA/claptrap_pose.jpeg" alt="Claptrap qui fait le beau">
                </div>
            <!-- div miniature  -->
                <div class="minia">
                    <img src="../assets/galerieA/claptrap_home.jpg" alt="Claptrap en bas du bloc">
                </div>
            <!-- div miniature  -->
                <div class="minia">
                    <img src="../assets/galerieA/claptrap_freehugs.jpg" alt="Claptrap en convention Manga">
                </div>
            <!-- div miniature  -->
                <div class="minia">
                    <img src="../assets/galerieA/claptrap_drunk.jpg" alt="Claptrap qui boire de l'alcool">
                </div>
            </div>
        </div>

        <HR WIDTH="35%">
        <!-- div avec la vidéo -->
        <div class="container-video">
            <video controls class="yt">
                <source src="../assets/galerieA/sumobot.mp4" />
            </video>
            <!-- <iframe class="yt" src="https://www.youtube.com/embed/QCqxOzKNFks"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe> -->
        </div>

        <HR WIDTH="35%">

    </main>


    <?php include('../html/footer.html'); ?>
</body>

<script src="../js/carrousel.js"></script>
</html>