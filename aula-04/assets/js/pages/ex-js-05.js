document.addEventListener("DOMContentLoaded", function () {
    const rastro = document.querySelector(".rastro");

    document.addEventListener("mousemove", function (event) {
        const mouseX = event.clientX;
        const mouseY = event.clientY;

        rastro.style.top = mouseY + "px";
        rastro.style.left = mouseX + "px";
        rastro.style.display = "block";

    });
});
