document.addEventListener("DOMContentLoaded", function () { // >> Isso aqui aguardar a página ser carregada para executar o código
    document.getElementById("cadastroForm")?.addEventListener("submit", function (event) { // >> Isso aqui aguardar a pessoa apertar o botão cadastrar, se a pessoa clicar mostra a popup(modal)
        event.preventDefault(); // >> Isso aqui previne o comportamento padrão do botão cadastrar
        var modal = new bootstrap.Modal(document.getElementById('cadastroConcluidoModal')); // >> Isso aqui pega o modal(PEGA LITERALMENTE O HTML DO MODAL)
        if (modal) { // >> Isso aqui verifica se o modal existe
            var text = "Cadastro realizado com sucesso!"; // >> Isso aqui é o texto que vai aparecer no modal
            const form = document.querySelectorAll('.form-group input'); // >> Isso aqui pega todos os inputs do form(TODOS OS CAMPOS QUE A PESSOA PRECISA PREENCHER)
            var validate = true; // >> Isso aqui é uma variável que vai ser usada para validar se todos os campos foram preenchidos
            form?.forEach(item => { // >> Isso aqui é um loop que vai percorrer todos os inputs(TODOS OS CAMPOS QUE A PESSOA PRECISA PREENCHER, ELE VAI VERIFICAR UM POR UM)
                if(item.value === ""){ // >> Isso aqui verifica se o campo está vazio(SE ALGUM CAMPO ESTIVER VAZIO ELE VAI ENTRAR NO IF)
                    validate = false;
                }
            });
            if (!validate) {// >> Isso aqui verifica se o validadte é falso(SE ELE FOR FALSO ELE VAI ENTRAR NO IF E VAI MUDAR O TEXTO DO MODAL)
                text = "Preencha todos os campos!";
            }
            document.querySelector('.modal-body').innerHTML = text; // >> Isso aqui muda o texto do modal

            modal.show(); // >> Isso aqui mostra o modal

            const modal_2 = document.querySelector('#cadastroConcluidoModal'); // >> Isso aqui pega o modal
            const close_modal = document.querySelector('.btn-close-modal'); // >> Isso aqui pega o botão de fechar o modal
            const min_close = document.querySelector('.close'); // >> Isso aqui pega o botão de fechar o modal

            if(validate){
                close_modal?.addEventListener('click', function () { // >> Isso aqui aguarda a pessoa clicar no botão de fechar o modal
                    window.location.href = 'conteudo'; // >> Isso aqui redireciona a pessoa para outra página
                });

                min_close?.addEventListener('click', function () { // >> Isso aqui aguarda a pessoa clicar no botão de fechar o modal
                    window.location.href = 'conteudo'; // >> Isso aqui redireciona a pessoa para outra página
                });

                modal_2.addEventListener('click', (e) => { // >> Isso aqui aguarda a pessoa no modal(NA PARTE QUE FICA ESCURA DA TELA)
                    if (e.target === e.currentTarget) { // >> Isso aqui verifica se a pessoa clicou fora do modal(NA PARTE QUE FICA ESCURA DA TELA)
                        window.location.href = 'conteudo'; // >> Isso aqui redireciona a pessoa para outra página
                    }
                })
            }
        }
    });
});
