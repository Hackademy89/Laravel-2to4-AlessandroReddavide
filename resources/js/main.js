document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".sale-products-carousel");
    const cards = document.querySelectorAll(".card");
    let currentIndex = 0;

    // Funzione per mostrare il prossimo articolo
    function showNextCard() {
        cards[currentIndex].style.opacity = 0; // Nasconde l'articolo attuale
        currentIndex = (currentIndex + 1) % cards.length; // Calcola l'indice del prossimo articolo
        cards[currentIndex].style.opacity = 1; // Mostra il prossimo articolo
    }

    // Imposta l'intervallo di scorrimento
    setInterval(showNextCard, 2500); // delay
});
