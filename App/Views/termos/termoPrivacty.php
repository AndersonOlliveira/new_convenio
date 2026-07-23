<?php require_once('ViewCabecalho.php'); ?>

<body>
    <header class="hero">
        <h1>Política de Privacidade</h1>
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

            <section id="introducao">
                <h2>2. Introdução</h2>
                <p>
                    A privacidade e a proteção dos seus dados pessoais são importantes para nós.
                    Esta Política de Privacidade explica como coletamos, utilizamos, armazenamos e protegemos
                    as informações fornecidas por você ao utilizar este site, em conformidade com a
                    Lei Geral de Proteção de Dados (Lei nº 13.709/2018 – LGPD).
                </p>
            </section>

            <section id="dados">
                <h2>3. Dados Coletados</h2>
                <p>Durante a utilização deste site poderão ser coletados:</p>
                <ul>
                    <li>Nome completo</li>
                    <li>Número de telefone</li>
                    <li>Endereço de e-mail</li>
                    <li>Data e horário do envio do formulário</li>
                    <li>Endereço IP e informações técnicas do navegador</li>
                </ul>
            </section>

            <section id="finalidade">
                <h2>4. Finalidade da Coleta</h2>
                <p>Os dados poderão ser utilizados para:</p>
                <ul>
                    <li>Entrar em contato com o usuário</li>
                    <li>Responder dúvidas e solicitações</li>
                    <li>Enviar propostas comerciais</li>
                    <li>Apresentar produtos e serviços</li>
                    <li>Realizar atendimento por telefone ou WhatsApp</li>
                </ul>
            </section>

            <section id="compartilhamento">
                <h2>5. Compartilhamento de Dados</h2>
                <p>
                    Não comercializamos dados pessoais. As informações poderão ser compartilhadas apenas quando:
                </p>
                <ul>
                    <li>Houver obrigação legal ou determinação judicial</li>
                    <li>For necessário para execução dos serviços contratados</li>
                    <li>Com fornecedores que auxiliem na operação do site, sempre observando a LGPD</li>
                </ul>
            </section>

            <section id="armazenamento">
                <h2>6. Armazenamento e Segurança</h2>
                <p>
                    Adotamos medidas técnicas e administrativas para proteger os dados contra acessos não autorizados,
                    perda, alteração, divulgação ou destruição. Os dados permanecem armazenados apenas pelo tempo
                    necessário para cumprir as finalidades descritas ou conforme exigido por lei.
                </p>
            </section>

            <section id="direitos">
                <h2>7. Direitos do Titular</h2>
                <p>Nos termos da LGPD, você poderá solicitar:</p>
                <ul>
                    <li>Confirmação da existência de tratamento</li>
                    <li>Acesso aos seus dados</li>
                    <li>Correção de dados incompletos ou desatualizados</li>
                    <li>Exclusão dos dados quando permitido por lei</li>
                    <li>Revogação do consentimento concedido</li>
                </ul>
            </section>

            <section id="cookies">
                <h2>8. Cookies</h2>
                <p>
                    Este site poderá utilizar cookies para melhorar a experiência do usuário,
                    analisar estatísticas de acesso e garantir o funcionamento adequado da plataforma.
                    Caso utilize ferramentas como Google Analytics ou Meta Pixel, isso será informado nesta seção.
                </p>
            </section>

            <section id="alteracoes">
                <h2>9. Alterações desta Política</h2>
                <p>
                    Esta Política poderá ser atualizada periodicamente. Recomendamos sua consulta sempre que acessar o site.
                </p>
            </section>

            <section id="contato">
                <h2>10. Contato</h2>
                <p>
                    Para dúvidas ou solicitações relacionadas aos seus dados pessoais, entre em contato:
                    <strong>E-mail:</strong><a href="mailto:ouvidoria@macbeneficios.com.br">ouvidoria@macbeneficios.com.br</a>

                    <strong>Telefone:</strong> <a href="https://wa.me/5519999558210?text=Gostaria+de+saber+mais+sobre+os+Planos+da+MacBeneficios"
                        target="_blank">
                        (19) 99955-8210

                    </a>
                </p>
            </section>

            <section id="whatsapp">
                <h2>11. Uso do WhatsApp</h2>
                <p>
                    Ao informar seu número de telefone neste site, o usuário autoriza que a empresa realize contato por meio do WhatsApp
                    para prestar atendimento, esclarecer dúvidas, enviar informações solicitadas e apresentar propostas comerciais.
                </p>
                <p>
                    O usuário poderá solicitar, a qualquer momento, a interrupção desses contatos, respeitadas as obrigações legais aplicáveis.
                </p>
            </section>

        </div>

        <footer>
            &copy; <span id="ano"></span> - MAC Benefícios e Corretora de Seguros Ltda - Todos os direitos reservados.
        </footer>
    </div>

    <script>
        // Atualiza automaticamente a data e o ano
        const hoje = new Date();
        document.getElementById("dataAtual").textContent = hoje.toLocaleDateString("pt-BR");
        document.getElementById("ano").textContent = hoje.getFullYear();
    </script>
</body>

</html>