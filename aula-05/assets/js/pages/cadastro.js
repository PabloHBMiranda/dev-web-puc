document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("cadastroForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita o envio padrão do formulário
        var modal = new bootstrap.Modal(document.getElementById('cadastroConcluidoModal')); // Cria uma instância da modal
        modal.show(); // Mostra a modal de confirmação
    });
});
