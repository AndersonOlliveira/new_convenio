import {
    validacampos,
    mascaraEmail,
    formatarTelefone,
    saveStorage,
    pushStorage,
    verificarInputTel,
    montarPlanos,
    montarErros,
    coookies,
    limpar_campos
} from '../../functions/function.js';
///envio dados para processar no script de funcoes

//ira chamar a função depois que todo o dom estriver carregado

$(document).ready(function () {
    verificarInputTel(); //VALODAR FORMATO DO CAMPO DE TELEFONE 
    coookies();
    listar();
});


$('#envio-dados-convenio').on('submit', function (e) {
    e.preventDefault();

    console.log('foi chamando o evento de click');
    //    submiTBootom();

    if (submiTBootom()) { //se for true envio o formulario

        form.submit();
    }


});

function submiTBootom() {
    let name, cidade, telefone, plano, mensagem;

    name = $('#InputName').val();
    cidade = $('#input-cidade').val();
    telefone = $('#InputTel').val();
    plano = $('#planoSelect').val();
    mensagem = $('#mensagem').val();

    //salvo no storage para recuperar caso a pagina de erro
    saveStorage($('#InputName').val(), $('#input-cidade').val(), $('#InputTel').val());

    const erros = validacampos(name, cidade, telefone, plano);
    const montarErross = montarErros(erros);

    if (montarErross) {

        return;
    }

    enviar(name, cidade, telefone, plano, mensagem);
}

function enviar(name, cidade, telefone, plano, mensagem) {

    const dados = {

        name: name,
        cidade: cidade,
        telefone: telefone,
        plano: plano,
        msg: mensagem,

    }

    const convert = JSON.stringify(dados);

    $.ajax({
        url: 'api/push_register',
        type: 'POST',
        dataType: 'json',
        data: convert,
        contentType: 'application/json',
        success: function (response) {
            if (response.status) {



                swal({
                    title: 'Sucesso!',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                });

                limpar_campos();




            } else {

                swal({
                    title: 'Erro!',
                    text: response.message,
                    icon: 'error',
                    confirmButtonText: 'Fechar'
                });

            }

        },
        error: function (xhr, status, error) {
            swal({
                title: 'Erro de conexão!',
                text: 'Não foi possível enviar os dados.',
                icon: 'error'
            });
        }

    });
}

const toggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.nav-menu');

toggle.addEventListener('click', () => {
    const isOpen = menu.classList.toggle('active');
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
});


//buscar planos
function listar() {

    $.ajax({
        url: 'api/get_all_palnos',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status) {

                montarPlanos(response.data);

            } else {

                alert(response.message);

            }

        },
        error: function (xhr, status, error) {
            console.error('Erro ao enviar:', error);
        }

    });
}