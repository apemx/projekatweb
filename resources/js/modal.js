const modalToggleButtons = document.querySelectorAll("[data-modal-toggle]");


modalToggleButtons.forEach(function (button) {
    button.addEventListener("click", function () {
        const targetId = button.getAttribute("data-modal-target");
        const modal = document.getElementById(targetId);
        
        if (modal) {
            modal.classList.remove("hidden");
        }
    });
});


const modalHideButtons = document.querySelectorAll("[data-modal-hide]");


modalHideButtons.forEach(function (button) {
    button.addEventListener("click", function () {
        const targetId = button.getAttribute("data-modal-hide");
        const modal = document.getElementById(targetId);
        
        if (modal) {
            modal.classList.add("hidden");
        }
    });
});
