function onJson(json) {
  const h1 = document.querySelector("#welcome-section #welcome-left-container h1");
  const span = document.querySelector("#welcome-section #welcome-left-container span");
  h1.textContent = "Acquista " + json.nome;
  span.textContent = "Da € " + json.rata_mensile + " al mese o € " + json.prezzo;
}

function onResponse (response) {
    if (!response.ok) {
        return null;
    };
    return response.json();
} 

function selected(event) {
  const allLabels = document.querySelectorAll("#buy-buttons-container .form-label-button");
  for (let i = 0; i < allLabels.length; i++) {
    allLabels[i].classList.remove("selected");
  }

  const label = event.currentTarget;
  label.classList.add("selected");

  const size = label.dataset.size;
  console.log("Selected size:", size);
  fetch("getiPhone16.php?size=" + encodeURIComponent(size)).then(onResponse).then(onJson);
}

const size_buttons = document.querySelectorAll("#buy-buttons-container .form-label-button");
for (const option of size_buttons) {
  option.addEventListener("click", selected);
}

function acquistaProdotto(event) {
  const selectedItem = document.querySelector("#buy-buttons-container .form-label-button input[type='radio']:checked");
  if (!selectedItem) {
    alert("Seleziona una taglia prima di procedere all'acquisto.");
    return;
  }

  const size = selectedItem.value;
  console.log("Acquisto prodotto con taglia:", size);
  
  fetch("carrello.php?q=" + encodeURIComponent(size));
}

const buy_button = document.getElementById("acquista");
buy_button.addEventListener("click", acquistaProdotto);

