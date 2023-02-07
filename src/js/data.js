// Prendre rendez-vous

rendezvous = document.querySelectorAll('.book');

if (rendezvous) {
    rendezvous.forEach(function(element) {
        element.addEventListener('click', function() {
            Calendly.initPopupWidget({url: "https://calendly.com/baverdie-dev/review-project?background_color=262628&text_color=ebebec"});
            return false;
        });
    });
}