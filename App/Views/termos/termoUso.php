<?php require_once('ViewCabecalho.php'); ?>

<body>
    <header class="hero">
        <h1>Termos de Uso</h1>
        <p>Última atualização: <span id="dataAtual"></span></p>
    </header>

    <div class="container">
        <div class="card">

            <section id="empresa">
                <h2>1. Informações da Empresa</h2>
                <p>
                    Este site é operado por <strong>MAC - Benefícios e Corretora de Seguros Ltda - ME</strong>,
                    inscrita no CNPJ nº <strong>13.419.383/0001-89</strong>, com sede na
                    Rua Maria Monteiro, 786, Edifício Augustus Sala, Cambuí, Campinas/SP, CEP 13025-151.
                </p>
            </section>

            <section id="aceitacao">
                <h2>2. Aceitação dos Termos</h2>
                <p>
                    Ao acessar e utilizar este site, o usuário declara que leu, compreendeu e concorda integralmente
                    com os presentes Termos de Uso, comprometendo-se a respeitar todas as condições aqui estabelecidas.
                </p>
            </section>

            <section id="objetivo">
                <h2>3. Objetivo do Site</h2>
                <p>
                    O site tem como finalidade disponibilizar informações, apresentar serviços e coletar dados de contato
                    dos usuários interessados, possibilitando atendimento, envio de informações e futuras comunicações comerciais.
                </p>
            </section>

            <section id="dados">
                <h2>4. Informações Coletadas</h2>
                <p>Durante a utilização do site poderão ser solicitados:</p>
                <ul>
                    <li>Nome completo</li>
                    <li>Número de telefone</li>
                    <!-- <li>Endereço de e-mail</li> -->
                </ul>
            </section>

            <section id="uso">
                <h2>5. Uso das Informações</h2>
                <p>Os dados informados poderão ser utilizados para:</p>
                <ul>
                    <li>Entrar em contato com o usuário</li>
                    <li>Responder solicitações</li>
                    <li>Apresentar produtos e serviços</li>
                    <li>Realizar atendimento por telefone ou WhatsApp</li>
                </ul>
                <p>
                    Os dados não serão vendidos ou compartilhados com terceiros, salvo quando necessário para cumprimento de obrigação legal.
                </p>
            </section>

            <section id="responsabilidade">
                <h2>6. Responsabilidade do Usuário</h2>
                <p>
                    O usuário declara que todas as informações fornecidas são verdadeiras, completas e atualizadas,
                    sendo vedado o uso de dados falsos ou de terceiros sem autorização.
                </p>
            </section>

            <section id="direitos">
                <h2>7. Direitos dos Usuários</h2>
                <p>
                    Nos termos da LGPD, o usuário poderá solicitar acesso, correção, exclusão ou portabilidade dos seus dados,
                    bem como revogar consentimentos concedidos.
                </p>
            </section>

            <section id="alteracoes">
                <h2>8. Alterações dos Termos</h2>
                <p>
                    Estes Termos de Uso poderão ser modificados a qualquer momento, entrando em vigor imediatamente após sua publicação.
                </p>
            </section>

            <section id="contato">
                <h2>9. Contato</h2>
                <p>
                    Em caso de dúvidas, entre em contato pelos canais oficiais:
                    <strong>E-mail:</strong><a href="mailto:ouvidoria@macbeneficios.com.br">ouvidoria@macbeneficios.com.br</a>
                    <strong>Telefone:</strong>
                    <a href="https://wa.me/5519999558210?text=Gostaria+de+saber+mais+sobre+os+Planos+da+MacBeneficios"
                        target="_blank">
                        (19) 99955-8210

                    </a>
                </p>
            </section>

        </div>

        <footer>
            &copy; <span id="ano"></span> - MAC Benefícios e Corretora de Seguros Ltda - Todos os direitos reservados.
        </footer>
    </div>


    <script>
        const hoje = new Date();
        document.getElementById("dataAtual").textContent = hoje.toLocaleDateString("pt-BR");
        document.getElementById("ano").textContent = hoje.getFullYear();
    </script>
</body>


</html>