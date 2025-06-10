function onJson (json) {
    for (let i = 0; i < json.length; i++) {
        prodotti[json[i].nome] = {
            prezzo: json[i].prezzo,
            immagine: json[i].immagine,
            link_pagina: json[i].link_pagina
        };
    }
    console.log(prodotti);
    aggiornaDati();
}
function onResponse (response) {
    if (!response.ok) {
        return null;
    };
    return response.json();
}


function aggiornaDati() {
    const containers = document.querySelectorAll('#main-container .airpod-container');
    for(const container of containers) {
        const prodotto = prodotti[container.dataset.id];
        if (!prodotto) {
            console.warn("Prodotto non trovato per:", container.dataset.id);
            continue;
        }
        
        const img = container.querySelector('img');
        img.src = prodotto.immagine;
        const airpods_details = container.querySelector('.airpod-details span');
        airpods_details.textContent = "€ " + prodotto.prezzo;
        const link = container.querySelector('.airpod-details a');
        link.href = prodotto.link_pagina;
    }
}


let prodotti = {};
fetch('getOptionsAirpods.php').then(onResponse).then(onJson);