import {
    validacampos,
    mascaraEmail,
    formatarTelefone,
    saveStorage,
    pushStorage,
    verificarInputTel,
    montarPlanos,
    montarErros,
    coookies
} from '../../../functions/function.js';
///envio dados para processar no script de funcoes

//ira chamar a função depois que todo o dom estriver carregado

$(document).ready(function () {
    verificarInputTel(); //VALODAR FORMATO DO CAMPO DE TELEFONE 
    coookies();
});


$('#envio-dados-convenio').on('submit', function (e) {
    e.preventDefault();
    submiTBootom();

    //     if (submiTBootom()) { //se for true envio o formulario

    //         form.submit();
    //     }


});

function submiTBootom() {
    let name, cidade, telefone, plano;

    name = $('#InputName').val();
    cidade = $('#input-cidade').val();
    telefone = $('#InputTel').val();
    plano = $('#planoSelect').val();

    //salvo no storage para recuperar caso a pagina de erro
    saveStorage($('#InputName').val(), $('#input-cidade').val(), $('#InputTel').val());

    const erros = validacampos(name, cidade, telefone, plano);
    const montarErross = montarErros(erros);

    if (montarErross) {

        return;
    }

    // enviar(name, cidade, telefone, plano);
}

function enviar(name, cidade, telefone, plano) {

    const dados = {

        name: name,
        cidade: cidade,
        telefone: telefone,
        plano: plano

    }

    const convert = JSON.stringify(dados);

    $.ajax({
        url: '/registrar',
        type: 'POST',
        dataType: 'json',
        data: convert,
        contentType: 'application/json',
        success: function (response) {
            if (response.Status == 2) {



                swal({
                    title: 'Sucesso!',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                });



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