<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Public+Sans&family=Roboto&family=Work+Sans&display=swap"> <!-- mettre la police "public-sans", "roboto" et "work-sans" -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact - Club Robotique</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo_transparent.png">
</head>


<body>
    <?php include('../html/navbar.html'); ?> <!-- php pour inclure le header à la page -->

    <main class="contactCont">

        <div class="titrePage"><h1 class="titreContact">Nous contacter</h1></div> <!-- titre de la page -->

        <div class="horizontal all">
            <div class="verticale map" id="carte"> <!-- ajout de la carte google map -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.6872868503433!2d-4.4146477844832175!3d48.44334127924898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4816b079f2289ea7%3A0xf5b14f10982347f4!2s230%20Rue%20Rolland%20Garros%2C%2029490%20Guipavas!5e0!3m2!1sfr!2sfr!4v1675671912604!5m2!1sfr!2sfr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> 
            </div>

            <div class="verticale boites" id="formulaire"> <!-- Formulaire de contact -->

                <p class="txt" id="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt ipsum ac
                    volutpat ornare. Morbi vel hendrerit justo. Sed efficitur faucibus pharetra. Nunc dictum ligula lectus,
                    eu placerat eros tincidunt suscipit.</p> <!-- zone de texte au dessus du formulaire -->


                <div class="verticale donnees"> <!-- formulaire à remplir avec les case "nom" "prénom" "mail" et "message" -->
                    <form action="bdd/contact.php" method="post" class="all form-example">

                        <div class="horizontal form-example"> <!-- formulaire case nom prénom -->
                            <input class="nom" placeholder="Nom" type="text" name="lastname" id="lastname" required>
                            <input class="prenom" placeholder="Prénom" type="text" name="name" id="name" required>
                        </div>

                        <div class="horizontal form-example-mail"> <!-- formulaire de la case mail -->
                            <input class="mail" placeholder="Mail" type="email" name="email" id="email" required>
                        </div>

                        <div class="texte"> <!-- formulaire de la case pour écrire son message -->
                            <textarea placeholder="Ecris ton message" id="message" name="message" ></textarea>
                        </div>

                        <div class="form-example envoyer">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>

            </div>
        </div>


        <div class="horizontal contact all"> <!-- les différentes information pour le contact -->
            <div class="email-bloc">
                <p class="titre" >Où nous envoyer un message ?</p>
                <p class="texteCont">Lorem ipsum dolor sit amet, consectetur a</p>
            </div>
            <div class="adresse-bloc">
                <p class="titre" >Où nous trouver ?</p>
                <p class="texteCont">Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <div class="telephone-bloc">
                <p class="titre" >Comment nous appeler ?</p>
                <p class="texteCont">02 25 26 36 15</p>
            </div>
        </div>

    </main>

    <?php include('../html/footer.html'); ?> <!-- php pour inclure le footer à la page -->
</body>

</html>