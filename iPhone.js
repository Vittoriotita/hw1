function onJson (json) {
    for (let i = 0; i < json.length; i++) {
        prodotti[json[i].nome] = {
            prezzo: json[i].prezzo,
            rata_mensile: json[i].rata_mensile,
            immagine: json[i].immagine,
            link_pagina: json[i].link_pagina
        };
    }
    console.log(prodotti);
}
function onResponse (response) {
    if (!response.ok) {
        return null;
    };
    return response.json();
}

function aggiornaDati(event) {
    const index = event.currentTarget.dataset.index;
    const container = document.getElementById('phone-container-' + index);

    const prodotto = prodotti[event.currentTarget.value];
    const img = container.querySelector('img');
    img.src = prodotto.immagine;
    const phone_details = container.querySelector('.phone-details span');
    phone_details.textContent = "A partire da € " + prodotto.rata_mensile + " al mese o € " + prodotto.prezzo;
    const link = container.querySelector('.phone-details a');
    link.href = prodotto.link_pagina;
}



const select1 = document.querySelector('#form-container select[name="scelta-1"]');
select1.addEventListener('change', aggiornaDati);
const select2 = document.querySelector('#form-container select[name="scelta-2"]');
select2.addEventListener('change', aggiornaDati);
const select3 = document.querySelector('#form-container select[name="scelta-3"]');
select3.addEventListener('change', aggiornaDati);
let prodotti = {};
fetch('getOptions.php').then(onResponse).then(onJson);

