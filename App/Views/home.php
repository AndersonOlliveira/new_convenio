<?php require("layout/ViewCabecalho.php"); ?>


<body>
    <header class="site-header">
        <div class="header-top">
            <div class="container header-wrap">
                <div class="logo">MAC <span>Benefícios</span></div>

                <button class="menu-toggle" aria-label="Abrir menu" aria-expanded="false">
                    ☰
                </button>

                <nav class="nav-menu">
                    <ul>
                        <li><a href="#inicio">Início</a></li>
                        <li><a href="#planos">Planos</a></li>
                        <li><a href="#parceiros">Parceiros</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- <div class="header-wave"></div> -->
    </header>
    <main>
        <section class="hero" id="inicio">
            <div class="container hero-grid">
                <div>
                    <div class="badge">Convênios médico</div>
                    <h1>Proteção para sua família com <span>mais saúde e tranquilidade</span></h1>
                    <p>
                        Soluções em convênios para pessoa física, família e empresas, com atendimento consultivo
                        e opções pensadas para cada necessidade.
                    </p>
                    <div class="btns">
                        <a class="btn btn-primary" href="#contato">Fale Conosco</a>
                        <a class="btn btn-outline" href="#planos">Simulação</a>
                    </div>
                </div>

                <div class="hero-card panel">
                    <div class="hero-image"></div>
                    <div class="hero-card-content">
                        <h3>Atendimento próximo e objetivo</h3>
                        <p>
                            Ajude o visitante a entender rapidamente o que vocês oferecem e como funciona a contratação.
                        </p>
                        <div class="tags">
                            <span class="tag">Plano Individual</span>
                            <span class="tag">Plano Familiar</span>
                            <span class="tag">Plano Empresarial</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="planos">
            <div class="container">
                <h2 class="section-title">Nossos planos</h2>
                <p class="section-subtitle">
                    Apresente aqui os principais perfis de atendimento de forma simples e direta.
                </p>

                <div class="grid-3">
                    <div class="card panel">
                        <h3>Plano Individual</h3>
                        <p>Ideal para quem busca cuidado e atendimento com foco em praticidade.</p>
                    </div>
                    <div class="card panel">
                        <h3>Plano Familiar</h3>
                        <p>Uma opção para proteger todos da família com mais segurança e conforto.</p>
                    </div>
                    <div class="card panel">
                        <h3>Plano Empresarial</h3>
                        <p>Benefício para equipes, com suporte consultivo e condições sob medida.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="beneficios">
            <div class="container">
                <h2 class="section-title">Por que escolher a MAC Benefícios?</h2>
                <p class="section-subtitle">
                    Destaque os pontos fortes do seu atendimento e da sua proposta comercial.
                </p>

                <div class="grid-3">
                    <div class="card panel">
                        <h3>Atendimento humano</h3>
                        <p>Suporte claro e próximo para orientar o cliente do início ao fim.</p>
                    </div>
                    <div class="card panel">
                        <h3>Proposta personalizada</h3>
                        <p>Soluções adaptadas ao perfil do cliente, orçamento e necessidade.</p>
                    </div>
                    <div class="card panel">
                        <h3>Orientação confiável</h3>
                        <p>Ajuda na escolha do convênio com foco em segurança e transparência.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="parceiros">
            <div class="container">
                <h2 class="section-title">Parceiros</h2>
                <p class="section-subtitle">
                    Aqui você pode exibir os logos reais das operadoras parceiras.
                </p>

                <div class="partner-logos">
                    <div class="partner">Unimed</div>
                    <div class="partner">Amil</div>
                    <div class="partner">Bradesco Saúde</div>
                    <div class="partner">NotreDame</div>
                    <div class="partner">SulAmérica</div>
                </div>
            </div>
        </section> -->

        <!-- para o card teste -->

        <section class="hero" id="inicio">
            <div class="container hero-grid">
                <div>
                    <div class="badge">Parceiros</div>
                    <p class="section-subtitle">
                        Além dos formatos tradicionais de contratação, trabalhamos em parceria direta com as bandeiras mais sólidas do mercado de saúde e seguros:
                    </p>
                    <div class="btns">
                        <div class="btn btn-primary">Unimed</div>
                        <div class="btn btn-outline">Amil</div>
                        <div class="btn btn-primary">Bradesco Saúde</div>
                        <div class="btn btn-outline">NotreDame</div>
                        <div class="btn btn-primary">SulAmérica</div>
                    </div>
                    <!-- <div class="btns">
                        <a class="btn btn-primary" href="#contato">Fale Conosco</a>
                        <a class="btn btn-outline" href="#planos">Simulação</a>
                    </div> -->
                </div>
                <div class="hero-card panel text-center">

                    <!-- Carrossel centralizado -->
                    <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 400px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/porto-saude.webp" class="d-block w-100 mx-auto" alt="Porto Saúde">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/sulamerica.jpg" class="d-block w-100 mx-auto" alt="SulAmérica">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/intermédica.jpg" class="d-block w-100 mx-auto" alt="Intermédica">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/bradesco.png" class="d-block w-100 mx-auto" alt="Bradesco">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                    <div class="hero-card-content">
                        <h3>Atendimento próximo e objetivo</h3>
                        <p>
                            Ajude o visitante a entender rapidamente o que vocês oferecem e como funciona a contratação.
                        </p>
                        <div class="tags mb-3">
                            <span class="tag tag_parceiros">Foco em atendimento humanizado e agilidade </span>
                            <span class="tag tag_parceiros">Destaque para uma das redes credenciadas mais amplas e qualificadas do Brasil.</span>
                            <span class="tag tag_parceiros">Referência nacional em planos empresariais para todos os tamanhos de negócios.</span>
                        </div>


                    </div>
                </div>
            </div>


        </section>
        <!-- final do card teste -->



        <!-- </section> -->

        <section id="avaliacoes">
            <div class="container">
                <h2 class="section-title">O que nossos clientes dizem</h2>
                <p class="section-subtitle">
                    Avaliações reais para transmitir mais confiança e credibilidade.
                </p>

                <div class="reviews-summary panel">
                    <div class="rating-box">
                        <div class="rating-score">5.0</div>
                        <div>
                            <div class="stars">★★★★★</div>
                            <p>Baseado em 69 avaliações</p>
                        </div>
                    </div>

                    <a href="#" class="btn btn-outline">Avaliar no Google</a>
                </div>
                <div class="review-card panel">
                    <div class="review-card panel elfsight-card">
                        <div class="elfsight-app-18a42542-dd5e-46b3-81aa-fff1914ee1f0" data-elfsight-app-lazy></div>
                    </div>
                </div>

                <div class="reviews-grid">


                    <div class="review-card panel">
                        <h3>André Kimura <span>✔</span></h3>
                        <div class="stars">★★★★★</div>
                        <p>Excelente atendimento, muito rápido e atencioso.</p>
                    </div>

                    <div class="review-card panel">
                        <h3>Ana Beretta <span>✔</span></h3>
                        <div class="stars">★★★★★</div>
                        <p>Me ajudaram a encontrar o melhor plano para minha família.</p>
                    </div>

                    <div class="review-card panel">
                        <h3>Larissa Tauani <span>✔</span></h3>
                        <div class="stars">★★★★★</div>
                        <p>Ótima experiência, tudo explicado com muita clareza.</p>
                    </div>

                    <div class="review-card panel">
                        <h3>Marcelo Gonçalves <span>✔</span></h3>
                        <div class="stars">★★★★★</div>
                        <p>Passaram bastante confiança e profissionalismo.</p>
                    </div>

                    <div class="review-card panel">
                        <h3>Camilly Santos <span>✔</span></h3>
                        <div class="stars">★★★★★</div>
                        <p>Atendimento humanizado e muito eficiente.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato">
            <div class="container contact">
                <div class="contact-box panel">
                    <h3>Contato</h3>
                    <p>Deixe seus dados e receba uma proposta personalizada.</p>
                    <ul class="contact-list">
                        <li>
                            <strong>WhatsApp:</strong>
                            <a href="https://wa.me/5519999558210?text=Gostaria+de+saber+mais+sobre+os+Planos+da+MacBeneficios"
                                target="_blank" aria-label="Conversar no WhatsApp">
                                (19) 99955-8210
                                <img src="images/whatsapp.png" alt="WhatsApp" class="icon">
                            </a>
                        </li>
                        <li><strong>E-mail:</strong> <a href="mailto:atendimento@macbeneficios.com">atendimento@macbeneficios.com</a></li>
                        <li><strong>Horário:</strong> Seg–Sex, 8h às 18h</li>
                    </ul>
                </div>

                <form class="panel" action="" method="POST" id="envio-dados-convenio">
                    <div class="field">
                        <label for="nome">Nome</label>
                        <input type="text" id="InputName" name="nome" />
                        <div class="divErro" id="erroNome"></div>
                    </div>

                    <div class="field">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" />
                    </div>

                    <div class="field">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="InputTel" name="telefone" />
                        <div class="divErro" id="erroTel"></div>
                        <div class="divErro" id="erroTelefoneVazio"></div>
                    </div>
                    <div class="field">
                        <label for="telefone">Cidade</label>
                        <input type="text" id="input-cidade" name="cidade" />
                        <div class="divErro" id="erroCidade"></div>
                    </div>

                    <div class="field">
                        <label for="planoSelect">Tipo de Plano</label>
                        <div id="planos_retorno"></div>
                    </div>
                    <div id="erroPlanos"></div>

                    <div class="field">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" name="mensagem"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Enviar mensagem</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <div class="footer-logo">MAC <span>Benefícios</span></div>
                <p class="footer-text">
                    Convênios e benefícios com atendimento próximo, claro e confiável.
                </p>
            </div>

            <div>
                <h4>Contato</h4>
                <ul class="footer-list">
                    <li>
                        <strong>WhatsApp:</strong>
                        <a href="https://wa.me/5519999558210?text=Gostaria+de+saber+mais+sobre+os+Planos+da+MacBeneficios"
                            target="_blank" aria-label="Conversar no WhatsApp">
                            (19) 99955-8210

                        </a>
                    </li>
                    <li><strong>E-mail:</strong> <a href="mailto:atendimento@macbeneficios.com">atendimento@macbeneficios.com</a></li>

                </ul>
            </div>

            <div>
                <h4>Links úteis</h4>
                <ul class="footer-list">
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#planos">Planos</a></li>
                    <li><a href="#parceiros">Parceiros</a></li>
                    <li><a href="#avaliacoes">Avaliações</a></li>
                </ul>
            </div>

            <div>
                <h4>Legal</h4>
                <ul class="footer-list">
                    <li><a href="https://bestvoice.digital/termos-de-uso/" target="_blank">Termos de Uso</a></li>
                    <li><a href="https://bestvoice.digital/politica-de-privacidade/" target="_blank">Política de Privacidade</a></li>
                </ul>
            </div>
        </div>
        <div class="cookie-banner">
            <p>Usamos cookies para melhorar sua experiência. Ao continuar navegando, você concorda com nossa <a href="/politica-de-privacidade">Política de Privacidade</a>.</p>
            <button class="btn btn-primary" id="acceptCookies">Aceitar</button>
            <button class="btn btn-outline" id="settingsCookies">Configurar</button>
        </div>
        <!-- <div class="container"> -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.8882008466826!2d-47.02192769999999!3d-22.864223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8cf86fe09b5c9%3A0xb65519cb547c9af6!2sMAC%20-%20Benef%C3%ADcios%20e%20Corretora%20de%20Planos%20de%20Sa%C3%BAde!5e1!3m2!1spt-BR!2sbr!4v1754523673866!5m2!1spt-BR!2sbr"
            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen loading="lazy">
        </iframe>
        <!-- </div> -->


        <div class="footer-bottom">
            <div class="container">
                © 2026 MAC Benefícios. Todos os direitos reservados.
            </div>
        </div>
    </footer>
</body>

<?php require_once('layout/footer.php'); ?>

</html>