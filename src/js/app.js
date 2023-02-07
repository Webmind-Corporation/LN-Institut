//Location

map = document.getElementById('location');

if (map) {
    map.addEventListener('click', function() {
        window.open('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.310850001462!2d1.4311845154117255!3d43.68330055850189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aea46d84fe7c3f%3A0x4f2da1bb6eda942!2s10%20Rue%20Didier%20Daurat%2C%2031140%20Fonbeauzard!5e0!3m2!1sfr!2sfr!4v1675566694995!5m2!1sfr!2sfr', '_blank');
    });
}


// Contact div

facebook = document.getElementById('facebook');

if (facebook) {
    facebook.addEventListener('click', function() {
        window.open('https://www.facebook.com/LN-Institut-162260040637184/', '_blank');
    });
}

instagram = document.getElementById('insta');

if (instagram) {
    instagram.addEventListener('click', function() {
        window.open('https://www.instagram.com/ln_institut/', '_blank');
    });
}