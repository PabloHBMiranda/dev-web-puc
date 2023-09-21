document.addEventListener("DOMContentLoaded", function () {


    document.querySelector('.buscarFilme')?.addEventListener('click', () => {
        buscarFilme();
    });

    function buscarFilme() {
        var filme = document.getElementById("filmeInput").value.replaceAll(" ", "+");
        const key = '7e0c52f3'
        var apiUrl = "http://www.omdbapi.com/?apikey=" + key + "&t=" + filme;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Manipule os dados da resposta da API aqui
                console.log(data);
            })
            .catch(error => {
                console.error("Erro na solicitação à API:", error);
            });

    }
});
