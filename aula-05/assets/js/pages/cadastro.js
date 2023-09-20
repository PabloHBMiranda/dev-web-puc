document.addEventListener("DOMContentLoaded", function () { // >> Isso aqui aguardar a página ser carregada para executar o código
    document.getElementById("cadastroForm")?.addEventListener("submit", function (event) { // >> Isso aqui aguardar a pessoa apertar o botão cadastrar, se a pessoa clicar mostra a popup(modal)
        event.preventDefault(); // >> Isso aqui previne o comportamento padrão do botão cadastrar
        var modal = new bootstrap.Modal(document.getElementById('cadastroConcluidoModal')); // >> Isso aqui pega o modal(PEGA LITERALMENTE O HTML DO MODAL)
        if (modal) { // >> Isso aqui verifica se o modal existe
            var text = "Cadastro realizado com sucesso!"; // >> Isso aqui é o texto que vai aparecer no modal
            const form = document.querySelectorAll('.form-group input'); // >> Isso aqui pega todos os inputs do form(TODOS OS CAMPOS QUE A PESSOA PRECISA PREENCHER)
            var validadte = true; // >> Isso aqui é uma variável que vai ser usada para validar se todos os campos foram preenchidos
            form?.forEach(item => { // >> Isso aqui é um loop que vai percorrer todos os inputs(TODOS OS CAMPOS QUE A PESSOA PRECISA PREENCHER, ELE VAI VERIFICAR UM POR UM)
                if(item.value === ""){ // >> Isso aqui verifica se o campo está vazio(SE ALGUM CAMPO ESTIVER VAZIO ELE VAI ENTRAR NO IF)
                    validadte = false;
                }
            });
            if (!validadte) {// >> Isso aqui verifica se o validadte é falso(SE ELE FOR FALSO ELE VAI ENTRAR NO IF E VAI MUDAR O TEXTO DO MODAL)
                text = "Preencha todos os campos!";
            }
            document.querySelector('.modal-body').innerHTML = text; // >> Isso aqui muda o texto do modal
            modal.show(); // >> Isso aqui mostra o modal
        }
    });
});
