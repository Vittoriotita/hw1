function search_open(event) {
    const search_menu = document.getElementById("menu-dropdown-search");
    const menu = document.querySelectorAll(".menu-dropdown");
    const blurred_section = document.querySelector(".blur");

    for(let i = 0; i < menu.length; i++){
        if (menu[i] !== search_menu && !menu[i].classList.contains("hidden")) {
            menu[i].classList.add("hidden");
            blurred_section.classList.add("hidden");
        }
    }
    const isHidden = search_menu.classList.contains("hidden");
    search_menu.classList.toggle("hidden");
    blurred_section.classList.toggle("hidden");
    blurred_section.style.top = window.pageYOffset + "px";
    document.body.classList.add("no-scroll");

    if (isHidden) {
        // Se il menu è appena stato aperto, aggiungi listener per chiuderlo
        blurred_section.addEventListener("mouseover", search_open);
    } else {
        // Se è stato chiuso, rimuovi il listener
        blurred_section.removeEventListener("mouseover", search_open);
        document.body.classList.remove("no-scroll");
    }
}
function shop_open(event) {
    const search_menu = document.getElementById("menu-dropdown-search");
    const shop_menu = document.getElementById("menu-dropdown-shop");
    const menu = document.querySelectorAll(".menu-dropdown");
    const blurred_section = document.querySelector(".blur");

    for(let i = 0; i < menu.length; i++){
        if (menu[i] !== shop_menu && !menu[i].classList.contains("hidden")) {
            menu[i].classList.add("hidden");
            blurred_section.classList.add("hidden");
        }
    }

    const isHidden = shop_menu.classList.contains("hidden");
    shop_menu.classList.toggle("hidden");
    blurred_section.classList.toggle("hidden");
    blurred_section.style.top = window.pageYOffset + "px";
    document.body.classList.add("no-scroll");

    if (isHidden) {
        blurred_section.addEventListener("mouseover", shop_open);
    } else {
        blurred_section.removeEventListener("mouseover", shop_open);
        document.body.classList.remove("no-scroll");
    }
}

function store_open(event) {
    event.preventDefault();
    const store_menu = document.getElementById("menu-dropdown-store");
    const menu = document.querySelectorAll(".menu-dropdown");
    const blurred_section = document.querySelector(".blur");

    for(let i = 0; i < menu.length; i++){
        if (menu[i] !== store_menu && !menu[i].classList.contains("hidden")) {
            menu[i].classList.add("hidden");
            blurred_section.classList.add("hidden");
        }
    }

    const isHidden = store_menu.classList.contains("hidden");
    store_menu.classList.toggle("hidden");
    blurred_section.classList.toggle("hidden");
    blurred_section.style.top = window.pageYOffset + "px";
    document.body.classList.add("no-scroll");

    if (isHidden) {
        blurred_section.addEventListener("mouseover", store_open);
    } else {
        blurred_section.removeEventListener("mouseover", store_open);
        document.body.classList.remove("no-scroll");
    }
}

function menu_open(event) {
    const menu = document.getElementById("menu-dropdown-complete");
    const list_menu = document.querySelectorAll(".menu-dropdown");

    for(const menu_x of list_menu){
        if (!menu_x.classList.contains("hidden") && menu_x !== menu) {
            menu_x.classList.add("hidden");
        }
    }

    menu.classList.toggle("hidden");
    document.body.classList.add("no-scroll");
    const isHidden = menu.classList.contains("hidden");
    if (isHidden) {
        document.body.classList.remove("no-scroll");
    }
}

// Event listener per l'header
const complete_menu_button = document.getElementById("menu-button");
complete_menu_button.addEventListener("click", menu_open);
const store_link = document.querySelector("a[data-index='0']");
store_link.addEventListener("mouseover", store_open);
const shop_button = document.getElementById("shop-menu-button");
shop_button.addEventListener("click", shop_open);
const search_button = document.getElementById("search-shop-menu-button");
search_button.addEventListener("click", search_open);

//------------------------------------------------------------//

