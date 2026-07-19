<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>MAC Benefícios | Convênios e Planos de Saúde</title>
    <style>
        :root {
            --primary: #0f5ea8;
            --primary-dark: #083b68;
            --secondary: rgb(6, 101, 174) !important;
            --bg: #f5fbff;
            --card: #ffffff;
            --text: #17324d;
            --text2: #010508;
            --muted: #5f7388;
            --line: #dce9f4;
            --shadow: 0 16px 40px rgba(15, 94, 168, .10);
            --radius: 22px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            scroll-behavior: smooth
        }

        .cookie-banner {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #f7fcff 0%, #ecf7ff 100%);
            color: var(--text);
            line-height: 1.6;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto
        }

        section {
            padding: 88px 0
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(247, 252, 255, .88);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(220, 233, 244, .9);
        }

        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .header-top {
            background: rgba(247, 252, 255, .92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(220, 233, 244, .9);
        }

        .header-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            padding: 16px 0;
            position: relative;
        }

        .logo {
            font-weight: 800;
            font-size: 1.15rem;
            color: var(--primary-dark);
        }

        .logo span {
            color: var(--secondary)
        }

        .nav-menu ul {
            list-style: none;
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--text);
            font-size: .96rem;
        }

        .nav-menu a:hover {
            color: var(--secondary)
        }

        .menu-toggle {
            display: none;
            border: none;
            background: var(--secondary);
            color: #fff;
            font-size: 1.2rem;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            cursor: pointer;
            margin-left: auto;
        }

        .header-wave {
            height: 26px;
            background: linear-gradient(180deg, rgba(247, 252, 255, .92) 0%, rgba(247, 252, 255, 0) 100%);
            clip-path: ellipse(75% 100% at 50% 0%);
        }

        /* .header-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 18px;
            padding: 16px 0;
        } */

        .logo {
            font-weight: 800;
            font-size: 1.15rem;
            color: var(--primary-dark);
            letter-spacing: .2px;
        }

        .logo span {
            color: var(--secondary)
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        nav a {
            text-decoration: none;
            color: var(--text);
            font-size: .96rem;
        }

        nav a:hover {
            color: var(--secondary)
        }

        .hero {
            min-height: 100vh;
            padding-top: 120px;
            display: flex;
            align-items: center;
            background:
                radial-gradient(circle at top right, rgba(24, 179, 107, .12), transparent 28%),
                radial-gradient(circle at bottom left, rgba(15, 94, 168, .12), transparent 26%);

            display: flex;
            align-items: center;
            position: relative;
            background:
                linear-gradient(rgba(8, 25, 44, 0.14), rgba(8, 25, 44, .68)),
                url('images/new_info_opacidade.png') center/cover no-repeat;
            color: #fff;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 32px;
            align-items: center;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgb(5 8 251 / 8%);
            color: var(--text2);
            border: 1px solid rgba(24, 179, 107, .18);
            margin-bottom: 18px;
            font-size: .92rem;
            font-weight: 700;
        }

        h1 {
            font-size: clamp(2.3rem, 5vw, 4.5rem);
            line-height: 1.02;
            margin-bottom: 18px;
            color: var(--primary-dark);
        }

        h1 span {
            color: var(--secondary)
        }

        .hero p {
            max-width: 620px;
            font-size: 1.05rem;
            margin-bottom: 28px;
            color: rgba(255, 255, 255, .88);
        }

        .btns {
            display: flex;
            gap: 14px;
            flex-wrap: wrap
        }

        .btn {
            display: inline-block;
            padding: 14px 22px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-primary {
            background: var(--secondary);
            color: #fff;
            border: 1px solid transparent;
            box-shadow: 0 10px 22px rgba(24, 179, 107, .18);
        }

        .btn-primary:hover {
            transform: translateY(-2px)
        }

        .btn-outline {
            background: #fff;
            color: var(--primary-dark);
            border: 1px solid rgba(15, 94, 168, .16);
        }

        .btn-outline:hover {
            border-color: var(--secondary);
            color: var(--secondary)
        }

        .panel {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .hero-card {
            overflow: hidden;
        }

        .hero-image {
            height: 260px;
            background:
                linear-gradient(rgba(8, 25, 44, .18), rgba(8, 25, 44, .18)),
                url('images/familia.jpg') center/cover no-repeat;
            border-bottom: 1px solid var(--line);
        }

        .hero-card-content {
            padding: 24px;
        }

        .hero-card h3 {
            color: var(--primary-dark);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .hero-card p {
            color: var(--muted);
            margin-bottom: 14px
        }

        .tags {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .tag_parceiros {
            border: 1px solid #488ec9 !important;

        }

        .tag {
            padding: 8px 12px;
            border-radius: 999px;
            background: #f2f8fd;
            border: 1px solid var(--line);
            color: var(--primary-dark);
            font-size: .9rem;
            font-weight: 700;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--primary-dark);
        }

        .section-subtitle {
            color: var(--muted);
            max-width: 760px;
            margin-bottom: 28px;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            padding: 24px;
            transition: .22s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            border-color: rgba(24, 179, 107, .22);
        }

        .card h3 {
            margin-bottom: 10px;
            color: var(--primary-dark);
            font-size: 1.1rem;
        }

        .card p {
            color: var(--muted)
        }

        .partner-logos {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 16px;
        }

        .partner {
            padding: 18px 14px;
            text-align: center;
            font-weight: 800;
            color: var(--primary-dark);
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 16px;
            box-shadow: var(--shadow);
        }

        .contact {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 28px;
            align-items: start;
        }

        .contact-box {
            padding: 26px
        }

        .contact-box h3 {
            color: var(--primary-dark);
            margin-bottom: 10px
        }

        .contact-box p {
            color: var(--muted);
            margin-bottom: 16px
        }

        /* .contact-list {
            list-style: none;
            display: grid;
            gap: 12px;
            color: var(--muted);
        } */

        .contact-list strong {
            color: var(--text)
        }

        .contact-list li {
            margin-bottom: 12px;
            /* display: flex; */
            align-items: center;
            gap: 8px;
        }

        .contact-list a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 600;
        }

        .contact-list a:hover {
            text-decoration: underline;
        }

        .contact-list .icon {
            width: 22px;
            height: 22px;
            vertical-align: middle;
        }

        form {
            padding: 26px
        }

        .field {
            margin-bottom: 16px
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: .95rem;
            font-weight: 700;
            color: var(--primary-dark);
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--text);
            outline: none;
            font: inherit;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(24, 179, 107, .10);
        }

        textarea {
            min-height: 150px;
            resize: vertical
        }

        .site-footer {
            background: #081b2e;
            color: #fff;
            margin-top: 80px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.3fr 1fr 1fr 1fr;
            gap: 28px;
            padding: 60px 0 34px;
        }

        .footer-logo {
            font-weight: 800;
            font-size: 1.2rem;
            margin-bottom: 12px;
        }

        .footer-logo span {
            color: var(--secondary)
        }

        .footer-text {
            color: rgba(255, 255, 255, .75);
            max-width: 320px;
        }

        .site-footer h4 {
            margin-bottom: 14px;
            font-size: 1.02rem;
        }

        .footer-list {
            list-style: none;
            display: grid;
            gap: 10px;
            color: rgba(255, 255, 255, .75);
        }

        .footer-list a {
            color: rgba(255, 255, 255, .75);
            text-decoration: none;
        }

        .footer-list a:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .08);
            padding: 18px 0;
            color: rgba(255, 255, 255, .65);
            font-size: .92rem;
        }


        .reviews-summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 24px;
            margin-bottom: 24px;
        }

        .rating-box {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .rating-score {
            width: 72px;
            height: 72px;
            border-radius: 18px;
            background: linear-gradient(135deg, rgba(15, 94, 168, .12), rgba(27, 181, 107, .12));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--primary-dark);
        }

        .stars {
            color: #f4b400;
            font-size: 1rem;
            letter-spacing: 2px;
            margin-bottom: 4px;
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 18px;
        }

        .review-card {
            padding: 20px;
        }

        .review-card h3 {
            font-size: 1rem;
            margin-bottom: 8px;
            color: var(--primary-dark);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .review-card h3 span {
            color: var(--secondary);
            font-size: .9rem;
        }

        .review-card p {
            color: var(--muted);
            font-size: .95rem;
        }

        .elfsight-card {
            padding: 20px;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            background: var(--card);
        }

        .elfsight-card iframe,
        .elfsight-card div {
            width: 100%;
            height: auto;
        }

        .carousel .carousel-item img {
            width: 100%;
            /* ocupa toda a largura do item */
            /* height: 200px; */
            /* altura fixa para todas */
            object-fit: contain;
            /* mantém proporção sem cortar */
            display: block;
            margin: auto;
            /* centraliza dentro do item */
            padding: 10px;
            /* espaço interno */
        }


        .carousel {
            margin-top: 30px;
        }

        .footer-contact-icons img {
            width: 22px;
            vertical-align: middle;
            margin-right: 8px;
        }

        .site-footer iframe {
            border-radius: 12px;
            margin-top: 20px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .15);
            padding: 18px 0;
            text-align: center;
            font-size: .9rem;
            color: rgba(255, 255, 255, .75);
        }


        @media (max-width: 980px) {

            .hero-grid,
            .services-grid,
            .benefits-grid,
            .grid-3,
            .contact,
            .partner-logos {
                grid-template-columns: 1fr 1fr
            }

            .reviews-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr
            }
        }

        @media (max-width: 720px) {

            .hero-grid,
            .services-grid,
            .benefits-grid,
            .grid-3,
            .contact,
            .partner-logos {
                grid-template-columns: 1fr
            }

            .header-wrap {
                flex-direction: column;
                align-items: flex-start
            }

            nav ul {
                gap: 14px
            }

            .btns {
                flex-direction: column
            }

            .btn {
                width: 100%;
                text-align: center
            }

            section {
                padding: 72px 0
            }

            .hero {
                padding-top: 145px
            }

            .hero-image {
                height: 220px
            }

            .menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
                width: 100%;
                margin-top: 12px;
            }

            .nav-menu.active {
                display: block;
            }

            .nav-menu ul {
                flex-direction: column;
                gap: 12px;
                padding: 16px;
                background: #fff;
                border: 1px solid var(--line);
                border-radius: 16px;
                box-shadow: var(--shadow);
            }

            .header-wrap {
                flex-wrap: wrap;
            }
        }

        @media (max-width: 600px) {

            .hero-grid,
            .services-grid,
            .benefits-grid,
            .footer-grid {
                grid-template-columns: 1fr
            }
        }
    </style>
