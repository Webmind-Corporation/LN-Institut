//Location

const locat = document.getElementById('location');

if (locat) {
    locat.addEventListener('click', function() {
        window.open('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.310850001462!2d1.4311845154117255!3d43.68330055850189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aea46d84fe7c3f%3A0x4f2da1bb6eda942!2s10%20Rue%20Didier%20Daurat%2C%2031140%20Fonbeauzard!5e0!3m2!1sfr!2sfr!4v1675566694995!5m2!1sfr!2sfr', '_blank');
    });
}

function initMap() {
    const uluru = { lat: 43.683271, lng: 1.4333318 };
    const labels = "LN Institut";
    let labelIndex = 0;
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: uluru,
    });
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
        label: labels[labelIndex++ % labels.length],
    });
}
  
window.initMap = initMap;

// Gift

function initGift() {
    settingsContainer = document.getElementById("wrapGift");
    if (settingsContainer) {
        setTimeout(() => {
            settingsContainer.classList.toggle("hide")
        }, 200);
        if (settingsContainer.style.display == "none") {
            settingsContainer.style.display = "flex";
        } else {
            setTimeout(() => {
                settingsContainer.style.display="none";
            }, 600);
        }
        
    }
}
settingsContainer = document.getElementById("wrapGift");
if (settingsContainer) {
    settingsContainer.style.display="none";
}

closeSettingsButton = document.getElementById("close");
if (closeSettingsButton) {
    closeSettingsButton.addEventListener("click", function() {
        initGift();
    })
}

document.getElementById("buttonGift").addEventListener("click", function (){
    initGift();
});

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

// Panel

panel = document.getElementById('panel');

if (panel) {
    panel.addEventListener('click', function() {
        console.log('test');
        window.location = './backend/panel.php';
    });
}