const bigImages = [
    "https://is1-ssl.mzstatic.com/image/thumb/hjmYsl20uNCFQ9sqjiQIYw/980x551.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/5geoozRQUAjDnWF2KLHyJg/980x551.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/uemUr1iuDVlIR_UQxdOaeg/980x551.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/mlNnLrkeXFsJh7QVz4ZMsg/980x551.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/o2aggH8izLNOxqIsP9O1pg/980x551.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/5tQkYfzU9bSMUol0GajO4w/980x551.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/e6_6t4WH4pUTV0plZH7R9w/980x551.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/LEDx4gCVQd_lTJt81zQq8w/980x551.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/YMYLvOCaoEQe-Jg6Rmbl1Q/980x551.jpg"
]
const smallImages = [
    "https://is1-ssl.mzstatic.com/image/thumb/hjmYsl20uNCFQ9sqjiQIYw/689x387.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/5geoozRQUAjDnWF2KLHyJg/689x387.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/uemUr1iuDVlIR_UQxdOaeg/689x387.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/mlNnLrkeXFsJh7QVz4ZMsg/689x387.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/o2aggH8izLNOxqIsP9O1pg/689x387.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/5tQkYfzU9bSMUol0GajO4w/689x387.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/e6_6t4WH4pUTV0plZH7R9w/689x387.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/LEDx4gCVQd_lTJt81zQq8w/689x387.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/YMYLvOCaoEQe-Jg6Rmbl1Q/689x387.jpg"
]
const verticalImages = [
    "https://is1-ssl.mzstatic.com/image/thumb/Features221/v4/1c/b7/11/1cb711aa-1fbd-2540-e45d-b6d68075c0ea/97c0c19f-7a3c-4a76-ae3f-7e1a29654d7d.png/274x593.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/Features211/v4/96/84/42/9684422a-c0a5-cee3-4f2d-6629774aa983/ad3bc62b-51bc-42ff-993c-978744adc711.png/274x593.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/Features221/v4/84/84/32/84843266-8983-518d-3c25-7b3a240a89fe/8df82dd1-c79e-416d-bf8b-7f01eaeca92c.png/274x593.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/Features221/v4/04/be/6b/04be6bd0-9a78-7ff8-99dd-3cc7d1dcf964/03e6a4e4-9a6e-41f3-ac4e-679cc2971068.png/274x593.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/Features211/v4/99/4b/48/994b48b4-1053-88a4-3176-a7cd98cd430e/56e57fd6-65b7-4dd4-b38e-dc58f703fb85.png/274x593.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/Features/v4/fc/48/11/fc48112d-e5f1-08ba-226c-c81cf7480ec2/ceec2b38-2fab-4b7b-9da1-305e5f0a9f10.png/274x593.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/Features/v4/a1/2f/0e/a12f0e31-0590-8c6b-5f70-06c578f282c9/2b91b0a9-a1cc-4b02-a1e0-7ce24a762586.png/274x593.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/Features211/v4/79/f8/50/79f850b0-cb6e-e10c-7017-2e49739d2a42/ae46775e-da1a-4b8f-8403-3dc83afcf841.png/274x593.jpg",
    "https://is1-ssl.mzstatic.com/image/thumb/Features221/v4/c7/a4/c6/c7a4c6fc-ebfb-0fc9-3fd6-8c329bb18fe5/c3dfafb7-c54e-4e24-ad0f-e025ac9d940a.png/274x593.jpg"
]
const phrases = [
    "Drammatico • Non fidarti del vicino.",
    "Commedia • Seth Rogen si tuffa nel caos di Hollywood in questa<br>satira stellare",
    "Azione • Da giugno al cinema",
    "Poliziesco • Non se ne esce puliti.",
    "Thriller • Il lavoro nobilità l'uomo.",
    "Giallo • Quando non ti fidi di te, di chi ti puoi fidare?",
    "Thriller • Leo Woodall interpreta un brillante studente che svela<br>un complotto ad alto rischio",
    "Fantascienza • Per vivere, serve qualcosa per cui valga la pena<br>morire.",
    "Azione • George Clooney e Brad Pitt sono risolvi-problema rivali<br>ingaggiati per lo stesso lavoro."
]

function getImageArray() {
    const width = window.innerWidth;

    if (width <= 740) {
        return verticalImages;
    } else if (width <= 1069) {
        return smallImages;
    } else {
        return bigImages;
    }
}


function nextImage(event) {
    const images = getImageArray();
    let current_image = document.querySelector("#carousel-section .carousel-container");
    const currentUrlImage = getComputedStyle(current_image).backgroundImage;

    const currentUrl = currentUrlImage.slice(5, -2); // Estraggo l'URL rimuovendo "url(" e ")"
    
    let index = 0;
    for (const img of images) {
        if (currentUrl === img) {
            break;
        }
        index++;
    }
    const nextIndex = (index + 1) % images.length;

    current_image.style.backgroundImage = `url('${images[nextIndex]}')`;
    for(const bottom_button of bottom_buttons) {
        if(bottom_button.classList.contains("selected")){
            bottom_button.classList.remove("selected");
        }
        if(parseInt(bottom_button.getAttribute('data-index')) === nextIndex){
            bottom_button.classList.add("selected");
        }
    }

    const span = document.getElementById("phrase");
    span.innerHTML = phrases[nextIndex];
}

function previousImage(event) {
    const images = getImageArray();
    let current_image = document.querySelector("#carousel-section .carousel-container");
    const currentUrlImage = getComputedStyle(current_image).backgroundImage;

    const currentUrl = currentUrlImage.slice(5, -2); 
    
    let index = 0;
    for (const img of images) {
        if (currentUrl === img) {
            break;
        }
        index++;
    }
    const previousIndex = (index - 1 + images.length) % images.length;

    current_image.style.backgroundImage = `url('${images[previousIndex]}')`;
    for(const bottom_button of bottom_buttons) {
        if(bottom_button.classList.contains("selected")){
            bottom_button.classList.remove("selected");
        }
        if(parseInt(bottom_button.getAttribute('data-index')) === previousIndex){
            bottom_button.classList.add("selected");
        }
    }

    const span = document.getElementById("phrase");
    span.innerHTML = phrases[previousIndex];
}