</head>

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

        <section id="parceiros">
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
        </section>

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
                                <img src="images/porto-saude.webp" class="d-block w-100 mx-auto" alt="Porto Saúde">
                            </div>
                            <div class="carousel-item">
                                <img src="images/sulamerica.jpg" class="d-block w-100 mx-auto" alt="SulAmérica">
                            </div>
                            <div class="carousel-item">
                                <img src="images/intermédica.jpg" class="d-block w-100 mx-auto" alt="Intermédica">
                            </div>
                            <div class="carousel-item">
                                <img src="images/bradesco.png" class="d-block w-100 mx-auto" alt="Bradesco">
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
                            <a href="https://wa.me/55199558210?text=Gostaria+de+saber+mais+sobre+os+Planos+da+MacBeneficios"
                                target="_blank" aria-label="Conversar no WhatsApp">
                                (19) 9955-8210
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
                        <label for="interesse">Tipo de Plano</label>
                        <select id="planoSelect" name="interesse">
                            <option value="">Selecione</option>
                            <option value="individual">Plano Individual</option>
                            <option value="familiar">Plano Familiar</option>
                            <option value="empresarial">Plano Empresarial</option>
                        </select>

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
                        <a href="https://wa.me/551999558210?text=Gostaria+de+saber+mais+sobre+os+Planos+da+MacBeneficios"
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

<script src="https://static.elfsight.com/platform/platform.js" async></script>

<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>

<script type="module" src="js/WebApi/process.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>
    const toggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.nav-menu');

    toggle.addEventListener('click', () => {
        const isOpen = menu.classList.toggle('active');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
</script>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        M.Carousel.init(elems, {
            fullWidth: true,
            indicators: true,
            duration: 200
        });
    });
</script> -->

<script>
    document.getElementById('acceptCookies').onclick = function() {
        localStorage.setItem('cookiesAccepted', 'true');
        document.querySelector('.cookie-banner').style.display = 'none';
    };
    if (localStorage.getItem('cookiesAccepted')) {
        document.querySelector('.cookie-banner').style.display = 'none';
    }
</script>

</html>