// Sélectionne les slides
const slides = document.querySelectorAll(".slide");
let curSlide = 0;
let maxSlide = slides.length - 1;

// Sélectionne le bouton suivant
const nextSlide = document.querySelector(".btn-next");
// Sélectionne le bouton précédant
const prevSlide = document.querySelector(".btn-prev");
// Compteur d'images
const counterSpan = document.querySelector(".photos-counter");
// Conteneur image
const scrollContainer = document.querySelector(".gallery");
// Liste des miniatures
const minias = document.querySelectorAll('.minia');

//  Boucler à travers les diapositives et définir la propriété translateX de chaque diapositive sur index * 100% 
slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${indx * 100}%)`;
});
UpdateCounter();

//      EVENT
minias.forEach((minia, index) => {
    minia.addEventListener('click', () => {
        UpdateThumbnail(index);
        UpdateCounter();
        UpdateSlides();
    });
});


// ajouter un event listener et une fonctionnalité de diapositive suivante
nextSlide.addEventListener("click", function () {
    let newSlide;
    // Si la diapositive actuelle est la dernière diapositive, définir la nouvelle diapositive sur la première diapositive (index 0)
    if (curSlide === maxSlide) {
        newSlide = 0;
    }
    // Sinon, incrémente l'index de la diapositive actuelle
    else {
        // Met à jour la vignette sélectionnée
        newSlide = curSlide + 1;
    }
    // Met à jour la vignette sélectionnée
    UpdateThumbnail(newSlide);
    // Met à jour le compteur de photos
    UpdateCounter();
    // Met à jour le diaporama
    UpdateSlides();
});

// ajouter un event listener et une fonctionnalité de diapositive précédante
prevSlide.addEventListener("click", function () {
    let newSlide;
    if (curSlide === 0) {
        newSlide = maxSlide;
    }
    else {
        newSlide = curSlide - 1;
    }

    // Met à jour la vignette sélectionnée
    UpdateThumbnail(newSlide);
    // Met à jour le compteur de photos
    UpdateCounter();
    // Met à jour le diaporama
    UpdateSlides();
});

// Met à jour le texte du compteur de photos
function UpdateCounter() {
    counterSpan.textContent = `${curSlide + 1} / ${maxSlide + 1}`;
};

// Met à jour la position de chaque diapositive en fonction de l'index de diapositive actuel
function UpdateSlides() {
    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
    });
}

// Met à jour la vignette sélectionnée en fonction du nouvel index de diapositive
function UpdateThumbnail(index) {
    // Supprime la classe "selected" de la vignette courante
    document.querySelectorAll('.minia')[curSlide].classList.remove("selected");
    // Met à jour l'index de la diapositive actuelle
    curSlide = index;
    // Ajoute la classe "selected" à la nouvelle vignette
    document.querySelectorAll('.minia')[index].classList.add("selected");
}

// Ajoute un écouteur d'événement de roue au conteneur de la galerie
scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.scrollLeft += evt.deltaX;
});
//      END EVENT