function newImage(event) {
    const images = getImageArray();
    let current_image = document.querySelector("#carousel-section .carousel-container");
    
    for(const bottom_button of bottom_buttons) {
        bottom_button.classList.remove("selected");
    }

    const button = event.currentTarget;
    const index = button.getAttribute('data-index');

    current_image.style.backgroundImage = `url('${images[index]}')`;
    button.classList.add("selected");
    const span = document.getElementById("phrase");
    span.innerHTML = phrases[index];
}

// Event listeners per il carosello
const button_left = document.getElementById("button-left");
button_left.addEventListener("click", previousImage);
const button_right = document.getElementById("button-right");
button_right.addEventListener("click", nextImage);
const bottom_buttons = document.querySelectorAll("#carousel-buttons button");
for(const bottom_button of bottom_buttons) {
    bottom_button.addEventListener("click", newImage);
}

// -------------------------------------------------------------//
// Animazione e API per le citazioni (SPOSTARE SU PHP)

function animate(event) {
  x -= speed;
  if (x + spanWidth < 0) {
    x = containerWidth; // Reset a destra
  }
  span.style.left = x + "px";
  requestAnimationFrame(animate);
}

const span = document.querySelector("#movingSpan");
const container = document.querySelector("#movingBanner");


const spanWidth = span.offsetWidth;
const containerWidth = container.offsetWidth;
let x = containerWidth; // Inizio da destra
const speed = 2.5; // pixel per frame
animate();

/*
function onJson(json) {
    const span = document.querySelector("#movingSpan");
    span.innerHTML = "";
    span.innerHTML = json.content;
}

function onResponse(response) {
    return response.json();
}

fetch("https://api.quotable.io/random").then(onResponse).then(onJson);
*/

// Chatbox
function openChatbox(event) {
    event.preventDefault();
    document.body.classList.add("no-scroll");
    const Chatbox = document.getElementById("chat-box");
    Chatbox.classList.remove("hidden");
    const closeBox = document.getElementById("close-box");
    const minimizeBox = document.getElementById("minimize-box");
}
const apple_button = document.getElementById("mela");
apple_button.addEventListener("click", openChatbox);


function closeChatbox(event) {
    document.body.classList.remove("no-scroll");
    const Chatbox = document.getElementById("chat-box");
    Chatbox.classList.add("hidden");
}

const closeBox = document.getElementById("close-box");
closeBox.addEventListener("click", closeChatbox);
const minimizeBox = document.getElementById("minimize-box");
minimizeBox.addEventListener("click", closeChatbox);

// API YouTube
function onJsonVideo(json) {
    console.log(json);
    const videoBox = document.getElementById("video-box");
    videoBox.innerHTML = "";

    const videoItem = json.items[videoIndex];
    if (!videoItem) {
        videoBox.textContent = "Nessun video trovato."; // Se non c'è alcun video
        return;
    }
    
    const iFrame = document.createElement("iframe");
    iFrame.src = "https://www.youtube.com/embed/" + videoItem.snippet.resourceId.videoId;
    iFrame.classList.add("video");

    videoBox.appendChild(iFrame);
}

const videoIndex = 0;
fetch("youtube_api.php").then(onResponse).then(onJsonVideo);

function onJsonSearch(json) {
    console.log(json);
    const containerSearch = document.getElementById("menu-dropdown-links-search");
    const containerBasic = document.getElementById("menu-dropdown-links-basic");
    containerBasic.classList.add("hidden");
    containerSearch.classList.remove("hidden");

    const list = document.querySelector("#search-results-links");
    list.innerHTML = ""; // puliamo la lista dei risultati

    for (const item of json) {
        const li = document.createElement("li");
        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");

        svg.setAttribute("height", "16");
        svg.setAttribute("width", "9");
        svg.setAttribute("viewBox", "0 0 9 16");
        const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path.setAttribute("d", "m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z");
        svg.appendChild(path);

        const a = document.createElement("a");
        a.href = item.link_pagina;
        a.textContent = item.nome;

        li.appendChild(svg);
        li.appendChild(a);
        list.appendChild(li);
    }
} 
function onResponse(response) {
    if (!response.ok) {
        return null;
    }
    return response.json();
}

function ricercaElementi(event) {
    event.preventDefault();
    const searchInput = document.querySelector("#menu-dropdown-search form input").value;
    if (searchInput === "") {
        return;
    }

    fetch("search.php?query=" + encodeURIComponent(searchInput)).then(onResponse).then(onJsonSearch);
}   


const searchInput = document.querySelector("#menu-dropdown-search form");
searchInput.addEventListener("submit", ricercaElementi);

//---------------------------------------------------------//

function svuotaCarrello(event){
    fetch("svuota_carrello.php");

}

const svuota_carrello = document.getElementById("svuota-carrello");
svuota_carrello.addEventListener("click", svuotaCarrello);
