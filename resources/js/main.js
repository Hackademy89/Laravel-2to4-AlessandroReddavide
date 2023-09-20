const dayModeButton = document.getElementById("day-mode-button");
const body = document.body;

dayModeButton.addEventListener("click", () => {
    body.classList.toggle("day-mode");
    
    // Cambia il testo del pulsante in base allo stato
    if (body.classList.contains("day-mode")) {
        dayModeButton.textContent = "Night mode";
    } else {
        dayModeButton.textContent = "Light mode";
    }

    // Aggiungi o rimuovi la classe "day-mode" da altri elementi che vuoi modificare
    const elementsToToggle = document.querySelectorAll(".toggle-day-mode");
    elementsToToggle.forEach((element) => {
        element.classList.toggle("day-mode");
    });
});