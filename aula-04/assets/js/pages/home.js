document.addEventListener("DOMContentLoaded", function() {
    const input = document.getElementById("text");
    if (input) {
        input.addEventListener('keyup', (e) => {
            e.target.value = e.target.value.replace(/[qwx]/gi, '');
        });
    }
});
