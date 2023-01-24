let truc = document.getElementById('sousTitle1');

window.addEventListener('scroll', function() {
    opacite = 1 - (window.pageYOffset / 300);
    truc.style.opacity = opacite;
});