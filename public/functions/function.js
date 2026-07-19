function validarCampo(campo, nomeCampo) {
    if (campo == '' || campo == null) {
        return `Campo ${nomeCampo} não pode ser vazio.`;

    }
    return false;
}


export function validacampos(name, cidade, telefone, plano) {

    const erros = {};
    if (plano == 0) erros.plano = 'Campo Plano não pode ser vazio.';
    if (validarCampo(name, 'Nome')) erros.nome = validarCampo(name, 'Nome');
    if (validarCampo(cidade, 'Cidade')) erros.cidade = validarCampo(cidade, 'Cidade');
    if (validarCampo(telefone, 'Telefone')) erros.telefone = validarCampo(telefone, 'Telefone');
    if (validarCampo(plano, 'Plano')) erros.plano = validarCampo(plano, 'Plano');

    if (Object.keys(erros).length > 0) {
        return erros;
    }

    return false;

}
export function mascaraEmail(email) {

    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (regex.test(email)) {
        return true;
    } else {
        return false;
    }


}

export function formatarTelefone(campo) {


    let numero = campo.value.replace(/\D/g, '');
    if (numero.length >= 11) {
        campo.value = numero.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
        return true;
    } else {
        return false;
    }
}

export function saveStorage(name, email, telefone, plano) {

    localStorage.setItem('nome', name);
    localStorage.setItem('email', email);
    localStorage.setItem('telefone', telefone);
    localStorage.setItem('plano', plano);

}
export function pushStorage() {
    let nomeStorage = localStorage.getItem('nome');
    let emailStorage = localStorage.getItem('email');
    let telefoneStorage = localStorage.getItem('telefone');
    if (nomeStorage) document.getElementById('InputName').value = nomeStorage;
    if (emailStorage) document.getElementById('InputEmail').value = emailStorage;
    if (telefoneStorage) document.getElementById('InputTel').value = telefoneStorage;
}


export function Estados() {
    $(document).ready(function () {

        $.get("https://servicodados.ibge.gov.br/api/v1/localidades/estados", function (data) {
            data.sort((a, b) => a.sigla.localeCompare(b.sigla));
            $('#select-estado').append('<option value="">Selecione o estado</option>');
            $.each(data, function (index, estado) {
                $('#select-estado').append(`<option value="${estado.id}">${estado.sigla}</option>`);
            });
        });

        // carrega as cidades de acordo com select do estado
        $('#select-estado').on('change', function () {
            const estadoId = $(this).val();
            if (!estadoId) return;

            $('#select-cidade').empty().append('<option value="">Carregando...</option>');
            $('#select-cidades').empty().append('<option value="">Carregando...</option>');
            $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoId}/municipios`, function (data) {
                $('#select-cidade').empty().append('<option value="">Selecione a cidade</option>');
                $.each(data, function (index, cidade) {

                    $('#select-cidades').append(`<option value="${cidade.nome}">${cidade.nome}</option>`);
                    $('#select-cidade').append(`<option value="${cidade.id}">${cidade.nome}</option>`);
                });
            });
        });
    });

}

//aqui valido o email enviando para uma função no momento que o user esta digitando
export function verificarInputEmail() {
    // document.getElementById("InputEmail").addEventListener("input", function () {
    //     const divErroMail = document.getElementById("erroEmail");

    //     if (!mascaraEmail(this.value)) {
    //         divErroMail.innerHTML = 'Verifique o endereço informado';
    //         this.classList.add("is-invalid");
    //     } else {
    //         divErroMail.innerHTML = "";
    //         this.classList.remove("is-invalid");
    //     }
    // });
}


//aqui valido o telefone enviando para uma função no momento que o user esta digitando
export function verificarInputTel() {

    document.getElementById("InputTel")?.addEventListener("input", function () {

        let resultMask = formatarTelefone(this);

        const divTel = document.getElementById("erroTel");
        if (!resultMask) {
            divTel.innerHTML = 'Verifique o Telefone informado';
            this.classList.add("is-invalid");

        } else {

            divTel.innerHTML = "";
            this.classList.remove("is-invalid");
        }

    });
}
export function montarPlanos(data) {

    console.log(data);


    const container = document.getElementById('planos_retorno');
    container.innerHTML = ''; // Limpa o conteúdo anterior

    const select = document.createElement('select');
    select.className = 'mb-3';
    select.style = 'display: block';
    select.name = 'plano_id';
    select.id = 'planoSelect';

    // Adiciona a opção padrão
    const optionDefault = document.createElement('option');
    optionDefault.value = 0;
    optionDefault.textContent = '-- Selecione um plano --';
    select.appendChild(optionDefault);

    // Preenche o select com os planos
    data.forEach(plano => {
        const option = document.createElement('option');
        option.value = plano.plano_id;
        option.textContent = `${plano.nome_plano}`;
        select.appendChild(option);
    });

    container.appendChild(select);
}

export function montarErros(erros) {

    let temErro = false;

    const divErro = document.getElementById("erroNome");
    if (erros.nome) {
        divErro.innerHTML = `<p>${erros.nome}</p>`;
        temErro = true;
    } else {
        divErro.innerHTML = "";
    }

    const divErroEmail = document.getElementById("erroTelefoneVazio");
    if (erros.telefone) {
        divErroEmail.innerHTML = `<p>${erros.telefone}</p>`;
        temErro = true;
    } else {
        divErroEmail.innerHTML = "";
    }

    const divErroCidade = document.getElementById("erroCidade");
    if (erros.cidade) {
        divErroCidade.innerHTML = `<p>${erros.cidade}</p>`;
        temErro = true;
    } else {
        divErroCidade.innerHTML = "";
    }

    const divErroPlano = document.getElementById("erroPlanos");
    if (erros.plano) {
        divErroPlano.innerHTML = `<p>${erros.plano}</p>`;
        temErro = true;
    } else {
        divErroPlano.innerHTML = "";
    }

    // retorna true se tiver algum erro
    return temErro;


}

export function coookies() {
    document.getElementById('acceptCookies').onclick = function () {
        localStorage.setItem('cookiesAccepted', 'true');
        document.querySelector('.cookie-banner').style.display = 'none';
    };
    if (localStorage.getItem('cookiesAccepted')) {
        document.querySelector('.cookie-banner').style.display = 'none';
    }
}