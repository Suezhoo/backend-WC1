"use strict";

window.onload = function () {
    initDropdown();
};

function initDropdown() {
    const dropdown = document.querySelector("#dropdown");
    const exercises = document.querySelectorAll(".exercise");
    dropdown.addEventListener("change", (e) => {
        exercises.forEach((exercise) => exercise.setAttribute("style", "display: none;"));
        displayDiv(e.target.value);
    });
}

function displayDiv(x) {
    document.querySelector("#" + x).setAttribute("style", "display: flex;");
}
