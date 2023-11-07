// event qui attend que la page soit chargée
window.onload = function () {
    // recupère le bouton menu et la barre de navigation
    const menu_btn = document.querySelector('.menu-burger');
    const navbar = document.querySelector('.navbar');

    // ajoute un listener sur le clic du bouton menu
    menu_btn.addEventListener('click', function () {
        // toggle la class is-active sur les éléments
        menu_btn.classList.toggle('is-active');
        navbar.classList.toggle('is-active');
        // toggle la class no-scroll pour le body
        document.querySelector('body').classList.toggle('no-scroll');
    });

    // itération sur chaque élément de la barre de navigation 
    document.querySelectorAll('.nav-item').forEach(function(item){
        // si l'élément de la liste a son lien qui correspond à l'URL on mets la classe active
        if (item.href == window.location.href) {
            item.classList.add('active');
            item.parentElement.classList.add('active');
        }
    });
}